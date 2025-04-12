<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuarios;


class UsuariosController extends Controller
{
    //
    public function listar_usuarios()
    {
        $usuarios = Usuarios::all();
        $data = ['usuarios' => $usuarios];
        return view('usuarios.listar_usuarios', $data);
    }
//----------------------------Crear Usuarios -----------
    public function crear_form (){
        return view('usuarios.crear_usuario');
    }
    public function crear (Request $request){
        $request->validate([
            'nombre'=>'required',
            'ap_paterno'=>'required',
            'ap_materno'=>'required',
            'correo'=>'required',
            'password'=>'required',
            'documento_identidad'=>'required',
        ]);
        Usuarios::create($request->all());
        return redirect('/usuarios');
    }
//----------------------------Actualizar Usuarios -----------    
    public function actualiza_form ($id){
        $usuario = Usuarios::findOrFail($id);
        $data = ['usuario'=>$usuario];
        return view('usuarios.actualizar_usuario',$data);
    }
    public function actualizar (Request $request,$id){
        $usuario = Usuarios::findOrFail($id);
        $request->validate([
         'nombre'=>'required',
             'ap_paterno'=>'required',
             'ap_materno'=>'required',
             'correo'=>'required',
             'documento_identidad'=>'required'
        ]);
        $usuario -> update ($request->all());
        return redirect ('/usuarios');
     }
//---------------------------- Eliminar Usuarios -----------
    public function elimina_form ($id) {
        $usuario = Usuarios::findOrFail($id);
        $data = ['usuario'=>$usuario];
        return view('usuarios.eliminar_usuario',$data);
    } 
    
    public function eliminar($id){
        $usuario = Usuarios :: findOrFail ($id);
        $usuario -> delete($id);
        return redirect ('/usuarios');    
    }
    
}
