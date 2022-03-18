<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes =cliente::paginate(5);
        return view('clientes.index',compact('clientes'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.crear');
        //return view('productos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nombre=$request ->input('nombre');
        $cliente->apellido_pa=$request ->input('apellido_pa');
        $cliente->apellido_ma=$request ->input('apellido_ma');
        $cliente->imagen=$request ->input('imagen');
        $cliente->correo=$request ->input('correo');
        $cliente->genero=$request ->input('genero');
        $cliente->fecha_de_naci=$request ->input('fecha_de_nac');
     
       

        $cliente = $request->all();

        if($imagen = $request->file('imagen')){
             $rutaGuardarImg ='imagen/';
             $imagenUsuario = date('YmdHis')."." .$imagen->getClientOriginalExtension();
             $imagen->move($rutaGuardarImg,$imagenUsuario);
             $cliente['imagen'] ="$imagenUsuario";
             
        }

        cliente::create($cliente);

        return redirect()->route('cliente.index');
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
    public function edit(Cliente $cliente)
    {
        return view('clientes.editar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
        $cliente->nombre=$request ->input('nombre');
        $cliente->apellido_pa=$request ->input('apellido_pa');
        $cliente->apellido_ma=$request ->input('apellido_ma');
        $cliente->imagen=$request ->input('imagen');
        $cliente->correo=$request ->input('correo');
        $cliente->genero=$request ->input('genero');
        $cliente->fecha_de_naci=$request ->input('fecha_de_naci');
     
       

        $usu = $request->all();

        if($imagen = $request->file('imagen')){
             $rutaGuardarImg ='imagen/';
             $imagenUsuario = date('YmdHis')."." .$imagen->getClientOriginalExtension();

             $imagen->move($rutaGuardarImg,$imagenUsuario);
             $usu['imagen'] ="$imagenUsuario"; 
        }else{
            unset($usu['imagen']);
         }

    
        $cliente->update($usu);
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente-> delete();
        return redirect()->route('clientes.index');
    }
}
