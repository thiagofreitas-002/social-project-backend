<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\CardapioController;
use App\Http\Controllers\Api\NoticiasController;
use App\Http\Controllers\Api\SuporteController;
use App\Http\Controllers\Api\ValidationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [ValidationController::class, 'validation']);


Route::get('/', function () {
    return redirect('/login');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/suporte', [SuporteController::class, 'index']);

Route::get('/criar/noticia', function () {
    return view('/create_edit_news');
});

Route::get('/criar/cardapio', function () {
    return view('/create_edit_menu');
});

Route::get('/criar/suporte', function () {
    return view('/create_edit_support');
});

Route::delete('news/{id}', [NoticiasController::class, 'destroy']);
Route::post('news', [NoticiasController::class, 'store']);
Route::get('news/{id}', [NoticiasController::class, 'show']);

