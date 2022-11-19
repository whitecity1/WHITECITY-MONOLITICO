
{{-- @extends('layouts.plantilla')

@section('title','administador')
@section('contenido')

<h1>Hola desde Administración </h1>
<img src="https://www.traveler.es/viajes-urbanos/articulos/guia-de-viaje-que-hacer-que-ver-popayan-ciudad-blanca-de-colombia/13624" alt="">

@endsection --}}


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{'css/admin.css'}}">

    <title>administracion</title>
  </head>
  <body>
   <div class="d-flex">
     <div id="sidebar-container" class="bg-primary">
         <div class="logo">
               <h4 class="text-light font-weight-bold">WHITE CITY</h4>
         </div>
         <div class="menu">
           <a href="" class="d-block text-light   p-3 " ><i class="icon ion-md-apps mr-2 lead"></i> Agenda</a>
           <a href="/users" class="d-block text-light  p-3 " ><i class="icon ion-md-people mr-2 lead"></i> Usuarios</a>
           <a href="#" class="d-block text-light  p-3 " ><i class="icon ion-md-stats mr-2 lead"></i> Estadisticas</a>
           <a href="#" class="d-block text-light  p-3 " ><i class="icon ion-md-person mr-2 lead"></i> Perfil</a>
           <a href="#" class="d-block text-light  p-3 " ><i class="icon ion-md-settings mr-2 lead"></i> Configuración</a>
         </div>
     </div>
     <div class="w-100">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline position-relative my-2 d-inline-block">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
          <button class="btn btn-search position-absolute" type="submit"><i class="icon ion-md-search"></i></button>
        </form>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{asset('https://png.pngtree.com/png-clipart/20190516/original/pngtree-users-vector-icon-png-image_3725294.jpg')}}" class="img-fluid rounded-circle mr-2"  width="35px" height="40px" class="text-xl"><b>{{auth()->user()->nombres}}</b>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Mi perfil</a>
                <a class="dropdown-item" href="#">Suscripciones</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('login.destroy') }}">Salir</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      </nav>
      <div id="content">
        <section class="py-3">
          <div class="container">
            <div class="row">
              <div class="col-lg-9">
                <h3 class="font-weight-bold mb-0">Administración</h3>
                <p class="lead text-muted">Últimos movimientos</p>
              </div>
              <div class="col-lg-3 d-flex">
                 <button class="btn btn-primary w-100 align-self-center">Descargar firma convenio</button>
              </div>
            </div>
          </div>
        </section>
        <section class="bg-mix">
          <div class="container">
              <div class="card rounded-0">
                <div class="card-body">
                  <div class="row">
                      <div class="col-lg-3 d-flex" class="stat my-3">
                        <div class="mx-auto">
                          <h6 class="text-muted">Ingresos mensuales</h6>
                          <h3 class="font-weight-bold">$97.000</h3>
                          <h6 class="text-success"> <i class="icon ion-md-arrow-dropup-circle"></i>95.58%</h6>
                        </div>
                      </div>
                      <div class="col-lg-3 d-flex" class="stat my-3">
                        <div class="mx-auto">
                          <h6 class="text-muted">Ingresos activos</h6>
                          <h3 class="font-weight-bold">$50.000</h3>
                          <h6 class="text-success"> <i class="icon ion-md-arrow-dropup-circle"></i>50.58%</h6>
                        </div>
                      </div>
                      <div class="col-lg-3 d-flex" class="stat my-3">
                        <div class="mx-auto">
                          <h6 class="text-muted">Ingresos convenios</h6>
                          <h3 class="font-weight-bold">$27.000</h3>
                          <h6 class="text-success"> <i class="icon ion-md-arrow-dropup-circle"></i>35.00%</h6>
                        </div>
                      </div>
                      <div class="col-lg-3 d-flex"  class="stat my-3">
                        <div class="mx-auto">
                          <h6 class="text-muted">Ingresos publicidad</h6>
                          <h3 class="font-weight-bold">$20.000</h3>
                          <h6 class="text-success"> <i class="icon ion-md-arrow-dropup-circle"></i>10.00%</h6>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
          </div>
        </section>
        
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"
     integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI="></script>
  
     

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html> 