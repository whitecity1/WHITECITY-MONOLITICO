@extends('layouts.plantilla');

@section('contenido')

<h1 class="bg-primary text-white text center">TIPOS DE CONVENIOS</h1>

<a href="{{route('tipoconvenio.create')}}" class="btn btn-primary"> Crear nuevo convenio</a>
<a href="" class="btn btn-primary"> PDF</a>
<div class="table-responsive">
<table class=" table table-primary table-striped mt-4" >
    <thead>
        <th scope="col"> Id </th>
        <th scope="col"> Nombre del convenio</th>
        <th scope="col"> Anotaciones </th>
        <th scope="col"> Acciones </th>
    </thead>
    <tbody>
        @foreach ($tipoconvenios as $tipoconvenio)
          <tr>
            <td>{{$tipoconvenio->id}}</td>
            <td>{{$tipoconvenio->convenio}}</td>
            <td>{{$tipoconvenio->anotaciones}}</td>
            <td>
              <form action="{{route('tipoconvenio.destroy',$tipoconvenio->id)}}" method="POST">
                <a href="/tipoconvenio/{{$tipoconvenio->id}}/edit" class="btn btn-info">Editar</a>
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