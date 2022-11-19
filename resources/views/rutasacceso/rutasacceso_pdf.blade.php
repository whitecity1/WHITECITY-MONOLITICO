
<h1 class="text-black text center">Rutas de acceso registradas</h1>


<table id="idRutasacceso" class="table table-striped table-bordered" style="width:100%">
</div>
<br>
    <thead>
        <th scope="col"> Id </th>
        <th scope="col"> Imagen</th>
        <th scope="col"> Empresa transporte</th>
        <th scope="col"> Municipio ubicación </th>
        <th scope="col"> Inicio atención</th> 
        <th scope="col"> Cierre atención</th>
        <th scope="col"> Dirección </th>
        <th scope="col"> Contacto </th>
        <th scope="col"> Correo electrónico </th>
        <th scope="col"> Tipo de ruta</th>
    </thead>
    <tbody>
        @foreach ($rutas as $ruta)
          <tr>
            <td>{{$ruta->id}}</td>
            <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$ruta->imagen}}" alt="" width="100"  height="80px">
            </td>
            <td>{{$ruta->empresa_transporte}}</td>
            <td>{{$ruta->mun_ubicacion}}</td>
            <td>{{$ruta->inicio_atencion}}</td>
            <td>{{$ruta->cierre_atencion}}</td>
            <td>{{$ruta->direccion_empresa}}</td>
            <td>{{$ruta->contacto}}</td> 
            <td>{{$ruta->correo_empresa}}</td>
            <td>{{$ruta->tipo_ruta}}</td>
        @endforeach
    </tbody>
</table>
</div>
