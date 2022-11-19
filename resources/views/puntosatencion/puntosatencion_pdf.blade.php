
<h1 class="text-black text center">Registro puntos de atención</h1>

<div class="table-responsive">
<table id="idcentroscomercialres" class="table table-striped table-bordered" style="width:100%">
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
        @foreach ($puntos as $punto)
           <tr>
            <td>{{$punto->id}}</td>
            <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$punto->imagen}}" alt="" width="200">
            </td> 
            <td>{{$punto->nombre_puntoatencion}}</td>
            <td>{{$punto->telefono}}</td>
            <td>{{$punto->correo}}</td>
            <td>{{$punto->mun_ubicado}}</td>
            <td>{{$punto->direccion}}</td>
            <td>{{$punto->apertura}}</td>
            <td>{{$punto->cierre}}</td>
          </tr>  
        @endforeach
    </tbody>
 </table>
</div>
