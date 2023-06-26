<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Estudiante;



class Estudiantes extends Controller
{
    public function index(){
        $estudiantes = DB::table('estudiantes')->get();
        return view('estudiantes.estudiantes', ['estudiantes' => $estudiantes]);
    }

    public function form_registro(){
        return view('estudiantes.form_registro');
    }
    
    public function registrar(Request $request){
        $estudiantes = new Estudiante();
        $estudiantes->codestudiante = $request->input('codestudiante');
        $estudiantes->nomestudiante = $request->input('nomestudiante');
        dump($estudiantes->codestudiante);
        dump($estudiantes->nomestudiante);
      
    
        $estudiantes->save();
        return redirect()->route('listadoEstudiantes');
    }
    
    public function eliminar($id){
        // Busca el registro en la tabla con el respectivo codigo
        $estudiantes = Estudiante::findOrFail($id);
        $estudiantes->delete();
        return redirect()->route('listadoEstudiantes');
    }

    public function obtenerCodEstudiante()
        {
        $estudiante = Estudiante::find(1); 

        if ($estudiante) {
            $codestudiante = $estudiante->codestudiante;
        }
    }
}


