<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\InformacionController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::resource('/productos',ProductoController::class);
    Route::resource('/cliente',ClienteController::class);
    //Route::resource('/informacion',InformacionController::class);
    Route::get('/dashboard',function(){ 
        return view('dashboard');
    })->name('dashboard');
});

//Route::resource('/usuarios', UsuarioController::class)->names('usuario');
//Route::resource('/usuarios',ProductoController::class);


Route::name('info')->get('/info',[InformacionController::class, 'info']);
Route::name('location')->get('/location',[InformacionController::class, 'location']);
