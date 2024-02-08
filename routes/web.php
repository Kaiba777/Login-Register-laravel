<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', [LoginController::class, 'index'])->name('login');

Route::post('/storeRegister', [LoginController::class, 'storeRegister']);
Route::post('/storeLogin', [LoginController::class, 'storeLogin']);

Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::delete('/logout', [LoginController::class, 'logout'])->name('logout');

