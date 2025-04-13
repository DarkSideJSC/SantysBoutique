<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuarios;

class IndexController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }
    public function inicio (){
        return view('inicio');
    }
    
}
