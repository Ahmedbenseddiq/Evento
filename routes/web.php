<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TicketController;

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


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
    Route::post('/category', [CategoryController::class,'store'])->name('category.store');
    Route::get('/catgeory/{category}', [CategoryController::class, 'show'])->name('category.show');
    Route::get('category/{category}/edit', [CategoryController::class,'edit'])->name('category.edit');
    Route::put('/category/{category}', [CategoryController::class,'update'])->name('category.update');
    Route::delete('/category/{category}', [CategoryController::class,'destroy'])->name('category.destroy');

    Route::get('/event', [EventController::class, 'index'])->name('event.index');
    Route::get('event.create', [EventController::class, 'create'])->name('event.create');
    Route::post('/event', [EventController::class, 'store'])->name('event.store');
    Route::get('/event/{event}', [EventController::class, 'show'])->name('event.show');
    Route::get('/event/{event}/edit', [EventController::class, 'edit'])->name('event.edit');
    Route::put('/event/{event}', [EventController::class, 'update'])->name('event.update');
    Route::delete('/event/{event}', [EventController::class, 'destroy'])->name('event.destroy');

    Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
    Route::get('/reservation/create', [ReservationController::class, 'create'])->name('reservation.create');
    Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
    Route::get('/reservation/{reservation}', [ReservationController::class, 'show'])->name('reservation.show');
    Route::get('/reservation/{reservation}/edit',[ReservationController::class, 'edit'])->name('reservation.edit');
    Route::put('/reservation/{reservation}', [ReservationController::class, 'update'])->name('reservation.update');
    Route::delete('/reservation/{reservation}', [ReservationController::class, 'destroy'])->name('reservation.destroy');

    Route::get('/ticket', [TicketController::class, 'index'])->name('ticket.index');
    Route::get('/ticket/create', [TicketController::class, 'create'])->name('ticket.create');
    Route::post('/ticket', [TicketController::class, 'store'])->name('ticket.store');
    Route::get('/ticket/{ticket}', [TicketController::class, 'show'])->name('ticket.show');
    Route::get('/ticket/{ticket}/edit',[TicketController::class, 'edit'])->name('ticket.edit');
    Route::put('/ticket/{ticket}', [TicketController::class, 'update'])->name('ticket.update');
    Route::delete('/ticket/{ticket}', [TicketController::class, 'destroy'])->name('ticket.destroy');

    
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
