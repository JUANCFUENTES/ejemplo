<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grabaciones</title>
</head>
<body>
    <h1>Grabaciones de {{ $nombre }} </h1>

    <h2>
        @if(isset($anio))
            Del año {{$anio}}

        @else
            De todos los tiempos
        @endif

    </h2>

    <ol>
        @for ($i = 0; $i < $cantidad; $i++)
        <li>Algun texto {{$i}}</li>
        @endfor

    </ol>

</body>
</html>
