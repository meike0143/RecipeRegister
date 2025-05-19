<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// (Protected) routes for the recipes CRUD module
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/recipes/create', [RecipeController::class, 'create'])
    ->middleware('auth')->name('recipes.create');
Route::post('/recipes', [RecipeController::class, 'store'])
    ->middleware('auth')->name('recipes.store');
Route::get('/recipes/{recipe}', [RecipeController::class, 'show'])->name('recipes.show');
Route::get('/recipes/{recipe}/edit', [RecipeController::class, 'edit'])
    ->middleware('auth')->name('recipes.edit');
Route::patch('/recipes/{recipe}', [RecipeController::class, 'update'])
    ->middleware('auth')->name('recipes.update');
Route::delete('/recipes/{recipe}', [RecipeController::class, 'destroy'])
    ->middleware('auth')->name('recipes.destroy');
Route::get('recipes/{recipe}/delete', [RecipeController::class,'delete'])
    ->middleware('auth')->name('recipes.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
