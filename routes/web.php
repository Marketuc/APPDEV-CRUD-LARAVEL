<?php

use App\Http\Controllers\TradieController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Welcome page (protected)
Route::get('/', function () {
    return view('welcome');
})->middleware('auth')->name('welcome');

// Tradie Routes (Protected by 'auth' and 'role:admin' middleware)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/tradies', [TradieController::class, 'index'])->name('tradies.index');
    Route::get('/tradies/create', [TradieController::class, 'create'])->name('tradies.create');
    Route::post('/tradies', [TradieController::class, 'store'])->name('tradies.store');
    Route::get('/tradies/{id}/edit', [TradieController::class, 'edit'])->name('tradies.edit');
    Route::put('/tradies/{id}', [TradieController::class, 'update'])->name('tradies.update');
    Route::delete('/tradies/{id}', [TradieController::class, 'destroy'])->name('tradies.destroy');
});

// Existing Dashboard Route
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes (Protected)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth Routes
require __DIR__.'/auth.php';
