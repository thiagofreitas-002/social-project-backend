<?php

namespace App\Http\Controllers\Api;

use App\Models\Noticia;
use App\Models\Cardapio;
use App\Models\Suporte;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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
        
        $suportes = Suporte::all();
        $noticias = Noticia::all();
        $cardapio = Cardapio::all();

        return view('/admin/admin')->with([
            'user' => $request->session()->get('user'), 
            'suportes' => $suportes, 
            'noticias' => $noticias,
            'cardapio' => $cardapio
        ]);
    }

    public function edit($id){
        $noticia = Noticia::findOrFail($id);
        return view('admin/action/edit_news', compact('noticia'));
    }

    public function update(NoticiasRequest $request){
        $data = $request->all();
        Noticia::findOrFail($request->id)->update($data);
        $suportes = Suporte::all();
        $noticias = Noticia::all();
        $cardapio = Cardapio::all();

        return view('/admin/admin')->with([
            'user' => $request->session()->get('user'), 
            'suportes' => $suportes, 
            'noticias' => $noticias,
            'cardapio' => $cardapio
        ]);
        
     }
    public function destroy($id, Request $request)
    {
        if (!$data = Noticia::find($id)) {
            return "error";
        }
        $data->delete();
     
        $suportes = Suporte::all();
        $noticias = Noticia::all();
        $cardapio = Cardapio::all();
                
        return view('/admin/admin')->with([
            'user' => $request->session()->get('user'),
            'suportes' => $suportes, 
            'noticias' => $noticias,
            'cardapio' => $cardapio
        ]);

    }
}