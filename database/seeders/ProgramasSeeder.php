<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;

class ProgramasSeeder extends Seeder
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
                'codprograma'=> '10',
                'nomprograma'=> 'Ingenieria de sistemas',
                'facultad' => '22'
            ],
            [
                'codprograma'=> '11',
                'nomprograma'=> 'Ingenieria civil',
                'facultad' => '22'
            ],
            [
                'codprograma'=> '10',
                'nomprograma'=> 'Ingenieria Electronica',
                'facultad' => '22'
            ],
            [
                'codprograma'=> '13',
                'nomprograma'=> 'Educacion',
                'facultad' => '22'
            ],
            [
                'codprograma'=> '14',
                'nomprograma'=> 'Ciencias exactas y naturales',
                'facultad' => '22'
            ]
        ];

            DB::table('programas')->insert($datos1); 
    }
}

