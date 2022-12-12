<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\cardapioRequest;
use App\Models\Cardapio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardapioController extends Controller
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
        $create = Cardapio::create($data);

        return redirect('');
    }
}
