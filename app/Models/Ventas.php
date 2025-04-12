<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    //
    protected $table = 'ventas';
    protected $primaryKey = 'id_venta';
    public $timestamps = false;
    protected $fillable = [
        'id_venta',
        'fecha',
        'id_usuario',
        'id_cliente',   
        'total'
    ];
}
