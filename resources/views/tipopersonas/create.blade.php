@extends('layouts.plantilla');

@section('contenido')

<h2>CREAR TIPO PERSONAS</h2>

<form action="/tipopersonas" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label"> Tipo personas </label>
        <input id="" name="nombre"type="text" class="form-control" tabindex="1">
    </div>
    <a href="/tipopersonas" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit"class="btn btn-secondary" tabindex="6">Guardar</button>
</form>
@endsection