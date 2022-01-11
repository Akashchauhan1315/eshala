<?php

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

//show login screen
Route::group(['middleware' => ['authlogin']], function () {

    Route::get('/',[App\Http\Controllers\LoginController::class, 'index'])->name('auth.login');

    Route::post('authenticate',[App\Http\Controllers\LoginController::class, 'authenticated'])->name('user.auth');
});

Route::group(['middleware' => ['custom_auth']], function () {

    Route::get('dashboard',[App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    Route::post('change-text',[App\Http\Controllers\HomeController::class, 'changeText'])->name('change-text');

    Route::get('Product',[App\Http\Controllers\ProductController::class, 'index'])->name('Product');

    Route::post('Createproduct',[App\Http\Controllers\ProductController::class, 'createproduct'])->name('create-product');

    Route::get('Setting',[App\Http\Controllers\SettingController::class, 'index'])->name('Setting');

    Route::post('create-setting-user',[App\Http\Controllers\SettingController::class, 'createUser'])->name('settinguser');

    Route::get('logout',[App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
});
