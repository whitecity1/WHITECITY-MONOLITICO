@extends('layouts.plantilla')

@section('contenido')
    <h1 class="text-black text center">EVENTOS</h1>

    <a href="{{ route('eventos.create') }}" class="btn btn-primary"> Crear nuevo</a>
    <a href="{{ route('eventos_pdf') }}" class="btn btn-primary"> PDF</a>
    <div class="table-responsive">
        <table id="ideventos" class="table table-striped table-bordered" style="width:100%">
    </div>
    <br>
    <thead>
        <th> Id </th>
        <th> Fotografía</th>
        <th> Nombre del evento</th>
        <th> Municipio donde se realiza </th>
        <th> Dirección</th>
        <th> Horarios </th>
        <th> Fecha de inicio </th>
        <th> Fecha finalización </th>
        <th> Detalles del evento </th>
        <th> Tipo de evento </th>
        <th> Usuario_id</th>
        <th> Acciones </th>
    </thead>
    <tbody>
        @foreach ($events as $event)
            <tr>
                <td>{{ $event->id }}</td>
                <td>
                    <img src="{{ 'http://localhost/whitecity2/public/storage/image/' . $event->imagen }}" alt=""
                        width="200">
                </td>
                <td>{{ $event->evento }}</td>
                <td>{{ $event->municipio }}</td>
                <td>{{ $event->direccion }}</td>
                <td>{{ $event->horarios }}</td>
                <td>{{ $event->fecha_inicio }}</td>
                <td>{{ $event->fecha_fin }}</td>
                <td>{{ $event->descripcion }}</td>
                <td>{{ $event->tipo_evento }}</td>
                <td>{{ $event->user_id }}</td>
                <td>
                    <form action="{{ route('eventos.destroy', $event->id) }}" method="POST">
                        <a href="/eventos/{{ $event->id }}/edit" class="btn btn-info">Editar</a>
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
