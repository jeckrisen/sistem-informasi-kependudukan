<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KepalaController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\UserController;

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
    return view('home', ['title' => 'Sistem Informasi Layanan Administrasi Kependudukan']);
});

Route::resource('/dashboard/user', UserController::class);
Route::resource('/dashboard/penduduk', PendudukController::class);
Route::resource('/dashboard/kepala', KepalaController::class);
Route::get('/dashboard/kepala/inputak/{no_kk}', [KepalaController::class, 'inputak']);
Route::post('/dashboard/kepala/insert/', [KepalaController::class, 'insert']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');