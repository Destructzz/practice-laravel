<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category;
use App\Http\Controllers\Post;

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

Route::prefix('posts')->group(function () {
    Route::get('/', Post\IndexController::class)->name('post.index');
    Route::get('/create', Post\CreateController::class)->name('post.create');
    Route::post('/', Post\StoreController::class)->name('post.store');
    Route::get('/{id}', Post\ShowController::class)->name('post.show');
    Route::get('/{id}/edit', Post\EditController::class)->name('post.edit');
    Route::put('/{id}', Post\UpdateController::class)->name('post.update');
    Route::delete('/{id}', Post\DeleteController::class)->name('post.delete');
});
