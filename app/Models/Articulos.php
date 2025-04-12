<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    //
    protected $table = 'articulos';
    protected $primaryKey = 'id_articulo';
    public $timestamps = false;
    protected $fillable = [
        'id_articulo',
        'nombre',
        'categoria',
        'talla',
        'color',
        'precio_unitario',
        'precio_piso',
        'stock',
    ];
}
