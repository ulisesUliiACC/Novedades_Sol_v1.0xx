<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\zapatosApiController;

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


Route::get('/clientes',[ApiController::class,'clientes']);


// para mostrar datos 
Route::post('/productos',[ApiController::class,'productos']);
Route::get('/productos',[ApiController::class,'productos']);
// agrgacion de alta
Route::post('productos',[ApiController::class,'alta']);
// eliminacion 
Route::delete('productos/{producto}',[ApiController::class,'destroyProducto']);
//metodo de actualizacion
Route::put('productos/{producto}',[ApiController::class,'update']);


//------------------------api de zapatos--------------------------
Route::get('/zapatos',[zapatosApiController::class,'zapato']);
//-------- agregacion de zapatos en alta--------
Route::post('/zapatos',[zapatosApiController::class,'alta']);

//------ eliminacio de zapatos--------------------------------
Route::delete('zapatos/{zapato}',[zapatosApiController::class,'baja']);





