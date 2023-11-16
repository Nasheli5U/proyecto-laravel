<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PaginawebController;
use App\Http\Controllers\PdfController;
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


//------------pagina web------//

Route::get('/paginaweb', [PaginawebController::class, 'verPaginaWeb'])->name('Paginawebbbb');
Route::get('/registro-persona',[RegistroPersonawebController::class, 'registroPersona'])->name('registro.persona');
Route::get('/registro-producto',[RegistroProductowebController::class, 'registroProducto'])->name('registro.producto');    

Route::post('/guardar-persona',[RegistroPersonawebController::class, 'guardarPersona'])->name('guardar.persona');
Route::post('/guardar-producto',[RegistroProductowebController::class, 'guardarProducto'])->name('guardar.producto');


Route::delete('/eliminar-personas/{id_persona}',[PersonaController::class, 'eliminarPersona'])->name('eliminar.personas');
Route::delete('/eliminar-producto/{id_producto}',[ProductoController::class, 'eliminarProductos'])->name('eliminar.productos');


Route::get('/pdf-personas',[PdfController::class, 'exportarPDFPersona'])->name('pdf.personas');
Route::get('/pdf-productos',[PdfController::class, 'exportarPDFProducto'])->name('pdf.productos');

Route::get('/mostrar-personas/{id_persona}', [PersonaController::class, 'mostrarPersona']) ->name('mostrar.persona');
Route::get('/productos/{id_producto}', [ProductoController::class, 'mostrarProducto']) ->name('mostar-productos');


Route::get('/editar-persona/{id_persona}', [PersonaController::class, 'editarPersona']) ->name('editar.persona');
Route::put('/actualizar-persona/{id_persona}', [PersonaController::class, 'actualizarPersona']) ->name('actualizar.persona');


Route::get('/editar-producto/{id_producto}', [ProductoController::class, 'editarProducto']) ->name('editar.producto');
Route::put('/actualizar-producto/{id_producto}', [ProductoController::class, 'actualizarProducto']) ->name('actualizar.producto');



Route::get('/', function () {
    return view('welcome');
});