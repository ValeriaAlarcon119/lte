<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class ProfesoresSeeder extends Seeder
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
                'codprofesor'=> '1003456780',
                'nomprofesor'=> 'Juan Castillo',
            ],
            [
                'codprofesor'=> '1003450780',
                'nomprofesor'=> 'Nelson Jaramillo',
            ],
            [
                'codprofesor'=> '1003458780',
                'nomprofesor'=> 'Luis Obeymar',
            ],
            [
                'codprofesor'=> '1003456280',
                'nomprofesor'=> 'Sandra Guerrero',
            ],
            [
                'codprofesor'=> '8003456780',
                'nomprofesor'=> 'Alexander Baron',
            ]
        ];

            DB::table('profesores')->insert($datos1); 
    }
}

