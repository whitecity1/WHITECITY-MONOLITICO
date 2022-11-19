
<h1 class="text-black text center">Convenios realizados</h1>


<div class="table-responsive">
<table id="idConvenios" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <th> Id </th>
        <th> Fecha firma </th>
        <th> Fecha fin del convenio </th>
        <th> TipoConvenio_id </th>
        <th> Usuario_id </th>
        <th> Observaciones </th>
    </thead>
    <tbody>
        @foreach ($convenios as $convenio)
          <tr>
            <td>{{$convenio->id}}</td>
            <td>{{$convenio->fecha_firma}}</td>
            <td>{{$convenio->fecha_finalizacion}}</td>
            <td>{{$convenio->tipo__convenio_id}}</td>
            <td>{{$convenio->user_id}}</td>
            <td>{{$convenio->obsv}}</td>
          </tr>  
        @endforeach
    </tbody>
</table>
</div>
