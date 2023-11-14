<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PaginawebController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RegistroPersonawebController;
use App\Http\Controllers\RegistroProductowebController;
use Illuminate\Support\Facades\App;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/lista-personas',[PersonaController::class, 'listarPersona'])->name('lista-personas');
Route::get('/productos',[ProductoController::class, 'listarProducto'])->name('productos');


Route::get('/lista-personas/{id_persona}', [PersonaController::class, 'mostrarPersona']) ->name('mostar-personas');
Route::get('/productos/{id_producto}', [ProductoController::class, 'mostrarProducto']) ->name('mostar-productos');



//------------pagina web------//

Route::get('/paginaweb', [PaginawebController::class, 'verPaginaWeb'])->name('Paginawebbbb');
Route::get('/registro-persona',[RegistroPersonawebController::class, 'registroPersona'])->name('registro.persona');
Route::get('/registro-producto',[RegistroProductowebController::class, 'registroProducto'])->name('registro.producto');    

Route::post('/guardar-persona',[RegistroPersonawebController::class, 'guardarPersona'])->name('guardar.persona');
Route::post('/guardar-producto',[RegistroProductowebController::class, 'guardarProducto'])->name('guardar.producto');



Route::delete('/eliminar-personas/{id_persona}',[PersonaController::class, 'eliminarPersona'])->name('eliminar.personas');
Route::delete('/eliminar-producto/{id_producto}',[ProductoController::class, 'eliminarProductos'])->name('eliminar.productos');


Route::get('/pdf', function () {
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML('<h1>Test</h1>');
    return $pdf->stream();
    return view('welcome');
});
