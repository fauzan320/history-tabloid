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
Route::get('tabloid4', [App\Http\Controllers\HomeController::class, 'tabloid4'])->name('tabloid4');
Route::get('tabloid5', [App\Http\Controllers\HomeController::class, 'tabloid5'])->name('tabloid5');
Route::get('tabloid6', [App\Http\Controllers\HomeController::class, 'tabloid6'])->name('tabloid6');
Route::get('tabloidtest', [App\Http\Controllers\HomeController::class, 'tabloidtest'])->name('tabloidtest');
Route::post('post', [App\Http\Controllers\HomeController::class, 'post'])->name('post');

Route::get('siswa', [App\Http\Controllers\siswa_controller::class, 'index'])->name('siswa');

Route::get('listsoal', [App\Http\Controllers\soal_controller::class, 'index'])->name('listsoal');
Route::get('/listsoal/edit/{id}', [App\Http\Controllers\soal_controller::class, 'edit']);
Route::post('/listsoal/update/{id}', [App\Http\Controllers\soal_controller::class, 'update']);

Route::get('artikel', [App\Http\Controllers\artikel_controller::class, 'index'])->name('artikel');
Route::get('artikel/tambah', [App\Http\Controllers\artikel_controller::class, 'create'])->name('tambahartikel');
Route::post('artikel_store', [App\Http\Controllers\artikel_controller::class, 'store'])->name('artikelstore');
Route::get('artikel_destroy/{id}', [App\Http\Controllers\artikel_controller::class, 'destroy'])->name('artikeldestroy');
Route::get('/artikel/edit/{id}', [App\Http\Controllers\artikel_controller::class, 'edit']);
Route::post('/artikel/update/{id}', [App\Http\Controllers\artikel_controller::class, 'update']);
Route::get('/artikel/show/{id}', [App\Http\Controllers\artikel_controller::class, 'show']);