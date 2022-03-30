<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zapato;

class zapatoscontroller extends Controller
{
    public function index()
    {
     ;
        $zapatos =Zapato::paginate(5);
        return view('zapatos.index',compact('zapatos'));
    }

   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zapatos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
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
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function edit(Zapato $zapato)
    {
        return view('zapatos.editar', compact('zapato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Zapato $zapato){
        
        $zapato->nombre=$request ->input('nombre');
        $zapato->imagen=$request ->input('imagen');
        $zapato->descripcion=$request ->input('descripcion');
        $zapato->precio=$request ->input('precio');

        $prod = $request->all();

        if($imagen = $request->file('imagen')){
             $rutaGuardarImg ='imagen/';
             $imagenProducto = date('YmdHis')."." .$imagen->getClientOriginalExtension();

             $imagen->move($rutaGuardarImg,$imagenProducto);
             $prod['imagen'] ="$imagenProducto"; 
        }else{
            unset($prod['imagen']);
         }
         $zapato->update($prod);
         return redirect()->route('zapatos.index');
         
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zapato $zapato)
    {
        $zapato-> delete();
        return redirect()->route('zapatos.index');
    }
}
