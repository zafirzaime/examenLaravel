<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ComentarioController;

Route::apiResource('posts', PostController::class)->only(['index', 'store']);
Route::apiResource('comentarios', ComentarioController::class)->only(['index', 'store']);