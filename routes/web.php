<?php

use App\Http\Controllers\PesquisaSatisfacaoController;
use App\Http\Controllers\PesquisaServicosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () { 
    return view('sobre');
});

// Rotas para usuários autenticados

Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard.dashboard');

// Rotas pesquisa espontanea

Route::get('/', [PesquisaSatisfacaoController::class, 'create'])->name('pesquisa.create');
Route::post('/', [PesquisaSatisfacaoController::class, 'store']);

// Rotas Pesquisa servicos

Route::get('/pesquisaservicos', [PesquisaServicosController::class, 'create'])->name('pesquisaservicos.create');
Route::post('/pesquisaservicos', [PesquisaServicosController::class, 'store']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
