<?php

namespace App\Http\Controllers;

use App\Models\Recomendado;
use App\Models\User;
use Illuminate\Http\Request;

class RecomendadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listarecomendados(){
        $recs = Recomendado::all();
        return view('recomendados.listarecomendados')->with('recs',$recs);
     }
     
    public function index()
    {
        $recs = Recomendado::all();
        return view('recomendados.index', compact('recs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $user=User::all();
        return view('recomendados.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recs = new Recomendado();
        $recs->id = $request->get('id');
        $recs->lugar_recomendado = $request->get('lugar_recomendado');
        $recs->calificaciones = $request->get('calificaciones');
        $recs->resenahistorica = $request->get('resenahistorica');

        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $recs->imagen = $nombreArchivo;

        $recs->save();

        return redirect('/listarecomendados');
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
        $rec = Recomendado::find($id);
        $user=User::all();
        return view('recomendados.edit', compact('user'))->with('rec', $rec);
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
        $rec = Recomendado::find( $id);
        $rec->lugar_recomendado = $request->get('lugar_recomendado');
        $rec->calificaciones = $request->get('calificaciones');
        $rec->resenahistorica = $request->get('resenahistorica');

        $file=$request->file('imagen');
        $nombreArchivo = "img_".time().".".$file->guessClientExtension();
        $request->file('imagen')->storeAs('public/image', $nombreArchivo );
        $rec->imagen = $nombreArchivo;

        $rec->save();

        return redirect('/listarecomendados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rec = Recomendado::find( $id);
        $rec->delete();
        return redirect('/listarecomendados');
    }

    public function detalleslugares(){
        $recs = Recomendado::all();
        return view('lugaresturisticos.detalleslugares', compact('recs'));
    }
}

