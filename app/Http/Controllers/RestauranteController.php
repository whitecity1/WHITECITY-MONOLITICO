<?php

namespace App\Http\Controllers;

use App\Models\Restaurante;
use Illuminate\Http\Request;
use  PDF;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listarestaurantes(){
        $restaurantes = Restaurante::all();
        return view('restaurantes.listarestaurantes')->with('restaurantes',$restaurantes);
     }

    public function index()
    {
        $restaurantes = Restaurante::all();
        return view('restaurantes.index', compact('restaurantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $restaurantes = new Restaurante();
        $restaurantes->id = $request->get('id'); 
        $restaurantes->restaurante = $request->get('restaurante');
        $restaurantes->telefono = $request->get('telefono');
        $restaurantes->correo= $request->get('correo');
        $restaurantes->mun_ubicado = $request->get('mun_ubicado');
        $restaurantes->direccion = $request->get('direccion');
        $restaurantes->apertura = $request->get('apertura');
        $restaurantes->cierre = $request->get('cierre');

          
        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $restaurantes->imagen = $nombreArchivo;

          
        $restaurantes->save();

        return redirect('/listarestaurantes');
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
        $restaurante = Restaurante::find($id);
        return view('restaurantes.edit')->with('restaurante', $restaurante);
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
        $restaurante = Restaurante::find( $id);
       
        $restaurante->restaurante= $request->get('restaurante');
        $restaurante->telefono = $request->get('telefono');
        $restaurante->correo = $request->get('correo');
        $restaurante->mun_ubicado = $request->get('mun_ubicado');
        $restaurante->direccion = $request->get('direccion');
        $restaurante->apertura = $request->get('apertura');
        $restaurante->cierre = $request->get('cierre');
   
        
        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $restaurante->imagen = $nombreArchivo;

        $restaurante->save();

        return redirect('/listarestaurantes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurante = Restaurante::find( $id);
        $restaurante->delete();
        return redirect('/listarestaurantes');
    }

    public function generar_pdf(){
        $restaurantes = Restaurante::all();
           $pdf =PDF::loadView('restaurantes.restaurantes_pdf', compact('restaurantes'));
        return $pdf->Stream('restaurantes_registrados.pdf'); //Para direccionar al navegador
        }
}
