<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiproductosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApicategoriaController; 




Route::get('/productos', [ApiproductosController::class, 'index']);         //http://127.0.0.1:8000/api/    mete la url al postam con su respetiva metodo y 
Route::post('/productos/store', [ApiproductosController::class, 'store']);  //http://127.0.0.1:8000/api/store/    mete la url al postam con su respetiva metodo y 
Route::get('/productos/{products}', [ApiproductosController::class, 'show']);  //http://127.0.0.1:8000/api/productos/1    muetra un dato especifico
//Route::get('/productos/edit/{id}', [ApiproductosController::class, 'edit']);
Route::put('/productos/update/{id}', [ApiproductosController::class, 'update']); //http://127.0.0.1:8000/api/update/1   actuliza el producto
Route::delete('/productos/delete/{id}', [ApiproductosController::class, 'destroy']); //http://127.0.0.1:8000/api/delete/1    elimina el producto


//---- rutas de api de categoriaa --?//

Route::get('/categorias', [ApicategoriaController::class, 'index']);
Route::post('/categorias/store', [ApicategoriaController::class, 'store']);
Route::get('/categorias/{categorias}', [ApicategoriaController::class, 'show']);
//Route::get('/categorias/edit/{id}', [ApicategoriaController::class, 'edit']);
Route::put('/categorias/update/{id}', [ApicategoriaController::class, 'update']);
Route::delete('/categorias/delete/{id}', [ApicategoriaController::class, 'destroy']);


