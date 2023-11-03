<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginawebController extends Controller
{
    public function verPaginaWeb (){
        return view('web.pagina-web-principal');
    }
}
