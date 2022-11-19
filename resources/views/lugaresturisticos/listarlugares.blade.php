@extends('layouts.plantilla')

@section('contenido')


<h1 class="text-black text center">LUGARES TURÍSTICOS</h1>
<a href="{{route('lugaresturisticos.create')}}" class="btn btn-primary"> Crear nuevo</a>
<div class="table-responsive">
   <table id="idLugaresturiscos" class="table table-striped table-bordered" style="width:100%">
</div>
<br>
                <thead>
                    <th> Id </th>
                    <th> Imagen </th>
                    <th> Nombre   </th>
                    <th> Apertura </th>
                    <th> Cierre </th>
                    <th> Municipio </th>
                    <th> Direccion </th>
                    <th> Teléfono </th>
                    <th> Correo </th>
                    <th> Detalles</th>
                    <th> TipoLugar </th>
                    <td>Restaurante_id</td>
                    <td>Hotel_id</td>
                    <td>Ccomercial_id</td>
                    <td>Estacion_id</td>
                    <td>Autoridad_id</td>
                    <td>Puntosatencion_id</td>
                    <td>Rutas__turistica_id</td>
                    <td>Recomendado_id</td>
                    <td>Rutas__acceso_id</td>
                    <th> Acciones </th>
                </thead>
                <tbody>
                    @foreach ($lugars as $lugar)
                      <tr>
                        <td>{{$lugar->id}}</td>
                        <td>
                          <img src="{{'http://localhost/whitecity2/public/storage/image/'.$lugar->imagen}}" alt="" width="200">
                        </td>
                        <td>{{$lugar->lugar_turistico}}</td>
                        <td>{{$lugar->horario_apertura}}</td>
                        <td>{{$lugar->horario_cierre}}</td>
                        <td>{{$lugar->municipio}}</td>
                        <td>{{$lugar->direccion}}</td>
                        <td>{{$lugar->telefono}}</td>
                        <td>{{$lugar->correo_electronico}}</td> 
                        <td>{{$lugar->detalles}}</td>
                        <td>{{$lugar->tipo_lugar}}</td>
                        <td>{{$lugar->restaurante_id}}</td>
                        <td>{{$lugar->hotel_id}}</td>
                        <td>{{$lugar->ccomercial_id}}</td>
                        <td>{{$lugar->estacion_id}}</td>
                        <td>{{$lugar->autoridad_id}}</td>
                        <td>{{$lugar->puntosatencion_id}}</td>
                        <td>{{$lugar->rutas__turistica_id}}</td>
                        <td>{{$lugar->recomendado_id}}</td>
                        <td>{{$lugar->rutas__acceso_id}}</td>
                        <td>
              <form action="{{route('lugaresturisticos.destroy',$lugar->id)}}" method="POST">
                <a href="/lugaresturisticos/{{$lugar->id}}/edit" class="btn btn-info">Editar</a>
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