<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormulaireController;
use App\Http\Controllers\ResultCircuitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [HomeController::class, 'index']);
Route::get('/produit', [HomeController::class, 'product']);


//Route pour modifier un produit en get et en post
Route::get('/produit/modifier la page produit', [FormulaireController::class, 'modify']);
Route::post('/produit/traitement_du_produit', [FormulaireController::class, 'update_traitement']);

//Route pour la vue result.blade.php
Route::get('/resultat', [ResultCircuitController::class, 'index']);