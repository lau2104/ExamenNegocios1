<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    /** @use HasFactory<\Database\Factories\VentasFactory> */
    use HasFactory;

    public function clientes()
    {
        return $this->belongsTo(Clientes::class, 'clientes_id');
    }

    public function empleados()
    {
        return $this->belongsTo(Empleados::class, 'empleados_id');
    }

    public function productos()
    {
        return $this->belongsTo(Productos::class, 'productos_id');
    }

    protected $fillable = [
        'clientes_id',
        'empleados_id',
        'productos_id',
        'cantidad',
        'fecha',
        'total',
    ];
}
