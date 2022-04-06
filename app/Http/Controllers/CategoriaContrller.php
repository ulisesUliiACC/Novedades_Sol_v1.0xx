<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaContrller extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        
        return view('Categorias.index',compact('categorias'));  	
    }

    public function create()
    {
        return view('Categorias.crear');
    }

    public function Store(Request $request)
    {
        $categorias = new Categoria();

        $categorias->nombre=$request->input('nombre');
        $categorias = $request->all();

        Categoria::create($categorias);
        return redirect()->route('categorias.index');


    }
    public function edit($id)
    {
        $categoria= Categoria::find($id);

        return view('Categorias.edit',compact('categoria'));
    }

    public function update(Request $request,$id)
    {
        $categorias=Categoria::find($id);
        $categorias->update($request->all());
        return redirect()->route('categorias.index');
    }


    public function destroy($id)
    {
        $categorias =Categoria::find($id);
        $categorias->delete();
        return redirect()->route('categorias.index');
    }
}

