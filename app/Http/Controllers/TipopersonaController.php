<?php

namespace App\Http\Controllers;

use App\Models\Tipo_persona;
use Illuminate\Http\Request;

class TipopersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipopers = Tipo_persona::all();
        return view('tipopersonas.index')->with('tipopers', $tipopers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipopersonas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipopers = new Tipo_persona();
        $tipopers->id = $request->get('id');
        $tipopers->nombre = $request->get('nombre');

        $tipopers->save();

        return redirect('/tipopersonas');
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
        $tipoper = Tipo_persona::find($id);
        return view('tipopersonas.edit')->with('tipoper', $tipoper);
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
        $tipoper = Tipo_persona::find( $id);
        $tipoper->nombre = $request->get('nombre');
 
        $tipoper->save();
 
         return redirect('/tipopersonas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoper = Tipo_persona::find( $id);
        $tipoper->delete();
        return redirect('/tipopersonas');
    }
    //Falta generar PDF 
}
