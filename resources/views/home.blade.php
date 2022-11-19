@extends('layouts.app')

@section('content')

@section('title','Home')

    <head>
        <title>Carrusel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="windth=devise-width,user-scalable=no,
         initial-scale=1,  maximum-scale=1, minimum-scale=1">
         <link rel="stylesheet" href="{{'css/app.css'}}">
     

    </head>
    <body>
        <div class="slider">
            <ul>
                <li><img src="storage\image\s3.png"  alt=""></li>
                <li><img src="storage\image\s1.png" alt=""></li>
                <li><img src="storage\image\s2.png" alt=""></li>
                <li><img src="storage\image\s1.png" alt=""></li>
            </ul>
        </div>

        <h1 class="display-5 text-center my-5">Lugares turisticos recomendados</h1>
        </div>

       
        <div class="container">
                <div class="row">
                  <div class="col-12 col-sm-6 col-md-4">
                 <div class="card mb-3"> 
                      <img src="{{asset('storage\lugares\caldas2.jpg')}}" class="card-img-top"width="200" height="190">
                      <div class="card-body">
                        <h5 class="card-title">Parque Caldas</h5>
                        <p class="card-text">El actual nombre lo recibe desde la inauguración de la estatua del sabio Francisco José de Caldas.</p>
                        <a href="/parquecaldas">Mas detalles</a>
                      </div>
                    </div>
                </div>
             <div class="col-12 col-sm-6 col-md-4">
              <div class="card mb-3">
                <img src="{{asset('storage\lugares\humilladero.jpg')}}" class="card-img-top"width="200" height="190">
                <div class="card-body">
                  <h5 class="card-title">Puente del Humilladero</h5>
                  <p class="card-text"> Es uno de los puntos claves para el fomento cultural, presentaciones musicales, obras de teatro.</p>
                  <a href="https://www.tripadvisor.co/Attraction_Review-g319824-d4135400-Reviews-Parque_Caldas-Popayan_Cauca_Department.html">Mas detalles</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
              <div class="card mb-3">
                <img src="{{asset('storage\lugares\silvia2.jpg')}}" class="card-img-top"width="200" height="190">
                <div class="card-body">
                  <h5 class="card-title">Silvia</h5>
                  <p class="card-text">Fundado a 3 km de donde se encuentra actualmente la cabecera municipal(Silvia), en un lugar llamado Las Tapias.</p>
                  <a href="https://www.tripadvisor.co/Attraction_Review-g319824-d4135400-Reviews-Parque_Caldas-Popayan_Cauca_Department.html">Mas detalles</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
              <div class="card mb-3">
                <img src="{{asset('storage\lugares\coconuco.jpg')}}" class="card-img-top"width="200" height="190">
                <div class="card-body">
                  <h5 class="card-title">Coconuco-Cauca</h5>
                  <p class="card-text">Coconuco(Puracé), ubicada a 30 km de Popayán. Se encuentra situado a 2850 m sobre el nivel del mar.</p>
                  <a href="https://www.tripadvisor.co/Attraction_Review-g319824-d4135400-Reviews-Parque_Caldas-Popayan_Cauca_Department.html">Mas detalles</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
              <div class="card mb-3">
                <img src="{{asset('storage\lugares\termales.jpg')}}" class="card-img-top"width="200" height="190">
                <div class="card-body">
                  <h5 class="card-title">Termales Aguas Hirviendo</h5>
                  <p class="card-text">Ubicadas a 30 km de la ciudad de Popayán, sobre la vía que conduce de la población de Coconuco hacia Paletará,</p>
                  <a href="https://www.tripadvisor.co/Attraction_Review-g319824-d4135400-Reviews-Parque_Caldas-Popayan_Cauca_Department.html">Mas detalles</a> </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
              <div class="card mb-3">
                <img src="{{asset('storage\lugares\purace.jpg')}}" class="card-img-top"width="200" height="190">
                <div class="card-body">
                  <h5 class="card-title">Volcan Natural-Puracé</h5>
                  <p class="card-text">Ubicado en la Cordillera Central, hace parte de la Cadena Volcánica de los Coconucos. </p>
                  <a href="https://www.tripadvisor.co/Attraction_Review-g319824-d4135400-Reviews-Parque_Caldas-Popayan_Cauca_Department.html">Mas detalles</a>
                </div>
              </div>
            </div>
        </div>
        </div> 
    </body>
</html>

<!DOCTYPE html>
        <html lang="es">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <title>Galería fotográfica </title>
          <link rel="stylesheet" href="{{'css/estilos.css'}}">
        </head>
        <body>
          <div class="galeria">
            <link rel="stylesheet" href="{{'css/estilos.css'}}"> 
            <h1>Galería fotográfica</h1>
            <div class="linea"></div>
            <div class="contenedor-imagenes">
              <div class="imagen">
                <img src="{{asset('storage\galeria\globos.jpg')}}" alt="" s="">
                <div class="overlay">
                  <a href="{{route('eventos.index')}}">Eventos </a>
                </div>
              </div>
              <div class="imagen">
                <img src="{{asset('storage\galeria\iglesias.jpeg')}}" alt="" s="">
                <div class="overlay">
                  <a href="{{route('recomendados.index')}}">Iglesias-Popayán</a>
                </div>
              </div>
              <div class="imagen">
                <img src="{{asset('storage\galeria\rutatur.jpg')}}" alt="" s="">
                <div class="overlay">
                  <a href="{{route('rutasturisticas.index')}}">Rutas turisticas</a>
                </div>
              </div>
              <div class="imagen">
                <img src="{{asset('storage\galeria\museoHnatural.jpg')}}" alt="" s="">
                <div class="overlay">
                  <a href="{{route('eventos.index')}}">Museos</a>
                </div>
              </div>
              <div class="imagen">
                <img src="{{asset('storage\galeria\parque-purace-cauca.jpg')}}" alt="" s="">
                <div class="overlay">
                  <a href="{{route('recomendados.index')}}">LUGARSE TURISTICOS CERCANOS Parque Nacional Natural-Puracé</a>
                </div>
              </div>
              <div class="imagen">
                <img src="{{asset('storage\galeria\carnavalpubenza.jpg')}}" alt="" s="">
                <div class="overlay">
                  <a href="{{route('recomendados.index')}}">Eventos PopayánCarnavales de Pubenza</a>
                </div>
              </div>
              <div class="imagen">
                <img src="{{asset('storage\galeria\lago-el-bolson-cajibio.jpg')}}" alt="" s="">
                <div class="overlay">
                  <a href="{{route('recomendados.index')}}">Cajibío</a>
                </div>
              </div>
              <div class="imagen">
                <img src="{{asset('storage\galeria\toboganes.jpg')}}" alt="" s="">
                <div class="overlay">
                  <a href="{{route('recomendados.index')}}">Purace</a>
                </div>
              </div>
              <div class="imagen">
                <img src="{{asset('storage\galeria\semanasanta.jpg')}}" alt="" s="">
                <div class="overlay">
                  <a href="{{route('recomendados.index')}}">Semana Santa</a>
                </div>
              </div>
              <div class="imagen">
                <img src="{{asset('storage\galeria\pomorrosos.jpg')}}" alt="" s="">
                <div class="overlay">
                  <a href="{{route('recomendados.index')}}">Cascada Pomorrosos-Tambo</a>
                </div>
              </div>
              <div class="imagen">
                <img src="{{asset('storage\galeria\timbio.jpg')}}" alt="" s="">
                <div class="overlay">
                  <a href="{{route('recomendados.index')}}">Cascada en Timbío</a>
                </div>
              </div>
              <div class="imagen">
                <img src="{{asset('storage\galeria\siloe-cascada.jpg')}}" alt="" s="">
                <div class="overlay">
                  <a href="{{route('recomendados.index')}}">Cascada Siloe-Timbío</a>
                </div>
              </div>
            </div>
          
        <!DOCTYPE html>
        <html lang="es">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <title>Video</title>
          <link rel="stylesheet" href="{{'css/video.css'}}">
         <link rel="preconnect" href="https://fonts.googleapis.com/css?family-Raleway:700,800,900&display=swap" rel="stylessheet">

        </head>
        <body>
    
          <div class="header">
          <h1>Bienvenidos a Popayán, la ciudad blanca de Colombia</h1>
         <video muted controls loop >
            <source src="{{asset('storage\videos\PopayánEsEncantadora.mp4')}}" type="video/mp4">
         </video>
        </body>
        </html>  
@endsection







