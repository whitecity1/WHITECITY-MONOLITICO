@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/cards.css">
</head>
 
  <div class="container">
    <h1>Rutas de acceso</h1>

<body>
  <div class="row">
    @foreach ($rutas as $ruta)
    <div class="col-12 col-sm-6 col-md-4">

    <div class="card">
      <img src="{{'http://localhost/whitecity2/public/storage/image/'.$ruta->imagen}}">
      <h4 >{{$ruta->empresa_transporte}}</h4>
      <p class="parrafo">Municipio: {{$ruta->mun_ubicacion}}</p>
      <p class="card-lang.text">Dirección: {{$ruta->direccion_empresa}}</p>
      <p class="card-lang.text">Teléfono: {{$ruta->contacto}}</p>
      <p class="card-lang.text">Email: {{$ruta->correo_empresa}}</p>
      <p class="card-lang.text">Servicio: {{$ruta->tipo_ruta}}</p>
      <a href="detalleslugares">Leer más </a>
  </div>
</div>
  @endforeach
 </div>
</div>
  </body>
</div>
</html>
</div>
</div>
@endsection 