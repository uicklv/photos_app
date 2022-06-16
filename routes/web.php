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
//Route::get('/images', [\App\Http\Controllers\ImageController::class, 'index'])->name('images.index');
//Route::get('/images/create', [\App\Http\Controllers\ImageController::class, 'create'])->name('images.create');
//Route::post('/images', [\App\Http\Controllers\ImageController::class, 'store'])->name('images.store');
//Route::get('/images/{image}/edit', [\App\Http\Controllers\ImageController::class, 'edit'])->name('images.edit');
////    ->can('update,image');
//Route::put('/images/{image}', [\App\Http\Controllers\ImageController::class, 'update'])->name('images.update');
//Route::delete('/images/{image}', [\App\Http\Controllers\ImageController::class, 'destroy'])->name('images.destroy');

Route::resource('/account/images', \App\Http\Controllers\ImageController::class)->except('show');


Route::view('test-blade', 'test');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
