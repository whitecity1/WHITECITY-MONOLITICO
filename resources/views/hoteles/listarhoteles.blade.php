@extends('layouts.plantilla')

@section('contenido')

<h1 class="text-black text center">HOTELES</h1>
<a href="{{route('hoteles.create')}}" class="btn btn-primary">Crear</a>
<a  href="{{route('hoteles-pdf')}}" class="btn btn-primary"> PDF </a>
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
        @foreach ($hoteles as $hotel)
          <tr>
            <td>{{$hotel->id}}</td>
            <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$hotel->imagen}}" alt="" width="200">
            </td>
            <td>{{$hotel->hotel}}</td>
            <td>{{$hotel->telefono}}</td>
            <td>{{$hotel->correo}}</td>
            <td>{{$hotel->mun_ubicado}}</td>
            <td>{{$hotel->direccion}}</td>
            <td>{{$hotel->apertura}}</td>
            <td>{{$hotel->cierre}}</td>
            <td>
              <form action="{{route('hoteles.destroy',$hotel->id)}}" method="POST">
                <a href="/hoteles/{{$hotel->id}}/edit" class="btn btn-info">Editar</a>
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