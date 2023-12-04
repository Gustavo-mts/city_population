<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressesController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'findOne']);
Route::post('/users', [UserController::class, 'create']);

Route::get('/addresses', [AddressesController::class, 'index']);
Route::get('/addresses/{id}', [AddressesController::class, 'findOne']);
Route::post('/addresses', [AddressesController::class, 'create']);

Route::get('/invoices', [InvoiceController::class, 'index']);
Route::post('/invoices', [InvoiceController::class, 'create']);
Route::get('/invoices/{id}', [InvoiceController::class, 'findOne']);


Route::get('/city', [CityController::class, 'index']);
Route::post('/city', [CityController::class, 'create']);