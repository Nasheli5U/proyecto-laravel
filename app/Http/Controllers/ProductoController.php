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
            alert()->success('Operacion exitosa', $mensaje)->toToast();
        }

        $productos = Producto::all();
        return view('productos', compact('productos'));
     
    
    }


    public function mostrarProducto(Request $request, $id_producto){

        return view('mostar-productos', compact('id_producto'));
    }

    public function eliminarProductos(Request $request, $id_producto){

        $producto = Producto::find($id_producto);
        $producto ->delete();

        return redirect()
        ->route('productos')
        ->with('mensaje', 'Producto eliminado correctamente');
    }
}
