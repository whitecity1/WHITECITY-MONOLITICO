<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listarhoteles(){
        $hoteles = Hotel::all();
        return view('hoteles.listarhoteles')->with('hoteles',$hoteles);
     }

    public function index()
    {
        $hoteles = Hotel::all();
        return view('hoteles.index', compact('hoteles'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hoteles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hoteles = new Hotel();
        $hoteles->id = $request->get('id'); 
        $hoteles->hotel = $request->get('hotel');
        $hoteles->telefono = $request->get('telefono');
        $hoteles->correo= $request->get('correo');
        $hoteles->mun_ubicado = $request->get('mun_ubicado');
        $hoteles->direccion = $request->get('direccion');
        $hoteles->apertura = $request->get('apertura');
        $hoteles->cierre = $request->get('cierre');
  
        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $hoteles->imagen = $nombreArchivo;
 
        $hoteles->save();

        return redirect('/listarhoteles');
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
        $hotel = Hotel::find($id);
        return view('restaurantes.edit')->with('hotel', $hotel);
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
        $hotel = hotel::find( $id);
       
        $hotel->hotel= $request->get('hotel');
        $hotel->telefono = $request->get('telefono');
        $hotel->correo = $request->get('correo');
        $hotel->mun_ubicado = $request->get('mun_ubicado');
        $hotel->direccion = $request->get('direccion');
        $hotel->apertura = $request->get('apertura');
        $hotel->cierre = $request->get('cierre');
        $hotel->categorizacion_id= $request->get('categorizacion_id');
        
        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $hotel->imagen = $nombreArchivo;

        $hotel->save();

        return redirect('/listarhoteles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::find( $id);
        $hotel->delete();
        return redirect('/listarhoteles');
    }

    public function generar_pdf(){
        $hoteles = Hotel::all();
        $pdf =PDF::loadView('hoteles.hoteles_pdf', compact('hoteles'));
        return $pdf->Stream('hoteles_registrados.pdf');
     }
}
