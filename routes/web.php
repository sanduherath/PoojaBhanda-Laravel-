<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/fruit-management', [HomeController::class, 'fruitManagement'])->name('fruit-management');
Route::get('/fruit-management/product', [HomeController::class, 'fruitManagementProduct'])->name('fruit-management-product');
Route::get('/fruit-management/billing', [HomeController::class, 'fruitManagementBilling'])->name('fruit-management-billing');
Route::get('/fruit-management/create-basket', [HomeController::class, 'fruitManagementCreateBasket'])->name('fruit-management-create-basket');
