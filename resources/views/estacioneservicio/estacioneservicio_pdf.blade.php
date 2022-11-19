
<h1 class="text-black text center">Estaciones de servicio</h1>
<div class="table-responsive">
<table id="idServicios" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <th> Id </th>
        <th> Imagen</th>
        <th> Nombre </th>
        <th> Telefono </th>
        <th> CorreoElectrónico</th>
        <th> Municipio </th>
        <th> Dirección </th>
        <th> Apertura </th>
        <th> cierre </th>

    </thead>
    <tbody>
        @foreach ($estaciones as $estacion)
          <tr>
            <td>{{$estacion->id}}</td>
            <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$estacion->imagen}}" alt="" width="100" height="80px">
            </td>
            
            <td>{{$estacion->estacion_servicio}}</td>
            <td>{{$estacion->telefono}}</td>
            <td>{{$estacion->correo}}</td>
            <td>{{$estacion->mun_ubicado}}</td>
            <td>{{$estacion->direccion}}</td>
            <td>{{$estacion->apertura}}</td>
            <td>{{$estacion->cierre}}</td> 
        @endforeach
    </tbody>
 </table>
</div>
