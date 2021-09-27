@extends('layout.plantilla')

@section('titulo','antropometicos')

@section('tituloDePagina','Información de carpetas en laravel')

@section('contenido')

    <p>Los archivos que tenemos sueltos en la carpeta raíz de Laravel son los siguientes (o al menos los más importantes)</p>
    <p></p>
    <ol>
        <li style="color: red">env:</li>
        <p>Es la definición de las variables de entorno. Podemos tener varios entornos donde vamos a mantener la ejecución de la aplicación con varias variables que tengan valores diferentes. Temas como si estamos trabajando con el debug activado, datos de conexión con la base de datos, servidores de envío de correo, caché, etc.</p>
        <li style="color: red">composer.json:</li>
        <p>Que contiene información para Composer. Además en la raíz hay una serie de archivos que tienen que ver con Git, el readme, o del lado frontend el package.json o incluso un gulpfile.js que no vendria muy al caso comentar aquí porque no son cosas específicas de Laravel.</p>
        <li style="color: red">Carpeta vendor</li>
        <p>Esta carpeta contiene una cantidad de librerías externas, creadas por diversos desarrolladores que son dependencias de Laravel.
            La carpeta vendor no la debemos tocar para nada, porque la gestiona Composer, que es nuestro gestor de dependencias.
            Si nosotros tuviésemos que usar una librería que no estuviera en la carpeta vendor la tendríamos que especificar en el archivo composer.json en el campo require. Luego hacer un "composer update" para que la nueva dependencia se instale.</p>
        <li style="color: red">Carpeta resources</li>
        <p>En Laravel han creado esta carpeta, englobando distintos tipos de recursos, que antes estaban dentro de la carpeta app. 
            En resumen, en esta carpeta se guardan assets, archivos de idioma (lang) y vistas.Dentro de views tienes las vistas que crearás 
            tú para el desarrollo de tu aplicación. En la instalación básica encontrarás una serie de subcarpetas con diversos tipos de vistas
            que durante el desarrollo podrias crear, vistas de emails, errores, de autenticación. Nosotros podremos crear nuevas subcarpetas 
            para organizar nuestras vistas.</p>
        <li style="color: red">Carpeta Public</li>
        <p>
            Es el denominado "document root" del servidor web. Es el único subdirectorio que estará accesible desde fuera mediante el servidor web. Dentro encontrarás ya varios archivos:
        </p>
        <ul>
            <li style="color: blue">.htaccess</li>
            <p>En el caso de Apache, este es el archivo que genera las URL amigables a buscadores.</p>
        </ul>
        <ul>
            <li style="color: blue">favicon.ico</li>
            <p>Es el icono de nuestra aplicación, que usará el navegador para el título de la página o al agregar la página a favoritos.</p>
        </ul>
        <ul>
            <li style="color: blue">index.php</li>
            <p>Este es un archivo muy importante, que hace de embudo por el cual pasan todas las solicitudes a archivos dentro del dominio donde se está usando Laravel. Estaría bien que abrieras ese index.php para observar lo que tiene dentro. Para el que conozca el patrón "controlador frontal" o "front controller" cabe decir que este index.php forma parte de él.</p>
        </ul>
        <ul>
            <li style="color: blue">robots.txt</li>
            <p>Que es algo que indica las cosas que puede y no puede hacer a la araña de Google y la de otros motores de búsqueda.</p>
        </ul>
        <p>En la carpeta public podrás crear todas las subcarpetas que necesites en tu sitio web para contener archivos con código Javascript, CSS, imágenes, etc.</p>
    </ol>
@endsection