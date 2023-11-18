<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'guest'], function() {
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate'])->name('proses.login');
});

Route::group(['middleware' => 'auth'], function() {
    // Dashboard
    Route::redirect('/', 'dashboard');
    Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('import-templates/{filename}', [\App\Http\Controllers\DashboardController::class, 'templateImport'])->name('import_templates');
    Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

    // Setting Action
    Route::prefix('setiing')->group(function(){
        Route::get('change_pasword', [\App\Http\Controllers\SettingController::class, 'viewChangePassword'])->name('setting.change_password');
        Route::put('{user}/change_pasword', [\App\Http\Controllers\SettingController::class, 'actionChangePassword'])->name('setting.save_password');
        Route::get('profile', [\App\Http\Controllers\SettingController::class, 'viewProfile'])->name('setting.profile');
        Route::put('{user}/profile', [\App\Http\Controllers\SettingController::class, 'actionProfile'])->name('setting.save_profile');
    });

    // User Action
    Route::prefix('user')->group(function () {
        Route::get('', [\App\Http\Controllers\UserController::class, 'index'])->name('user');
        Route::post('store', [\App\Http\Controllers\UserController::class, 'store'])->name('user.store');
        Route::get('/{user}/get', [\App\Http\Controllers\UserController::class, 'get'])->name('user.get');
        Route::put('/{user}/update', [\App\Http\Controllers\UserController::class, 'update'])->name('user.update');
        Route::delete('/{user}/destroy', [\App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');
    });
});