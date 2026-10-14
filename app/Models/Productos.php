<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    /** @use HasFactory<\Database\Factories\ProductosFactory> */
    use HasFactory;

    public function ventas()
    {
        return $this->hasMany(Ventas::class, 'productos_id');
    }
    public function proveedores()
    {
        return $this->belongsTo(Proveedores::class, 'proveedores_id');
    }

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'stock',
        'proveedores_id'
    ];
}
