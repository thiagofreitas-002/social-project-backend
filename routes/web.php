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

Route::get('/criar/noticia', function () {
    return view('/admin/action/create_news');
});
Route::get('/criar/cardapio', function () {
    return view('/admin/action/create_menu');
});
Route::get('/criar/suporte', function () {
    return view('/admin/action/create_support');
});


Route::post('/criar/suporte', [SuporteController::class, 'store']);
Route::post('/criar/cardapio', [CardapioController::class, 'store']);
Route::post('/criar/noticia', [NoticiasController::class, 'store']);


Route::get('/admin/edit/cardapio/{id}', [CardapioController::class, 'edit']);
Route::put('/admin/update/cardapio/{id}', [CardapioController::class, 'update']);
Route::delete('/admin/cardapio/delete/{id}', [CardapioController::class, 'destroy']);

Route::get('/admin/edit/noticia/{id}', [NoticiasController::class, 'edit']);
Route::put('/admin/update/noticia/{id}', [NoticiasController::class, 'update']);
Route::delete('/admin/noticia/delete/{id}', [NoticiasController::class, 'destroy']);

Route::get('/admin/edit/suporte/{id}', [SuporteController::class, 'edit']);
Route::put('/admin/update/suporte/{id}', [SuporteController::class, 'update']);
Route::delete('/admin/suporte/delete/{id}', [SuporteController::class, 'destroy']);






Route::delete('news/{id}', [NoticiasController::class, 'destroy']);
// Route::post('news', [NoticiasController::class, 'store']);

Route::delete('menu/{id}', [NoticiasController::class, 'destroy']);
Route::post('menu', [NoticiasController::class, 'store']);