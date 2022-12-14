<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\cardapioRequest;
use App\Models\Suporte;
use App\Models\Noticia;
use App\Models\Cardapio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardapioController extends Controller
{

    public function getAll()
    {
        $menus = DB::table('cardapios')->get();
        return response()->json($menus);
    }

    public function getTodayMenu()
    {
        try {
            $todayDate = date('Y/m/d');
            $todayMenu = DB::table('cardapios')->where('date', $todayDate)->first();
            if ($todayMenu == null) {
                return response()->json(["message" => "Cardápio de hoje não cadastrado"], 404);
            }
            return response()->json($todayMenu);
        } catch (Exception $e) {
            abort($e);
        }
    }
    public function create()
    {

    }
    public function store(cardapioRequest $request)
    {
        $data = $request->all();
        $cardapio = new Cardapio;
        $cardapio->date = $request->date;
        $cardapio->breakfest = $request->breakfest;
        $cardapio->lunch = $request->lunch;
        $cardapio->afternoon_snack = $request->afternoon_snack;
        $cardapio->save();

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

    public function edit($id)
    {
        $cardapio = Cardapio::findOrFail($id);
        return view('admin/action/edit_menu', compact('cardapio'));
    }

    public function update(Request $request)
    {
        Cardapio::findOrFail($request->id)->update($request->all());
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
        $cardapio = Cardapio::findOrFail($id);
        $cardapio->delete();

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