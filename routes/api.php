<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TourismController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CartController;

// Authentication routes
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

// Tourism routes
Route::get('tourisms', [TourismController::class, 'index']);
Route::get('tourisms/{id}', [TourismController::class, 'show']);

// Product routes
Route::get('products', [ProductController::class, 'index']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::post('products', [ProductController::class, 'store'])->middleware('auth:sanctum');
Route::put('products/{id}', [ProductController::class, 'update'])->middleware('auth:sanctum');
Route::delete('products/{id}', [ProductController::class, 'destroy'])->middleware('auth:sanctum');

// Transaction routes
Route::get('transactions', [TransactionController::class, 'index'])->middleware('auth:sanctum');
Route::post('transactions', [TransactionController::class, 'store'])->middleware('auth:sanctum');
Route::get('transactions/{id}', [TransactionController::class, 'show'])->middleware('auth:sanctum');

// Cart routes
Route::post('cart/add', [CartController::class, 'add'])->middleware('auth:sanctum');
Route::post('checkout', [CartController::class, 'checkout'])->middleware('auth:sanctum');
