<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 11,
                'name' => 'Rondônia',
                'initials' => 'RO',
                'country_id' => 76,
            ),
            1 => 
            array (
                'id' => 12,
                'name' => 'Acre',
                'initials' => 'AC',
                'country_id' => 76,
            ),
            2 => 
            array (
                'id' => 13,
                'name' => 'Amazonas',
                'initials' => 'AM',
                'country_id' => 76,
            ),
            3 => 
            array (
                'id' => 14,
                'name' => 'Roraima',
                'initials' => 'RR',
                'country_id' => 76,
            ),
            4 => 
            array (
                'id' => 15,
                'name' => 'Pará',
                'initials' => 'PA',
                'country_id' => 76,
            ),
            5 => 
            array (
                'id' => 16,
                'name' => 'Amapá',
                'initials' => 'AP',
                'country_id' => 76,
            ),
            6 => 
            array (
                'id' => 17,
                'name' => 'Tocantins',
                'initials' => 'TO',
                'country_id' => 76,
            ),
            7 => 
            array (
                'id' => 21,
                'name' => 'Maranhão',
                'initials' => 'MA',
                'country_id' => 76,
            ),
            8 => 
            array (
                'id' => 22,
                'name' => 'Piauí',
                'initials' => 'PI',
                'country_id' => 76,
            ),
            9 => 
            array (
                'id' => 23,
                'name' => 'Ceará',
                'initials' => 'CE',
                'country_id' => 76,
            ),
            10 => 
            array (
                'id' => 24,
                'name' => 'Rio Grande do Norte',
                'initials' => 'RN',
                'country_id' => 76,
            ),
            11 => 
            array (
                'id' => 25,
                'name' => 'Paraíba',
                'initials' => 'PB',
                'country_id' => 76,
            ),
            12 => 
            array (
                'id' => 26,
                'name' => 'Pernambuco',
                'initials' => 'PE',
                'country_id' => 76,
            ),
            13 => 
            array (
                'id' => 27,
                'name' => 'Alagoas',
                'initials' => 'AL',
                'country_id' => 76,
            ),
            14 => 
            array (
                'id' => 28,
                'name' => 'Sergipe',
                'initials' => 'SE',
                'country_id' => 76,
            ),
            15 => 
            array (
                'id' => 29,
                'name' => 'Bahia',
                'initials' => 'BA',
                'country_id' => 76,
            ),
            16 => 
            array (
                'id' => 31,
                'name' => 'Minas Gerais',
                'initials' => 'MG',
                'country_id' => 76,
            ),
            17 => 
            array (
                'id' => 32,
                'name' => 'Espírito Santo',
                'initials' => 'ES',
                'country_id' => 76,
            ),
            18 => 
            array (
                'id' => 33,
                'name' => 'Rio de Janeiro',
                'initials' => 'RJ',
                'country_id' => 76,
            ),
            19 => 
            array (
                'id' => 35,
                'name' => 'São Paulo',
                'initials' => 'SP',
                'country_id' => 76,
            ),
            20 => 
            array (
                'id' => 41,
                'name' => 'Paraná',
                'initials' => 'PR',
                'country_id' => 76,
            ),
            21 => 
            array (
                'id' => 42,
                'name' => 'Santa Catarina',
                'initials' => 'SC',
                'country_id' => 76,
            ),
            22 => 
            array (
                'id' => 43,
                'name' => 'Rio Grande do Sul',
                'initials' => 'RS',
                'country_id' => 76,
            ),
            23 => 
            array (
                'id' => 50,
                'name' => 'Mato Grosso do Sul',
                'initials' => 'MS',
                'country_id' => 76,
            ),
            24 => 
            array (
                'id' => 51,
                'name' => 'Mato Grosso',
                'initials' => 'MT',
                'country_id' => 76,
            ),
            25 => 
            array (
                'id' => 52,
                'name' => 'Goiás',
                'initials' => 'GO',
                'country_id' => 76,
            ),
            26 => 
            array (
                'id' => 53,
                'name' => 'Distrito Federal',
                'initials' => 'DF',
                'country_id' => 76,
            ),
        ));
        
        
    }
}