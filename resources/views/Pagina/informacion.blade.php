@extends('layout.plantilla')

@section('titulo','antropometicos')

@section('tituloDePagina','Instalación de Laravel ')

@section('contenido')

    <p>Primero, debes contar con una plataforma de trabajo que tenga las herramientas básicas de Backend,
        tales como: Apache/Nginx, MySQL y PHP. Sin embargo, aunque puedes instalar los servidores de forma 
        independiente con el gestor de programas de tu sistema operativo, esto casi 
        siempre requiere de una gran inversión de tiempo ante los contratiempos que pueden surgir en la instalación, 
        por lo que se hace necesario contar con las plataformas de trabajo más automatizadas.</p>
    
    <br>

    <p>Para Laravel 8 sigue siendo indispensable la utilización de Composer como su manejador de dependencias,
        así que es necesario instalarlo antes de continuar.</p>
    
    <br>
    <p>Enseguida lo que debemos hacer es crear la carpeta en donde alojaremos nuestros proyectos laravel,
        por ejemplo en la carpeta principal crearemos una carpeta llamada proyectos. 
        Dentro de esta carpeta es donde guardaremos nuestros proyectos. Enseguida abrimos la terminal 
        de esa carpeta o de la ruta en la cual estamos localizados y descargamos Composer.</p>
        
    <br>
    <p>Puedes descargar el instalador de Laravel con Composer usando el siguiente comando:</p>
    <p></p>
    <p style="color:red">composer create-project  laravel/laravel nombreProyecto</p>
    <br>
    <p>¿QUÉ HACER LUEGO DE INSTALARLO?</p>
    <p></p>
    <p>Tienes que ingresar el siguiente comando en la terminal para poder acceder al sitio</p>
    <p></p>
    <p style="color: red">php artisan serve</p>

@endsection