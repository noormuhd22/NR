<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashBoardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AuthController::class, 'loginView'])->name('loginView');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware(['auth', 'active.user'])->group(function () {
    Route::get('/dashboard', [DashBoardController::class, 'dashboard'])->name('dashboard');
});
