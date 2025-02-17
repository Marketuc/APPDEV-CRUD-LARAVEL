<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TradieController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/tradies/create', [TradieController::class, 'create'])->name('tradies.create');
Route::post('/tradies', [TradieController::class, 'store'])->name('tradies.store');
Route::get('/tradies', [TradieController::class, 'index'])->name('tradies.index');
Route::get('/tradies', [TradieController::class, 'index'])->name('tradies.index');
Route::get('/tradies/{id}/edit', [TradieController::class, 'edit'])->name('tradies.edit');
Route::put('/tradies/{id}', [TradieController::class, 'update'])->name('tradies.update');
Route::delete('/tradies/{id}', [TradieController::class, 'destroy'])->name('tradies.destroy');