<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\ComentarioController;
use App\Http\Controllers\Api\CategoriaController;
use App\Http\Controllers\Api\EtiquetaController;

Route::apiResource('posts', PostController::class);
Route::apiResource('comentarios', ComentarioController::class);
Route::apiResource('categorias', CategoriaController::class);
Route::apiResource('etiquetas', EtiquetaController::class);