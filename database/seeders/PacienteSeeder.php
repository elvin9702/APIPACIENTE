<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PacienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            [
            'nombres' => 'Omar',
            'apellidos' => 'Vergara',
            'edad' => '17',
            'sexo' => 'masculino',
            'ci' => '7196580',
            'tipo_sangre' => 'OR+',
            'correo' => 'elvinvergara8@gmail.com',
            'telefono'=> '75821232',
            'direccion'=>'Calle Santa Cruz'
        ],
        [
            'nombres' => 'liliana',
            'apellidos' => 'Cardozo',
            'edad' => '27',
            'sexo' => 'Femenino',
            'ci' => '7548224',
            'tipo_sangre' => 'OR+',
            'correo' => 'lili890@gmail.com',
            'telefono'=> '76810456',
            'direccion'=>'calle sucre'
        ],
        [
            'nombres' => 'maria luz',
            'apellidos' => 'martinez ',
            'edad' => '20',
            'sexo' => 'femenino',
            'ci' => '10222382',
            'tipo_sangre' => 'AB-',
            'correo' => 'marilu123@gmail.com',
            'telefono'=> '71872945',
            'direccion'=>'Barrio Nuevo'
        ]
        ,
        [
            'nombres' => 'liliana',
            'apellidos' => 'Cardozo',
            'edad' => '27',
            'sexo' => 'Femenino',
            'ci' => '7548224',
            'tipo_sangre' => 'OR+',
            'correo' => 'lili890@gmail.com',
            'telefono'=> '76810456',
            'direccion'=>'calle sucre'
        ],
        [
            'nombres' => 'liliana',
            'apellidos' => 'Cardozo',
            'edad' => '27',
            'sexo' => 'Femenino',
            'ci' => '7548224',
            'tipo_sangre' => 'OR+',
            'correo' => 'lili890@gmail.com',
            'telefono'=> '76810456',
            'direccion'=>'calle sucre'
        ]
        ]);
    }
}
