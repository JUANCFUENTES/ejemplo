<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarea</title>
</head>
<body>
    <h1>Informacion de Tarea</h1>


    <table>
        <tr>
            <th>ID</th>
            <th>Tarea</th>
            <th>Descripcion</th>
            <th>Tipo</th>
        </tr>

        <tr>
            <td>{{ $tarea->id }}</td>
            <td>{{ $tarea->tarea }}</td>
            <td>{{ $tarea->descripcion }}</td>
            <td>{{ $tarea->tipo }}</td>
        </tr>

    </table>



</body>
</html>
