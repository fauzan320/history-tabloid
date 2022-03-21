<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('soal', [App\Http\Controllers\HomeController::class, 'soal'])->name('soal');
Route::get('tabloid', [App\Http\Controllers\HomeController::class, 'tabloid'])->name('tabloid');
Route::get('tabloid2', [App\Http\Controllers\HomeController::class, 'tabloid2'])->name('tabloid2');
Route::get('tabloid3', [App\Http\Controllers\HomeController::class, 'tabloid3'])->name('tabloid3');
Route::post('post', [App\Http\Controllers\HomeController::class, 'post'])->name('post');