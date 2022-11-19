<?php

namespace App\Http\Controllers;

use App\Models\Ccomercial;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CentrocomercialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listarcentroscomerciales(){
        $comercs = Ccomercial::all();
        return view('centroscomerciales.listarcentroscomerciales')->with('comercs',$comercs);
     }

    public function index()
    {
        $comercs = Ccomercial::all();
        return view('centroscomerciales.index', compact('comercs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('centroscomerciales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comercs = new Ccomercial();
        $comercs->id = $request->get('id'); 
        $comercs->centrocomercial = $request->get('centrocomercial');
        $comercs->telefono = $request->get('telefono');
        $comercs->correo= $request->get('correo');
        $comercs->municipio = $request->get('municipio');
        $comercs->direccion = $request->get('direccion');
        $comercs->apertura = $request->get('apertura');
        $comercs->cierre = $request->get('cierre');

          
        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $comercs->imagen = $nombreArchivo;

          
        $comercs->save();

        return redirect('/listarcentroscomerciales');
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
        $comerc = Ccomercial::find($id);
        return view('centroscomerciales.edit')->with('comerc', $comerc);
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
        $comerc= Ccomercial::find( $id);
       
        $comerc->centrocomercial= $request->get('centrocomercial');
        $comerc->telefono = $request->get('telefono');
        $comerc->correo = $request->get('correo');
        $comerc->municipio = $request->get('municipio');
        $comerc->direccion = $request->get('direccion');
        $comerc->apertura = $request->get('apertura');
        $comerc->cierre = $request->get('cierre');
        $comerc->categorizacion_id= $request->get('categorizacion_id');
        
        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $comerc->imagen = $nombreArchivo;

        $comerc->save();

        return redirect('/listarcentroscomerciales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comerc = Ccomercial::find( $id);
        $comerc->delete();
        return redirect('/listarcentroscomerciales');
    }

    public function generar_pdf(){
        $comercs = Ccomercial::all();
        $pdf = PDF::loadView('centroscomerciales.centroscomerciales_pdf', compact('comercs'));  
        return $pdf->stream('registro_centroscomerciales.pdf');
    }
}
