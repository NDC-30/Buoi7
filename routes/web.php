<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// API lấy danh sách sản phẩm
Route::get('/products', [ProductController::class, 'index']);
