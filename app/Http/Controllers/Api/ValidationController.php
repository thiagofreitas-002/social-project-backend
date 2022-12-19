<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ValidationRequest;
use App\Models\Admin;
use App\Models\Suporte;
use App\Models\Cardapio;
use App\Models\Noticia;
use Symfony\Component\HttpFoundation\Session\Session;
use TheSeer\Tokenizer\Exception;
class ValidationController extends Controller
{
    public function validation(ValidationRequest $request){

        
        if(Admin::where('email', $request->email)->where('password', $request->password)->exists()){
            $user = DB::table('admins')
                    ->where('email', $request->email)
                    ->where('password', $request->password)
                    ->first();

                    $request->session()->put('user', $user);

            if($user){
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
            
            return redirect('/')->with('msg', 'Usuário não encontrado');
        }

        if(Suporte::where('email', $request->email)->where('password', $request->password)->exists()){

            $user = Suporte::where('email', $request->email)
                    ->where('password', $request->password)
                    ->first();

            $request->session()->put('user', $user);
            
            if($user){
                $noticias = Noticia::all();
                $cardapio = Cardapio::all();

                return view('/support/support')->with([
                    'user' => $request->session()->get('user'), 
                    'noticias' => $noticias,
                    'cardapio' => $cardapio
                ]);
            }

            return view('/')->with('msg', 'Usuário não encontrado');
        }

        return redirect('/')->with('msg', 'Usuário não encontrado');

    }
}
