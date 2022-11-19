<?php

namespace App\Http\Controllers;

use App\Models\Notificacion;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tipo_persona;

class RegisterController extends Controller
{
    public function create(){
         
        $notificacions=Notificacion::all();
        $rol=Tipo_persona::all();
        return view('auth.register', compact('rol','notificacions'));

    }
    
    public function store(Request $request){

        $this->validate(request(),[
            'nombres'=>'required',
            'apellidos'=>'required',
            'documento'=> 'required',
            'direccion'=> 'required',
            'telefono'=>'required',
            'email'=>'required|email',
            'password'=> 'required|confirmed',

        ]);

        $users = new User ();
        $users->tipo_persona_id = $request->tipo_persona_id;
        $users->notificacion_id = $request->notificacion_id;
        $users->nombres = $request->nombres;
        $users->apellidos = $request->apellidos;
        $users->documento = $request->documento;
        $users->direccion = $request->direccion;
        $users->telefono = $request ->telefono;
        $users->email= $request->email;
        $users->password= $request->password;
        $users->save();
        auth()->login($users);
        return redirect()->to('/');

    }
}
