<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $primaryKey ='id_producto';
    
    protected $fillable =[

        'nombre',
        'imagen',
        'descripcion',
        'precio'

    ];
}