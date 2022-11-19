<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tipo_Convenio;
use App\Models\Convenio;
use App\Models\Evento;
use App\Models\Lugarturistico;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ConvenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $convenios = Convenio::all();
        return view('convenios.index')->with('convenios', $convenios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tconvenios = Tipo_Convenio::all();
        $users = User::all();
        // return view('convenios.create', compact('servicios','eventos' ,'tconvenios','users','lgrs'));
        return view('convenios.create', compact('users', 'tconvenios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $convenios = new Convenio();
        $convenios->id = $request->get('id');
        $convenios->fecha_firma = $request->get('fecha_firma');
        $convenios->fecha_finalizacion = $request->get('fecha_finalizacion');
        $convenios->observaciones= $request->get('observaciones');
        $convenios->tipo__convenio_id= $request->get('tipo__convenio_id');
        $convenios->user_id= $request->get('user_id');
        $convenios->observaciones= $request->get('observaciones');

        $convenios->save();

        return redirect('/convenios');
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
        $convenio = Convenio::find($id);
        // $eventos = Evento::all();
        $tconvenios = Tipo_Convenio::all();
        $users = User::all();
        // $lgrs = Lugarturistico::all();
        // return view('convenios.edit', compact('eventos','tconvenios','users','lgrs'))->with('convenio', $convenio);
        return view('convenios.edit', compact('tconvenios','users'))->with('convenio', $convenio);
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
        $convenio = Convenio::find( $id);
        // $ruta->id = $request->get('id');
         $convenio->fecha_firma = $request->get('fecha_firma');
         $convenio->fecha_finalizacion = $request->get('fecha_finalizacion');
         $convenio->tipo__convenio_id = $request->get('tipo__convenio_id');
         $convenio->user_id= $request->get('user_id');
         $convenio->observaciones= $request->get('observaciones');
    
         $convenio->save();
 
         return redirect('/convenios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $convenio = Convenio::find( $id);
        $convenio->delete();
        return redirect('/convenios');
    }

    public function generar_pdf(){
        $convenios = Convenio::all();
        $pdf =PDF::loadView('convenios.convenios_pdf', compact('convenios'));
        // return $pdf->Stream('servicios_registrados.pdf'); Para direccionar al navegador
        return $pdf->stream('convenios_realizados.pdf');
    }
}
