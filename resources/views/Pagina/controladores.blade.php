@extends('layout.plantilla')

@section('titulo','antropometicos')

@section('tituloDePagina','Controladores')

@section('contenido')

    <p>Son un mecanismo que nos permite agrupar la lógica de peticiones HTTP relacionadas 
        y de esta forma organizar mejor nuestro código. En esta quinta lección del Curso de Laravel desde cero 
        aprenderemos a hacer uso de ellos y veremos además cómo las pruebas unitarias nos permiten verificar 
        los cambios que introducimos en nuestro código de forma fácil y rápida.</p>
    <p></p>
    <p>Generamos un nuevo controlador con el comando de Artisan make:controller pasándole el nombre que queremos darle. 
        En el ejemplo el nombre es UserController:</p>
    <p></p>
    <p style="color: red">php artisan make:controller UserController</p>
    <p></p>
    <p>Un controlador no es más que un archivo .php con una clase que extiende de la clase App\Http\Controllers\Controller. Por ejemplo:</p>
    <p></p>
    <p style="color: red">
        namespace App\Http\Controllers;
    </p>
    <p style="color: red">class UserController extends Controller {
        ...
        }
    </p>
    <p></p>
    <p>Dentro de esta clase agregamos nuestros métodos públicos (llamados acciones),
        que después podemos enlazar a una ruta:</p>
    <p></p>
    <textarea name="" id="" cols="20" rows="5" style="color: red">public function index()
        {
            return 'Usuarios';
        }</textarea>
    <p></p>
    <p>Para enlazar una ruta a un controlador pasamos como argumento el nombre del controlador y del método que queremos enlazar, 
        separados por un @. En este caso queremos enlazar la ruta /informacion al método index del controlador ControladorController:</p>
    <p></p>
    <p style="color: red">Route::get('/usuarios', 'ControladorController@index');</p>

@endsection