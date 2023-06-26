<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Programa;



class Programas extends Controller
{
    public function index(){
        $programas = DB::table('programas')->get();
        return view('programas.programas', ['programas' => $programas]);
    }

    public function form_registrop(){
        return view('programas.form_registrop');
    }
    
    public function registrar(Request $request){
        $programas = new Programa();
        $programas->codprograma = $request->input('codprograma');
        $programas->nomprograma = $request->input('nomprograma');
        $programas->facultad = $request->input('facultad');
        dump($programas->codprograma);
        dump($programas->nomprograma);
        dump($programas->facultad);
        $programas->save();
        return redirect()->route('listadoPrograma');
    }
    
    public function eliminar($id){
        $programas = Programa::findOrFail($id);
        $programas->delete();
        return redirect()->route('listadoPrograma');
    }
}


