<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Categorias =producto::paginate(5);
        return view('Categorias.index',compact('Categorias'));
    }
    public function ropa()
    {
        $Categorias =producto::paginate(6);
        return view('Categorias.ropa',compact('Categorias'));
    }


    public function detalleventas()
    {
        $detalleV=producto::all();

        
        return view('Categorias.venta',compact('detalleV'));
    }
    
    public function mostrar($id_producto)
    {
        $id_producto::find($id_producto);
        
        
        return view('Categorias.venta',compact('id_producto'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
