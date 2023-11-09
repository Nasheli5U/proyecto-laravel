<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Exception;
use GuzzleHttp\Psr7\Message;

class RegistroProductowebController extends Controller
{
    public function registroProducto(){
        return view('web.registro-producto-web');
    }

    public function guardarProducto(Request $request) {
        try{
            $data = [
                'nombre' => $request->get('nombre'),
                'categoria' => $request->get('categoria'),
                'fecha_registro' => $request->get('fecha_registro'), 
                'precio' => $request->get('precio'), 
                'foto' => $request->get('foto'), 
                'descripcion' => $request->get('descripcion'), 
                'stock' => $request->get('stock') 
            ];
    
            Producto::create($data);
            return redirect()->route('productos')
            ->with('mensaje', 'PRODUCTO registrada correctamente');
        }catch(Exception $ex){ 
            return redirect()
            ->route('registro.prodcuto')
            ->with('mensaje', $ex->getMessage());
        }


    }

    

        



}
