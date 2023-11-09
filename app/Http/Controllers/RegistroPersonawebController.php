<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use Exception;
use GuzzleHttp\Psr7\Message;

class RegistroPersonawebController extends Controller
{
    public function registroPersona(){
        $mensaje = session('mensaje');
       if ($mensaje){
            alert()->success('Exitoso')->toToast();
        }
        return view('web.registro-persona-web');
    }

    public function guardarPersona(Request $request) {

        try{
            $data = [
                'nombres' => $request->get('nombres'),
                'paterno' => $request->get('paterno'),
                'materno' => $request->get('materno'), 
                'bibliografia' => $request->get('bibliografia'), 
                'foto' => $request->get('foto'), 
                'documento' => $request->get('documento'), 
                'celular' => $request->get('celular') 
            ];
    
            Persona::create($data);
            return redirect()
            ->route('lista-personas')
            ->with('mensaje', 'Persona registrada correctamente');
        }catch(Exception $ex){ 
            dd($ex);
            return redirect()
            ->route('registro.persona')
            ->with('mensaje', $ex->getMessage());
        }


        

    }

}
