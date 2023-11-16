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

    public function editarPersona(Request $request, $id_persona){
        $persona=Persona::find($id_persona);

        return view('editar-persona', compact('persona'));
        //dd($id_persona);
    }

    public function actualizarPersona(Request $request, $id_persona){
        //dd($request);
        if($request->file('foto')){
            $uriFoto =  $request->file('foto')->store('uploads', 'public');

        } else {
        $uriFoto =  $request->get('fotoeditar');
        }
        $persona = Persona::Where('personaID', $id_persona)->update(
            [
                'nombres' => $request->get('nombres'),
                'paterno' => $request->get('paterno'),
                'materno' => $request->get('materno'), 
                'bibliografia' => $request->get('bibliografia'), 
                'foto' => $uriFoto, 
                'documento' => $request->get('documento'), 
                'celular' => $request->get('celular') 
            ]
            
            );
            return redirect()
            ->route('lista-personas')
            ->with('mensaje', 'Persona actualizada correctamente');
    }
}
