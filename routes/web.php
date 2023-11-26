<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Definindo rotas para 'Categorias'
Route::resource('categories', CategoryController::class)
    ->only(['index', 'create', 'store', 'destroy', 'edit', 'update']);
Route::get('/categories/{category}/confirm-delete', 
    [CategoryController::class, 'confirmDelete'])
    ->name('categories.confirm-delete');
Route::delete('/categories/{category}/delete', 
    [CategoryController::class, 'delete'])
    ->name('categories.delete');

// Definindo rotas para 'Produtos' 
Route::resource('products', ProductController::class)->only(['index', 'create', 'store']); 
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/save', [ProductController::class, 'store'])->name('products.store');    