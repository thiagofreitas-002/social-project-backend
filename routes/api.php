<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\NoticiasController;
use App\Http\Controllers\Api\SuporteController;

Route::GET('news', [NoticiasController::class, 'getAll']);