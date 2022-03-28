<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/productos',[ApiController::class,'productos']);

Route::get('/clientes',[ApiController::class,'clientes']);

// para mostrar datos 
Route::post('/clientes',[ApiController::class,'clientes']);


// agrgacion de alta
Route::post('productos',[ApiController::class,'alta']);

// eliminacion 
Route::delete('productos/{producto}',[ApiController::class,'destroyProducto']);


//metodo de actualizacion
Route::patch('productos/{producto}',[ApiController::class,'update']);



