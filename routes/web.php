<?php

use Illuminate\Support\Facades\DB;
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

Route::get('/tareas', function () {
   $tareas = DB::table('tareas')->get();
    //dd($tareas);
    return view('tareas/indexTareas',compact('tareas'));
});


Route::get('/tareas/create', function () {

     return view('tareas/formTareas');
 });

