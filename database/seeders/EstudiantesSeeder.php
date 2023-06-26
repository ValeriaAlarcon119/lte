<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class EstudiantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos1 = [
            [
                'codestudiante'=> '219034011',
                'nomestudiante'=> 'Valeria',
            ],
            [
                'codestudiante'=> '219034012',
                'nomestudiante'=> 'Vanesa',
            ],
            [
                'codestudiante'=> '219034013',
                'nomestudiante'=> 'Karen',
            ],
            [
                'codestudiante'=> '219034014',
                'nomestudiante'=> 'Daniel',
            ],
            [
                'codestudiante'=> '219034015',
                'nomestudiante'=> 'Felipe',
            ]
        ];

            DB::table('estudiantes')->insert($datos1); 
    }
}

