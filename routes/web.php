<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisiController;

Route::get('/', [DivisiController::class, 'home'])->name('home');
Route::get('/divisi', [DivisiController::class, 'index'])->name('divisi');
Route::get('/anggota', [DivisiController::class, 'anggota'])->name('anggota');