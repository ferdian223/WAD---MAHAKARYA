<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FeedbackController;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/index', function () {
    return view('index');
})->name('index')->middleware('auth');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Package Routes
Route::prefix('booking')->name('booking.')->group(function () {
    Route::get('/', [PackageController::class, 'index'])->name('index');
    Route::get('/create/{id}', [PackageController::class, 'create'])->name('create');
    Route::post('/store', [PackageController::class, 'store'])->name('store');
    Route::get('/cart', [PackageController::class, 'cart'])->name('cart');
    Route::delete('/{id}', [PackageController::class, 'destroy'])->name('destroy');
    Route::get('/{id}/edit', [PackageController::class, 'edit'])->name('edit');
    Route::put('/{id}', [PackageController::class, 'update'])->name('update');
});

Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');

// Feedback Routes
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::put('/feedback/{feedback}', [FeedbackController::class, 'update'])->name('feedback.update');
Route::delete('/feedback/{feedback}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');