<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/sobre', [HomeController::class, 'sobre'])->name('sobre');
Route::get('/vagas', [HomeController::class, 'vagas'])->name('vagas');
Route::get('/publicar-vaga', [HomeController::class, 'publicarVaga'])->name('publicar-vaga');
Route::post('/cadastrar-vaga', [HomeController::class, 'cadastrarVaga'])->name('cadastrar-vaga');
Route::get('/buscar-vaga', [HomeController::class, 'buscarVaga'])->name('buscar-vaga');
Route::get('/vaga/{id}', [HomeController::class, 'buscarVagaPorId'])->name('vaga');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
