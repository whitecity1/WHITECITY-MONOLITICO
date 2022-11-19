@extends('layouts.plantilla')

@section('contenido')

<h1 class="text-black text center">CENTROS COMERCIALES</h1>
<a href="{{route('centroscomerciales.create')}}" class="btn btn-primary">Crear</a>
<a  href="{{route('centroscomerciales-pdf')}}" class="btn btn-primary"> PDF </a>
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
        @foreach ($comercs as $comerc)
          <tr>
            <td>{{$comerc->id}}</td>
            <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$comerc->imagen}}" alt="" width="200">
            </td>
            <td>{{$comerc->centrocomercial}}</td>
            <td>{{$comerc->telefono}}</td>
            <td>{{$comerc->correo}}</td>
            <td>{{$comerc->municipio}}</td>
            <td>{{$comerc->direccion}}</td>
            <td>{{$comerc->apertura}}</td>
            <td>{{$comerc->cierre}}</td>
            <td>
              <form action="{{route('centroscomerciales.destroy',$comerc->id)}}" method="POST">
                <a href="/centroscomerciales/{{$comerc->id}}/edit" class="btn btn-info">Editar</a>
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