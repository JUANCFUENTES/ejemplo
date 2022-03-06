<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tareas</title>
</head>
<body>
    <h1>Tareas</h1>

    <a href="/tareas/create">Crear Nueva Tarea</a> <br>

    <table>
        <br>
        <tr>
            <th>ID</th>
            <th>Tarea</th>
            <th>Descripcion</th>
            <th>Tipo</th>
            <th>Acciones</th>
        </tr>

    @foreach ($tareas as $tarea )
        <tr>
            <td>{{ $tarea->id }}</td>
            <td>{{ $tarea->tarea }}</td>
            <td>{{ $tarea->descripcion }}</td>
            <td>{{ $tarea->tipo }}</td>
            <td>
                <a href="tareas/{{ $tarea->id }}">Ver Detalle</a> <br>
                <a href="tareas/{{ $tarea->id }}/edit">Editar</a> <br>
                <form action="tareas/{{ $tarea->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Borrar">
                </form>
            </td>

        </tr>
    @endforeach



    </table>



</body>
</html>
