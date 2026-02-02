<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('categories')->group(function () {
    Route::get('/', Category\IndexController::class)->name('category.index');
    Route::get('/create', Category\CreateController::class)->name('category.create');
    Route::post('/', Category\StoreController::class)->name('category.store');
    Route::get('/{id}', Category\ShowController::class)->name('category.show');
    Route::get('/{id}/edit', Category\EditController::class)->name('category.edit');
    Route::put('/{id}', Category\UpdateController::class)->name('category.update');
    Route::delete('/{id}', Category\DeleteController::class)->name('category.delete');
});