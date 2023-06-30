<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;


Route::prefix('livros')->group(function () {
    Route::get('/', [LivroController::class, 'index'])->name('livros.index');
    Route::get('/create', [LivroController::class, 'create'])->name('livros.create');
    Route::post('/', [LivroController::class, 'store'])->name('livros.store');
    Route::get('/mostrar', [LivroController::class, 'show'])->name('livros.show');
});

Route::get('/', function () {
    return redirect('/livros');
});



