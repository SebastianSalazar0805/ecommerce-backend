<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', HomeController::class );



Route::prefix('/products')->group(function(){
    Route::get('', [ProductController::class, 'index']);
    Route::get('/create', [ProductController::class , 'create']);
    Route::get('/{name}/{categoria?}', [ProductController::class , 'show']);
});