<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CardapioController;
use App\Http\Controllers\Api\NoticiasController;

Route::GET('news', [NoticiasController::class, 'getAll']);
Route::GET('menus', [CardapioController::class, 'getAll']);
Route::GET('menus/today', [CardapioController::class, 'getTodayMenu']);
Route::GET('news/{id}', [NoticiasController::class, 'getById']);