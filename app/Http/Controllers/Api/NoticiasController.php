<?php

namespace App\Http\Controllers\Api;

use App\Models\Noticia;
use App\Models\Cardapio;
use App\Models\Suporte;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class NoticiasController extends Controller
{
    public function getAll(Request $request)
    {
        $page = null;
        $noticesPerPage = null;
        if (is_string($request->query("page")) && is_string($request->query("limit"))) {
            $page = intval($request->query("page"));
            $noticesPerPage = intval($request->query("limit"));
        }

        $noticias = DB::table('noticias')->orderByDesc("created_at")->get();

        if (($page-1)*$noticesPerPage > $noticias->count()) {
            return response()->json(
                ["message" => "Índice requisitado maior que a quantidade de notícias"],
                400
            );
        }

        foreach ($noticias as $noticia) {
            $noticia->image = config("app.url").":8000/storage/noticias/".$noticia->image;
        }

        if (!is_null($page) && !is_null($noticesPerPage)) {
            $noticiasLimitadas = array_slice($noticias->toArray(), $noticesPerPage*($page-1), $noticesPerPage);
            return response()->json(
                [
                    "length" => $noticias->count(),
                    "total_pages" => ceil(($noticias->count()/$noticesPerPage)),
                    "actual_page" => $page,
                    "data" => $noticiasLimitadas
                ]
            );
        }

        return response()->json($noticias);
    }

    public function getById($id)
    {
        $noticia = DB::table('noticias')->where('id', $id)->first();
        $noticia->image = config("app.url").":8000/storage/noticias/".$noticia->image;
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
        
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $extension = $request->image->extension();
            $name = uniqid(date('his'));
            $nameFile = "{$name}.{$extension}";
            $upload = Image::make($data['image'])->save(storage_path("app/public/noticias/{$nameFile}"));

            $data['image'] = $nameFile;
        }
    
        Noticia::create($data);
        $noticias = Noticia::all();
        $cardapio = Cardapio::all();
        $suportes = Suporte::all();

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
        
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $extension = $request->image->extension();
            $name = uniqid(date('his'));
            $nameFile = "{$name}.{$extension}";
            
            $upload = Image::make($data['image'])->save(storage_path("app/public/noticias/{$nameFile}"));

            $data['image'] = $nameFile;
        }

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