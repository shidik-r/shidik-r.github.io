<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Foundation\Exceptions\Renderer\Exception;

class SettingController extends Controller
{
    /**
     * Display setting list
     */
    public function index(Request $request)
    {
        $setting = Setting::paginate(10);
        return view('setting.index', compact('setting'));
    }

    function create(Request $request) {
        $title = 'Tambah Data Setting';
        return view('setting.create', compact('title'));
    }

    function store(Request $request, Setting $setting) {
        $request->validate([
            'setting_name' => 'required|min:3',
            'setting_value' => 'required'
        ]);

        $setting->setting_name = $request->setting_name;
        $setting->setting_value = $request->setting_value;
        $setting->description = $request->description;
        $setting->save();

        return redirect()->route('setting.index')->with('success', 'Setting Created!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        try {
            $setting = Setting::find($id);
            $setting->delete();
            return redirect()->back()->with('success', 'Setting Deleted!');
        } catch (Exception $e) {
            return $e->message();
        }
    }

    public function edit(Setting $setting, $id)
    {
        $setting = Setting::find($id);
        $title = 'Edit Setting';
        return view('setting.edit', compact('setting', 'title'));
    }

    public function update(Request $request, Setting $setting, $id)
    {
        $request->validate([
            'setting_name' => 'required|min:3',
            'setting_value' => 'required'
        ]);

        $setting = Setting::find($id);
        $setting->setting_name = $request->setting_name;
        $setting->setting_value = $request->setting_value;
        $setting->description = $request->description;
        $setting->update();

        return redirect()->route('setting.index')->with('success', 'Setting Updated!');
    }
}
