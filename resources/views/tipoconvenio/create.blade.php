@extends('layouts.plantilla');

@section('contenido')

<h2>CREAR TIPO CONVENIO</h2>

<form action="/tipoconvenio" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label"> Nombre del convenio </label>
        <input id="convenio" name="convenio"type="text" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Anotaciones  </label>
        <input id="anotaciones" name="anotaciones" type="text" class="form-control" tabindex="2">
    </div>
    <a href="/tipoconvenio" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit"class="btn btn-secondary" tabindex="6">Guardar</button>
</form>
@endsection