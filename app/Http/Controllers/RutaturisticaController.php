<?php

namespace App\Http\Controllers;

use App\Models\Rutas_Turistica;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RutaturisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listarutasturisticas(){
        $rutasturcs = Rutas_Turistica::all();
        return view('rutasturisticas.listarutasturisticas')->with('rutasturcs',$rutasturcs);

     }
    public function index()
    {
        $rutasturcs = Rutas_Turistica::all();
        return view('rutasturisticas.index', compact('rutasturcs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rutasturisticas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rutasturcs = new Rutas_Turistica();
        $rutasturcs->id = $request->get('id');
        $rutasturcs->ruta_turistica= $request->get('ruta_turistica');
        $rutasturcs->descripcion= $request->get('descripcion');
        $rutasturcs->municipio_ubicada = $request->get('municipio_ubicada');
        $rutasturcs->direccion_ruta= $request->get('direccion_ruta');
        $rutasturcs->contactos = $request->get('contactos');
        $rutasturcs->h_apertura = $request->get('h_apertura');
        $rutasturcs->h_cierre = $request->get('h_cierre');
        $rutasturcs->tipo_rutaTur = $request->get('tipo_rutaTur');

        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $rutasturcs->imagen = $nombreArchivo;

        $rutasturcs->save();

        return redirect('/listarutasturisticas');
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
        $rutasturc = Rutas_Turistica::find($id);
        return view('rutasturisticas.edit')->with('rutasturc', $rutasturc);
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
        $rutasturc = Rutas_Turistica::find( $id);
        $rutasturc->ruta_turistica= $request->get('ruta_turistica');
        $rutasturc->descripcion= $request->get('descripcion');
        $rutasturc->municipio_ubicada = $request->get('municipio_ubicada');
        $rutasturc->direccion_ruta= $request->get('direccion_ruta');
        $rutasturc->contactos = $request->get('contactos');
        $rutasturc->h_apertura = $request->get('h_apertura');
        $rutasturc->h_cierre = $request->get('h_cierre');
        $rutasturc->tipo_rutaTur = $request->get('tipo_rutaTur');

        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $rutasturc->imagen = $nombreArchivo;

        $rutasturc->save();

        return redirect('/listarutasturisticas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rutasturc = Rutas_Turistica::find( $id);
        $rutasturc->delete();
        return redirect('/listarutasturisticas');
    }

    public function generar_pdf(){
        $rutasturcs = Rutas_Turistica::all();
        $pdf =PDF::loadView('rutasturisticas.rutasturisticas_pdf', compact('rutasturcs'));
        return $pdf->Stream('rutasacceso_registro.pdf'); //Para direccionar al navegador
          //return $pdf->download('servicios_registrados.pdf');
     }
}
