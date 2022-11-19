@extends('layouts.app')


@section('title', 'Users')
    
@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/2 border border-gray-200 rounded-lg shadow-lg">
    <div class="auto">
        <img src="https://cdn-icons-png.flaticon.com/128/3456/3456426.png" class="center-fliud">
    </div>
   
    <h1 class="text-3xl text-center pt-24 font-bold">EDITAR CONVENIO </h1>

    <form class="mt-4"  action="/convenios" method="POST">
   
        @csrf
        <div class="form-group">
            <label for="">TipoConvenio_id</label>
            <select class ="form-control" name="notificacion_id" >
    
                @foreach ($tconvenios as $tconvenio)
                  <option value="{{$tconvenio->id}}">{{$tconvenio->convenio}}</option> 
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for=""> Usuario_id</label>
            <select class ="form-control" name="notificacion_id" >
    
                @foreach ($users as $user)
                  <option value="{{$user->id}}">{{$user->nombre}}</option> 
                @endforeach
            </select>
        </div>
       Fecha de firma:
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Fecha de firma"
        id="fecha_firma" name="fecha_firma" value="{{$convenio->fecha_firma}}">
        @error('Fecha de firma')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror

        Fecha finalización del convenio:
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="fecha fiinalizacion convenio"
        id="fecha_finalizacion" name="fecha_finalizacion" value="{{$convenio->fecha_finalizacion}}">
        @error('fecha fiinalizacion convenio')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror
        Observaciones:
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="observaciones" name="observaciones" value="{{$convenio->obsv}}">
        @error('observaciones')

        <a href="/convenios" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit"class="btn btn-secondary" tabindex="6">Guardar</button>
    </form>
</div>

@endsection
