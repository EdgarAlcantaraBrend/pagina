@extends('layout.plantilla')

@section('titulo','antropometicos')

@section('tituloDePagina','Rutas')

@section('contenido')

    <p>Las rutas en Laravel son el componente más importantes y poderoso del Framework, se encarga de manejar el flujo de solicitudes HTTP,
        desde y hacia el cliente; las peticiones realizadas por el navegador son en lo general get, post, put, delete, patch de HTTP hacia 
        una URL concreta.</p>
    <p></p>
    <p>Abrimos el archivo web.php que se encuentra en el directorio routes/. Importamos el controlador.</p>
    <p></p>
    <p style="color: red">use App\Http\Controllers\ControladorController;</p>
    <p></p>
    <p>En el archivo web.php creamos las rutas para poder registrar y guardar los datos de nuestro formulario.
        Creamos la ruta get para mostrar el listado de informacion, recibe dos parámetros, el primero hace referencia a la url del navegador,
        el segundo hace referencia a la clase ControladorController al método index.</p>
    <p></p>
    <p style="color: red">Route::get('/informacion', [ControladorController::class, 'index']);</p>
@endsection