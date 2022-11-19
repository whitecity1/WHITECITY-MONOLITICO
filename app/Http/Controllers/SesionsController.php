<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SesionsController extends Controller
{
    public function create(){
        return view('auth.login');

    }
    public function store(){
        if(auth()->attempt(request(['email','password']))==false){
            return back()->withErrors([
                'message'=>'Los datos ingresados son incorrectos'
            ]);

        }else {
            if(auth()->user()->tipo_persona_id=='2'){
                return redirect()->route('admin.index');
            }else{
                return redirect()->to('/');
            }
        }
    }

    public function destroy(){
            auth()->logout();
            return redirect()->to('/');
    }

}
