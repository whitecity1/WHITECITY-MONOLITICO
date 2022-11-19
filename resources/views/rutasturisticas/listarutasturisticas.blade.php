@extends('layouts.plantilla')

@section('contenido')

<h1 class="text-black text center">RUTAS TURÍSTICAS</h1>
<a href="{{route('rutasturisticas.create')}}" class="btn btn-primary"> Crear nueva ruta turística</a>
<a href="{{route('rutasturisticas-pdf')}}" class="btn btn-primary"> PDF</a>
<div class="table-responsive">
<table id="idRutasturisticas" class="table table-striped table-bordered" style="width:100%">
<br>
    <thead>
        <th> Id </th>
        <th> Imagen</th>
        <th> Nombre ruta turística</th>
        <th> Descripcion</th>
        <th> Municipio ubicación </th>
        <th> Direccion</th>
        <th> Contactos</th>
        <th> Hora apertura </th>
        <th> Hora cierre </th>
        <th> Tipo ruta turística </th>
        <th> Acciones </th>
    </thead>
    <tbody>
        @foreach ($rutasturcs as $rutasturc)
          <tr>
            <td>{{$rutasturc->id}}</td>
            <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$rutasturc->imagen}}" alt="" width="200">
            </td>
            <td>{{$rutasturc->ruta_turistica}}</td>
            <td>{{$rutasturc->descripcion}}</td>
            <td>{{$rutasturc->municipio_ubicada}}</td>
            <td>{{$rutasturc->direccion_ruta}}</td>
            <td>{{$rutasturc->contactos}}</td>
            <td>{{$rutasturc->h_apertura}}</td>
            <td>{{$rutasturc->h_cierre}}</td> 
            <td>{{$rutasturc->tipo_rutaTur}}</td>
            <td>
              <form action="{{route('rutasturisticas.destroy',$rutasturc->id)}}" method="POST" role="group">
                <a href="/rutasturisticas/{{$rutasturc->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                 <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
            </td>
          </tr>  
        @endforeach
    </tbody>
</table>
@endsection