<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
Route::post('/category', [CategoryController::class,'store'])->name('category.store');
Route::get('/catgeory/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::get('category/{category}/edit', [CategoryController::class,'edit'])->name('category.edit');
Route::put('/category/{category}', [CategoryController::class,'update'])->name('category.update');
Route::delete('/category/{category}', [CategoryController::class,'destroy'])->name('category.destroy');


