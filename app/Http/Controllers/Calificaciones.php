<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Calificacion;

class Calificaciones extends Controller
{
    public function index(){
        $calificaciones = DB::table('calificaciones')->get();
        return view('calificaciones.calificaciones', ['calificaciones' => $calificaciones]);
    }

    public function form_registro(){
        return view('calificaciones.form_registro');
    }


    public function registrar(Request $request){
        $calificaciones = new Calificacion();
        $calificaciones->calificacion = $request->input('calificacion');
        $calificaciones->estudiante = $request->input('estudiante');
        $calificaciones->materia = $request->input('materia');
        dump($calificaciones->estudiante);
        dump($calificaciones->facultad);
        dump($calificaciones->materia);
        $calificaciones->save();
        return redirect()->route('listadoCalificaciones');
    }
    
    public function eliminar($id){
        $calificaciones = Calificacion::findOrFail($id);
        $calificaciones->delete();
        return redirect()->route('listadoCalificaciones');
    }
}
