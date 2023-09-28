<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(BookController::class)->middleware('auth')->group(function () {
    Route::get('/books', 'index')->name('index');
    Route::get('/book/create', 'create')->name('create');
    Route::post('/book/store', 'store')->name('store');
    Route::get('/book/{book}', 'show')->name('show');
    Route::delete('/book/destroy/{book}', 'destroy')->name('destroy');
});

Route::controller(AuthorController::class)->middleware('auth')->group(function () {
    Route::get('/authors', 'index')->name('authors');
    Route::get('/author/{author}/books', 'show')->name('authors.show');
});

require __DIR__ . '/auth.php';
