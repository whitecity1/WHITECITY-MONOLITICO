<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <title>administracion</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">WHITE CITY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href=""></a>
            <a class="nav-link" href="/convenios">Convenios</a>
            <a class="nav-link" href="/listareventos">Eventos</a>
            <a class="nav-link" href="/listarfotografias">Fotografias</a>
            <a class="nav-link" href="/listarlugares">Lugares turisticos </a>
            <a class="nav-link" href="/listarecomendados">Lugares recomendados </a>
            <a class="nav-link" href="/listarutasturisticas">Rutas turísticas </a>
            <a class="nav-link" href="/notificaciones">Notificaciones </a>
            <a class="nav-link" href="/listarutasacceso">Rutas de acceso </a>
            <a class="nav-link" href="/listarcentroscomerciales">Centros comerciales </a>
            <a class="nav-link" href="/listarestaurantes">Restaurantes</a>
            <a class="nav-link" href="/listarhoteles">Hoteles</a>
            <a class="nav-link" href="/listarautoridades">Autoridades</a>
            <a class="nav-link" href="/listarpuntosatencion">Puntos de atención </a>
            <a class="nav-link" href="/listarestacioneservicio">Estaciones de servicio </a>
            <a class="nav-link" href="/users">Usuarios</a>
            <a href="{{ route('login.destroy') }}" class="nav-link">Salir</a>
          </div>
        </div>
      </div>
    </nav>
          <div class="container">
                @yield('contenido')
          </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>