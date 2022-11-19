<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estacion;
use Barryvdh\DomPDF\Facade\Pdf;

class EstacionservicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listarestacioneservicio(){
        $estaciones = Estacion::all();
        return view('estacioneservicio.listarestacioneservicio')->with('estaciones',$estaciones);
     }

    public function index()
    {
        $estacions = Estacion::all();
        return view('estacioneservicio.index', compact('estacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estacioneservicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $estacions = new Estacion();
        $estacions->id = $request->get('id'); 
        $estacions->estacion_servicio = $request->get('estacion_servicio');
        $estacions->telefono = $request->get('telefono');
        $estacions->correo= $request->get('correo');
        $estacions->mun_ubicado = $request->get('mun_ubicado');
        $estacions->direccion = $request->get('direccion');
        $estacions->apertura = $request->get('apertura');
        $estacions->cierre = $request->get('cierre');

          
        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $estacions->imagen = $nombreArchivo;

          
        $estacions->save();

        return redirect('/listarestacioneservicio');
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
        $estacion = Estacion::find($id);
        return view('estacioneservicio.edit')->with('hotel', $estacion);
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
        $estacion = Estacion::find( $id);
       
        $estacion->estacion_servicio= $request->get('estacion_servicio');
        $estacion->telefono = $request->get('telefono');
        $estacion->correo = $request->get('correo');
        $estacion->mun_ubicado = $request->get('mun_ubicado');
        $estacion->direccion = $request->get('direccion');
        $estacion->apertura = $request->get('apertura');
        $estacion->cierre = $request->get('cierre');
        $estacion->categorizacion_id= $request->get('categorizacion_id');
        
        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $estacion->imagen = $nombreArchivo;

        $estacion->save();

        return redirect('/listarestacioneservicio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $estacion = Estacion::find( $id);
        $estacion->delete();
        return redirect('/listarestacioneservicio');
    }

    public function generar_pdf(){
        $estaciones = Estacion::all();
        $pdf =PDF::loadView('estacioneservicio.estacioneservicio_pdf', compact('estaciones'));
        return $pdf->Stream('estacioneservicio_registradas.pdf'); //Para direccionar al navegador
     }
}
