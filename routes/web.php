<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PaginawebController;
use App\Http\Controllers\ProductoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lista-personas',[PersonaController::class, 'listarPersona'])->name('lista-personas');




Route::get('/productos',[ProductoController::class, 'listarProducto'])->name('productos');




Route::get('/lista-personas/{id_persona}', [PersonaController::class, 'mostrarPersona']) ->name('mostar-personas');


Route::get('/productos/{id_producto}', [ProductoController::class, 'mostrarProducto']) ->name('productos');





//------------pagina web------eliminar//

Route::get('/paginaweb', [PaginawebController::class, 'verPaginaWeb'])->name('Paginawebbbb');


