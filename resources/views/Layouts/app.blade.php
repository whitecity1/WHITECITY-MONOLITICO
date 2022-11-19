<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Tailwind CSS Link -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhiteCity</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
  
 
  </head>
  <body>
    <head>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d3daf0;">
    <a href="/"><img src="{{asset('storage\image\white_city.png')}}" class="img-fluid"  width="145" height="145"></a>
        
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('fotografias.index')}}">Galería <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Lugares Turisticos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('lugaresturisticos.index')}}">Lugares Turisticos</a>
                <a class="dropdown-item" href="{{route('recomendados.index')}}">Lugares Recomendados</a>
                <a class="dropdown-item" href="{{route('rutasturisticas.index')}}">Rutas turisticas</a>
                <a class="dropdown-item" href="{{route('eventos.index')}}">Eventos</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Servicios 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('restaurantes.index')}}">Restaurantes</a>
                <a class="dropdown-item" href="{{route('hoteles.index')}}">Hoteles</a>
                <a class="dropdown-item" href="{{route('centroscomerciales.index')}}">Centros comerciales</a>
                <a class="dropdown-item" href="{{route('estacioneservicio.index')}}">Estaciones de servicio</a>
                <a class="dropdown-item" href="{{route('autoridades.index')}}">Autoridades</a>
                <a class="dropdown-item" href="{{route('puntosatencion.index')}}">Puntos de atención</a>
                <a class="dropdown-item" href="{{route('rutasacceso.index')}}">Rutas de acceso</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Quienes somos 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="quienesomos">Misión y Visión</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#"></a>
            </li>
          </ul>
          <form class="d-flex my-5 my-lg-0" role="search">
              <input class="form-control mr-sm-1" type="search" placeholder="Buscar" aria-label="Buscar">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
          </form>

              <ul class="w-1/3,5 px-12 ml-auto flex justify-end pt-1">
                @if (auth()->check())
                <img src="{{asset('https://png.pngtree.com/png-clipart/20190516/original/pngtree-users-vector-icon-png-image_3725294.jpg')}}" class="rounded-circle"  width="57px" height="100px">
                <li class="mx-2 pt-3">
                  <p class="text-xl"><b>{{auth()->user()->nombres}}</b></p>
                <li class="mx-2 pt-3">
                  <a href="{{route('login.destroy')}}" class="font-semibold hover:bg-white-700 py-3 px-1 rounded-md text-blue hover:text-red-700 ">Salir</a>
                </li>
                @else 
                <li class="mx-2">
                  <a href="{{route('login.index')}}" class="font-semibold hover:bg-white-700 py-3 px-4 rounded-md text-blue">Ingresar</a>
                </li>
                <li>
                  <a href="{{route('register.index')}}" class="font-semibold hover:bg-white-700 py-3 px-4 rounded-md text-blue">Registrate<a>
                </li>
                @endif
                </ul>
          </form>
        </div> 
      </nav>
  </head> 
</header>
@yield('content')


<br>
<!-- PIE DE PAGINA -->
<div class="container-fluid end"><!-- bg-light text-center p-3-->
  
  <div class="row p-5" style="background-color: #d3daf0;" >

     <div class="col-xs-12 col-md-6 col-lg-3"> 
     
         <img src="{{asset('storage\image\white_city.png')}}" class="img-fluid"  width="145" height="145">
         <p class="display-6"  ><a href="recomendados" style="color: rgb(12, 12, 75)"><em><strong>Descubre con nosotros tu próximo destino</a></strong></em></p>
     </div>

     <div class="col-xs-12 col-md-6 col-lg-3">
      <p class="h5 mb-2" style="color: rgb(12, 12, 75)">Quienes somos</p>
      <div>
      <p class="text-blue text-decoration-none" style="color: rgb(12, 12, 75)">Ayudamos  a redescubrir el turismo y las nuevas culturas</p>
    </div>
    <div class="row">
      <img src="{{asset('storage\image/3.png')}}" class="img-fluid"  width="15" height="10">
      <a class="text-blue text-decoration-none" href="">Misión</a>
     </div>
     <div class="row">
      <img src="{{asset('storage\image/2.png')}}" class="img-fluid"  width="15" height="10">
      <a class="text-blue text-decoration-none" href="">Visión</a>
     </div>
     <div>
      <a class="text-blue text-decoration-none" href=""><ins>¿Deseas apoyarnos?</ins></a>
     </div>
    </div>

     <div class="col-xs-12 col-md-6 col-lg-3">
      <p class="h5 mb-3" style="color: rgb(12, 12, 75)">Agéndate </p>
      <div class="mb-2">
        <a class="text-blue text-decoration-none" href="">Lugares turísticos</a>
        <div>
          <a class="text-blue text-decoration-none" href="">Eventos</a>
        </div>
       <div>
        <a class="text-blue text-decoration-none" href="">Servicios</a>
       </div>
       <div>
        <a class="text-blue text-decoration-none" href="{{route('notificaciones.create')}}">Notificaciones</a>
       </div>
       </div>
     </div>

     <div class="col-xs-12 col-md-6 col-lg-3">
      <p class="h5 mb-3" style="color: rgb(12, 12, 75)">Contáctanos</p>
    
      <div class="row">
        <img src="{{asset('storage\image\4.png')}}" class="img-fluid"  width="25" height="25">
        <a class="text-blue text-decoration-none" href="https://www.facebook.com/Appwc-103826602329200">Appwc</a>
       </div>
       <div class="row">
        <img src="{{asset('storage\image/1.png')}}" class="img-fluid"  width="25" height="25">
        <a class="text-blue text-decoration-none" href="https://api.whatsapp.com/send?phone=+573128602469&amp;text=Hola!&nbsp;Bienvenidos&nbsp;a&nbsp;WhiteCity">WhiteCity</a>
       </div>
       <div class="row">
        <img src="{{asset('storage\image/5.png')}}" class="img-fluid"  width="25" height="25">
        <a class="text-blue text-decoration-none" href="">wcturismo@gmail.com</a>
       </div>
       <p class="display-6" class="fw-normal" style="color: rgb(12, 12, 75)"><strong>Popayán-Cauca</strong></p>
    </div>

  </div> 
  <div>
    <p class="text-center">&copy;Todos los derechos reservados::WHITE CITY::Popayán, Cauca, Colombia</p>
  </div>
</div> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="crossOrigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>


  @yield('js')
  </body>
</html>
