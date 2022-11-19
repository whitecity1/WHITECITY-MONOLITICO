@extends('layouts.plantilla');

@section('contenido')

<h2>EDITAR TIPO PERSONAS</h2>

<form action="/tipopersonas/{{$tipoper->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label"> Tipo persona </label>
        <input id="" name="nombre"type="text" class="form-control" tabindex="1" value="{{$tipoper->nombre}}">
    </div>
    <a href="/tipopersonas" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit"class="btn btn-secondary" tabindex="6">Guardar</button>
</form>
@endsection