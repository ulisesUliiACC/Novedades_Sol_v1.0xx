<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;

use App\Models\Cliente;
class ApiController extends Controller
{
    public function productos()
    {
        $productos =Producto::all();

        return response()->json($productos);

        
    }


    public function clientes()
    {
        $clientes =Cliente::all();
        
        return response()->json($clientes);
    }
    

        // ELIMINACION DEL LOS PRODUCTOS >:)

    public function destroyProducto(Producto $producto)

    {
        $producto ->delete();
        
        return response()->json([

            'res' => true,
            'mensaje' => 'Producto Eliminado Correctamente :)'
        ],200);
    }

    public function update(Request $request,Producto $producto) 

    {
       
        $producto->nombre=$request ->input('nombre');
        $producto->imagen=$request ->input('imagen');
        $producto->descripcion=$request ->input('descripcion');
        $producto->precio=$request ->input('precio');

        $prod = $request->all();

        if($imagen = $request->file('imagen')){
             $rutaGuardarImg ='imagen/';
             $imagenProducto = date('YmdHis')."." .$imagen->getClientOriginalExtension();

             $imagen->move($rutaGuardarImg,$imagenProducto);
             $prod['imagen'] ="$imagenProducto"; 
        }else{
            unset($prod['imagen']);
         }
         $producto->update($prod);
        return response()->json([

            'res' => true,
            'mensaje' => 'Producto ha sido actualizado :)'
        ],201);
    }

    public function alta(request $request)
    {

        $producto = new Producto();
        $producto->nombre=$request ->input('nombre');
        $producto->imagen=$request ->input('imagen');
        $producto->descripcion=$request ->input('descripcion');
        $producto->precio=$request ->input('precio' );

       

        $producto = $request->all();

        if($imagen = $request->file('imagen')){
             $rutaGuardarImg ='imagen/';
             $imagenProducto = date('YmdHis')."." .$imagen->getClientOriginalExtension();

             $imagen->move($rutaGuardarImg,$imagenProducto);
             $producto['imagen'] ="$imagenProducto";
             
        }

        Producto::create($producto);
        
        return response()->json([

            'res' => true,
            'mensaje' => 'Producto ha sido creado exitozamente :)'
        ],200);
    }
}
