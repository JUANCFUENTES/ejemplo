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

    <form action="/tareas" method="POST">
        @csrf
        <label for="tarea">Nombre de la Tarea:</label> <br>
        <input type="text" name="tarea" value="{{ old('tarea') }}"> <br>

        <!-- Validacion -->
        @error('tarea')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>
        <label for="descripcion">Descripcion</label> <br>
        <textarea name="descripcion" id="descripcion" cols="10" rows="5">
        {{ old('descripcion') }}
        </textarea> <br>

        <!-- Validacion -->
        @error('descripcion')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <br>
        <label for="categoria">Categoria</label> <br>
        <select name="tipo" id="tipo">
            <option value="Escuela">Escuela</option>
            <option value="Trabajo">Trabajo</option>
        </select>
        <br> <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
