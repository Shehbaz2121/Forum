<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ThreadsController;

Route::get('/', function () {
    return 'Hello Shehbaz, Laravel is alive and running!';
});

Route::get('/categories', [CategoryController::class, 'index']);

Route::get('/threads', [ThreadsController::class, 'index']);
