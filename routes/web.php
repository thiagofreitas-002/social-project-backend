<?php

use Illuminate\Support\Facades\Route;
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

Route::post('/login', [ValidationController::class, 'validation'])->middleware('auth.user');


Route::get('/', function () {
    return redirect('/login');
});

Route::get('/admin', function () {
    return view('/admin');
});

Route::get('/suporte', function () {
    return view('/support');
});

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

