<?php

use App\Http\Controllers\ContaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContaController::class, 'index'])->name('index');

Route::get('/criar-conta', [ContaController::class, 'cadastro'])->name('cadastro');
Route::get('/login', [ContaController::class, 'login'])->name('login');