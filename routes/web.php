<?php

use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola-mundo', function () {
    return view('paginas/hola-mundo');
});

Route::get('/grabaciones/{nombre}/{anio?}/{cantidad?}', function ($nombre, $anio = null, $cantidad=20) {

    return view('paginas/grabaciones', compact('nombre', 'anio','cantidad'));

    /*return view('paginas/grabaciones')
    -> with([
        'nombre' => $nombre,
        'otra' => 'otra variable'
    ]); */
});


//Route::get('/tareas/pdf', [TareaController::class, 'pdf']);









Route::resource('/tareas',TareaController::class);  //Con esta sentencia se ejecutan todas las siguientes (Son para metodos del CRUD)
//Route::get('/tareas', [TareaController::class, 'index']);
//Route::get('/tareas/create', [TareaController::class, 'create'] );
// Route::post('/tareas/store', [TareaController::class, 'store']);
//show
//edit
//update
//delete
