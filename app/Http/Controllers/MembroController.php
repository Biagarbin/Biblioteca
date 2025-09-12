<?php

namespace App\Http\Controllers;

use App\Models\Membro;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MembroController extends Controller
{
    public function store (Request $request){
     $membro = Membro::create([
    'nome_completo'=>$request->nome_completo,
    'endereço'=>$request->endereco,
    'telefone'=>$request->telefone,
    'data_cadastrou'=>$request->data_cadastrou,

    ]);
        return response()->json($membro); 
    }
    public function index(){
    $membro= Membro::all();

    return response()->json($membro);
 }

}
