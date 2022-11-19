
   
<h1 class="text-black text center">Eventos registrados</h1>

<div class="table-responsive">
<table id="idServicios" class="table table-striped table-bordered" style="width:100%">
    <link rel="stylesheet" href="{{public_path('css/galeria.css')}}" type="text/css">

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
    </thead>
    <tbody>
        @foreach ($eventos as $event)
        <tr>
            <td>{{ $event->id }}</td>
            <td>
                <img src="{{ 'http://localhost/whitecity2/public/storage/image/' . $event->imagen }}" alt=""
                    width="100" height="80px">
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
        </tr>
    @endforeach
    </tbody>
 </table>
</div>

