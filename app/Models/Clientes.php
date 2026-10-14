<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    /** @use HasFactory<\Database\Factories\ClientesFactory> */
    use HasFactory;

    public function ventas()
    {
        return $this->hasMany(Ventas::class, 'clientes_id');
    }
    protected $fillable = [
        'nombre',
        'dni',
        'telefono',
        'correo',
        'direccion',
        'estado'
    ];
}
