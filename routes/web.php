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

Route::get('/', [\App\Http\Controllers\ImageController::class, 'index'])->name('images.index');
Route::get('/images/{image}', [\App\Http\Controllers\ImageController::class, 'show'])->name('images.show');
Route::get('/images', [\App\Http\Controllers\ImageController::class, 'create'])->name('images.create');
Route::post('/images', [\App\Http\Controllers\ImageController::class, 'store'])->name('images.store');
