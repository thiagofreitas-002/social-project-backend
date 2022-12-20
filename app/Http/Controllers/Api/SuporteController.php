<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SuporteRequest;
use App\Models\Suporte;
use App\Models\Noticia;
use App\Models\Cardapio;
use Exception;

class SuporteController extends Controller
{
    protected $suporte;
    public function __contruct(Suporte $suporte){
        $this->suporte = $suporte;
    }

    public function store(SuporteRequest $request){
        
        try{
            $this->suporte['name'] = $request->name;
            $this->suporte['email'] = $request->email;
            $this->suporte['password'] = $request->password;
            $this->suporte['telephone'] = $request->telephone;
            $insert = Suporte::create($this->suporte);

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
        catch(Exception $e){
            abort($e);
        }
    }

    public function edit($id){
        $suporte = Suporte::findOrFail($id);
        return view('admin/action/edit_support', compact('suporte'));
    }

    public function update(Request $request){
        Suporte::findOrFail($request->id)->update($request->all());
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
    public function destroy($id, Request $request){
        $suporte = Suporte::findOrFail($id);
        $suporte->delete();
        
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
