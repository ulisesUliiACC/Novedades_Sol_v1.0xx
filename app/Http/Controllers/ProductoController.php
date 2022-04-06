<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function index()
    {
        $productos =Producto::paginate(5);
        return view('productos.index',compact('productos'));
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto =new Producto();
        $categorias = Categoria::select('id', 'nombre')->orderBy('nombre')->get();
        return view('productos.crear',compact('producto','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function Store(Request $request)
    {
        Producto::create([
            'nombre'=>$request->nombre,
            'imagen'=>$request->imagen,
            'descripcion'=>$request->descripcion,
            'precio'=>$request->precio,
            'categoria_id'=>$request->categoria_id,
        ]);
        // $producto = newroducto();
        // $producto->nombre=$request ->input('nombre');
        // $producto->imagen=$request ->input('imagen');
        // $producto->descripcion=$request ->input('descripcion');
        // $producto->precio=$request ->input('precio');
        // $producto->categoria_id->$request ->scategoria_id;
       
        // $producto->save();
        return redirect()->route('productos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




   public function edit(Producto $producto)
    {
        $categorias = Categoria::select('id', 'nombre')->orderBy('nombre')->get();
        return view('productos.editar', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $id=Producto::find($id);
        $id->update($request->all());
        return redirect()->route('productos.index');
      /*  $producto->nombre=$request ->input('nombre');
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
         */
        
        
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


    
    public function show($id_producto){
        $producto=producto::where('producto',$id_producto)->first();
  
          return view ('Categorias.ropa',compact('producto'));
  }
  
}
