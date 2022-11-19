@extends('layouts.plantilla')

@section('contenido')

<h1 class="text-black text center">Convenios</h1>

<a href="{{route('convenios.create')}}" class="btn btn-primary"> Crear nuevo</a>
<a href="{{route('convenios-pdf')}}" class="btn btn-primary"> PDF</a>
<div class="table-responsive">
<table id="idConvenios" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <th> Id </th>
      <th> Fecha firma </th>
      <th> Fecha fin del convenio </th>
      <th> TipoConvenio_id </th>
      <th> Usuario_id </th>
      <th> Observaciones </th>
      <th> Acciones </th>
    </thead>
    <tbody>
        @foreach ($convenios as $convenio)
          <tr>
            <td>{{$convenio->id}}</td>
            <td>{{$convenio->fecha_firma}}</td>
            <td>{{$convenio->fecha_finalizacion}}</td> 
            <td>{{$convenio->tipo__convenio_id}}</td>
            <td>{{$convenio->user_id}}</td>
            <td>{{$convenio->observaciones}}</td>
            <td>{{$convenio->obsv}}</td>
            <td>
              <form action="{{route('convenios.destroy',$convenio->id)}}" method="POST">
                <a href="/convenios/{{$convenio->id}}/edit" class="btn btn-info">Editar</a>
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