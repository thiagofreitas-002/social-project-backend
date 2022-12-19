<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SuporteRequest;
use App\Models\Suporte;
use Exception;

class SuporteController extends Controller
{
    protected $suporte;
    public function __contruct(Suporte $suporte){
        $this->suporte = $suporte;
    }

    public function index(Request $request){
        return view('support', ['user' => $request->user]);
    }

    public function store(SuporteRequest $request){
        // $datas = $request->all();
        // $insert = Admin::create($datas);
        // return response()->json($insert);
        
        try{
            $this->suporte['name'] = $request->name;
            $this->suporte['email'] = $request->email;
            $this->suporte['password'] = bcrypt($request->password);
            $this->suporte['telephone'] = $request->telephone;
            $insert = Suporte::create($this->suporte);
            return response()->json($insert);
        } catch(Exception $e){
            abort($e);
        }
    }
}
