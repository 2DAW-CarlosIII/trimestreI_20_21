<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecialidadesSeeder extends Seeder
{
    private $arrayEspecialidades = ['Informática', 'Sistemas y Aplicaciones Informáticas'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->arrayEspecialidades as $especialidades) {
            DB::table('especialidades')->insert(array('nombre' => $especialidades));
        }
    }
}
