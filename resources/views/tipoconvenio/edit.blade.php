@extends('layouts.plantilla');

@section('contenido')

<h2>EDITAR TIPO CONVENIO</h2>

<form action="/tipoconvenio/{{$tipoconvenio->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label"> Nombre del convenio </label>
        <input id="convenio" name="convenio"type="text" class="form-control" tabindex="1" value="{{$tipoconvenio->convenio}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> MUnicipio de ubicación  </label>
        <input id="anotaciones" name="anotaciones" type="text" class="form-control" tabindex="2" value="{{$tipoconvenio->anotaciones}}">
    </div>
    <a href="/tipoconvenio" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit"class="btn btn-secondary" tabindex="6">Guardar</button>
</form>
@endsection