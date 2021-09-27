@extends('layout.plantilla')

@section('titulo','antropometicos')

@section('tituloDePagina','VISTAS')

@section('contenido')

    <p>Las vistas no son más que los archivos PHP desde donde tenemos que realizar la salida de la aplicación.
        Es un concepto que esperamos que ya se tenga en la cabeza cuando estamos introduciéndonos en Laravel, 
        puesto que no pertenece en si al framework PHP sino al MVC en general.</p>
    <p></p>
    <p>Las vistas son una de las capas que tiene el sistema MVC, que trata de la separación del código según sus responsabilidades. 
        En este caso, las vistas mantienen el código de lo que sería la capa de presentación.Como capa de presentación, las vistas
        se encargan de realizar la salida de la aplicación que generalmente en el caso de PHP será código HTML. Por tanto, una vista
        será un archivo PHP que contendrá mayoritariamente código HTML, que se enviará al navegador para que éste renderice la salida
        para el usuario.</p>
    <p></p>
    <p>En la siguiente carpeta es donde debemos colocar las vistas en Laravel.</p>
    <p></p>
    <p style="color: red">resources/views</p>
    <p></p>
    <p>Si navegas a esa carpeta observarás que dentro ya hay diversos archivos, incluso directorios. 
        Esto es porque las vistas se pueden organizar por carpetas, para mantener agrupadas las de 
        cada una de las secciones de la aplicación.</p>
@endsection