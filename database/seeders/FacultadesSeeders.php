<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class FacultadaesSeeders extends Seeder
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
                'codfacultad'=> '10',
                'nomfacultad'=> 'Ingenieria',
            ],
            [
                'codfacultad'=> '11',
                'nomfacultad'=> 'Exactas',
            ],
            [
                'codfacultad'=> '12',
                'nomfacultad'=> 'Humanas',
            ],
            [
                'codfacultad'=> '13',
                'nomfacultad'=> 'Educacion',
            ],
            [
                'codfacultad'=> '14',
                'nomfacultad'=> 'Ciencias exactas y naturales',
            ]
        ];

            DB::table('facultades')->insert($datos); 
    }
}


