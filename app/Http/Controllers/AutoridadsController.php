<?php

namespace App\Http\Controllers;

use App\Models\Autoridad;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AutoridadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listarautoridades(){
        $autoridades = Autoridad::all();
        return view('autoridades.listarautoridades')->with('autoridades',$autoridades);
     }
     
    public function index()
    {
        $autoridades = Autoridad::all();
        return view('autoridades.index', compact('autoridades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('autoridades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autoridades = new Autoridad();
        $autoridades->id = $request->get('id'); 
        $autoridades->nombre_entidad = $request->get('nombre_entidad');
        $autoridades->telefono = $request->get('telefono');
        $autoridades->correo= $request->get('correo');
        $autoridades->mun_ubicado = $request->get('mun_ubicado');
        $autoridades->direccion = $request->get('direccion');
        $autoridades->apertura = $request->get('apertura');
        $autoridades->cierre = $request->get('cierre');

          
        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $autoridades->imagen = $nombreArchivo;

          
        $autoridades->save();

        return redirect('/listarautoridades');
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
        $autoridad = Autoridad::find($id);
        return view('autoridades.edit')->with('autoridad', $autoridad);
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
        $autoridad= Autoridad::find( $id);
       
        $autoridad->nombre_entidad= $request->get('nombre_entidad');
        $autoridad->telefono = $request->get('telefono');
        $autoridad->correo = $request->get('correo');
        $autoridad->mun_ubicado = $request->get('mun_ubicado');
        $autoridad->direccion = $request->get('direccion');
        $autoridad->apertura = $request->get('apertura');
        $autoridad->cierre = $request->get('cierre');
        $autoridad->categorizacion_id= $request->get('categorizacion_id');
        
        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $autoridad->imagen = $nombreArchivo;

        $autoridad->save();

        return redirect('/listarautoridades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $autoridad = Autoridad::find( $id);
        $autoridad->delete();
        return redirect('/listarautoridades');
    }

    public function generar_pdf(){
        $autoridades = Autoridad::all();
        $pdf = PDF::loadView('autoridades.autoridades_pdf', compact('autoridades'));  
        return $pdf->stream('registro_autoridades.pdf');
    }
}
