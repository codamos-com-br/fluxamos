<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroControllers extends Controller
{

    public static function index(Request $request)
    {

        $cadastros = [
            'Teste',
            'teste',
            'teste'
        ];

        //Metodo usando with
       
        return view('cadastros.index')->with('cadastros', $cadastros);
        
    }
}