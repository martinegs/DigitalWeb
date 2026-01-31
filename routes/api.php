<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;

// Rutas públicas
Route::post('/admin/login', [AuthController::class, 'login']);

// Rutas protegidas para admin
Route::middleware('auth:sanctum')->group(function () {
    // Auth
    Route::post('/admin/logout', [AuthController::class, 'logout']);
    Route::get('/admin/me', [AuthController::class, 'me']);
    
    // Products CRUD
    Route::apiResource('admin/products', ProductController::class);
    
    // Categories CRUD
    Route::apiResource('admin/categories', CategoryController::class);
});

// Rutas públicas para el frontend
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
