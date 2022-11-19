
<h1 class="text-black text center">Registro autoridades</h1>

<table id="idautoridades" class="table table-striped table-bordered" style="width:100%">
    <link rel="stylesheet" href="{{public_path('css/galeria.css')}}" type="text/css">

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
        @foreach ($autoridades as $autoridad)
           <tr>
            <td>{{$autoridad->id}}</td>
            <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$autoridad->imagen}}" alt="" width="200">
            </td> 
            <td>{{$autoridad->nombre_entidad}}</td>
            <td>{{$autoridad->telefono}}</td>
            <td>{{$autoridad->correo}}</td>
            <td>{{$autoridad->mun_ubicado}}</td>
            <td>{{$autoridad->direccion}}</td>
            <td>{{$autoridad->apertura}}</td>
            <td>{{$autoridad->cierre}}</td>
          </tr>  
        @endforeach
    </tbody>
 </table>
</div>
