<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Categoria extends Model
{
    use HasFactory,softDeletes ;
    protected $dates=['delete_at'];// use del campo softdeletes
    protected $primaryKey ='id';
    protected $fillable =['nombre' ];


    
        
}
