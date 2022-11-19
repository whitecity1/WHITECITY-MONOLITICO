<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Notificacion;
use App\Models\Tipo_persona;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  
    public function index()
    {
        $users = User::all();
        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $notificacions=Notificacion::all();
        $rol=Tipo_persona::all();
        return view('users.create', compact('rol','notificacions'));
        //return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User();
        $users->id = $request->get('id');
        $users->nombres = $request->get('nombres');
        $users->apellidos = $request->get('apellidos');
        $users->documento = $request->get('documento');
        $users->direccion= $request->get('direccion');
        $users->telefono = $request->get('telefono');
        $users->email= $request->get('email');
        $users->password = $request->get('password');
        $users->tipo_persona_id = $request->get('tipo_persona_id');
        $users->notificacion_id = $request->get('notificacion_id');

        $users->save();

        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $user = User::find($id);
        $notificacions=Notificacion::all();
        $rol=Tipo_persona::all();
        return view('users.edit', compact('rol','notificacions'))->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find( $id);
        // $ruta->id = $request->get('id');
         $user->nombres = $request->get('nombres');
         $user->apellidos = $request->get('apellidos');
         $user->documento = $request->get('documento');
         $user->direccion = $request->get('direccion');
         $user->telefono = $request->get('telefono');
         $user->email= $request->get('email');
         $user->password = $request->get('password');
         $user->tipo_persona_id = $request->get('tipo_persona_id');
         $user->notificacion_id = $request->get('notificacion_id');
 
         $user->save();
 
         return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find( $id);
        $user->delete();
        return redirect('/users');
    }

    public function listarusuarios(){
        $users = User::all();
        return view('users.listarusers')->with('hoteles',$users);
     }

     public function generar_pdf(){
        $users = User::all();
        $pdf =PDF::loadView('users.users_pdf', compact('users'));
        return $pdf->Stream('usuarios_registrados.pdf'); //Para direccionar al navegador
     }
}
