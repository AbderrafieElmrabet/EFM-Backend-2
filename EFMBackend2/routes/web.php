<?php

use App\Http\Controllers\LivreController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::resource('/livres', LivreController::class);
Route::resource('/dashboard', DashboardController::class);
Route::get('/books/create', [LivreController::class, 'create'])->name('books.create');
Route::post('/books/store', [LivreController::class, 'store'])->name('books.store');