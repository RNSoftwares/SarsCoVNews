<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'Afeganistão',
                'initials' => '',
            ),
            1 => 
            array (
                'id' => 8,
                'name' => 'Albânia',
                'initials' => '',
            ),
            2 => 
            array (
                'id' => 12,
                'name' => 'Argélia',
                'initials' => '',
            ),
            3 => 
            array (
                'id' => 16,
                'name' => 'Samoa Americana',
                'initials' => '',
            ),
            4 => 
            array (
                'id' => 20,
                'name' => 'Andorra',
                'initials' => '',
            ),
            5 => 
            array (
                'id' => 24,
                'name' => 'Angola',
                'initials' => '',
            ),
            6 => 
            array (
                'id' => 28,
                'name' => 'Antígua e Barbuda',
                'initials' => '',
            ),
            7 => 
            array (
                'id' => 31,
                'name' => 'Azerbaijão',
                'initials' => '',
            ),
            8 => 
            array (
                'id' => 32,
                'name' => 'Argentina',
                'initials' => '',
            ),
            9 => 
            array (
                'id' => 36,
                'name' => 'Austrália',
                'initials' => '',
            ),
            10 => 
            array (
                'id' => 40,
                'name' => 'Áustria',
                'initials' => '',
            ),
            11 => 
            array (
                'id' => 44,
                'name' => 'Bahamas',
                'initials' => '',
            ),
            12 => 
            array (
                'id' => 48,
                'name' => 'Barein',
                'initials' => '',
            ),
            13 => 
            array (
                'id' => 50,
                'name' => 'Bangladesh',
                'initials' => '',
            ),
            14 => 
            array (
                'id' => 51,
                'name' => 'Armênia',
                'initials' => '',
            ),
            15 => 
            array (
                'id' => 52,
                'name' => 'Barbados',
                'initials' => '',
            ),
            16 => 
            array (
                'id' => 56,
                'name' => 'Bélgica',
                'initials' => '',
            ),
            17 => 
            array (
                'id' => 60,
                'name' => 'Bermuda',
                'initials' => '',
            ),
            18 => 
            array (
                'id' => 64,
                'name' => 'Butão',
                'initials' => '',
            ),
            19 => 
            array (
                'id' => 68,
                'name' => 'Bolívia',
                'initials' => '',
            ),
            20 => 
            array (
                'id' => 70,
                'name' => 'Bósnia e Herzegovina',
                'initials' => '',
            ),
            21 => 
            array (
                'id' => 72,
                'name' => 'Botswana',
                'initials' => '',
            ),
            22 => 
            array (
                'id' => 74,
                'name' => 'Ilha Bouvet',
                'initials' => '',
            ),
            23 => 
            array (
                'id' => 76,
                'name' => 'Brasil',
                'initials' => '',
            ),
            24 => 
            array (
                'id' => 84,
                'name' => 'Belize',
                'initials' => '',
            ),
            25 => 
            array (
                'id' => 86,
                'name' => 'Território Britânico do Oceano Índico',
                'initials' => '',
            ),
            26 => 
            array (
                'id' => 90,
                'name' => 'Ilhas Salomão',
                'initials' => '',
            ),
            27 => 
            array (
                'id' => 92,
                'name' => 'Ilhas Virgens Britânicas',
                'initials' => '',
            ),
            28 => 
            array (
                'id' => 96,
                'name' => 'Brunei',
                'initials' => '',
            ),
            29 => 
            array (
                'id' => 100,
                'name' => 'Bulgária',
                'initials' => '',
            ),
            30 => 
            array (
                'id' => 104,
                'name' => 'Mianmar',
                'initials' => '',
            ),
            31 => 
            array (
                'id' => 108,
                'name' => 'Burundi',
                'initials' => '',
            ),
            32 => 
            array (
                'id' => 112,
                'name' => 'Belarus',
                'initials' => '',
            ),
            33 => 
            array (
                'id' => 116,
                'name' => 'Camboja',
                'initials' => '',
            ),
            34 => 
            array (
                'id' => 120,
                'name' => 'Camarões',
                'initials' => '',
            ),
            35 => 
            array (
                'id' => 124,
                'name' => 'Canadá',
                'initials' => '',
            ),
            36 => 
            array (
                'id' => 132,
                'name' => 'Cabo Verde',
                'initials' => '',
            ),
            37 => 
            array (
                'id' => 136,
                'name' => 'Ilhas Cayman',
                'initials' => '',
            ),
            38 => 
            array (
                'id' => 140,
                'name' => 'República Centro Africana',
                'initials' => '',
            ),
            39 => 
            array (
                'id' => 144,
                'name' => 'Sri Lanka',
                'initials' => '',
            ),
            40 => 
            array (
                'id' => 148,
                'name' => 'Chade',
                'initials' => '',
            ),
            41 => 
            array (
                'id' => 152,
                'name' => 'Chile',
                'initials' => '',
            ),
            42 => 
            array (
                'id' => 156,
                'name' => 'China',
                'initials' => '',
            ),
            43 => 
            array (
                'id' => 162,
                'name' => 'Ilha Christmas',
                'initials' => '',
            ),
            44 => 
            array (
                'id' => 166,
            'name' => 'Ilhas Cocos (Keeling)',
                'initials' => '',
            ),
            45 => 
            array (
                'id' => 170,
                'name' => 'Colômbia',
                'initials' => '',
            ),
            46 => 
            array (
                'id' => 174,
                'name' => 'Comores',
                'initials' => '',
            ),
            47 => 
            array (
                'id' => 175,
                'name' => 'Mayotte',
                'initials' => '',
            ),
            48 => 
            array (
                'id' => 178,
                'name' => 'Congo',
                'initials' => '',
            ),
            49 => 
            array (
                'id' => 180,
                'name' => 'República Democrática do Congo',
                'initials' => '',
            ),
            50 => 
            array (
                'id' => 184,
                'name' => 'Ilhas Cook',
                'initials' => '',
            ),
            51 => 
            array (
                'id' => 188,
                'name' => 'Costa Rica',
                'initials' => '',
            ),
            52 => 
            array (
                'id' => 191,
                'name' => 'Croácia',
                'initials' => '',
            ),
            53 => 
            array (
                'id' => 192,
                'name' => 'Cuba',
                'initials' => '',
            ),
            54 => 
            array (
                'id' => 196,
                'name' => 'Chipre',
                'initials' => '',
            ),
            55 => 
            array (
                'id' => 203,
                'name' => 'República Tcheca',
                'initials' => '',
            ),
            56 => 
            array (
                'id' => 204,
                'name' => 'Benin',
                'initials' => '',
            ),
            57 => 
            array (
                'id' => 208,
                'name' => 'Dinamarca',
                'initials' => '',
            ),
            58 => 
            array (
                'id' => 212,
                'name' => 'Dominica',
                'initials' => '',
            ),
            59 => 
            array (
                'id' => 214,
                'name' => 'República Dominicana',
                'initials' => '',
            ),
            60 => 
            array (
                'id' => 218,
                'name' => 'Equador',
                'initials' => '',
            ),
            61 => 
            array (
                'id' => 222,
                'name' => 'El Salvador',
                'initials' => '',
            ),
            62 => 
            array (
                'id' => 226,
                'name' => 'Guiné Equatorial',
                'initials' => '',
            ),
            63 => 
            array (
                'id' => 231,
                'name' => 'Etiópia',
                'initials' => '',
            ),
            64 => 
            array (
                'id' => 232,
                'name' => 'Eritréia',
                'initials' => '',
            ),
            65 => 
            array (
                'id' => 233,
                'name' => 'Estônia',
                'initials' => '',
            ),
            66 => 
            array (
                'id' => 234,
                'name' => 'Ilhas Faeroe',
                'initials' => '',
            ),
            67 => 
            array (
                'id' => 238,
                'name' => 'Ilhas Malvinas',
                'initials' => '',
            ),
            68 => 
            array (
                'id' => 239,
                'name' => 'Ilhas Geórgia do Sul e Sandwich do Sul',
                'initials' => '',
            ),
            69 => 
            array (
                'id' => 242,
                'name' => 'Fiji',
                'initials' => '',
            ),
            70 => 
            array (
                'id' => 246,
                'name' => 'Finlândia',
                'initials' => '',
            ),
            71 => 
            array (
                'id' => 248,
                'name' => 'Ilhas Alanda',
                'initials' => '',
            ),
            72 => 
            array (
                'id' => 250,
                'name' => 'França',
                'initials' => '',
            ),
            73 => 
            array (
                'id' => 254,
                'name' => 'Guiana Francesa',
                'initials' => '',
            ),
            74 => 
            array (
                'id' => 258,
                'name' => 'Polinésia Francesa',
                'initials' => '',
            ),
            75 => 
            array (
                'id' => 260,
                'name' => 'Terras Austrais e Antárticas Francesas',
                'initials' => '',
            ),
            76 => 
            array (
                'id' => 262,
                'name' => 'Djibouti',
                'initials' => '',
            ),
            77 => 
            array (
                'id' => 266,
                'name' => 'Gabão',
                'initials' => '',
            ),
            78 => 
            array (
                'id' => 268,
                'name' => 'Geórgia',
                'initials' => '',
            ),
            79 => 
            array (
                'id' => 270,
                'name' => 'Gâmbia',
                'initials' => '',
            ),
            80 => 
            array (
                'id' => 275,
                'name' => 'Palestina',
                'initials' => '',
            ),
            81 => 
            array (
                'id' => 276,
                'name' => 'Alemanha',
                'initials' => '',
            ),
            82 => 
            array (
                'id' => 288,
                'name' => 'Gana',
                'initials' => '',
            ),
            83 => 
            array (
                'id' => 292,
                'name' => 'Gibraltar',
                'initials' => '',
            ),
            84 => 
            array (
                'id' => 296,
                'name' => 'Kiribati',
                'initials' => '',
            ),
            85 => 
            array (
                'id' => 300,
                'name' => 'Grécia',
                'initials' => '',
            ),
            86 => 
            array (
                'id' => 304,
                'name' => 'Groenlândia',
                'initials' => '',
            ),
            87 => 
            array (
                'id' => 308,
                'name' => 'Granada',
                'initials' => '',
            ),
            88 => 
            array (
                'id' => 312,
                'name' => 'Ilha Guadalupe',
                'initials' => '',
            ),
            89 => 
            array (
                'id' => 316,
                'name' => 'Guam',
                'initials' => '',
            ),
            90 => 
            array (
                'id' => 320,
                'name' => 'Guatemala',
                'initials' => '',
            ),
            91 => 
            array (
                'id' => 324,
                'name' => 'Guiné',
                'initials' => '',
            ),
            92 => 
            array (
                'id' => 328,
                'name' => 'Guiana',
                'initials' => '',
            ),
            93 => 
            array (
                'id' => 332,
                'name' => 'Haiti',
                'initials' => '',
            ),
            94 => 
            array (
                'id' => 334,
                'name' => 'Ilha Heard e Ilhas McDonald',
                'initials' => '',
            ),
            95 => 
            array (
                'id' => 336,
                'name' => 'Vaticano',
                'initials' => '',
            ),
            96 => 
            array (
                'id' => 340,
                'name' => 'Honduras',
                'initials' => '',
            ),
            97 => 
            array (
                'id' => 344,
                'name' => 'China, Hong Kong',
                'initials' => '',
            ),
            98 => 
            array (
                'id' => 348,
                'name' => 'Hungria',
                'initials' => '',
            ),
            99 => 
            array (
                'id' => 352,
                'name' => 'Islândia',
                'initials' => '',
            ),
            100 => 
            array (
                'id' => 356,
                'name' => 'Índia',
                'initials' => '',
            ),
            101 => 
            array (
                'id' => 360,
                'name' => 'Indonésia',
                'initials' => '',
            ),
            102 => 
            array (
                'id' => 364,
                'name' => 'Irã',
                'initials' => '',
            ),
            103 => 
            array (
                'id' => 368,
                'name' => 'Iraque',
                'initials' => '',
            ),
            104 => 
            array (
                'id' => 372,
                'name' => 'Irlanda',
                'initials' => '',
            ),
            105 => 
            array (
                'id' => 376,
                'name' => 'Israel',
                'initials' => '',
            ),
            106 => 
            array (
                'id' => 380,
                'name' => 'Itália',
                'initials' => '',
            ),
            107 => 
            array (
                'id' => 384,
                'name' => 'Costa do Marfim',
                'initials' => '',
            ),
            108 => 
            array (
                'id' => 388,
                'name' => 'Jamaica',
                'initials' => '',
            ),
            109 => 
            array (
                'id' => 392,
                'name' => 'Japão',
                'initials' => '',
            ),
            110 => 
            array (
                'id' => 398,
                'name' => 'Cazaquistão',
                'initials' => '',
            ),
            111 => 
            array (
                'id' => 400,
                'name' => 'Jordânia',
                'initials' => '',
            ),
            112 => 
            array (
                'id' => 404,
                'name' => 'Quênia',
                'initials' => '',
            ),
            113 => 
            array (
                'id' => 408,
                'name' => 'República Popular Democrática da Coréia',
                'initials' => '',
            ),
            114 => 
            array (
                'id' => 410,
                'name' => 'República da Coréia',
                'initials' => '',
            ),
            115 => 
            array (
                'id' => 414,
                'name' => 'Kuwait',
                'initials' => '',
            ),
            116 => 
            array (
                'id' => 417,
                'name' => 'Quirguistão',
                'initials' => '',
            ),
            117 => 
            array (
                'id' => 418,
                'name' => 'Laos',
                'initials' => '',
            ),
            118 => 
            array (
                'id' => 422,
                'name' => 'Líbano',
                'initials' => '',
            ),
            119 => 
            array (
                'id' => 426,
                'name' => 'Lesoto',
                'initials' => '',
            ),
            120 => 
            array (
                'id' => 428,
                'name' => 'Letônia',
                'initials' => '',
            ),
            121 => 
            array (
                'id' => 430,
                'name' => 'Libéria',
                'initials' => '',
            ),
            122 => 
            array (
                'id' => 434,
                'name' => 'Líbia',
                'initials' => '',
            ),
            123 => 
            array (
                'id' => 438,
                'name' => 'Liechtenstein',
                'initials' => '',
            ),
            124 => 
            array (
                'id' => 440,
                'name' => 'Lituânia',
                'initials' => '',
            ),
            125 => 
            array (
                'id' => 442,
                'name' => 'Luxemburgo',
                'initials' => '',
            ),
            126 => 
            array (
                'id' => 446,
                'name' => 'China, Macao',
                'initials' => '',
            ),
            127 => 
            array (
                'id' => 450,
                'name' => 'Madagáscar',
                'initials' => '',
            ),
            128 => 
            array (
                'id' => 454,
                'name' => 'Malauí',
                'initials' => '',
            ),
            129 => 
            array (
                'id' => 458,
                'name' => 'Malásia',
                'initials' => '',
            ),
            130 => 
            array (
                'id' => 462,
                'name' => 'Maldivas',
                'initials' => '',
            ),
            131 => 
            array (
                'id' => 466,
                'name' => 'Mali',
                'initials' => '',
            ),
            132 => 
            array (
                'id' => 470,
                'name' => 'Malta',
                'initials' => '',
            ),
            133 => 
            array (
                'id' => 474,
                'name' => 'Martinica',
                'initials' => '',
            ),
            134 => 
            array (
                'id' => 478,
                'name' => 'Mauritânia',
                'initials' => '',
            ),
            135 => 
            array (
                'id' => 480,
                'name' => 'Maurício',
                'initials' => '',
            ),
            136 => 
            array (
                'id' => 484,
                'name' => 'México',
                'initials' => '',
            ),
            137 => 
            array (
                'id' => 492,
                'name' => 'Mônaco',
                'initials' => '',
            ),
            138 => 
            array (
                'id' => 496,
                'name' => 'Mongólia',
                'initials' => '',
            ),
            139 => 
            array (
                'id' => 498,
                'name' => 'Moldávia',
                'initials' => '',
            ),
            140 => 
            array (
                'id' => 499,
                'name' => 'Montenegro',
                'initials' => '',
            ),
            141 => 
            array (
                'id' => 500,
                'name' => 'Montserrat',
                'initials' => '',
            ),
            142 => 
            array (
                'id' => 504,
                'name' => 'Marrocos',
                'initials' => '',
            ),
            143 => 
            array (
                'id' => 508,
                'name' => 'Moçambique',
                'initials' => '',
            ),
            144 => 
            array (
                'id' => 512,
                'name' => 'Omã',
                'initials' => '',
            ),
            145 => 
            array (
                'id' => 516,
                'name' => 'Namíbia',
                'initials' => '',
            ),
            146 => 
            array (
                'id' => 520,
                'name' => 'Nauru',
                'initials' => '',
            ),
            147 => 
            array (
                'id' => 524,
                'name' => 'Nepal',
                'initials' => '',
            ),
            148 => 
            array (
                'id' => 528,
                'name' => 'Holanda',
                'initials' => '',
            ),
            149 => 
            array (
                'id' => 531,
                'name' => 'Curaçao',
                'initials' => '',
            ),
            150 => 
            array (
                'id' => 533,
                'name' => 'Aruba',
                'initials' => '',
            ),
            151 => 
            array (
                'id' => 534,
            'name' => 'Saint Martin (parte holandesa)',
                'initials' => '',
            ),
            152 => 
            array (
                'id' => 535,
                'name' => 'Bonaire, Santo Eustáquio e Saba',
                'initials' => '',
            ),
            153 => 
            array (
                'id' => 540,
                'name' => 'Nova Caledônia',
                'initials' => '',
            ),
            154 => 
            array (
                'id' => 548,
                'name' => 'Vanuatu',
                'initials' => '',
            ),
            155 => 
            array (
                'id' => 554,
                'name' => 'Nova Zelândia',
                'initials' => '',
            ),
            156 => 
            array (
                'id' => 558,
                'name' => 'Nicarágua',
                'initials' => '',
            ),
            157 => 
            array (
                'id' => 562,
                'name' => 'Níger',
                'initials' => '',
            ),
            158 => 
            array (
                'id' => 566,
                'name' => 'Nigéria',
                'initials' => '',
            ),
            159 => 
            array (
                'id' => 570,
                'name' => 'Niue',
                'initials' => '',
            ),
            160 => 
            array (
                'id' => 574,
                'name' => 'Ilha Norfolk',
                'initials' => '',
            ),
            161 => 
            array (
                'id' => 578,
                'name' => 'Noruega',
                'initials' => '',
            ),
            162 => 
            array (
                'id' => 580,
                'name' => 'Ilhas Marianas',
                'initials' => '',
            ),
            163 => 
            array (
                'id' => 581,
                'name' => 'Ilhas Menores Distantes dos Estados Unidos',
                'initials' => '',
            ),
            164 => 
            array (
                'id' => 583,
                'name' => 'Micronésia',
                'initials' => '',
            ),
            165 => 
            array (
                'id' => 584,
                'name' => 'Ilhas Marshall',
                'initials' => '',
            ),
            166 => 
            array (
                'id' => 585,
                'name' => 'Palau',
                'initials' => '',
            ),
            167 => 
            array (
                'id' => 586,
                'name' => 'Paquistão',
                'initials' => '',
            ),
            168 => 
            array (
                'id' => 591,
                'name' => 'Panamá',
                'initials' => '',
            ),
            169 => 
            array (
                'id' => 598,
                'name' => 'Papua Nova Guiné',
                'initials' => '',
            ),
            170 => 
            array (
                'id' => 600,
                'name' => 'Paraguai',
                'initials' => '',
            ),
            171 => 
            array (
                'id' => 604,
                'name' => 'Peru',
                'initials' => '',
            ),
            172 => 
            array (
                'id' => 608,
                'name' => 'Filipinas',
                'initials' => '',
            ),
            173 => 
            array (
                'id' => 612,
                'name' => 'Pitcairn',
                'initials' => '',
            ),
            174 => 
            array (
                'id' => 616,
                'name' => 'Polônia',
                'initials' => '',
            ),
            175 => 
            array (
                'id' => 620,
                'name' => 'Portugal',
                'initials' => '',
            ),
            176 => 
            array (
                'id' => 624,
                'name' => 'Guiné-Bissau',
                'initials' => '',
            ),
            177 => 
            array (
                'id' => 626,
                'name' => 'Timor Leste',
                'initials' => '',
            ),
            178 => 
            array (
                'id' => 630,
                'name' => 'Porto Rico',
                'initials' => '',
            ),
            179 => 
            array (
                'id' => 634,
                'name' => 'Catar',
                'initials' => '',
            ),
            180 => 
            array (
                'id' => 638,
                'name' => 'Ilha Reunião',
                'initials' => '',
            ),
            181 => 
            array (
                'id' => 642,
                'name' => 'Romênia',
                'initials' => '',
            ),
            182 => 
            array (
                'id' => 643,
            'name' => 'Rússia (Federação Russa)',
                'initials' => '',
            ),
            183 => 
            array (
                'id' => 646,
                'name' => 'Ruanda',
                'initials' => '',
            ),
            184 => 
            array (
                'id' => 652,
                'name' => 'São Bartolomeu',
                'initials' => '',
            ),
            185 => 
            array (
                'id' => 654,
                'name' => 'Santa Helena',
                'initials' => '',
            ),
            186 => 
            array (
                'id' => 659,
                'name' => 'São Cristóvão e Nevis',
                'initials' => '',
            ),
            187 => 
            array (
                'id' => 660,
                'name' => 'Anguilla',
                'initials' => '',
            ),
            188 => 
            array (
                'id' => 662,
                'name' => 'Santa Lúcia',
                'initials' => '',
            ),
            189 => 
            array (
                'id' => 663,
            'name' => 'Saint Martin (parte francesa)',
                'initials' => '',
            ),
            190 => 
            array (
                'id' => 666,
                'name' => 'Saint Pierre e Miquelon',
                'initials' => '',
            ),
            191 => 
            array (
                'id' => 670,
                'name' => 'São Vicente e Granadinas',
                'initials' => '',
            ),
            192 => 
            array (
                'id' => 674,
                'name' => 'San Marino',
                'initials' => '',
            ),
            193 => 
            array (
                'id' => 678,
                'name' => 'São Tomé e Príncipe',
                'initials' => '',
            ),
            194 => 
            array (
                'id' => 680,
                'name' => 'Sark',
                'initials' => '',
            ),
            195 => 
            array (
                'id' => 682,
                'name' => 'Arábia Saudita',
                'initials' => '',
            ),
            196 => 
            array (
                'id' => 686,
                'name' => 'Senegal',
                'initials' => '',
            ),
            197 => 
            array (
                'id' => 688,
                'name' => 'Sérvia',
                'initials' => '',
            ),
            198 => 
            array (
                'id' => 690,
                'name' => 'Seichelles',
                'initials' => '',
            ),
            199 => 
            array (
                'id' => 694,
                'name' => 'Serra Leoa',
                'initials' => '',
            ),
            200 => 
            array (
                'id' => 702,
                'name' => 'Singapura',
                'initials' => '',
            ),
            201 => 
            array (
                'id' => 703,
                'name' => 'Eslováquia',
                'initials' => '',
            ),
            202 => 
            array (
                'id' => 704,
                'name' => 'Vietnã',
                'initials' => '',
            ),
            203 => 
            array (
                'id' => 705,
                'name' => 'Eslovênia',
                'initials' => '',
            ),
            204 => 
            array (
                'id' => 706,
                'name' => 'Somália',
                'initials' => '',
            ),
            205 => 
            array (
                'id' => 710,
                'name' => 'África do Sul',
                'initials' => '',
            ),
            206 => 
            array (
                'id' => 716,
                'name' => 'Zimbábue',
                'initials' => '',
            ),
            207 => 
            array (
                'id' => 724,
                'name' => 'Espanha',
                'initials' => '',
            ),
            208 => 
            array (
                'id' => 728,
                'name' => 'Sudão do Sul',
                'initials' => '',
            ),
            209 => 
            array (
                'id' => 729,
                'name' => 'Sudão',
                'initials' => '',
            ),
            210 => 
            array (
                'id' => 732,
                'name' => 'Saara Ocidental',
                'initials' => '',
            ),
            211 => 
            array (
                'id' => 740,
                'name' => 'Suriname',
                'initials' => '',
            ),
            212 => 
            array (
                'id' => 744,
                'name' => 'Svalbard e Jan Mayen Islands',
                'initials' => '',
            ),
            213 => 
            array (
                'id' => 748,
                'name' => 'Eswatini',
                'initials' => '',
            ),
            214 => 
            array (
                'id' => 752,
                'name' => 'Suécia',
                'initials' => '',
            ),
            215 => 
            array (
                'id' => 756,
                'name' => 'Suíça',
                'initials' => '',
            ),
            216 => 
            array (
                'id' => 760,
                'name' => 'Síria',
                'initials' => '',
            ),
            217 => 
            array (
                'id' => 762,
                'name' => 'Tadjiquistão',
                'initials' => '',
            ),
            218 => 
            array (
                'id' => 764,
                'name' => 'Tailândia',
                'initials' => '',
            ),
            219 => 
            array (
                'id' => 768,
                'name' => 'Togo',
                'initials' => '',
            ),
            220 => 
            array (
                'id' => 772,
                'name' => 'Tokelau',
                'initials' => '',
            ),
            221 => 
            array (
                'id' => 776,
                'name' => 'Tonga',
                'initials' => '',
            ),
            222 => 
            array (
                'id' => 780,
                'name' => 'Trinidad e Tobago',
                'initials' => '',
            ),
            223 => 
            array (
                'id' => 784,
                'name' => 'Emirados Árabes Unidos',
                'initials' => '',
            ),
            224 => 
            array (
                'id' => 788,
                'name' => 'Tunísia',
                'initials' => '',
            ),
            225 => 
            array (
                'id' => 792,
                'name' => 'Turquia',
                'initials' => '',
            ),
            226 => 
            array (
                'id' => 795,
                'name' => 'Turcomenistão',
                'initials' => '',
            ),
            227 => 
            array (
                'id' => 796,
                'name' => 'Ilhas Turks e Caicos',
                'initials' => '',
            ),
            228 => 
            array (
                'id' => 798,
                'name' => 'Tuvalu',
                'initials' => '',
            ),
            229 => 
            array (
                'id' => 800,
                'name' => 'Uganda',
                'initials' => '',
            ),
            230 => 
            array (
                'id' => 804,
                'name' => 'Ucrânia',
                'initials' => '',
            ),
            231 => 
            array (
                'id' => 807,
                'name' => 'Macedônia',
                'initials' => '',
            ),
            232 => 
            array (
                'id' => 818,
                'name' => 'Egito',
                'initials' => '',
            ),
            233 => 
            array (
                'id' => 826,
                'name' => 'Reino Unido',
                'initials' => '',
            ),
            234 => 
            array (
                'id' => 831,
                'name' => 'Guernsey',
                'initials' => '',
            ),
            235 => 
            array (
                'id' => 832,
                'name' => 'Jersey',
                'initials' => '',
            ),
            236 => 
            array (
                'id' => 833,
                'name' => 'Ilha de Man',
                'initials' => '',
            ),
            237 => 
            array (
                'id' => 834,
                'name' => 'Tanzânia',
                'initials' => '',
            ),
            238 => 
            array (
                'id' => 840,
                'name' => 'Estados Unidos da América',
                'initials' => '',
            ),
            239 => 
            array (
                'id' => 850,
                'name' => 'Ilhas Virgens',
                'initials' => '',
            ),
            240 => 
            array (
                'id' => 854,
                'name' => 'Burkina Faso',
                'initials' => '',
            ),
            241 => 
            array (
                'id' => 858,
                'name' => 'Uruguai',
                'initials' => '',
            ),
            242 => 
            array (
                'id' => 860,
                'name' => 'Uzbequistão',
                'initials' => '',
            ),
            243 => 
            array (
                'id' => 862,
                'name' => 'Venezuela',
                'initials' => '',
            ),
            244 => 
            array (
                'id' => 876,
                'name' => 'Ilhas Wallis e Futuna',
                'initials' => '',
            ),
            245 => 
            array (
                'id' => 882,
                'name' => 'Samoa',
                'initials' => '',
            ),
            246 => 
            array (
                'id' => 887,
                'name' => 'Iêmen',
                'initials' => '',
            ),
            247 => 
            array (
                'id' => 894,
                'name' => 'Zâmbia',
                'initials' => '',
            ),
        ));
        
        
    }
}