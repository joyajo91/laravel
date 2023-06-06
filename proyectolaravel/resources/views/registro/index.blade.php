lista de registos.

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>email</th>
            <th>telefono</th>
            <th>programa</th>

        </tr>
    </thead>

    <tbody>
       @foreach ($registro as $registro)
           
        <tr>
            <td>{{$registro->Id}}</td>
            <td>{{$registro->Nombres}}</td>
            <td>{{$registro->Apellidos}}</td>
            <td>{{$registro->email}}</td>
            <td>{{$registro->telefono}}</td>
            <td>{{$registro->Programa}}</td>

            <td>
                <a href="{{url('/registro/'.$registro->Id.'/edit' ) }}">
                    Editar
                
                </a>
              

                <form action="{{url('/registro/'.$registro->Id ) }}"method="post">
                @csrf
                {{ method_field('DELETE') }}    
                    
                <input type="submit" onclick="return confirm('¿desea borrarlo?')"
                value="BORRAR" > 


                    
            </td>
        </tr>
       @endforeach

    </tbody>
</table>
