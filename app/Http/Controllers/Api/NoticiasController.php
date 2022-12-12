<?php

namespace App\Http\Controllers\Api;

use App\Models\Noticia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\NoticiasRequest;

class NoticiasController extends Controller
{

    private $columnsToReturn = ['id', 'title', 'description', 'image'];

    public function getAll()
    {
        $noticias = DB::table('noticias')->get($this->columnsToReturn);
        return response()->json($noticias);
    }

    public function getById($id)
    {
        $noticia = DB::table('noticias')->where('id', $id)->first($this->columnsToReturn);
        return response()->json($noticia);
    }
    public function show($id){
        if (!$data = Noticia::find($id)) {
            return "error";
        }
        return $data;
    }
    public function store(NoticiasRequest $request)
    {
        $data = $request->all();
        Noticia::create($data);
    }
    public function destroy($id)
    {
        if (!$data = Noticia::find($id)) {
            return "error";
        }
        $data->delete();

    }
}