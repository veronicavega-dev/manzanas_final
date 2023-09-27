<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripccion', 'categoria_id']; // Agregar 'nombre' a la lista de campos fillable

}
