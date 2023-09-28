<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'responsable', 'direccion','servicio_id']; // Agregar 'nombre' a la lista de campos fillable

}
