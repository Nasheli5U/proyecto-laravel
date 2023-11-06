<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Persona;


class PersonaController extends Controller
{
    //
    public function listarPersona(){

        alert()->success('Exitoso')->toToast();
        $personas = Persona::all();
        return view('lista-personas', compact('personas'));   
     
    
    }

    public function mostrarPersona(Request $request, $id_persona){

        return view('mostar-personas', compact('id_persona'));
    }
}
