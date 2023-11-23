<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class)
    ->only(['index', 'create', 'store', 'destroy', 'edit', 'update']);
Route::get('/categories/{category}/confirm-delete', 
    [CategoryController::class, 'confirmDelete'])
    ->name('categories.confirm-delete');
Route::delete('/categories/{category}/delete', 
    [CategoryController::class, 'delete'])
    ->name('categories.delete');
