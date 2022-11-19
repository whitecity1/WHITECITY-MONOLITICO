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
    <h1>Centros comerciales</h1>

<body>
  <div class="row">
    @foreach ($comercs as $comerc)
    <div class="col-12 col-sm-6 col-md-4">

    <div class="card">
      <img src="{{'http://localhost/whitecity2/public/storage/image/'.$comerc->imagen}}">
      <h4 class="card-title">{{$comerc->centrocomercial}}</h4>
      <p class="card-title">Teléfono:{{$comerc->telefono}}</p>
      <p class="card-lang.text">Email: {{$comerc->correo}}</p>
      <p class="card-lang.text">Municipio: {{$comerc->municipio}}</p>
      <p class="card-lang.text">Dirección: {{$comerc->direccion}}</p>
      <p class="card-lang.text">Horarios: {{$comerc->apertura}} - {{$comerc->cierre}} </p>
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