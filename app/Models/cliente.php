<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $primaryKey ='id';
    
    protected $fillable =[

        'nombre',
        'apellido_pa',
        'apellido_ma',
        'correo',
        'genero',       

    ];
}
