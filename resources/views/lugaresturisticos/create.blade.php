@extends('layouts.app')


@section('title', 'Users')
    
@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/2 border border-gray-200 rounded-lg shadow-lg">
    <div class="auto">
        <img src="https://cdn-icons-png.flaticon.com/128/3456/3456426.png" class="center-fliud">
    </div>
   
    <h1 class="text-3xl text-center pt-24 font-bold">CREAR NUEVO LUGAR</h1>

    <form class="mt-4"  action="/lugaresturisticos" method="POST" enctype="multipart/form-data">
   
        @csrf
        Nombre del lugar turístico:
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="lugar_turistico" name="lugar_turistico">
        @error('lugar_turistico')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror

        Horario atención:
        <input type="time" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="horario_apertura" name="horario_apertura">
        @error('horario_apertura')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror
        Horario cierre atención:
        <input type="time" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="horario cierre" name="horario_cierre">
        @error('horario_cierre')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror

        Municipio:
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="municipio" name="municipio">
        @error('municipio')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror

        Dirección:
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="direccion" name="direccion">
        @error('direccion')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror

        Telefono:
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="telefono" name="telefono">
        @error('horario_apertura')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror
        Correo  electrónico:
        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="correo_electronico" name="correo_electronico">
        @error('correo _electronico')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror

        Detalles:
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="detalles" name="detalles">
        @error('municipio')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror
        Tipo lugar turístico:
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="tipo_lugar" name="tipo_lugar">
        @error('tipo_lugar')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror
        
        <div class="form-group">
            <label for="">Hotel_id</label>
            <select class ="form-control" name="hotel_id" >
    
                @foreach ($hoteles as $hotel)
                  <option value="{{$hotel->id}}">{{$hotel->hotel}}</option> 
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Restaurante_id</label>
            <select class ="form-control" name="restaurante_id" >
    
                @foreach ($restaurantes as $restaurante)
                  <option value="{{$restaurante->id}}">{{$restaurante->restaurante}}</option> 
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for=""> Centro comercial</label>
            <select class ="form-control" name="ccomercial_id" >
    
                @foreach ($ccomerciales as $ccomercial)
                  <option value="{{$ccomercial->id}}">{{$ccomercial->centrocomercial}}</option> 
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for=""> Estación de servicio</label>
            <select class ="form-control" name="estacion_id" >
    
                @foreach ($estaciones as $estacion)
                  <option value="{{$estacion->id}}">{{$estacion->estacion_servicio}}</option> 
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for=""> Autoridades</label>
            <select class ="form-control" name="autoridad_id" >
    
                @foreach ($autoridades as $autoridad)
                  <option value="{{$autoridad->id}}">{{$autoridad->nombre_entidad}}</option> 
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for=""> Puntos atención</label>
            <select class ="form-control" name="puntosatencion_id" >
    
                @foreach ($puntosatencion as $puntoatencion)
                  <option value="{{$puntoatencion->id}}">{{$puntoatencion->nombre_puntoatencion}}</option> 
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for=""> Lugar recomendado</label>
            <select class ="form-control" name="recomendado_id" >
    
                @foreach ($recomendados as $recomendado)
                  <option value="{{$recomendado->id}}">{{$recomendado->lugar_recomendado}}</option> 
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for=""> Rutas de acceso</label>
            <select class ="form-control" name="rutas__acceso_id" >
    
                @foreach ($rutas as $ruta)
                  <option value="{{$ruta->id}}">{{$ruta->empresa_transporte}}</option> 
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for=""> Rutas turísticas</label>
            <select class ="form-control" name="rutas__turistica_id" >
    
                @foreach ($turisticas as $turistica)
                  <option value="{{$turistica->id}}">{{$turistica->ruta_turistica}}</option> 
                @endforeach
            </select>
        </div>
    
        <!--Para el recuadro de selección de la previsulaización-->
        <div class="grid grid-cols-1 mt-5 mx-7">
            <img id="imagenSeleccionada" style="max-height: 300px;">
        </div>

        <div class="grid grid-cols-1 mt-5 mx-7">
            <label class="uppercase md:text-sm text-xs text-dark text-light font-semibold mb-1">Agregar fotografía</label>
            <div class='flex items-center justify-center w-full'>
                <label
                    class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                    <div class='flex flex-col items-center justify-center pt-7'>
                        <svg class="w-10 h-10 text-purple-400 group-hover:text-dark" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                            </path>
                        </svg>
                        <p class='text-sm text-dark group-hover:text-purple-600 pt-1 tracking-wider'>Seleccione su fotografía</p>
                    </div>
                    <input name="imagen" id="imagen" type='file' class="hidden" />
                </label>
            </div>
        </div>
<!--Para que se mire la imagen antes de subirla-->
         <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
         <script>
         $(document).ready(function(e) {
         $('#imagen').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                $('#imagenSeleccionada').attr('src', e.target.result);
              }
             reader.readAsDataURL(this.files[0]);
          });
        });
        </script> 
        <a href="/listarlugares" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit"class="btn btn-secondary" tabindex="6">Guardar</button>
    </form>
</div>

@endsection
