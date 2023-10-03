<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidadora extends Model
{
    use HasFactory;
    protected $fillable =['tipoDoc', 'documento', 'apellido','telefono','correo','ciudad','direccion','ocupacion', 'servicioInteres','servicio_id'];

}
