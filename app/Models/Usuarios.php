<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    public $timestamps = false;
    protected $fillable = [
        'id_usuario',
        'nombre',
        'ap_paterno',
        'ap_materno',
        'correo',
        'password',
        'documento_identidad',
        'rol',
    ];
}
