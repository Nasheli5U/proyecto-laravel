<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductoController extends Controller
{
    //

    public function listarProducto(){

        $mensaje = session('mensaje');       
        if ($mensaje){
            alert()->success('Exitoso')->toToast();
        }

        $productos = Producto::all();
        return view('productos', compact('productos'));
     
    
    }


    public function mostrarProducto(Request $request, $id_producto){

        return view('mostar-productos', compact('id_producto'));
    }
}
