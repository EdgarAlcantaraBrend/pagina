<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{   
    public function inicio(){

        $vista = view('Pagina.inicio');

        return $vista;

    }
    public function informacion(){
        return view('Pagina.informacion');
    }
    public function vistas(){

        $vista = view('Pagina.vistas');

        return $vista;

    }
    public function vistas2(){

        $vista = view('Pagina.vistas2');

        return $vista;

    }
    public function rutas(){

        $vista = view('Pagina.rutas');

        return $vista;

    }
    public function controladores(){

        $vista = view('Pagina.controladores');

        return $vista;

    }
    public function carpetas(){

        $vista = view('Pagina.carpetas');

        return $vista;

    }
}
