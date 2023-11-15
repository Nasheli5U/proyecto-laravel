<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Producto;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public function exportarPDFPersona(){

        $personas = Persona::all();

        $pdf = Pdf::loadView('pdf.pdf-personas', ['personas'=>$personas]);
        return $pdf->stream();
        

    }

    public function exportarPDFProducto(){

        $productos = Producto::all();

        $pdf = Pdf::loadView('pdf.pdf-producto', ['productos'=>$productos]);
        return $pdf->stream();
        

    }



}

