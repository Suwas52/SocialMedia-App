<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'layoutApp'])->name('layoutApp')->middleware(['auth']);
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginUser'])->name('loginUser');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');