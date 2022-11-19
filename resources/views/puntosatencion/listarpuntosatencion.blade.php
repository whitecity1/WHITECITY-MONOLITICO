@extends('layouts.plantilla')

@section('contenido')

<h1 class="text-black text center">PUNTOS DE ATENCION</h1>
<a href="{{route('puntosatencion.create')}}" class="btn btn-primary">Crear</a>
<a  href="{{route('puntosatencion-pdf')}}" class="btn btn-primary"> PDF </a>
<div class="table-responsive">
<table id="idpuntosatencion" class="table table-striped table-bordered" style="width:100%">
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
        <th> Acciones </th>
    </thead>
    <tbody>
        @foreach ($puntos as $punto)
          <tr>
            <td>{{$punto->id}}</td>
            <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$punto->imagen}}" alt="" width="200">
            </td>
            <td>{{$punto->nombre_puntoatencion}}</td>
            <td>{{$punto->telefono}}</td>
            <td>{{$punto->correo}}</td>
            <td>{{$punto->mun_ubicado}}</td>
            <td>{{$punto->direccion}}</td>
            <td>{{$punto->apertura}}</td>
            <td>{{$punto->cierre}}</td>
            <td>
              <form action="{{route('puntosatencion.destroy',$punto->id)}}" method="POST">
                <a href="/puntosatencion/{{$punto->id}}/edit" class="btn btn-info">Editar</a>
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