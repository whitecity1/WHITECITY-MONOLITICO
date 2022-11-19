<?php

namespace App\Http\Controllers;

use App\Models\Puntosatencion;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PuntosatencionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listarpuntosatencion(){
        $puntos = Puntosatencion::all();
        return view('puntosatencion.listarpuntosatencion')->with('puntos',$puntos);
     }
    public function index()
    {
        $puntos = Puntosatencion::all();
        return view('puntosatencion.index', compact('puntos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $punto=Puntosatencion::all();
        return view('puntosatencion.create', compact('punto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $puntos = new Puntosatencion();
        $puntos->id = $request->get('id'); 
        $puntos->nombre_puntoatencion = $request->get('nombre_puntoatencion');
        $puntos->telefono = $request->get('telefono');
        $puntos->correo= $request->get('correo');
        $puntos->mun_ubicado = $request->get('mun_ubicado');
        $puntos->direccion = $request->get('direccion');
        $puntos->apertura = $request->get('apertura');
        $puntos->cierre = $request->get('cierre');

          
        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $puntos->imagen = $nombreArchivo;

          
        $puntos->save();

        return redirect('/listarpuntosatencion');
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
        $punto = Puntosatencion::find($id);
        return view('puntosatencion.edit')->with('punto', $punto);
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
        $punto = Puntosatencion::find( $id);
       
        $punto->nombre_puntoatencion= $request->get('nombre_puntoatencion');
        $punto->telefono = $request->get('telefono');
        $punto->correo = $request->get('correo');
        $punto->mun_ubicado = $request->get('mun_ubicado');
        $punto->direccion = $request->get('direccion');
        $punto->apertura = $request->get('apertura');
        $punto->cierre = $request->get('cierre');
        $punto->categorizacion_id= $request->get('categorizacion_id');
        
        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $punto->imagen = $nombreArchivo;

        $punto->save();

        return redirect('/listarpuntosatencion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $punto = Puntosatencion::find( $id);
        $punto->delete();
        return redirect('/listarpuntosatencion');
    }

    public function generar_pdf(){
        $puntos = Puntosatencion::all();
        $pdf =PDF::loadView('puntosatencion.puntosatencion_pdf', compact('puntos'));
        return $pdf->Stream('registro_puntosatencion.pdf'); //Para direccionar al navegador
     }
}
