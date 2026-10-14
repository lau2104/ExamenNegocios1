<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    /** @use HasFactory<\Database\Factories\EmpleadosFactory> */
    use HasFactory;

    public function ventas()
    {
        return $this->hasMany(Ventas::class, 'empleados_id');
    }

    protected $fillable = [
        'nombre',
        'codigo_empleado',
        'correo',
        'telefono',
        'direccion',
        'estado'
    ];
}
