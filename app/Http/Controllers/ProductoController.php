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

    public function editarProducto(Request $request, $id_producto){
        $producto=Producto::find($id_producto);

        return view('editar-producto-web', compact('producto'));
        //dd($id_producto);
    }

    public function actualizarproducto(Request $request, $id_producto){
        //dd($request);
        if($request->file('foto')){
            $uriFoto =  $request->file('foto')->store('uploads', 'public');

        } else {
        $uriFoto =  $request->get('fotoeditar');
        }
        $producto = producto::Where('productoID', $id_producto)->update(
            [
                'nombre' => $request->get('nombre'),
                'categoria' => $request->get('categoria'),
                'fecha_registro' => $request->get('fecha_registro'), 
                'precio' => $request->get('precio'), 
                'foto' => $uriFoto,                
                'descripcion' => $request->get('descripcion'), 
                'stock' => $request->get('stock') 
            ]
            
            );
            return redirect()
            ->route('productos')
            ->with('mensaje', 'producto actualizada correctamente');
    }


}
