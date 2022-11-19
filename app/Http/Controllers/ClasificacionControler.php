<?php

namespace App\Http\Controllers;

use App\Models\Clasificacion;
use Illuminate\Http\Request;

class ClasificacionControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clasificacions = Clasificacion::all();
        return view('clasificacions.index')->with('clasificacions', $clasificacions); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clasificacions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clasificacions = new Clasificacion();
        $clasificacions->id = $request->get('id');
        $clasificacions->nombre = $request->get('nombre');
     
        $clasificacions->save();

        return redirect('/clasificacions');
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
        $clasificacion = Clasificacion::find($id);
        return view('clasificacions.edit')->with('clasificacion', $clasificacion);
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
        $clasificacion = Clasificacion::find( $id);
        // $ruta->id = $request->get('id');
         $clasificacion->nombre = $request->get('nombre');
 
         $clasificacion->save();
 
         return redirect('/clasificacions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clasificacion = Clasificacion::find( $id);
        $clasificacion->delete();
        return redirect('/clasificacions');
    }
}
