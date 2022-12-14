<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ValidationRequest;
use App\Models\Admin;
use App\Models\Suporte;
class ValidationController extends Controller
{
    public function validation(ValidationRequest $request){
        //deu bom
        dd($request->email.' / '.$request->password);

    }
}
