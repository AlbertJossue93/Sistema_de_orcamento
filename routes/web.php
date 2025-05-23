<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;



Route::get('/login',[AuthController::class,'showLoginForm'])->name('login.form');
Route::post('/login',[AuthController::class,'login'])->name('login');

Route::view('/cadastro', 'auth.cadastro')-> name('cadastro');

route::view('/recuperarSenha', 'auth.recuperarSenha') -> name('recuperarSenha');

Route::view('/dashboard', 'auth.dashboard')->name('dashboard');