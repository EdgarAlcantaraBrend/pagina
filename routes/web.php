<?php


use App\Http\Controllers\InicioController;
use App\Http\Controllers\PaginaController;
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

Route::get('/', InicioController::class);
Route::get('/inicio', [PaginaController::class, 'inicio']);
Route::get('/informacion',[PaginaController::class,'informacion']);
Route::get('/vistas',[PaginaController::class,'vistas']);
Route::get('/vistas2',[PaginaController::class,'vistas2']);
Route::get('/rutas',[PaginaController::class,'rutas']);
Route::get('/controladores',[PaginaController::class,'controladores']);
Route::get('/carpetas',[PaginaController::class,'carpetas']);