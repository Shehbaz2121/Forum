<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ThreadsController;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return 'Hello Shehbaz, Laravel is alive and running!';
});

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);

Route::get('/threads', [ThreadsController::class, 'index']);
Route::get('/threads/create', [ThreadsController::class, 'create']);
Route::get('/threads/{id}', [ThreadsController::class, 'show']);
Route::get('/posts', [PostsController::class, 'index']);

Route::post('/threads', [ThreadsController::class, 'store']);

Route::get('/threads/{id}/posts/create', [PostsController::class, 'create']);
Route::post('/threads/{id}/posts', [PostsController::class, 'store']);