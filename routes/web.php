<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\httpCuidadorasController;
use App\Http\Controllers\httpCategoriaServicios;
use App\Http\Controllers\httpEstablecimientos;

use App\Http\Controllers\httpServicios;




use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/perfil', [AdminController::class, 'perfil'])->name('admin.perfil');
Route::get('/admin/registroMunicipio', [AdminController::class, 'registerMunicipio'])->name('admin.registroMunicipio');
Route::get('/admin/registroManzana', [AdminController::class, 'registerManzana'])->name('admin.registroManzana');
Route::get('/admin/registroServicio', [AdminController::class, 'registerServicio'])->name('admin.registroServicio');
Route::get('/ir/formulario', [AdminController::class , 'registroformulario'])->name('registro.formulario');
Route::get('/admin/edit/{id}', [AdminController::class , 'filtrarEdit'])->name('info.editar');
// -------------------------------------------------------------------GET DE CUIDADORAS
Route::get('/cuidadoras/index' , [httpCuidadorasController::class , 'index'])->name('cuidadoras.index');

// ariane

Route::get('/serviciosPropuestos',[AdminController::class, 'solicitud'])->name('solicitud');
Route::get('/ubicacion' , [AdminController::class, 'localidad'])->name('localidad');

// ---------------------------------------------------------GET DE CATEGOTIA SERVICIOS
Route::get('/categoria/index' , [httpCategoriaServicios::class , 'index'])->name('categoria.index');
//servicios
Route::get('/servicios/index' , [httpServicios::class , 'index'])->name('servicio.index');
//establecimiento
Route::get('/establecimienti/index' , [httpEstablecimientos::class , 'index'])->name('establecimiento.index');

// --------------------------POST  
//MUNICIPIO
Route::post('/crear', [PostProducto::class, 'crear'])->name('producto.formulario');
Route::post('/admin/municipio', [AdminController::class , 'guardarFormulario'])->name('guardar.formulario');
// CATEGORIA SERVICIOS
Route::post('/servcios/add' , [httpCategoriaServicios::class ,'create'])->name('categoria.servicio');
// Servicios
Route::post('/crear/servicio' , [httpServicios::class , 'create'])->name('servicio.agregar');

//Establecimiento
Route::post('/establecimeinto/add', [httpEstablecimientos::class , 'create'])->name('establecimiento.agregar');


//cuidadoras 
Route::post('/cuidadoras/add', [httpCuidadorasController::class , 'create'])->name('cuidadoras.agregar');




// ----------------------------------PATHC
//municipios
Route::patch('/crear/{id}', [AdminController::class, 'guardarCambios'])->name('producto.guardar');
//categotia servicios
Route::get('/categoria/{id}/editar', [httpCategoriaServicios::class ,'edit'])->name('categoria.edit');
Route::patch('/categoria/{id}', [httpCategoriaServicios::class , 'update'])->name('categoria.updated');





