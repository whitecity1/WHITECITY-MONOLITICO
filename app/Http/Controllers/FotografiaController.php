<?php

namespace App\Http\Controllers;

use App\Models\Fotografia;
use App\Models\QR;
use PDF;
use Illuminate\Http\Request;

class FotografiaController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function listarfotografias(){
        $fots = Fotografia::all();
        return view('fotografias.listarfotografias')->with('fots',$fots);

     }
    public function index()
    {
        $fots = Fotografia::all();
        return view('fotografias.index', compact('fots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('fotografias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fots = new Fotografia();
        $fots->nombre = $request->get('nombre');
        $fots->descripcion = $request->get('descripcion');


        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $fots->imagen = $nombreArchivo;

        $fots->save();

        return redirect('/listarfotografias');
    
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
        $fot = Fotografia::find($id);
        return view('fotografias.edit')->with('fot', $fot);
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
        $fot = Fotografia::find( $id);
        $fot->nombre = $request->get('nombre');
        // $fot->imagen = $request->get('imagen');
        $fot->descripcion = $request->get('descripcion');
      
        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $fot->imagen = $nombreArchivo;
        
        $fot->save();

       

        return redirect('/listarfotografias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fot = Fotografia::find( $id);
        $fot->delete();
        return redirect('/listarfotografias');
    }

    public function generar_pdf(){
        $fots = Fotografia::all();
        $pdf = PDF::loadView('fotografias.fotografias_pdf', compact('fots'));  
        return $pdf->stream('listado_fotografias.pdf');
    }
}

