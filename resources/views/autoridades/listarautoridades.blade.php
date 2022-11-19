@extends('layouts.plantilla')

@section('contenido')

<h1 class="text-black text center">AUTORIDADES</h1>
<a href="{{route('autoridades.create')}}" class="btn btn-primary">Crear</a>
<a  href="{{route('autoridades-pdf')}}" class="btn btn-primary"> PDF </a>
<div class="table-responsive">
<table id="idautoridades" class="table table-striped table-bordered" style="width:100%">
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
        @foreach ($autoridades as $autoridad)
          <tr>
            <td>{{$autoridad->id}}</td>
            <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$autoridad->imagen}}" alt="" width="200">
            </td>
            <td>{{$autoridad->nombre_entidad}}</td>
            <td>{{$autoridad->telefono}}</td>
            <td>{{$autoridad->correo}}</td>
            <td>{{$autoridad->mun_ubicado}}</td>
            <td>{{$autoridad->direccion}}</td>
            <td>{{$autoridad->apertura}}</td>
            <td>{{$autoridad->cierre}}</td>
            <td>
              <form action="{{route('autoridades.destroy',$autoridad->id)}}" method="POST">
                <a href="/autoridades/{{$autoridad->id}}/edit" class="btn btn-info">Editar</a>
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