
<h1 class="text-black text center">Restaurantes registrados</h1>

<div class="table-responsive">
<table id="idhoteles" class="table table-striped table-bordered" style="width:100%">
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
        <th> Categorizacion_id</th>
    </thead>
    <tbody>
        @foreach ($hoteles as $hotel)
        <td>{{$hotel->id}}</td>
           <tr>
            <td>{{$hotel->id}}</td>
            <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$hotel->imagen}}" alt="" width="100" height="80px">
            </td> 
            <td>{{$hotel->hotel}}</td>
            <td>{{$hotel->telefono}}</td>
            <td>{{$hotel->correo}}</td>
            <td>{{$hotel->mun_ubicado}}</td>
            <td>{{$hotel->direccion}}</td>
            <td>{{$hotel->apertura}}</td>
            <td>{{$hotel->cierre}}</td>
          </tr>  
        @endforeach
    </tbody>
 </table>
</div>
