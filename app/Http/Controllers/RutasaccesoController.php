<?php

namespace App\Http\Controllers;
use App\Models\Rutas_Acceso;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RutasaccesoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listarutasacceso(){
        $rutas = Rutas_Acceso::all();
        return view('rutasacceso.listarutasacceso')->with('rutas',$rutas);

     }

     public function index()
    {
        $rutas = Rutas_Acceso::all();
        return view('rutasacceso.index',compact('rutas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rutasacceso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rutas = new Rutas_Acceso();
        $rutas->id = $request->get('id');
        $rutas->empresa_transporte = $request->get('empresa_transporte');
        $rutas->mun_ubicacion = $request->get('mun_ubicacion');
        $rutas->inicio_atencion = $request->get('inicio_atencion');
        $rutas->cierre_atencion = $request->get('cierre_atencion');
        $rutas->direccion_empresa = $request->get('direccion_empresa');
        $rutas->contacto = $request->get('contacto');
        $rutas->correo_empresa = $request->get('correo_empresa');
        $rutas->tipo_ruta = $request->get('tipo_ruta');

        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $rutas->imagen = $nombreArchivo;
        

        $rutas->save();

        return redirect('/listarutasacceso');
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
        $ruta = Rutas_Acceso::find($id);
        return view('rutasacceso.edit')->with('ruta', $ruta);
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
        $ruta = Rutas_Acceso::find( $id);
        $ruta->empresa_transporte = $request->get('empresa_transporte');
        $ruta->mun_ubicacion = $request->get('mun_ubicacion');
        $ruta->inicio_atencion = $request->get('inicio_atencion');
        $ruta->cierre_atencion = $request->get('cierre_atencion');
        $ruta->direccion_empresa = $request->get('direccion_empresa');
        $ruta->contacto = $request->get('contacto');
        $ruta->correo_empresa = $request->get('correo_empresa');
        $ruta->tipo_ruta = $request->get('tipo_ruta');

        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $ruta->imagen = $nombreArchivo;

        $ruta->save();

        return redirect('/listarutasacceso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruta = Rutas_Acceso::find( $id);
        $ruta->delete();
        return redirect('/listarutasacceso');
    }

    public function generar_pdf(){
        $rutas = Rutas_Acceso::all();
        $pdf =PDF::loadView('rutasacceso.rutasacceso_pdf', compact('rutas'));
        return $pdf->Stream('rutasacceso_registradas.pdf'); //Para direccionar al navegador
     }
}
