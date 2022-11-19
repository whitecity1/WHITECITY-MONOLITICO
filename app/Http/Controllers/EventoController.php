<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
*/
public function listareventos(){
    $events = Evento::all();
    return view('eventos.listareventos')->with('events',$events);

 }
     
    public function index()
    {
        $events = Evento::all();
        return view('eventos.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $user=User::all();
        return view('eventos.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $events = new Evento();
        $events->id = $request->get('id');
        $events->evento = $request->get('evento');
        $events->municipio = $request->get('municipio');
        $events->direccion = $request->get('direccion');
        $events->horarios = $request->get('horarios');
        $events->fecha_inicio = $request->get('fecha_inicio');
        $events->fecha_fin = $request->get('fecha_fin');
        $events->descripcion = $request->get('descripcion');
        $events->tipo_evento = $request->get('tipo_evento');
        $events->user_id = $request->get('user_id');

        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $events->imagen = $nombreArchivo;

        $events->save();

        return redirect('/listareventos');
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
        $event = Evento::find($id);
        $user=User::all();
        return view('eventos.edit', compact('user'))->with('event', $event);
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
        $event = Evento::find( $id);
        $event->evento = $request->get('evento');
        $event->municipio = $request->get('municipio');
        $event->direccion = $request->get('direccion');
        $event->horarios = $request->get('horarios');
        $event->fecha_inicio = $request->get('fecha_inicio');
        $event->fecha_fin = $request->get('fecha_fin');
        $event->descripcion = $request->get('descripcion');
        $event->tipo_evento = $request->get('tipo_evento');
        $event->user_id = $request->get('user_id');


        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $event->imagen = $nombreArchivo;
        
        $event->save();

        return redirect('/listareventos');
       
    }  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Evento::find( $id);
        $event->delete();
        return redirect('/listareventos'); 
    }

    public function generar_pdf(){
        $eventos = Evento::all();
        $pdf = PDF::loadView('eventos.eventos_pdf', compact('eventos'));  
        return $pdf->Stream('lista_eventos.pdf'); //Para direccionar al navegador
         //return $pdf->download('lista_eventos.pdf'); Para designar descarga directamente 
    }
}
