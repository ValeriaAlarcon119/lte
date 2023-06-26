<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profesor;




class Profesores extends Controller
{
    public function index(){
        $profesores = DB::table('profesores')->get();
        return view('profesores.profesores', ['profesores' => $profesores]);
    }

    public function form_registro(){
        return view('profesores.form_registro');
    }
    
    public function registrar(Request $request){
        $profesores = new Profesor();
        $profesores->codprofesor = $request->input('codprofesor');
        $profesores->nomprofesor = $request->input('nomprofesor');

        dump($profesores->codprofesor);
        dump($profesores->nomprofesor);

        $profesores->save();
        return redirect()->route('listadoProfesores');
    }
    
    public function eliminar($id){
        // Busca el registro en la tabla con el respectivo codigo
        $profesores = Profesor::findOrFail($id);
        $profesores->delete();
        return redirect()->route('listadoProfesores');
    }
}


