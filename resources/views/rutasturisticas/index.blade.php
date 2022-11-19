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
    <h1>Rutas turísticas</h1>

<body>
  <div class="row">
    @foreach ($rutasturcs as $rutasturc)
    <div class="col-12 col-sm-6 col-md-4">

    <div class="card">
      <img src="{{'http://localhost/whitecity2/public/storage/image/'.$rutasturc->imagen}}">
      <h4 class="card-title">{{$rutasturc->ruta_turistica}}</h4>
      <p class="card-title">{{$rutasturc->descripcion}}</p>
      <p class="card-lang.text">{{$rutasturc->municipio_ubicada}}</p>
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