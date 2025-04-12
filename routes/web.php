<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UsuariosController;

/*Route::get('/', function () {     return view('welcome'); 
});
*/

Route::get('/', [IndexController::class, 'login']);

//-------------------- Administracion de Usuarios -----------------------
Route::get('/usuarios', [UsuariosController::class, 'listar_usuarios'])->name('usuarios');;

Route::get('/usuarios/eliminar', [UsuariosController::class, 'eliminar']);
// Crear Usuario
Route::get('/usuarios/crear', [UsuariosController::class, 'crear_form']);
Route::post('/usuarios/creado', [UsuariosController::class, 'crear'])->name('crear.usuario');
// Actualizar Usuario
Route::get('/usuarios/actualiza/{id}', [UsuariosController::class, 'actualiza_form'])->name('actualiza.usuario');
Route::put('/usuarios/actualiza/{id}', [UsuariosController::class, 'actualizar'])->name('actualizado.usuario');
// Elimina Usuario
Route::get('/usuarios/elimina/{id}', [UsuariosController::class, 'elimina_form'])->name('elimina.usuario');
Route::put('/usuarios/eliminado/{id}', [UsuariosController::class, 'eliminar'])->name('eliminado.usuario');
//-------------------- Fin -----------------------//