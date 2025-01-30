<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

// Redireciona para login ao acessar "/"
Route::get('/', function () {
    return redirect()->route('login');
});

// Rotas de autenticação
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rotas protegidas por autenticação
Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', TaskController::class);
    Route::resource('users', UserController::class);
});
