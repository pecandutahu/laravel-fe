<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return redirect('dashboard');
});


Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest'); // for show the page
Route::post('/login',[LoginController::class, 'authenticate']); //For authenticate
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/register', [UserController::class, 'store'])->middleware('guest');
Route::get('/logout',[LoginController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
