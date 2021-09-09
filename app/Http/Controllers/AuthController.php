<?php

namespace App\Http\Controllers;
use App\Models\Persona;
use Hamcrest\Core\HasToString;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function inicio_sesion(){
        return view('autentificar');
    }
    public function iniciar(Request $request){
        $request->validate([
            'user'=>'required',
            'password'=>'required'
        ]);


        $y = $request->user;
        $usuario = Persona::select('id','nombre','tipo')->where(['usuario'=>$y])->where('password',$request->password)->get();
        $usuario = $usuario[0];
        //$request->session()->put([$usuario->nombre=>$usuario->tipo]);
        
        $request->session()->flush();
        session([$usuario->nombre=>$usuario->tipo]);
        return $request->session()->all();
        if ($usuario->tipo =="normal"){
            return redirect()->route('usuario.index',$usuario);

        }
    }
}
