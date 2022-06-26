<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', \App\Http\Controllers\ListImageController::class)->name('images.all');
Route::get('/images/{image}', \App\Http\Controllers\ShowImageController::class)->name('images.show');
Route::resource('/account/images', \App\Http\Controllers\ImageController::class)->except('show');
Route::get('/account/settings', [\App\Http\Controllers\SettingController::class, 'edit'])->name('settings.edit');
Route::put('/account/settings', [\App\Http\Controllers\SettingController::class, 'update'])->name('settings.update');


Route::view('test-blade', 'test');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
