<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\serviceController;

Route::get('/', [serviceController::class,'index']);
Route::get('/barbeshopServices/create', [serviceController::class,'index']);

Route::get('content', function () {
    return view('content');});

Route::get('/services', function () {
    return view('services');
});

Route::get('products', function () {
    $search = request('search');
    return view('products', ['search' => $search]);
});

Route::get('product/{id}', function ($id) {
    return view('product', ['id' => $id]);
});
