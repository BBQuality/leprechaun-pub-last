<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenuEditorController;

Route::get('/', [MenuController::class, 'index'])->name('index');
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

Route::prefix('admin/menu-editor')->name('menu-editor.')->group(function () {
    Route::get('drink', [MenuEditorController::class, 'indexDrink'])->name('drink.index');
    Route::get('drink/create', [MenuEditorController::class, 'createDrinkForm'])->name('drink.create');
    Route::post('drink', [MenuEditorController::class, 'storeDrink'])->name('drink.store');

    // 🔽 Ось ці 3 мають бути для CRUD:
    Route::get('drink/{id}/edit', [MenuEditorController::class, 'editDrinkForm'])->name('drink.edit');
    Route::put('drink/{id}', [MenuEditorController::class, 'updateDrink'])->name('drink.update');
    Route::delete('drink/{id}', [MenuEditorController::class, 'deleteDrink'])->name('drink.delete');
});

Route::get('/db-test', function () {
    return \DB::table('drink')->latest('id')->first();
});
