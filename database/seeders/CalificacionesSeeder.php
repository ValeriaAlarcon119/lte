<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class CalificacionesSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'calificacion'=> '50',
                'estudiante'=> 'Valeria',
                'materia'=> 'Calculo'
            ],
            [
                'calificacion'=> '20',
                'estudiante'=> 'Valeria',
                'materia'=> 'Fisica'
            ],
            [
                'calificacion'=> '38',
                'estudiante'=> 'Valeria',
                'materia'=> 'Programacion'
            ],
            
        ];

            DB::table('calificaciones')->insert($datos); 
    }
}


