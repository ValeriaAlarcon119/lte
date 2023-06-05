<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class FacultadesSeeders extends Seeder
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
                'codFacultad'=> '10',
                'nomFacultad'=> 'Artes',
            ],
            [
                'codFacultad'=> '11',
                'nomFacultad'=> 'Ingenieria',
            ],
            [
                'codFacultad'=> '12',
                'nomFacultad'=> 'Derecho',
            ],
            [
                'codFacultad'=> '13',
                'nomFacultad'=> 'Educacion',
            ],
            [
                'codFacultad'=> '14',
                'nomFacultad'=> 'Ciencias exactas y naturales',
            ]
        ];

            DB::table('facultades')->insert($datos); 
    }
}
