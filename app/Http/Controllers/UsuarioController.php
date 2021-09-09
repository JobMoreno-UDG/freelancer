<?php

namespace App\Http\Controllers;
use App\Models\Persona;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function form_registro(){
        return view('registro');
    }
    public function registro(Request $request){
        $request->validate([
            'name'=>'required',
            'user'=>'required',
            'password'=>'required',
            'email'=>'required|email',
        ]);
        $usuario = new Persona();
        $usuario->nombre = $request->name;
        $usuario->usuario = $request->user;
        $usuario->correo = $request->email;
        $usuario->password = $request->password;

        $usuario->save();
        return redirect()->route('home.index');
    }
    public function index(Persona $usuario)
    {
        return view('usuario.index',compact('usuario'));
    }
}
