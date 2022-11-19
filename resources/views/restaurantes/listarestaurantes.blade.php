@extends('layouts.plantilla')

@section('contenido')

<h1 class="text-black text center">RESTAURANTES</h1>
<a href="{{route('restaurantes.create')}}" class="btn btn-primary">Crear</a>
<a  href="{{route('restaurantes-pdf')}}" class="btn btn-primary"> PDF </a>
<div class="table-responsive">
<table id="idrestaurantes" class="table table-striped table-bordered" style="width:100%">
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
        @foreach ($restaurantes as $restaurante)
          <tr>
            <td>{{$restaurante->id}}</td>
            <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$restaurante->imagen}}" alt="" width="200">
            </td>
            <td>{{$restaurante->restaurante}}</td>
            <td>{{$restaurante->telefono}}</td>
            <td>{{$restaurante->correoelec}}</td>
            <td>{{$restaurante->mun_ubicado}}</td>
            <td>{{$restaurante->direccion}}</td>
            <td>{{$restaurante->apertura}}</td>
            <td>{{$restaurante->cierre}}</td>
            <td>
              <form action="{{route('restaurantes.destroy',$restaurante->id)}}" method="POST">
                <a href="/restaurantes/{{$restaurante->id}}/edit" class="btn btn-info">Editar</a>
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