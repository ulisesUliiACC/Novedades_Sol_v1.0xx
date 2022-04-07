<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\detalleVenta;

class DetalleVentaController extends Controller
{
    public function index()
    {
        $ventas= detalleVenta::paginate(5);
        return view('ventas.index',compact('ventas'));
    }

    public function create()
    {


    }



}
