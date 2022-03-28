<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Producto extends Model
{
    use HasFactory;
    use softDeletes;
    
    protected $dates=['delete_at'];// use del campo softdeletes
    protected $primaryKey ='id_producto';
    protected $table='productos';
    protected $fillable =[

        'nombre',
        'imagen',
        'descripcion',
        'precio'

    ];
}
