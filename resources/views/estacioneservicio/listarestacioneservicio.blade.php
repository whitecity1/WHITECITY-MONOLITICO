@extends('layouts.plantilla')

@section('contenido')

<h1 class="text-black text center">ESTACIONES DE SERVICIO</h1>
<a href="{{route('estacioneservicio.create')}}" class="btn btn-primary">Crear</a>
<a  href="{{route('estacioneservicio-pdf')}}" class="btn btn-primary"> PDF </a>
<div class="table-responsive">
<table id="idServicios" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <th> Id </th>
        <th> Imagen</th>
        <th> Nombre </th>
        <th> Telefono </th>
        <th> CorreoElectrónico</th>
        <th> Municipio </th>
        <th> Dirección </th>
        <th> Apertura </th>
        <th> cierre </th>
        <th> Categorizacion_id</th>
        <th> Acciones </th>
    </thead>
    <tbody>
        @foreach ($estaciones as $estacion)
          <tr>
            <td>{{$estacion->id}}</td>
            <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$estacion->imagen}}" alt="" width="200">
            </td>
            
            <td>{{$estacion->estacion_servicio}}</td>
            <td>{{$estacion->telefono}}</td>
            <td>{{$estacion->correoelec}}</td>
            <td>{{$estacion->mun_ubicado}}</td>
            <td>{{$estacion->direccion}}</td>
            <td>{{$estacion->apertura}}</td>
            <td>{{$estacion->cierre}}</td>
       
      
            <td>
              <form action="{{route('estacioneservicio.destroy',$estacion->id)}}" method="POST">
                <a href="/estacioneservicio/{{$estacion->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                 <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
            </td>
          </tr>  
        @endforeach
    </tbody>
 </table>
</div>
@endsection