<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coments = Comentario::all();
        return view('comentarios.index')->with('coments', $coments); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comentarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coments = new Comentario();
        $coments->id = $request->get('id');
        $coments->comentario = $request->get('comentario');
        $coments->fecha = $request->get('fecha');
        $coments->hora = $request->get('hora');
        $coments->calificaciones = $request->get('calificaciones');
    
        $coments->save();

        return redirect('/comentarios');
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
        $coment = Comentario::find($id);
        return view('comentarios.edit')->with('coment', $coment);
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
        $coment = Comentario::find( $id);
       // $coment->id = $request->get('id');
        $coment->comentario = $request->get('comentario');
        $coment->fecha = $request->get('fecha');
        $coment->hora = $request->get('hora');
        $coment->calificaciones = $request->get('calificaciones');
    
        $coment->save();

        return redirect('/comentarios');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coment = Comentario::find( $id);
        $coment->delete();
        return redirect('/comentarios');
    }
}
