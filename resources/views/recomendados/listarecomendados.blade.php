@extends('layouts.plantilla')

@section('contenido')

<h1 class="text-black text center">LUGARES RECOMENDADOS</h1>
<a href="{{route('recomendados.create')}}" class="btn btn-primary"> Crear nuevo lugar recomendado</a>
<div class="table-responsive">
<table id="idServicios" class="table table-striped table-bordered" style="width:100%">
<br>
    <thead>
        <th> Id </th>
        <th> Imagen</th>
        <th> Lugar recomendado</th>
        <th> Calificaciones </th>
        <th> Resaña histórica</th>
        <th> Acciones </th>
    </thead>
    <tbody>
        @foreach ($recs as $rec)
          <tr>
            <td>{{$rec->id}}</td>
            <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$rec->imagen}}" alt="" width="200">
            </td>
            <td>{{$rec->lugar_recomendado}}</td>
            <td>{{$rec->calificaciones}}</td>
            <td>{{$rec->resenahistorica}}</td>
            <td>
              <form action="{{route('recomendados.destroy',$rec->id)}}" method="POST">
                <a href="/recomendados/{{$rec->id}}/edit" class="btn btn-info">Editar</a>
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