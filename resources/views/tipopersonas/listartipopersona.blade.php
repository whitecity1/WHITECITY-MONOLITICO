@extends('layouts.plantilla');

@section('contenido')

<h1 class="bg-primary text-white text center">TIPO PERSONAS</h1>

<a href="{{route('tipopersonas.create')}}" class="btn btn-primary"> Crear  nuevo tipo de usuarios</a>
<div class="table-responsive">
<table class=" table table-primary table-striped mt-4" >
</div>
    <thead>
        <th scope="col"> Id </th>
        <th scope="col"> Nombre</th>
        <th scope="col"> Acciones </th>
    </thead>
    <tbody>
        @foreach ($tipopers as $tipoper)
          <tr>
            <td>{{$tipoper->id}}</td>
            <td>{{$tipoper->nombre}}</td>
            <td>
              <form action="{{route('tipopersonas.destroy',$tipoper->id)}}" method="POST">
                <a href="/tipopersonas/{{$tipoper->id}}/edit" class="btn btn-info">Editar</a>
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