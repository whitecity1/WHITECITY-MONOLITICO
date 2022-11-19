
<h1 class="text-black text center">Restaurantes registrados</h1>

<div class="table-responsive">
<table id="idrestaurantes" class="table table-striped table-bordered" style="width:100%">
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
        @foreach ($restaurantes as $restaurante)
           <tr>
            <td>{{$restaurante->id}}</td>
            <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$restaurante->imagen}}" alt=""  width="130" height="100">
            </td> 
            <td>{{$restaurante->restaurante}}</td>
            <td>{{$restaurante->telefono}}</td>
            <td>{{$restaurante->correo}}</td>
            <td>{{$restaurante->mun_ubicado}}</td>
            <td>{{$restaurante->direccion}}</td>
            <td>{{$restaurante->apertura}}</td>
            <td>{{$restaurante->cierre}}</td>
          
          </tr>  
        @endforeach
    </tbody>
 </table>
</div>
