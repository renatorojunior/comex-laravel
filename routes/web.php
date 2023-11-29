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
Route::resource('products', ProductController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']); 
Route::get('/products/{product}/confirm-delete', [ProductController::class, 'confirmDelete'])
    ->name('products.confirm-delete');

// Rotas para 'Clientes'
Route::resource('clients', ClientController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
Route::get('/clients/{client}/confirm-delete', [ClientController::class, 'confirmDelete'])
    ->name('clients.confirm-delete');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::put('/clients/{client}', [ClientController::class, 'update'])->name('clients.update');
