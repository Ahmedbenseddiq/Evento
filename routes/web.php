<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', [categoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [categoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [categoryController::class, 'store'])->name('category.store');
Route::get('/category/{category}', [categoryController::class, 'show'])->name('category.show');
Route::get('/category/{category}/edit', [categoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{category}', [categoryController::class, 'update'])->name('category.update');
Route::delete('/category/{category}', [categoryController::class, 'destroy'])->name('category.destroy');








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

