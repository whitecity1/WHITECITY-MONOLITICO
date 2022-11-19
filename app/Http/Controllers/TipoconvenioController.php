<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Convenio;
use Illuminate\Http\Request;

class TipoconvenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoconvenios = Tipo_Convenio::all();
        return view('tipoconvenio.index')->with('tipoconvenios', $tipoconvenios); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoconvenio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoconvenios = new Tipo_Convenio();
        $tipoconvenios->id = $request->get('id');
        $tipoconvenios->convenio = $request->get('convenio');
        $tipoconvenios->anotaciones = $request->get('anotaciones');

        $tipoconvenios->save();

        return redirect('/tipoconvenio');
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
        $tipoconvenio = Tipo_Convenio::find($id);
        return view('tipoconvenio.edit')->with('tipoconvenio', $tipoconvenio);
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
        $tipoconvenio = Tipo_Convenio::find( $id);
       
        $tipoconvenio->convenio = $request->get('convenio');
        $tipoconvenio->anotaciones = $request->get('anotaciones');
      
        $tipoconvenio->save();

        return redirect('/tipoconvenio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoconvenio = Tipo_Convenio::find( $id);
        $tipoconvenio->delete();
        return redirect('/tipoconvenio');
    }

    //Falta generar el pdf 
}
