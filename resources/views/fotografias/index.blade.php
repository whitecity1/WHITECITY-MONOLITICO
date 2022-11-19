@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>fotos</title>
  <link rel="stylesheet" href="css/galeria.css">
  </head>
  <form action="/listarfotografias" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
<div class="container">
  <h1>Vive en el tiempo a traves de fotografías</h1>
<body>
  <div class="row">
       @foreach ($fots as $fot)
      
       <div class="col-12 col-sm-6 col-md-4">
    
        <div class="card">
             <div class=" face front">
                <img src="{{'http://localhost/whitecity2/public/storage/image/'.$fot->imagen}}">
                <h5 class="card-title">{{$fot->nombre}}</h5> 
             </div>
             <div class=" face back">
                 <h5 class="card-title">{{$fot->nombre}}</h6>
                 <p class="card-lang-text">{{$fot->descripcion}}</p>
      
                  <div class="link">
                  <a href="#">Detalles</a>
                  </div>
              </div>
       </div>
      </div>
@endforeach
</div>
</div>
</body>
</html>
</div>

@endsection