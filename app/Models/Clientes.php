<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    public $timestamps = false;
    protected $fillable = [
        'id_cliente',
        'nombre',
        'ap_paterno',
        'ap_materno',
        'correo',
        'documento_identidad',
        'telefono',
        'fecha_registro'
    ];
}
