<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Facultad;

class Facultades extends Controller
{
    public function index(){
        $facultades = DB::table('facultades')->get();
        return view('facultades.listado', ['facultades' => $facultades]);
    }

    public function form_registro(){
        return view('facultades.form_registro');
    }

    public function registrar(Request $request){
        $facultad = new Facultad();
        $facultad->codfacultad = $request->input('codfacultad');
        $facultad->nomfacultad = $request->input('nomfacultad');
        $facultad->save();
        return redirect()->route('listadoFacultades');
    }

    public function eliminar($id){
        // Busca el registro en la tabla con el respectivo codigo
        $facultad = Facultad::findOrFail($id);
        $facultad->delete();
        return redirect()->route('listadoFacultades');
    }
}
