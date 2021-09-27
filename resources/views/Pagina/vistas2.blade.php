@extends('layout.plantilla')

@section('titulo','antropometicos')

@section('tituloDePagina','VISTAS CON BLADE ')

@section('contenido')

    <p>Laravel utiliza el motor de Blade. Es un motor robusto, con protección contra ataques XSS y que compila el código a PHP nativo.</p>
    <p></p>
    <p>Las vistas en Laravel están ubicadas en resources/views. Dentro de esa carpeta podemos ubicar las vistas directamente, o crear 
        subcarpetas para tener una mejor organización. Deben de tener la extensión .blade.php. Dentro de ellas defines el código HTML.</p>
    <p></p>
    <p>Para mandarlas a llamr simplemente el nombre de la vista, sin extensiones:</p>
    <p></p>
    <p style="color: red">view("nombre_de_la_vista")</p>
    <p></p>
    <p >Si organizas tus vistas en distintas carpetas, usa el punto para separar:</p>
    <p></p>
    <p style="color: red">view("usuarios.mostrar")</p>
    <p></p>
    <p>También puedes usar la barra:</p>
    <p></p>
    <p style="color: red">view("usuarios/mostrar")</p>

@endsection