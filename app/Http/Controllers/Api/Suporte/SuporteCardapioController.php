<?php

namespace App\Http\Controllers\Api\Suporte;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\cardapioRequest;
use App\Models\Suporte;
use App\Models\Noticia;
use App\Models\Cardapio;
use Illuminate\Support\Facades\DB;

class SuporteCardapioController extends Controller
{

    private $columnsToReturn = ['id', 'date', 'breakfest', 'lunch', 'afternoon_snack'];

    public function getAll() {
        $menus = DB::table('cardapios')->get($this->columnsToReturn);
        return response()->json($menus);
    }

    public function getTodayMenu() {
        try {
            $todayDate = date('Y/m/d');
            $todayMenu = DB::table('cardapios')->where('date', $todayDate)->first($this->columnsToReturn);
            if ($todayMenu == null) {
                return response()->json(["message" => "Cardápio de hoje não cadastrado"], 502);
            }
            return response()->json($todayMenu);
        } catch (Exception $e) {
            abort($e);
        }
    }
    public function create(){

    }
    public function store(cardapioRequest $request){
        $data = $request->all();
        $cardapio = new Cardapio;
        $cardapio->date = $request->date;
        $cardapio->breakfest = $request->breakfest;
        $cardapio->lunch = $request->lunch;
        $cardapio->afternoon_snack = $request->afternoon_snack;
        $cardapio->save();

        $noticias = Noticia::all();
        $cardapio = Cardapio::all();
                
        return view('/support/support')->with([
            'user' => $request->session()->get('user'),
            'noticias' => $noticias,
            'cardapio' => $cardapio
        ]);
    }

    public function edit($id){
        $cardapio = Cardapio::findOrFail($id);
        return view('support/action/edit_menu', compact('cardapio'));
    }

    public function update(Request $request){
       Cardapio::findOrFail($request->id)->update($request->all());

       $noticias = Noticia::all();
       $cardapio = Cardapio::all();

       return view('/support/support')->with([
           'user' => $request->session()->get('user'), 
           'noticias' => $noticias,
           'cardapio' => $cardapio
       ]);
    }

    public function destroy($id, Request $request){
        $cardapio = Cardapio::findOrFail($id);
        $cardapio->delete();
        
        $noticias = Noticia::all();
        $cardapio = Cardapio::all();
                
        return view('/support/support')->with([
            'user' => $request->session()->get('user'),
            'noticias' => $noticias,
            'cardapio' => $cardapio
        ]);

    }
}
