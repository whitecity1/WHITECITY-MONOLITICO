
<h1 class="text-black text center">Centros comerciales registrados</h1>

<div class="table-responsive">
<table id="idcentroscomercialres" class="table table-striped table-bordered" style="width:100%">
    <link rel="stylesheet" href="{{public_path('css/galeria.css')}}" type="text/css">

    <thead>
        <th> Id </th>
        <th>Imagen</th>
        <th> Nombre </th>
        <th> Telefono </th>
        <th> CorreoElectrónico</th> 
        <th> Municipio </th>
        <th> Dirección </th>
        <th> Apertura </th>
        <th> cierre </th>
    </thead>
    <tbody>
        @foreach ($comercs as $comerc)
           <tr>
            <td>{{$comerc->id}}</td>
            <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$comerc->imagen}}" alt="" width="100" height="80px">
            </td> 
            <td>{{$comerc->centrocomercial}}</td>
            <td>{{$comerc->telefono}}</td>
            <td>{{$comerc->correo}}</td>
            <td>{{$comerc->municipio}}</td>
            <td>{{$comerc->direccion}}</td>
            <td>{{$comerc->apertura}}</td>
            <td>{{$comerc->cierre}}</td>
          </tr>  
        @endforeach
    </tbody>
 </table>
</div>
