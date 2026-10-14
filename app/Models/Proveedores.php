<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    /** @use HasFactory<\Database\Factories\ProveedoresFactory> */
    use HasFactory;

    public function productos()
    {
        return $this->hasMany(Productos::class, 'proveedores_id');
    }

    protected $fillable = [
        'nombre',
        'rubro',
        'telefono',
        'direccion',
        'estado'
    ];
}
