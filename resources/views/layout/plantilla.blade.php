<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
        <title>@yield('titulo')</title>
        <style>
            body {
                background: url('https://source.unsplash.com/twukN12EN7c/1920x1080') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                background-size: cover;
                -o-background-size: cover;
            }
        </style>
    </head>
    <body> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
            <div class="container">
                <a class="navbar-brand" href="/inicio">Manual de Laravel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/inicio">
                        
                                <span style="color: black">Inicio</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/informacion"><span class="fa-solid fa-house"></span>
                            <span class="fas fa-plug"></span>Instalacion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/vistas">
                            <span class="fas fa-vote-yea"></span>Vistas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/vistas2">
                            <span class="fas fa-eye"></span>Vistas con Blade</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/rutas">
                            <span class="fas fa-pencil-alt"></span>Rutas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/controladores">
                            <span class="fas fa-edit"></span>Controladores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/carpetas">
                            <span class="fas fa-trash-alt"></span>Información de carpetas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
        <div class="container" style="font-family: 'PT Serif', serif;">
            <div class="card border-0 shadow my-5">
                <div class="card-body p-5">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>@yield('tituloDePagina')</h2>
                            <p>
                            @yield('contenido')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
        -->
        
    </body>
</html>