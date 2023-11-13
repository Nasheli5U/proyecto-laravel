<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Persona;


class PersonaController extends Controller
{
    //
    public function listarPersona(){
        $mensaje = session('mensaje');       
        if ($mensaje){
            alert()->success('Operacion exitosa', $mensaje)->toToast();
        }


        $personas = Persona::all();
        //alert()->success('Exitoso')->toToast();
        return view('lista-personas', compact('personas'));   
     
    
    }

    public function mostrarPersona(Request $request, $id_persona){

        return view('mostar-personas', compact('id_persona'));
    }

    public function eliminarPersona(Request $request, $id_persona){

        $persona = Persona::find($id_persona);
        $persona->delete();

        return redirect()
        ->route('lista-personas')
        ->with('mensaje', 'Persona eliminada correctamente');
    }
}
