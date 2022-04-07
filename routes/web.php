<?php

use App\Http\Controllers\CategoriaContrller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DetalleVentaController;


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





//------------------------rutas protegidas-------------------------------
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    


    Route::get('/dashboard',function(){ 
        return view('dashboard');
    })->name('dashboard');
    });

    
    Route::resource('/cliente',ClienteController::class);

    Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
    Route::get('/productos/productos', [ProductoController::class, 'create'])->name('productos.create');
    Route::post('/productos/productos', [ProductoController::class, 'store'])->name('productos.store');
    Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');
    Route::put('/productos/{id}/update/', [ProductoController::class, 'edit'])->name('productos.update');
    Route::get('/productos/{id}/edit/', [ProductoController::class, 'edit'])->name('productos.edit');
    //---- rutas de categorias ---//


    Route::get('/categorias', [CategoriaContrller::class, 'index'])->name('categorias.index');
    Route::get('/categorias/create', [CategoriaContrller::class, 'create'])->name('categorias.create');
    Route::post('/categorias/create', [CategoriaContrller::class, 'Store'])->name('categorias.Store');
    Route::delete('/categorias/{id}', [CategoriaContrller::class, 'destroy'])->name('categorias.destroy');
    Route::put('/categorias/{id}/update/', [CategoriaContrller::class, 'edit'])->name('categorias.update');
    Route::get('/categorias/{id}/edit/', [CategoriaContrller::class, 'edit'])->name('categorias.edit');


///-------///

    Route::get('/ventas',[DetalleVentaController::class,'index'])->name('ventas.index');

