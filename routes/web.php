<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\serviceController;

Route::get('/', [serviceController::class,'index']);
Route::get('/barbershopServices/create', [serviceController::class,'create']);

use App\Http\Controllers\ProductsController;

Route::get('/barbershopProducts/products', [ProductsController::class, 'index']);
Route::get('/barbershopProducts/products/{id}', [ProductsController::class, 'show']);


Route::get('content', function () {
    return view('content');});

Route::get('/services', function () {
    return view('services');
});

Route::get('products', function () {
    $search = request('search');
    return view('products', ['search' => $search]);
});