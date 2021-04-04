<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Matricula</th>
            <th>Correo</th>
            <th>Carrera</th>
            <th>Grupo</th>
            <th>Extraescolar</th>
            <th>Acciones</th>
        </tr>
    </thead>


    <tbody>
        @foreach($alumnos  as $alumno)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $alumno->Nombre}}</td>
            <td>{{ $alumno->ApellidoPaterno}}</td>
            <td>{{ $alumno->ApellidoMaterno}}</td>
            <td>{{ $alumno->Matricula}}</td>
            <td>{{ $alumno->Correo}}</td>
            <td>{{ $alumno->Carrera}}</td>
            <td>{{ $alumno->Grupo}}</td>
            <td>{{ $alumno->Extraescolar}}</td>
            <td>
            
            <a href="{{ url('alumnos/'.$alumno->id.'/edit') }}">
            Editar
            </a>    

            <form method="post" action="{{ url ('/alumnos/'.$alumno->id) }}">
            {{csrf_field() }}
            {{ method_field('DELETE' )}}
            <button type="submit" onclick="return confirm('¿Borrar Registro?');">Borrar</button>
            </form>    
            </td>
        </tr>
        @endforeach
    </tbody>
</table>