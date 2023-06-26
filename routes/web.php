<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\Programas;
use App\Http\Controllers\Profesores;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Calificaciones;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/facultades/listado', [Facultades::class, 'index'])->name('listadoFacultades');
Route::get('/facultades/no_existe_facultad', [Facultades::class, 'no_existe_facultad'])->name('noExisteFacultad');
Route::get('/facultades/existe_programa_facultad', [Facultades::class, 'existe_programa_facultad'])->name('existeProgramaFacultad');
Route::get('/facultades/registrar', [Facultades::class, 'form_registro']);
Route::post('/facultades/registrar', [Facultades::class, 'registrar']);
Route::get('/facultades/eliminar/{id}', [Facultades::class, 'eliminar'])->name('eliminarFacultad');

Route::get('/dashboard', [HomeController::class, 'index']);

Route::get('/programas/programas', [Programas::class, 'index'])->name('listadoPrograma');
Route::get('/programas/registrar', [Programas::class, 'form_registrop']);
Route::post('/programas/registrar', [Programas::class, 'registrar']);
Route::get('/programas/eliminar/{id}', [Programas::class, 'eliminar'])->name('eliminarPrograma');

Route::get('/estudiantes/estudiantes', [Estudiantes::class, 'index'])->name('listadoEstudiantes');
Route::get('/estudiantes/registrar', [Estudiantes::class, 'form_registro']);
Route::post('/estudiantes/registrar', [Estudiantes::class, 'registrar']);
Route::get('/estudiantes/eliminar/{id}', [Estudiantes::class, 'eliminar'])->name('eliminarEstudiantes');
Route::get('/profesores/profesores', [Profesores::class, 'index'])->name('listadoProfesores');
Route::get('/profesores/registrar', [Profesores::class, 'form_registro']);
Route::post('/profesores/registrar', [Profesores::class, 'registrar']);
Route::get('/profesores/eliminar/{id}', [Profesores::class, 'eliminar'])->name('eliminarProfesor');


Route::get('/calificaciones/calificaciones', [Calificaciones::class, 'index'])->name('listadoCalificaciones');
Route::get('/calificaciones/registrar', [Calificaciones::class, 'form_registro']);
Route::post('/calificaciones/registrar', [Calificaciones::class, 'registrar']);
Route::get('/calificaciones/eliminar/{id}', [Calificaciones::class, 'eliminar'])->name('eliminarCalificaciones');

Route::get('facultades/editar/{id}', [Facultades::class, 'editar'])->name('editarFacultad');


Route::put('facultades/actualizar/{id}', [Facultades::class, 'actualizar'])->name('actualizarFacultad');
