<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\InformacionController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\zapatoscontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('categorias', function () {
    return view('Categorias.index');
});

//------------------------rutas protegidas-------------------------------
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::resource('/productos',ProductoController::class);
    Route::resource('/cliente',ClienteController::class);
    Route::resource('/categorias',CategoriaController::class);
    Route::name('info')->get('/info',[InformacionController::class, 'info']);
    
Route::name('location')->get('/location',[InformacionController::class, 'location']);


    Route::get('/dashboard',function(){ 
        return view('dashboard');
    })->name('dashboard');
});


Route::name('venta')->get('detalleventas',[CategoriaController::class,'detalleventas' ]);
Route::name('/mostar')->get('mostar/{id_producto}',[ProductoController::class,'mostrar']);


//-----------rutas no protegidas--------------------------------

Route::name('categorias')->get('/ropa',[CategoriaController::class, 'ropa']);
Route::name('location')->get('/location',[InformacionController::class, 'location']);

Route::name('categorias/ropa')->get('/ropa',[CategoriaController::class,'ropa']);

Route::name('venta')->get('/detalleventas',[CategoriaController::class,'detalleventas']);

//--------------Agregar categorias ------------- -----

//Route::name('categoria')->get('/create',[CategoriaController::class, 'categoria']);


//--------------rutas de zapatos ------------- ------

Route::resource('/zapatos', zapatoscontroller::class);

