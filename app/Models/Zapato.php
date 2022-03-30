<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Zapato extends Model
{
    use HasFactory;
    use  softDeletes;

    protected $dates=['delete_at'];// use del campo softdeletes
    protected $primaryKey='id_zapato';
    protected $table='zapatos';

    protected $fillable =['nombre','imagen','descripcion','precio'];
}
