<?php

namespace App\Http\Controllers;

use App\Models\Autoridad;
use App\Models\Ccomercial;
use App\Models\Clasificacion;
use App\Models\Estacion;
use App\Models\Lugarturistico;
use App\Models\Recomendado;
use App\Models\Hotel;
use App\Models\Puntosatencion;
use App\Models\Restaurante;
use App\Models\Rutas_Acceso;
use App\Models\Rutas_Turistica;

use Illuminate\Http\Request;

class LugarturisticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listarlugares(){
        $lugars = Lugarturistico::all();
        return view('lugaresturisticos.listarlugares')->with('lugars',$lugars);
     }

    public function index()
    {
        $lugars = Lugarturistico::all();
        return view('lugaresturisticos.index', compact('lugars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lugars = Lugarturistico::all();
        $hoteles = Hotel::all();
        $restaurantes =Restaurante::all();
        $ccomerciales =Ccomercial::all();
        $estaciones =Estacion::all();
        $autoridades =Autoridad::all();
        $puntosatencion =Puntosatencion::all();
        $recomendados = Recomendado::all();
        $rutas = Rutas_Acceso::all();
        $turisticas = Rutas_Turistica::all();
        $tlugars = Clasificacion::all();
        return view('lugaresturisticos.create', compact('hoteles','restaurantes','ccomerciales','estaciones','autoridades','puntosatencion','recomendados','rutas','turisticas','tlugars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lugars = new Lugarturistico();
        $lugars->id = $request->get('id');
        $lugars->lugar_turistico = $request->get('lugar_turistico');
        $lugars->horario_apertura = $request->get('horario_apertura');
        $lugars->horario_cierre = $request->get('horario_cierre');
        $lugars->municipio = $request->get('municipio');
        $lugars->direccion = $request->get('direccion');
        $lugars->telefono= $request->get('telefono');
        $lugars->correo_electronico= $request->get('correo_electronico');
        $lugars->detalles= $request->get('detalles');
        $lugars->tipo_lugar= $request->get('tipo_lugar');
        $lugars->restaurante_id = $request->get('restaurante_id');
        $lugars->hotel_id = $request->get('hotel_id');
        $lugars->ccomercial_id = $request->get('ccomercial_id');
        $lugars->estacion_id = $request->get('estacion_id');
        $lugars->autoridad_id = $request->get('autoridad_id');
        $lugars->puntosatencion_id = $request->get('puntosatencion_id');
        $lugars->recomendado_id = $request->get('recomendado_id');
        $lugars->rutas__acceso_id = $request->get('rutas__acceso_id');
        $lugars->rutas__turistica_id= $request->get('rutas__turistica_id');
        
        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $lugars->imagen = $nombreArchivo;
        
        
        $lugars->save();

        return redirect('/listarlugares');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){  
        $lugar = Lugarturistico::find($id); 
        $hoteles = Hotel::all();
        $restaurantes =Restaurante::all();
        $ccomerciales =Ccomercial::all();
        $estaciones =Estacion::all();
        $autoridades =Autoridad::all();
        $puntosatencion =Puntosatencion::all();
        $recomendados = Recomendado::all();
        $rutas = Rutas_Acceso::all();
        $turisticas = Rutas_Turistica::all();
        $tlugars = Clasificacion::all();
        return view('lugaresturisticos.edit', compact('hoteles','restaurantes','ccomerciales','estaciones','autoridades','puntosatencion','recomendados','rutas','turisticas','tlugars'))->with('lugar', $lugar);
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
        $lugar = Lugarturistico::find( $id);

        $lugar->lugar_turistico = $request->get('lugar_turistico');
        $lugar->horario_apertura = $request->get('horario_apertura');
        $lugar->horario_cierre = $request->get('horario_cierre');
        $lugar->municipio = $request->get('municipio');
        $lugar->direccion = $request->get('direccion');
        $lugar->telefono= $request->get('telefono');
        $lugar->correo_electronico= $request->get('correo_electronico');
        $lugar->detalles= $request->get('detalles');
        $lugar->tipo_lugar= $request->get('tipo_lugar');
        $lugar->restaurante_id = $request->get('restaurante_id');
        $lugar->hotel_id = $request->get('hotel_id');
        $lugar->ccomercial_id = $request->get('ccomercial_id');
        $lugar->estacion_id = $request->get('estacion_id');
        $lugar->autoridad_id = $request->get('autoridad_id');
        $lugar->puntosatencion_id = $request->get('puntosatencion_id');
        $lugar->recomendado_id = $request->get('recomendado_id');
        $lugar->rutas__acceso_id = $request->get('rutas__acceso_id');
        $lugar->rutas__turistica_id= $request->get('rutas__turistica_id');

        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $lugar->imagen = $nombreArchivo;
       
        $lugar->save();

        return redirect('/listarlugares');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lugar = Lugarturistico::find( $id);
        $lugar->delete();
        return redirect('/listarlugares');
    } 

    public function detalleslugares(){
        $fots = Lugarturistico::all();
        return view('lugaresturisticos.detalleslugares', compact('fots'));
    }

    
    public function detalleslugaresrec(){
        $recs = Recomendado::all();
        return view('lugaresturisticos.detalleslugares', compact('recs'));
    }//Falta generar el PDF y mirar cual vista de estas dejar o una ruta directamente
}
