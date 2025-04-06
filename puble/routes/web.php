<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\AuthController;


Route::view('/', 'index')->name('index');
Route::get('/', [MenuController::class, 'showMenu'])->name('index');
Route::view('/contact', 'contact')->name('contact');
Route::get('/contact', fn () => view('contact'))->name('contact');
Route::get('/account', fn () => view('account'))->name('account');

Route::post('/contact', [FeedbackController::class, 'submit'])->name('contact.submit');
Route::post('/', [FeedbackController::class, 'index'])->name('contact.index');
Route::post('/', [SubscriptionController::class, 'store']);
// Реєстрація та аутентифікація
Route::get('/account', fn () => view('auth.account'))->name('account'); 

Route::post('/account', [AuthController::class, 'register']);
Route::post('/account', [AuthController::class, 'login']);
Route::post('/account', [AuthController::class, 'logout'])->middleware('auth');

// Захищена сторінка (доступна тільки для авторизованих)
// Route::middleware('auth')->get('/dashboard', fn () => view('dashboard'))->name('dashboard');