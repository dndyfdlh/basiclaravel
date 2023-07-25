<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

// Rute untuk menampilkan halaman masuk
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

// Rute untuk menangani proses masuk (submit form masuk)
Route::post('/login', [AuthController::class, 'login']);

// Rute untuk keluar (logout)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
