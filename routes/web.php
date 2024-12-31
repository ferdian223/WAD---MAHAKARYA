<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\SeminarController;

Route::get('/', function () {
    return view('login');
})->name('index');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/index', function () {
    return view('index');
})->name('index')->middleware('auth');

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::put('/feedback/{feedback}', [FeedbackController::class, 'update'])->name('feedback.update');
Route::delete('/feedback/{feedback}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');

Route::get('/seminar', [SeminarController::class, 'index'])->name('Seminar.index');
Route::get('/seminar/create', [SeminarController::class, 'create'])->name('Seminar.create');
Route::post('/seminar/store', [SeminarController::class, 'store'])->name('Seminar.store');
Route::get('/seminar/{id}', [SeminarController::class, 'show'])->name('Seminar.show');
Route::get('/seminar/{id}/edit', [SeminarController::class, 'edit'])->name('Seminar.edit');
Route::put('/seminar/{id}', [SeminarController::class, 'update'])->name('Seminar.update');
Route::delete('/seminar/{id}', [SeminarController::class, 'destroy'])->name('Seminar.destroy');


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');


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

Route::get('/booking/{booking}/export-pdf', [BookingController::class, 'exportPDF'])->name('booking.export-pdf');

Route::get('/document', [DocumentController::class, 'index'])->name('Document.index');
Route::get('/document/create', [DocumentController::class, 'create'])->name('Document.create');
Route::post('/document/save', [DocumentController::class, 'save'])->name('Document.save');
Route::delete('/document/{id}', [DocumentController::class, 'destroy'])->name('document.destroy');
Route::get('/document/{id}/edit', [DocumentController::class, 'edit'])->name('document.edit');
Route::put('/document/{id}', [DocumentController::class, 'update'])->name('document.update');

Route::get('/documents', [DocumentController::class, 'index']);


