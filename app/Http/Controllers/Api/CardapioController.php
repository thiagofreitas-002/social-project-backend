<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardapioController extends Controller
{
    public function getAll() {
        $menus = DB::table('cardapios')->get(['id', 'date', 'breakfest', 'lunch', 'afternoon_snack']);
        return response()->json($menus);
    }
}
