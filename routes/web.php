<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::get('/categories/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::get('/categories/index', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/form', [CategoryController::class, 'form'])->name('categories.form');
    Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    
});

require __DIR__.'/auth.php';
