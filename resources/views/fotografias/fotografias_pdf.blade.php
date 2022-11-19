<h1>INFORMACION DE LA TABLA FOTOGRAFÍAS </h1>
<table >
</div>
<br>
    <thead>
        <th> Id </th>
        
        <th> Nombres</th>
        <th> Imagen</th>
        <th> Descripción </th> 
       
    </thead>
    <tbody>
        @foreach ($fots as $fot)
          <tr>
            <td>{{$fot->id}}</td>
             <td>
              <img src="{{'http://localhost/whitecity2/public/storage/image/'.$fot->imagen}}" alt="" width="130" height="100" height="80px">
             </td>  
            <td>{{$fot->nombre}}</td>
            <td>{{$fot->descripcion}}</td>
            <td>
          </tr>  
        @endforeach
    </tbody>
</table>

