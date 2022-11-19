@extends('layouts.app')


@section('title', 'create')
    
@section('content') 

{{-- <div>
    <div class="container">
        <h1 class="text text-center"> </h1>
        <div class="card text-bg-dark">
            <img src="{{asset('storage\image\somos.jpg')}}" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title text text-center" >¿Quiénes somos?</h5>
              <h1 class="card-title  p-3" >Misión</h1>
              
              <p class="card-text text text-left">White City da a conocer los  lugares mas emblematicos 
                  dentro del municipio de Popayan. 
                Con nosotros descubres nuevos lugares y vives mejores experiencias</p>
            
                <h1 class="card-title  p-3" >Visión</h1>
              <p3 class="card-text text text-left">Buscamos que nuevos lugares sean reconocidos y acompañarte en tu recorrido dentro de nuestro
              municipio, además te ayudamos a planificar tu agenda a las afueras de la ciudad, donde disfrutas 
              de culura, historia, deporte y la diversidad que nos ofrece el entorno natural</p>
              <p class="card-text text text-center p-5 ">Te contamos a cerca de nosotros ... Conócenos y descubre nuestro objetivo</p>
            </div>
            
              </div>
          </div>
</div>
</div> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quienes somos</title>
    <link rel="stylesheet" href="{{'css/quienesomos.css'}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
</div>
<div class="row">
   <div class="card">
   
    <div class="content">
      <span></span>
      <div class="img">
        <img src="{{asset('storage\image\somos.jpg')}}" alt="">
      </div>
      <h4>Nathalia Alvarado</h4>
      <h6>Software Engineer</h6>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
        Quas earum animi odio ipsam dolorem molestias iste
         atque eum corrupti libero?</p>
    </div>
    <div class="links">
      <a href=""><i class="fa-brands fa-facebook-f"></i></a>
      <a href=""><i class="fa-brands fa-square-instagram"></i></i></i></a>
      <a href=""><i class="fa-brands fa-github"></i></i></a>
      <a href=""><i class="fa-brands fa-square-whatsapp"></i></i></a>
    </div>
   </div>
   <div class="card">
    <div class="content">
      <span></span>
      <div class="img">
        <img src="{{asset('storage\image\somos.jpg')}}" alt="">
      </div>
      <h4>Tatiana Salamanca </h4>
      <h6>Software Engineer</h6>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
        Quas earum animi odio ipsam dolorem molestias iste
         atque eum corrupti libero?</p>
    </div>
    <div class="links">
      <a href=""><i class="fa-brands fa-facebook-f"></i></a>
      <a href=""><i class="fa-brands fa-square-instagram"></i></i></i></a>
      <a href=""><i class="fa-brands fa-github"></i></i></a>
      <a href=""><i class="fa-brands fa-square-whatsapp"></i></i></a>
    </div>
   </div>
  </div>
</div>
</body>
</html>


@endsection 
