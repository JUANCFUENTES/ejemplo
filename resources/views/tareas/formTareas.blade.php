<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Agregar Tareas</h1>

   <!-- Validacion  -->
    @if ($errors->any())
             <div class="alert alert-danger">
                 <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
             </div>
    @endif

    @isset($tarea)
    <form action="/tareas/{{ $tarea->id }}" method="POST">  {{-- Editar --}}
        @method('PATCH')

        @else
        <form action="/tareas" method="POST">  {{-- Crear --}}
    @endisset

        @csrf
        <label for="tarea">Nombre de la Tarea:</label> <br>
        <input type="text" name="tarea" value="{{ isset($tarea) ? $tarea->tarea : old('tarea') }}"> <br>

        <!-- Validacion -->
        @error('tarea')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>
        <label for="descripcion">Descripcion</label> <br>
        <textarea name="descripcion" id="descripcion" cols="10" rows="5">
        {{ isset($tarea) ? $tarea->descripcion : old('descripcion') }}
        </textarea> <br>

        <!-- Validacion -->
        @error('descripcion')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>
        <label for="categoria">Categoria</label> <br>
        <select name="tipo" id="tipo">
            <option value="Escuela" {{ isset($tarea) && $tarea->tipo == 'Escuela' ? 'selected' :'' }}>Escuela</option>
            <option value="Trabajo" {{ isset($tarea) && $tarea->tipo == 'Trabajo' ? 'selected' :'' }}>Trabajo</option>
            <option value="Otra" {{ isset($tarea) && $tarea->tipo == 'Otra' ? 'selected' :'' }}>Otra</option>
        </select>
        <br> <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
