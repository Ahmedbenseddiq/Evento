<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [homeController::class, 'home'])->name('home');
