<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;


Route::view('/', 'index')->name('index');
Route::get('/menu', [MenuController::class, 'showMenu'])->name('menu');
Route::get('/contact', fn () => 'Contact')->name('contact');
Route::get('/login', fn () => 'Login')->name('login');
Route::get('/register', fn () => 'Register')->name('register');
Route::get('/policy',  fn () => 'Policy')->name('policy');
Route::get('/terms', fn () => 'Terms')->name('terms');