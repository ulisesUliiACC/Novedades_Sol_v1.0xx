<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos =producto::paginate(5);
        return view('productos.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre=$request ->input('nombre');
        $producto->imagen=$request ->input('imagen');
        $producto->descripcion=$request ->input('descripcion');
        $producto->precio=$request ->input('precio');

       

        $producto = $request->all();

        if($imagen = $request->file('imagen')){
             $rutaGuardarImg ='imagen/';
             $imagenProducto = date('YmdHis')."." .$imagen->getClientOriginalExtension();

             $imagen->move($rutaGuardarImg,$imagenProducto);
             $producto['imagen'] ="$imagenProducto";
             
        }

        Producto::create($producto);

        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit(Producto $producto)
    {
        return view('productos.editar', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Producto $producto){
        
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
         return redirect()->route('productos.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto-> delete();
        return redirect()->route('productos.index');
    }
}
