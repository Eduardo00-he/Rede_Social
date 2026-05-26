<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\ExplorarController;
use App\Http\Controllers\MensagemController;
use App\Http\Controllers\PerfilController;

// Rota padrão do site (Home/Feed)
Route::get('/', [FeedController::class, 'index'])->name('feed');

// Outras rotas do seu clone do Instagram
Route::get('/explore', [ExplorarController::class, 'index'])->name('explore');
Route::get('/messages', [MensagemController::class, 'index'])->name('messages');
Route::get('/profile', [PerfilController::class, 'index'])->name('profile');