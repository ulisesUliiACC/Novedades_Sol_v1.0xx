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
}
