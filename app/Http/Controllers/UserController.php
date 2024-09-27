<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Exceptions\Renderer\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('users.user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Data User';
        $roles = Role::orderBy('id', 'desc')->get();
        return view('users.formUser', compact('title', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|min:3',
            'email'    => 'required|unique:users',
            'password' => 'required|min:7',
            'roles'    => 'required'
        ]);

        $imageName = null;

        if (request('photo')) {
            $imageName = time() . '.' . $request->file('photo')->extension();
            $request->photo->storeAs('public/images/profile', $imageName);
        }

        User::create([
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'address'       => $request->address,
            'roles'         => $request->roles,
            'photo_profile' => $imageName,
        ]);
        return redirect()->back()->with('success', 'User Created!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $title = 'Edit User';
        $roles = Role::orderBy('id', 'desc')->get();
        return view('users.editUser', compact('user', 'title', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'  => 'required|min:3',
            'email' => 'required',
            'roles' => 'required',
        ]);

        if (request('photo')) {
            $imageName = time() . '.' . $request->file('photo')->extension();
            $request->photo->storeAs('public/images/profile', $imageName);

            //delete old photo
            $path = storage_path('app/public/images/profile/' . $user->photo_profile);
            if (File::exists($path)) {
                File::delete($path);
            }
            $user->photo_profile = $imageName;
        }

        $user->name  = $request->name;
        $user->email = $request->email;
        if ($request->password != "") {
            $user->password = Hash::make($request->password);
        }
        $user->address = $request->address;
        $user->roles   = $request->roles;

        $user->update();

        return redirect()->route('users.index')->with('success', 'User Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();

            return redirect()->back()->with('success', 'User Deleted!');
        } catch (Exception $e) {
            return $e->message();
        }
    }
}
