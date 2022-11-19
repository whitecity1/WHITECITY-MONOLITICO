@extends('layouts.plantilla')

@section('contenido')

<h1 class="text-black text center">FOTOGRAFIAS</h1>

<a href="{{route('fotografias.create')}}" class="btn btn-primary"> Nueva fotografía</a>
<a href="{{route('fotografias-pdf')}}" class="btn btn-primary"> PDF</a>

<div class="table-responsive">
<table id="idFotografias" class="table table-striped table-bordered" style="width:100%">
</div>
<br>
    <thead>
        <th> Id </th>
        <th> Fotografía</th>
        <th> Nombres</th>
        <th> Descripción </th> 
        <th > Acciones </th>
    </thead>
    <tbody>
        @foreach ($fots as $fot)
          <tr>
            <td>{{$fot->id}}</td>
            <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$fot->imagen}}" alt="" width="200" >
            </td>
            <td>{{$fot->nombre}}</td>
            <td>{{$fot->descripcion}}</td>
            <td>
              <form action="{{route('fotografias.destroy',$fot  ->id)}}" method="POST">
                <a href="/fotografias/{{$fot->id}}/edit" class="btn btn-info">Editar</a>
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
