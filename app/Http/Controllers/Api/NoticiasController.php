<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticiasController extends Controller
{

    private $columnsToReturn = ['id', 'title', 'description', 'image'];

    public function getAll() {
        $noticias = DB::table('noticias')->get($this->columnsToReturn);
        return response()->json($noticias);
    }

    public function getById($id) {
        $noticia = DB::table('noticias')->where('id', $id)->first($this->columnsToReturn);
        return response()->json($noticia);
    }

}
