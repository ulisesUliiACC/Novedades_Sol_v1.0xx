<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\InformacionController;
use App\Http\Controllers\CategoriaController;

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

Route::name('categorias')->get('/ropa',[CategoriaController::class, 'ropa']);
Route::name('location')->get('/location',[InformacionController::class, 'location']);

Route::name('categorias/ropa')->get('/ropa',[CategoriaController::class,'ropa']);

//--------------Agregar categorias ------------- ------

//Route::name('categoria')->get('/create',[CategoriaController::class, 'categoria']);


