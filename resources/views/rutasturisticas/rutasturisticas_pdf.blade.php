
<h1 class="text-black text center">Registro rutas turisticas</h1>

<table id="idRutasturisticas" class="table table-striped table-bordered" style="width:100%">
<br>
    <thead>
        <th scope="col"> Id </th>
        <th scope="col"> Imagen</th>
        <th scope="col"> Nombre ruta turística</th>
        <th> Descripcion</th>
        <th> Municipio ubicación </th>
        <th> Direccion</th>
        <th> Contactos</th>
        <th> Hora apertura </th>
        <th> Hora cierre </th>
        <th> Tipo ruta turística </th>
    </thead>
    <tbody>
        @foreach ($rutasturcs as $rutasturc)
          <tr>
            <td>{{$rutasturc->id}}</td>
            <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$rutasturc->imagen}}" alt="" width="100" height="80px">
            </td>
            <td>{{$rutasturc->ruta_turistica}}</td>
            <td>{{$rutasturc->descripcion}}</td>
            <td>{{$rutasturc->municipio_ubicada}}</td>
            <td>{{$rutasturc->direccion_ruta}}</td>
            <td>{{$rutasturc->contactos}}</td>
            <td>{{$rutasturc->h_apertura}}</td>
            <td>{{$rutasturc->h_cierre}}</td> 
            <td>{{$rutasturc->tipo_rutaTur}}</td>
          </tr>  
        @endforeach
    </tbody>
</table>
