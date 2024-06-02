<?php

use App\Http\Controllers\MahmoudController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MahmoudController::class,'indexview']);
Route::get('/admin/products', [MahmoudController::class,'mahmoudview']);
    