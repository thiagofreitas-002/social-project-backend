<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticiasController extends Controller
{

    public function getAll() {
        $noticias = DB::table('noticias')->get(['id', 'title', 'description', 'image']);
        return response()->json($noticias);
    }

}
