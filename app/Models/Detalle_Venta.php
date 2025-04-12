<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle_Venta extends Model
{
    //
    protected $table = 'detalle_venta';
    protected $primaryKey = 'id_detalle';
    public $timestamps = false;
    protected $fillable = [
        'id_detalle',
        'id_venta',
        'id_articulo',
        'cantidad',
        'precio_unitario',
        'subtotal',
    ];
}
