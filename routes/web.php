<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;

Route::get('/', [ProdukController::class, 'tampil_produk']);
Route::get('/home', [HomeController::class, 'index']);
