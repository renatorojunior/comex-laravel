<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});

// Rotas para 'Categorias'
Route::resource('categories', CategoryController::class)
    ->only(['index', 'create', 'store', 'destroy', 'edit', 'update']);
Route::get('/categories/{category}/confirm-delete', 
    [CategoryController::class, 'confirmDelete'])
    ->name('categories.confirm-delete');
Route::delete('/categories/{category}/delete', 
    [CategoryController::class, 'delete'])
    ->name('categories.delete');

// Rotas para 'Produtos' 
Route::resource('products', ProductController::class)->only(['index', 'create', 'store']); 
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/save', [ProductController::class, 'store'])->name('products.store');

// Rotas para 'Clientes'
Route::resource('clients', ClientController::class)->only(['index', 'create', 'store']);
Route::post('/clients/save', [ClientController::class, 'store'])->name('clients.store');
