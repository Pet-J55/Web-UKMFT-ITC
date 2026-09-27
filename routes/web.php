<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home'])->name('home');// Sudah

Route::get('/divisi', [MainController::class, 'divisi'])->name('divisi');// Sudah
Route::get('/anggota', [MainController::class, 'anggota'])->name('anggota');// Belum
Route::get('/proker', [MainController::class, 'proker'])->name('proker');// Sudah
Route::get('/view-proker', [MainController::class, 'viewProker'])->name('view-proker');// Sudah
Route::get('/view-proker/{id}', [MainController::class, 'detailProker'])->name('detail-proker');// Sudah
Route::get('/view-dokumentasi', [MainController::class, 'viewDokumentasi'])->name('view-dokumentasi');// Belum
Route::get('/view-dokumentasi/{id}', [MainController::class, 'detailDokumentasi'])->name('detail-dokumentasi');// Sudah tapi data nya harus minta infokom
Route::get('/penugasan', [MainController::class, 'penugasan'])->name('penugasan');// Belum