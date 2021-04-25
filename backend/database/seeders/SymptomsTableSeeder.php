<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SymptomsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('symptoms')->delete();
        
        \DB::table('symptoms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Febre',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Tosse seca',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Cansaço',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Dores e desconfortos',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Dor de garganta',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Diarreia',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Conjuntivite',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Dor de cabeça',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Perda de paladar ou olfato',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Erupção cutânea na pele ou descoloração dos dedos das mãos ou dos pés',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Dificuldade de respirar ou falta de ar',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Dour ou pressão no peito',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Perda de fala ou movimento',
            ),
        ));
        
        
    }
}