<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $primaryKey ='id_cliente';
    
    protected $fillable =[

        'nombre',
        'apellido_pa',
        'apellido_ma',
        'imagen',
        'correo',
        'genero',
        'fecha_de_naci'
        

    ];
    public function  productos()
    {
        return $this->hasMany('App\Models\Product');
    }
}
