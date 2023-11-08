<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroProductowebController extends Controller
{
    public function registroProducto(){
        return view('web.registro-producto-web');
    }
}
