<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use App\Models\Admin;
use Exception;

class AdminController extends Controller
{
    protected $admin;
    public function __contruct(Admin $admin){
        $this->admin = $admin;
    }

    public function store(AdminRequest $request){
        // $datas = $request->all();
        // $insert = Admin::create($datas);
        // return response()->json($insert);
        
        try{
            $this->admin['name'] = $request->name;
            $this->admin['email'] = $request->email;
            $this->admin['password'] = bcrypt($request->password);
            $this->admin['telephone'] = $request->telephone;
            Admin::create($this->admin);
        }catch(Exception $e){
            abort($e);
        }
    }

    public function destroy($id){
        if(!$data = $this->admin->find($id)){
            return response()->json(['error:' => 'admin não encontrado'], 404);
        }
        $data->delete();
        return response()->json(['sucessful: ' => 'deletado com sucesso'], 200);
    }
}
