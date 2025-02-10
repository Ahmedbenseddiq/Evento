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


Route::get('/category', [CategoryController::class, 'index']);
Route::get('/category/create', [CategoryController::class,'create']);
Route::post('/category', [CategoryController::class,'store']);
Route::get('/catgeory/{id}', [CategoryController::class, 'show']);
Route::get('category/{id}/edit', [CategoryController::class,'edit']);
Route::put('/category/{id}', [CategoryController::class,'update']);
Route::delete('/category/{id}', [CategoryController::class,'delete']);


