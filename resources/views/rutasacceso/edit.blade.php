@extends('layouts.app')


@section('title', 'RutasdeAcceso')
    
@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/2 border border-gray-200 rounded-lg shadow-lg">
    <div class="auto">
        <img src="https://cdn-icons-png.flaticon.com/128/3456/3456426.png" class="center-fliud">
    </div>
   
    <h1 class="text-3xl text-center pt-24 font-bold">EDITAR RUTA DE ACCESO </h1>

    <form class="mt-4"  action="/rutasacceso/{{$ruta->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        Nombre empresa se transporte:
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="empresa_transporte" name="empresa_transporte" value="{{$ruta->empresa_transporte}}">

        @error('empresa_transporte')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror
        Municipio de ubicacion:
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="mun_ubicacion" name="mun_ubicacion" value="{{$ruta->mun_ubicacion}}">

        @error('mun_ubicacion')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror

       Apertura del servicio:
        <input type="time" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="inicio_atencion" name="inicio_atencion" value="{{$ruta->inicio_atencion}}">

        @error('inicio_atencion')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror

       Fin del servicio:
        <input type="time" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="cierre_atencion" name="cierre_atencion" value="{{$ruta->cierre_atencion}}">

        @error('cierre_atemcion')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror
      
      Dirección:
      <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
      id="direccion_empresa" name="direccion_empresa" value="{{$ruta->direccion_empresa}}">

      @error('direccion_empresa')
      <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
      @enderror

     Número de contacto:
      <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
      id="contacto" name="contacto" value="{{$ruta->contacto}}">

      @error('contacto')
      <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
      @enderror
      Correo electrónico:
      <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
      id="correo_empresa" name="correo_empresa" value="{{$ruta->correo_empresa}}">

      @error('correo_empresa')
      <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
      @enderror
     Tipo de ruta(servicio):
      <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
      id="tipo_ruta" name="tipo_ruta" value="{{$ruta->tipo_ruta}}">

      @error('tipo_ruta')
      <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
      @enderror
    
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
    <a href="/listarutasacceso" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit"class="btn btn-secondary" tabindex="6">Guardar</button>
</form>
</div>
@endsection