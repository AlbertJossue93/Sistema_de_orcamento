<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;


// Rotas públicas (sem login)
Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::view('/recuperar-senha', 'auth.recuperar-senha')->name('recuperar-senha');
    Route::view('/cadastro', 'auth.cadastro')->name('cadastro');
});

// Rotas protegidas (somente logado)
Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    // Aqui você pode adicionar outras rotas protegidas
});
