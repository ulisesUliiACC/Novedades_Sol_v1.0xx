<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zapato;

class zapatosApiController extends Controller
{
    public function zapato()
    {

        $zapatos = Zapato::all();
        return response()
        ->json($zapatos);
    }



    public function alta(Request $request)
    {
        $zapatos = new Zapato();
        $zapatos->nombre=$request ->input('nombre');
        $zapatos->imagen=$request ->input('imagen');
        $zapatos->descripcion=$request ->input('descripcion');
        $zapatos->precio=$request ->input('precio');

       

        $producto = $request->all();

        if($imagen = $request->file('imagen')){
             $rutaGuardarImg ='imagen/';
             $imagenProducto = date('YmdHis')."." .$imagen->getClientOriginalExtension();

             $imagen->move($rutaGuardarImg,$imagenProducto);
             $producto['imagen'] ="$imagenProducto";
             
        }

        Zapato::create($producto);
        
        return response()->json([

            'res' => true,
            'mensaje' => 'Producto ha sido creado exitozamente :)'
        ],200);
    }

    public function baja (Zapato $zapatos)
    {
        $zapatos -> delete();

        return response() -> json([
            'res' => true ,

            'Mensaje' => 'El producto ha sido eliminado :)'
        ],200);


    }
}
