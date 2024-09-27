<?php
    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\SensorController;
    use App\Http\Controllers\UserController;
    use App\Http\Controllers\RoleController;
    use App\Http\Controllers\SettingController;
    use Illuminate\Support\Facades\Route;


    Route::get('/', function () {
        return redirect('/login');
    });

    // Sensor Routes
    Route::get('/soilmoisture', [SensorController::class, 'soilmoisture']);
    Route::get('/humidity', [SensorController::class, 'humidity']);
    Route::get('/temperature', [SensorController::class, 'temperature']);
    Route::get('/pump', [SensorController::class, 'pump']);
    Route::get('/last-update', [SensorController::class, 'lastUpdate']);

    Route::get('/dashboard', [SensorController::class, 'index'])->middleware(['auth', 'verified', 'user'])->name('dashboard');
    Route::get('/home', [SensorController::class, 'index'])->middleware(['auth', 'verified', 'admin'])->name('admin.dashboard');
    Route::post('/switch-pump', [SensorController::class, 'switchPump'])->middleware(['auth'])->name('switch.pump');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/role', [RoleController::class, 'edit'])->name('role.edit');
        Route::patch('/role', [RoleController::class, 'update'])->name('role.update');
        Route::delete('/role', [RoleController::class, 'destroy'])->name('role.destroy');
    });

    // Page Setting
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/setting', [SettingController::class, 'index'])->name('setting.index');
        Route::delete('/setting/{id}', [SettingController::class, 'destroy'])->name('setting.destroy');
        Route::get('/setting/create', [SettingController::class, 'create'])->name('setting.create');
        Route::post('/setting/create', [SettingController::class, 'store'])->name('setting.store');
        Route::get('/setting/edit/{id}', [SettingController::class, 'edit'])->name('setting.edit');
        Route::patch('/setting/update/{id}', [SettingController::class, 'update'])->name('setting.update');
    });

    // Page User
    Route::middleware(['auth', 'admin'])->group(function(){
        Route::resource('users', UserController::class);
    });

    require __DIR__.'/auth.php';
