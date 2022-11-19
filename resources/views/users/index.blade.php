@extends('layouts.plantilla')

@section('contenido')

<h1 class=" text-black text center">Usuarios registrados</h1>
<a href="{{route('users.create')}}" class="btn btn-primary"> Crear </a>
<a href="{{route('users-pdf')}}" class="btn btn-primary"> PDF </a>
<div class="table-responsive">
<table id="idUser" class="table table-striped table-bordered table-hover" style="width:100%">
<br>
    <thead>
        <th> Id </th>
        <th> Nombres </th>
        <th> Apellidos </th>
        <th> Email </th>
        <th> Password </th>
        <th> User_id </th>
        <th> Acciones </th>
    </thead>
    <tbody>
        @foreach ($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->nombres}}</td>
            <td>{{$user->apellidos}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->tipo_persona_id}}</td>
            <td>
            <div div class="flex justify-center rounded-lg text-lg" role="group">
                <a href="/users/{{$user->id}}/edit" class="btn btn-info" >Editar</a>
                <form action="{{route('users.destroy',$user->id)}}" method="POST">
                @csrf
                @method('DELETE')
                 <button type="submit" class="btn btn-danger">Eliminar</button>
              </form>
            </div>
            </td>
          </tr>  
        @endforeach
    </tbody>
</table>
</div>
@endsection