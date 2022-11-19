@extends('layouts.app')


@section('title', 'Users')
    
@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/2 border border-gray-200 rounded-lg shadow-lg">
    <div class="auto">
        <img src="https://cdn-icons-png.flaticon.com/128/3456/3456426.png" class="center-fliud">
    </div>
   
    <h1 class="text-3xl text-center pt-24 font-bold">EDITAR USUARIOS REGISTRADOS</h1>

    <form class="mt-4"  action="/users/{{$user->id}}" method="POST">
   
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Tipo Persona</label>
            <select class ="form-control" name="tipo_persona_id" >
    
                @foreach ($rol as $tipo_personas)
                  <option value="{{$tipo_personas->id}}">{{$tipo_personas->nombre}}</option> 
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Notificaciones</label>
            <select class ="form-control" name="notificacion_id" >
    
                @foreach ($notificacions as $notificacion)
                  <option value="{{$notificacion->id}}">{{$notificacion->nombre}}</option> 
                @endforeach
            </select>
        </div>
        Nombres:
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="nombres" name="nombres" value="{{$user->nombres}}">

        @error('nombres')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror
        Apellidos:
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="apellidos" name="apellidos" value="{{$user->apellidos}}">

        @error('apellidos')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror

        Documento:
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="documento" name="documento" value="{{$user->documento}}">

        @error('documento')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror

        Direccion:
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="direccion" name="direccion" value="{{$user->direccion}}">

        @error('direccion')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror

        Telefono:
        <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="telefono" name="telefono" value="{{$user->telefono}}">

        @error('telefono')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror

        Correo Electronico:
        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="email" name="email" value="{{$user->email}}">

        @error('email')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror
        Contraseña:
        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="password" name="password" value="{{$user->password}}">

        @error('password')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>    
        @enderror

        Confirmar Contraseña:
        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder=""
        id="password_confirmation" name="password_confirmation" value="{{$user->pasword_confirmation}}">

        <a href="/users" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit"class="btn btn-secondary" tabindex="6">Actualizar</button>
    </form>
</div>

@endsection