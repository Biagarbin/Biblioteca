<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LivroController extends Controller
{
     public function store(Request $request){
     $livro = Livro::create([
    'titulo'=>$request->titulo,
    'ano_publicacao'=>$request->ano_publicacao,
    'genero'=>$request->genero,

        ]);
        return response()->json($livro); 
    }
    public function index(){
    $livro = Livro::all();

    return response()->json($livro);
 }
}
