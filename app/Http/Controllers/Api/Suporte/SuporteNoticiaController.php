<?php

namespace App\Http\Controllers\Api\Suporte;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Cardapio;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Requests\NoticiasRequest;

class SuporteNoticiaController extends Controller
{

    public function getAll()
    {
        $noticias = DB::table('noticias')->get();
        return response()->json($noticias);
    }

    public function getById($id)
    {
        $noticia = DB::table('noticias')->where('id', $id)->first();
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
            $upload = Image::make($data['image'])->save(storage_path("app/public/noticias/{$nameFile}"), 70);

            $data['image'] = $nameFile;
        }
        
        Noticia::create($data);
        $noticias = Noticia::all();
        $cardapio = Cardapio::all();

        return view('/support/support')->with([
            'user' => $request->session()->get('user'), 
            'noticias' => $noticias,
            'cardapio' => $cardapio
        ]);
    }

    public function edit($id){
        $noticia = Noticia::findOrFail($id);
        return view('support/action/edit_news', compact('noticia'));
    }

    public function update(NoticiasRequest $request){
        $data = $request->all();
        Noticia::findOrFail($request->id)->update($data);
        $noticias = Noticia::all();
        $cardapio = Cardapio::all();

        return view('/support/support')->with([
            'user' => $request->session()->get('user'), 
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
     
        $noticias = Noticia::all();
        $cardapio = Cardapio::all();
                
        return view('/support/support')->with([
            'user' => $request->session()->get('user'),
            'noticias' => $noticias,
            'cardapio' => $cardapio
        ]);

    }
}
