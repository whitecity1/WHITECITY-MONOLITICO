

<h1 class="bg-primary text-white text center">Listado usuarios registrados</h1>

<table class=" table table-primary table-striped mt-4" >
    <thead>
        <th scope="col"> Id </th>
        <th scope="col"> Nombres </th>
        <th scope="col"> Apellidos </th>
        <th scope="col"> Documento </th>
        <th scope="col"> Direccion </th>
        <th scope="col"> Telefono </th>
        <th scope="col"> Email </th>
        <th scope="col"> Password </th>
        <th scope="col"> Tipo_persona_id </th>
        <th scope="col"> Notificacion_id </th>
    </thead>
    <tbody>
        @foreach ($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->nombres}}</td>
            <td>{{$user->apellidos}}</td>
            <td>{{$user->documento}}</td>
            <td>{{$user->direccion}}</td>
            <td>{{$user->telefono}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->tipo_persona_id}}</td>
            <td>{{$user->notificacion_id}}</td> 
            <td>
          </tr>  
        @endforeach
    </tbody>
</table>
