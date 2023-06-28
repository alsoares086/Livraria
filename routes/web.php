<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

/*
Route::get('/', function () {
    return view('welcome');});*/

/*
Route::get('/livros', [LivroController::class, 'index']);
Route::get('/livros/create', [LivroController::class, 'create']);
Route::post('/livros', [LivroController::class, 'store']);
Route::get('/livros/mostrar', [LivroController::class, 'show']);*/

Route::prefix('livros')->group(function () {
    Route::get('/', [LivroController::class, 'index'])->name('livros.index');
    Route::get('/create', [LivroController::class, 'create'])->name('livros.create');
    Route::post('/', [LivroController::class, 'store'])->name('livros.store');
    Route::get('/mostrar', [LivroController::class, 'show'])->name('livros.show');
});

?>


