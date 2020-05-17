<?php

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

//function anonima
Route::get('/', function () {
    //return view('welcome');

    return "Hola mundo";
});

Route::get('home', function () {
    return "Este es el home";
});

//con un parametro
Route::get('users/{id}', function ($id) {
    return "Viendo usuario id ".$id;
});

//mas de un parametro con expresiones regulares
Route::get('users/{id}/{nombre}', function ($id, $nombre) {
    return "Usuario con id " . $id. " con nombre: ".$nombre;
})->where('nombre', '[a-zA-Z]+');
