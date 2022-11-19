@extends('layouts.app')


@section('title', ' Login')
    
@section('content')



<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg" >
    <h1 class="text-3xl text-center pt-24 font-bold">LOGIN</h1>
 
    <form class="mt-4" method="POST" action="">
        <link rel="stylesheet" href="{{'css/fondo.css'}}">
        @csrf
        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo electrónico"
        id="email" name="email">

        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña"
        id="password" name="password">
        @error('message')
        <p class="border border-red-500 rouded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>    
        @enderror
        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigno-600">Ingresar</button>
    </form>
</div>

@endsection
