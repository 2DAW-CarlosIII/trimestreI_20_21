<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiclosSeeder extends Seeder
{

    private $arrayCiclos = [
        array("grado" =>'FPB', "nombre" =>"Informática de Oficina"),
        array("grado" =>'FPB', "nombre" =>"Informática y Comunicaciones"),
        array("grado" =>'GM', "nombre" =>"Sistemas Microinformáticos y Redes"),
        array("grado" =>'GS', "nombre" =>"Administración de Sistemas Informáticos en Red"),
        array("grado" =>'GS', "nombre" =>"Desarrollo de Aplicaciones Multiplataforma"),
        array("grado" =>'GS', "nombre" =>"Desarrollo de Aplicaciones Web")
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->arrayCiclos as $ciclos) {
            DB::table('ciclos')->insert(array(
                'grado' => $ciclos['grado'],
                'nombre' => $ciclos['nombre']));
        }
    }
}
