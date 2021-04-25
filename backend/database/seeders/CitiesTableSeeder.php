<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1100015,
                'name' => 'Alta Floresta D\'Oeste',
                'state_id' => 11,
            ),
            1 => 
            array (
                'id' => 1100023,
                'name' => 'Ariquemes',
                'state_id' => 11,
            ),
            2 => 
            array (
                'id' => 1100031,
                'name' => 'Cabixi',
                'state_id' => 11,
            ),
            3 => 
            array (
                'id' => 1100049,
                'name' => 'Cacoal',
                'state_id' => 11,
            ),
            4 => 
            array (
                'id' => 1100056,
                'name' => 'Cerejeiras',
                'state_id' => 11,
            ),
            5 => 
            array (
                'id' => 1100064,
                'name' => 'Colorado do Oeste',
                'state_id' => 11,
            ),
            6 => 
            array (
                'id' => 1100072,
                'name' => 'Corumbiara',
                'state_id' => 11,
            ),
            7 => 
            array (
                'id' => 1100080,
                'name' => 'Costa Marques',
                'state_id' => 11,
            ),
            8 => 
            array (
                'id' => 1100098,
                'name' => 'Espigão D\'Oeste',
                'state_id' => 11,
            ),
            9 => 
            array (
                'id' => 1100106,
                'name' => 'Guajará-Mirim',
                'state_id' => 11,
            ),
            10 => 
            array (
                'id' => 1100114,
                'name' => 'Jaru',
                'state_id' => 11,
            ),
            11 => 
            array (
                'id' => 1100122,
                'name' => 'Ji-Paraná',
                'state_id' => 11,
            ),
            12 => 
            array (
                'id' => 1100130,
                'name' => 'Machadinho D\'Oeste',
                'state_id' => 11,
            ),
            13 => 
            array (
                'id' => 1100148,
                'name' => 'Nova Brasilândia D\'Oeste',
                'state_id' => 11,
            ),
            14 => 
            array (
                'id' => 1100155,
                'name' => 'Ouro Preto do Oeste',
                'state_id' => 11,
            ),
            15 => 
            array (
                'id' => 1100189,
                'name' => 'Pimenta Bueno',
                'state_id' => 11,
            ),
            16 => 
            array (
                'id' => 1100205,
                'name' => 'Porto Velho',
                'state_id' => 11,
            ),
            17 => 
            array (
                'id' => 1100254,
                'name' => 'Presidente Médici',
                'state_id' => 11,
            ),
            18 => 
            array (
                'id' => 1100262,
                'name' => 'Rio Crespo',
                'state_id' => 11,
            ),
            19 => 
            array (
                'id' => 1100288,
                'name' => 'Rolim de Moura',
                'state_id' => 11,
            ),
            20 => 
            array (
                'id' => 1100296,
                'name' => 'Santa Luzia D\'Oeste',
                'state_id' => 11,
            ),
            21 => 
            array (
                'id' => 1100304,
                'name' => 'Vilhena',
                'state_id' => 11,
            ),
            22 => 
            array (
                'id' => 1100320,
                'name' => 'São Miguel do Guaporé',
                'state_id' => 11,
            ),
            23 => 
            array (
                'id' => 1100338,
                'name' => 'Nova Mamoré',
                'state_id' => 11,
            ),
            24 => 
            array (
                'id' => 1100346,
                'name' => 'Alvorada D\'Oeste',
                'state_id' => 11,
            ),
            25 => 
            array (
                'id' => 1100379,
                'name' => 'Alto Alegre dos Parecis',
                'state_id' => 11,
            ),
            26 => 
            array (
                'id' => 1100403,
                'name' => 'Alto Paraíso',
                'state_id' => 11,
            ),
            27 => 
            array (
                'id' => 1100452,
                'name' => 'Buritis',
                'state_id' => 11,
            ),
            28 => 
            array (
                'id' => 1100502,
                'name' => 'Novo Horizonte do Oeste',
                'state_id' => 11,
            ),
            29 => 
            array (
                'id' => 1100601,
                'name' => 'Cacaulândia',
                'state_id' => 11,
            ),
            30 => 
            array (
                'id' => 1100700,
                'name' => 'Campo Novo de Rondônia',
                'state_id' => 11,
            ),
            31 => 
            array (
                'id' => 1100809,
                'name' => 'Candeias do Jamari',
                'state_id' => 11,
            ),
            32 => 
            array (
                'id' => 1100908,
                'name' => 'Castanheiras',
                'state_id' => 11,
            ),
            33 => 
            array (
                'id' => 1100924,
                'name' => 'Chupinguaia',
                'state_id' => 11,
            ),
            34 => 
            array (
                'id' => 1100940,
                'name' => 'Cujubim',
                'state_id' => 11,
            ),
            35 => 
            array (
                'id' => 1101005,
                'name' => 'Governador Jorge Teixeira',
                'state_id' => 11,
            ),
            36 => 
            array (
                'id' => 1101104,
                'name' => 'Itapuã do Oeste',
                'state_id' => 11,
            ),
            37 => 
            array (
                'id' => 1101203,
                'name' => 'Ministro Andreazza',
                'state_id' => 11,
            ),
            38 => 
            array (
                'id' => 1101302,
                'name' => 'Mirante da Serra',
                'state_id' => 11,
            ),
            39 => 
            array (
                'id' => 1101401,
                'name' => 'Monte Negro',
                'state_id' => 11,
            ),
            40 => 
            array (
                'id' => 1101435,
                'name' => 'Nova União',
                'state_id' => 11,
            ),
            41 => 
            array (
                'id' => 1101450,
                'name' => 'Parecis',
                'state_id' => 11,
            ),
            42 => 
            array (
                'id' => 1101468,
                'name' => 'Pimenteiras do Oeste',
                'state_id' => 11,
            ),
            43 => 
            array (
                'id' => 1101476,
                'name' => 'Primavera de Rondônia',
                'state_id' => 11,
            ),
            44 => 
            array (
                'id' => 1101484,
                'name' => 'São Felipe D\'Oeste',
                'state_id' => 11,
            ),
            45 => 
            array (
                'id' => 1101492,
                'name' => 'São Francisco do Guaporé',
                'state_id' => 11,
            ),
            46 => 
            array (
                'id' => 1101500,
                'name' => 'Seringueiras',
                'state_id' => 11,
            ),
            47 => 
            array (
                'id' => 1101559,
                'name' => 'Teixeirópolis',
                'state_id' => 11,
            ),
            48 => 
            array (
                'id' => 1101609,
                'name' => 'Theobroma',
                'state_id' => 11,
            ),
            49 => 
            array (
                'id' => 1101708,
                'name' => 'Urupá',
                'state_id' => 11,
            ),
            50 => 
            array (
                'id' => 1101757,
                'name' => 'Vale do Anari',
                'state_id' => 11,
            ),
            51 => 
            array (
                'id' => 1101807,
                'name' => 'Vale do Paraíso',
                'state_id' => 11,
            ),
            52 => 
            array (
                'id' => 1200013,
                'name' => 'Acrelândia',
                'state_id' => 12,
            ),
            53 => 
            array (
                'id' => 1200054,
                'name' => 'Assis Brasil',
                'state_id' => 12,
            ),
            54 => 
            array (
                'id' => 1200104,
                'name' => 'Brasiléia',
                'state_id' => 12,
            ),
            55 => 
            array (
                'id' => 1200138,
                'name' => 'Bujari',
                'state_id' => 12,
            ),
            56 => 
            array (
                'id' => 1200179,
                'name' => 'Capixaba',
                'state_id' => 12,
            ),
            57 => 
            array (
                'id' => 1200203,
                'name' => 'Cruzeiro do Sul',
                'state_id' => 12,
            ),
            58 => 
            array (
                'id' => 1200252,
                'name' => 'Epitaciolândia',
                'state_id' => 12,
            ),
            59 => 
            array (
                'id' => 1200302,
                'name' => 'Feijó',
                'state_id' => 12,
            ),
            60 => 
            array (
                'id' => 1200328,
                'name' => 'Jordão',
                'state_id' => 12,
            ),
            61 => 
            array (
                'id' => 1200336,
                'name' => 'Mâncio Lima',
                'state_id' => 12,
            ),
            62 => 
            array (
                'id' => 1200344,
                'name' => 'Manoel Urbano',
                'state_id' => 12,
            ),
            63 => 
            array (
                'id' => 1200351,
                'name' => 'Marechal Thaumaturgo',
                'state_id' => 12,
            ),
            64 => 
            array (
                'id' => 1200385,
                'name' => 'Plácido de Castro',
                'state_id' => 12,
            ),
            65 => 
            array (
                'id' => 1200393,
                'name' => 'Porto Walter',
                'state_id' => 12,
            ),
            66 => 
            array (
                'id' => 1200401,
                'name' => 'Rio Branco',
                'state_id' => 12,
            ),
            67 => 
            array (
                'id' => 1200427,
                'name' => 'Rodrigues Alves',
                'state_id' => 12,
            ),
            68 => 
            array (
                'id' => 1200435,
                'name' => 'Santa Rosa do Purus',
                'state_id' => 12,
            ),
            69 => 
            array (
                'id' => 1200450,
                'name' => 'Senador Guiomard',
                'state_id' => 12,
            ),
            70 => 
            array (
                'id' => 1200500,
                'name' => 'Sena Madureira',
                'state_id' => 12,
            ),
            71 => 
            array (
                'id' => 1200609,
                'name' => 'Tarauacá',
                'state_id' => 12,
            ),
            72 => 
            array (
                'id' => 1200708,
                'name' => 'Xapuri',
                'state_id' => 12,
            ),
            73 => 
            array (
                'id' => 1200807,
                'name' => 'Porto Acre',
                'state_id' => 12,
            ),
            74 => 
            array (
                'id' => 1300029,
                'name' => 'Alvarães',
                'state_id' => 13,
            ),
            75 => 
            array (
                'id' => 1300060,
                'name' => 'Amaturá',
                'state_id' => 13,
            ),
            76 => 
            array (
                'id' => 1300086,
                'name' => 'Anamã',
                'state_id' => 13,
            ),
            77 => 
            array (
                'id' => 1300102,
                'name' => 'Anori',
                'state_id' => 13,
            ),
            78 => 
            array (
                'id' => 1300144,
                'name' => 'Apuí',
                'state_id' => 13,
            ),
            79 => 
            array (
                'id' => 1300201,
                'name' => 'Atalaia do Norte',
                'state_id' => 13,
            ),
            80 => 
            array (
                'id' => 1300300,
                'name' => 'Autazes',
                'state_id' => 13,
            ),
            81 => 
            array (
                'id' => 1300409,
                'name' => 'Barcelos',
                'state_id' => 13,
            ),
            82 => 
            array (
                'id' => 1300508,
                'name' => 'Barreirinha',
                'state_id' => 13,
            ),
            83 => 
            array (
                'id' => 1300607,
                'name' => 'Benjamin Constant',
                'state_id' => 13,
            ),
            84 => 
            array (
                'id' => 1300631,
                'name' => 'Beruri',
                'state_id' => 13,
            ),
            85 => 
            array (
                'id' => 1300680,
                'name' => 'Boa Vista do Ramos',
                'state_id' => 13,
            ),
            86 => 
            array (
                'id' => 1300706,
                'name' => 'Boca do Acre',
                'state_id' => 13,
            ),
            87 => 
            array (
                'id' => 1300805,
                'name' => 'Borba',
                'state_id' => 13,
            ),
            88 => 
            array (
                'id' => 1300839,
                'name' => 'Caapiranga',
                'state_id' => 13,
            ),
            89 => 
            array (
                'id' => 1300904,
                'name' => 'Canutama',
                'state_id' => 13,
            ),
            90 => 
            array (
                'id' => 1301001,
                'name' => 'Carauari',
                'state_id' => 13,
            ),
            91 => 
            array (
                'id' => 1301100,
                'name' => 'Careiro',
                'state_id' => 13,
            ),
            92 => 
            array (
                'id' => 1301159,
                'name' => 'Careiro da Várzea',
                'state_id' => 13,
            ),
            93 => 
            array (
                'id' => 1301209,
                'name' => 'Coari',
                'state_id' => 13,
            ),
            94 => 
            array (
                'id' => 1301308,
                'name' => 'Codajás',
                'state_id' => 13,
            ),
            95 => 
            array (
                'id' => 1301407,
                'name' => 'Eirunepé',
                'state_id' => 13,
            ),
            96 => 
            array (
                'id' => 1301506,
                'name' => 'Envira',
                'state_id' => 13,
            ),
            97 => 
            array (
                'id' => 1301605,
                'name' => 'Fonte Boa',
                'state_id' => 13,
            ),
            98 => 
            array (
                'id' => 1301654,
                'name' => 'Guajará',
                'state_id' => 13,
            ),
            99 => 
            array (
                'id' => 1301704,
                'name' => 'Humaitá',
                'state_id' => 13,
            ),
            100 => 
            array (
                'id' => 1301803,
                'name' => 'Ipixuna',
                'state_id' => 13,
            ),
            101 => 
            array (
                'id' => 1301852,
                'name' => 'Iranduba',
                'state_id' => 13,
            ),
            102 => 
            array (
                'id' => 1301902,
                'name' => 'Itacoatiara',
                'state_id' => 13,
            ),
            103 => 
            array (
                'id' => 1301951,
                'name' => 'Itamarati',
                'state_id' => 13,
            ),
            104 => 
            array (
                'id' => 1302009,
                'name' => 'Itapiranga',
                'state_id' => 13,
            ),
            105 => 
            array (
                'id' => 1302108,
                'name' => 'Japurá',
                'state_id' => 13,
            ),
            106 => 
            array (
                'id' => 1302207,
                'name' => 'Juruá',
                'state_id' => 13,
            ),
            107 => 
            array (
                'id' => 1302306,
                'name' => 'Jutaí',
                'state_id' => 13,
            ),
            108 => 
            array (
                'id' => 1302405,
                'name' => 'Lábrea',
                'state_id' => 13,
            ),
            109 => 
            array (
                'id' => 1302504,
                'name' => 'Manacapuru',
                'state_id' => 13,
            ),
            110 => 
            array (
                'id' => 1302553,
                'name' => 'Manaquiri',
                'state_id' => 13,
            ),
            111 => 
            array (
                'id' => 1302603,
                'name' => 'Manaus',
                'state_id' => 13,
            ),
            112 => 
            array (
                'id' => 1302702,
                'name' => 'Manicoré',
                'state_id' => 13,
            ),
            113 => 
            array (
                'id' => 1302801,
                'name' => 'Maraã',
                'state_id' => 13,
            ),
            114 => 
            array (
                'id' => 1302900,
                'name' => 'Maués',
                'state_id' => 13,
            ),
            115 => 
            array (
                'id' => 1303007,
                'name' => 'Nhamundá',
                'state_id' => 13,
            ),
            116 => 
            array (
                'id' => 1303106,
                'name' => 'Nova Olinda do Norte',
                'state_id' => 13,
            ),
            117 => 
            array (
                'id' => 1303205,
                'name' => 'Novo Airão',
                'state_id' => 13,
            ),
            118 => 
            array (
                'id' => 1303304,
                'name' => 'Novo Aripuanã',
                'state_id' => 13,
            ),
            119 => 
            array (
                'id' => 1303403,
                'name' => 'Parintins',
                'state_id' => 13,
            ),
            120 => 
            array (
                'id' => 1303502,
                'name' => 'Pauini',
                'state_id' => 13,
            ),
            121 => 
            array (
                'id' => 1303536,
                'name' => 'Presidente Figueiredo',
                'state_id' => 13,
            ),
            122 => 
            array (
                'id' => 1303569,
                'name' => 'Rio Preto da Eva',
                'state_id' => 13,
            ),
            123 => 
            array (
                'id' => 1303601,
                'name' => 'Santa Isabel do Rio Negro',
                'state_id' => 13,
            ),
            124 => 
            array (
                'id' => 1303700,
                'name' => 'Santo Antônio do Içá',
                'state_id' => 13,
            ),
            125 => 
            array (
                'id' => 1303809,
                'name' => 'São Gabriel da Cachoeira',
                'state_id' => 13,
            ),
            126 => 
            array (
                'id' => 1303908,
                'name' => 'São Paulo de Olivença',
                'state_id' => 13,
            ),
            127 => 
            array (
                'id' => 1303957,
                'name' => 'São Sebastião do Uatumã',
                'state_id' => 13,
            ),
            128 => 
            array (
                'id' => 1304005,
                'name' => 'Silves',
                'state_id' => 13,
            ),
            129 => 
            array (
                'id' => 1304062,
                'name' => 'Tabatinga',
                'state_id' => 13,
            ),
            130 => 
            array (
                'id' => 1304104,
                'name' => 'Tapauá',
                'state_id' => 13,
            ),
            131 => 
            array (
                'id' => 1304203,
                'name' => 'Tefé',
                'state_id' => 13,
            ),
            132 => 
            array (
                'id' => 1304237,
                'name' => 'Tonantins',
                'state_id' => 13,
            ),
            133 => 
            array (
                'id' => 1304260,
                'name' => 'Uarini',
                'state_id' => 13,
            ),
            134 => 
            array (
                'id' => 1304302,
                'name' => 'Urucará',
                'state_id' => 13,
            ),
            135 => 
            array (
                'id' => 1304401,
                'name' => 'Urucurituba',
                'state_id' => 13,
            ),
            136 => 
            array (
                'id' => 1400027,
                'name' => 'Amajari',
                'state_id' => 14,
            ),
            137 => 
            array (
                'id' => 1400050,
                'name' => 'Alto Alegre',
                'state_id' => 14,
            ),
            138 => 
            array (
                'id' => 1400100,
                'name' => 'Boa Vista',
                'state_id' => 14,
            ),
            139 => 
            array (
                'id' => 1400159,
                'name' => 'Bonfim',
                'state_id' => 14,
            ),
            140 => 
            array (
                'id' => 1400175,
                'name' => 'Cantá',
                'state_id' => 14,
            ),
            141 => 
            array (
                'id' => 1400209,
                'name' => 'Caracaraí',
                'state_id' => 14,
            ),
            142 => 
            array (
                'id' => 1400233,
                'name' => 'Caroebe',
                'state_id' => 14,
            ),
            143 => 
            array (
                'id' => 1400282,
                'name' => 'Iracema',
                'state_id' => 14,
            ),
            144 => 
            array (
                'id' => 1400308,
                'name' => 'Mucajaí',
                'state_id' => 14,
            ),
            145 => 
            array (
                'id' => 1400407,
                'name' => 'Normandia',
                'state_id' => 14,
            ),
            146 => 
            array (
                'id' => 1400456,
                'name' => 'Pacaraima',
                'state_id' => 14,
            ),
            147 => 
            array (
                'id' => 1400472,
                'name' => 'Rorainópolis',
                'state_id' => 14,
            ),
            148 => 
            array (
                'id' => 1400506,
                'name' => 'São João da Baliza',
                'state_id' => 14,
            ),
            149 => 
            array (
                'id' => 1400605,
                'name' => 'São Luiz',
                'state_id' => 14,
            ),
            150 => 
            array (
                'id' => 1400704,
                'name' => 'Uiramutã',
                'state_id' => 14,
            ),
            151 => 
            array (
                'id' => 1500107,
                'name' => 'Abaetetuba',
                'state_id' => 15,
            ),
            152 => 
            array (
                'id' => 1500131,
                'name' => 'Abel Figueiredo',
                'state_id' => 15,
            ),
            153 => 
            array (
                'id' => 1500206,
                'name' => 'Acará',
                'state_id' => 15,
            ),
            154 => 
            array (
                'id' => 1500305,
                'name' => 'Afuá',
                'state_id' => 15,
            ),
            155 => 
            array (
                'id' => 1500347,
                'name' => 'Água Azul do Norte',
                'state_id' => 15,
            ),
            156 => 
            array (
                'id' => 1500404,
                'name' => 'Alenquer',
                'state_id' => 15,
            ),
            157 => 
            array (
                'id' => 1500503,
                'name' => 'Almeirim',
                'state_id' => 15,
            ),
            158 => 
            array (
                'id' => 1500602,
                'name' => 'Altamira',
                'state_id' => 15,
            ),
            159 => 
            array (
                'id' => 1500701,
                'name' => 'Anajás',
                'state_id' => 15,
            ),
            160 => 
            array (
                'id' => 1500800,
                'name' => 'Ananindeua',
                'state_id' => 15,
            ),
            161 => 
            array (
                'id' => 1500859,
                'name' => 'Anapu',
                'state_id' => 15,
            ),
            162 => 
            array (
                'id' => 1500909,
                'name' => 'Augusto Corrêa',
                'state_id' => 15,
            ),
            163 => 
            array (
                'id' => 1500958,
                'name' => 'Aurora do Pará',
                'state_id' => 15,
            ),
            164 => 
            array (
                'id' => 1501006,
                'name' => 'Aveiro',
                'state_id' => 15,
            ),
            165 => 
            array (
                'id' => 1501105,
                'name' => 'Bagre',
                'state_id' => 15,
            ),
            166 => 
            array (
                'id' => 1501204,
                'name' => 'Baião',
                'state_id' => 15,
            ),
            167 => 
            array (
                'id' => 1501253,
                'name' => 'Bannach',
                'state_id' => 15,
            ),
            168 => 
            array (
                'id' => 1501303,
                'name' => 'Barcarena',
                'state_id' => 15,
            ),
            169 => 
            array (
                'id' => 1501402,
                'name' => 'Belém',
                'state_id' => 15,
            ),
            170 => 
            array (
                'id' => 1501451,
                'name' => 'Belterra',
                'state_id' => 15,
            ),
            171 => 
            array (
                'id' => 1501501,
                'name' => 'Benevides',
                'state_id' => 15,
            ),
            172 => 
            array (
                'id' => 1501576,
                'name' => 'Bom Jesus do Tocantins',
                'state_id' => 15,
            ),
            173 => 
            array (
                'id' => 1501600,
                'name' => 'Bonito',
                'state_id' => 15,
            ),
            174 => 
            array (
                'id' => 1501709,
                'name' => 'Bragança',
                'state_id' => 15,
            ),
            175 => 
            array (
                'id' => 1501725,
                'name' => 'Brasil Novo',
                'state_id' => 15,
            ),
            176 => 
            array (
                'id' => 1501758,
                'name' => 'Brejo Grande do Araguaia',
                'state_id' => 15,
            ),
            177 => 
            array (
                'id' => 1501782,
                'name' => 'Breu Branco',
                'state_id' => 15,
            ),
            178 => 
            array (
                'id' => 1501808,
                'name' => 'Breves',
                'state_id' => 15,
            ),
            179 => 
            array (
                'id' => 1501907,
                'name' => 'Bujaru',
                'state_id' => 15,
            ),
            180 => 
            array (
                'id' => 1501956,
                'name' => 'Cachoeira do Piriá',
                'state_id' => 15,
            ),
            181 => 
            array (
                'id' => 1502004,
                'name' => 'Cachoeira do Arari',
                'state_id' => 15,
            ),
            182 => 
            array (
                'id' => 1502103,
                'name' => 'Cametá',
                'state_id' => 15,
            ),
            183 => 
            array (
                'id' => 1502152,
                'name' => 'Canaã dos Carajás',
                'state_id' => 15,
            ),
            184 => 
            array (
                'id' => 1502202,
                'name' => 'Capanema',
                'state_id' => 15,
            ),
            185 => 
            array (
                'id' => 1502301,
                'name' => 'Capitão Poço',
                'state_id' => 15,
            ),
            186 => 
            array (
                'id' => 1502400,
                'name' => 'Castanhal',
                'state_id' => 15,
            ),
            187 => 
            array (
                'id' => 1502509,
                'name' => 'Chaves',
                'state_id' => 15,
            ),
            188 => 
            array (
                'id' => 1502608,
                'name' => 'Colares',
                'state_id' => 15,
            ),
            189 => 
            array (
                'id' => 1502707,
                'name' => 'Conceição do Araguaia',
                'state_id' => 15,
            ),
            190 => 
            array (
                'id' => 1502756,
                'name' => 'Concórdia do Pará',
                'state_id' => 15,
            ),
            191 => 
            array (
                'id' => 1502764,
                'name' => 'Cumaru do Norte',
                'state_id' => 15,
            ),
            192 => 
            array (
                'id' => 1502772,
                'name' => 'Curionópolis',
                'state_id' => 15,
            ),
            193 => 
            array (
                'id' => 1502806,
                'name' => 'Curralinho',
                'state_id' => 15,
            ),
            194 => 
            array (
                'id' => 1502855,
                'name' => 'Curuá',
                'state_id' => 15,
            ),
            195 => 
            array (
                'id' => 1502905,
                'name' => 'Curuçá',
                'state_id' => 15,
            ),
            196 => 
            array (
                'id' => 1502939,
                'name' => 'Dom Eliseu',
                'state_id' => 15,
            ),
            197 => 
            array (
                'id' => 1502954,
                'name' => 'Eldorado do Carajás',
                'state_id' => 15,
            ),
            198 => 
            array (
                'id' => 1503002,
                'name' => 'Faro',
                'state_id' => 15,
            ),
            199 => 
            array (
                'id' => 1503044,
                'name' => 'Floresta do Araguaia',
                'state_id' => 15,
            ),
            200 => 
            array (
                'id' => 1503077,
                'name' => 'Garrafão do Norte',
                'state_id' => 15,
            ),
            201 => 
            array (
                'id' => 1503093,
                'name' => 'Goianésia do Pará',
                'state_id' => 15,
            ),
            202 => 
            array (
                'id' => 1503101,
                'name' => 'Gurupá',
                'state_id' => 15,
            ),
            203 => 
            array (
                'id' => 1503200,
                'name' => 'Igarapé-Açu',
                'state_id' => 15,
            ),
            204 => 
            array (
                'id' => 1503309,
                'name' => 'Igarapé-Miri',
                'state_id' => 15,
            ),
            205 => 
            array (
                'id' => 1503408,
                'name' => 'Inhangapi',
                'state_id' => 15,
            ),
            206 => 
            array (
                'id' => 1503457,
                'name' => 'Ipixuna do Pará',
                'state_id' => 15,
            ),
            207 => 
            array (
                'id' => 1503507,
                'name' => 'Irituia',
                'state_id' => 15,
            ),
            208 => 
            array (
                'id' => 1503606,
                'name' => 'Itaituba',
                'state_id' => 15,
            ),
            209 => 
            array (
                'id' => 1503705,
                'name' => 'Itupiranga',
                'state_id' => 15,
            ),
            210 => 
            array (
                'id' => 1503754,
                'name' => 'Jacareacanga',
                'state_id' => 15,
            ),
            211 => 
            array (
                'id' => 1503804,
                'name' => 'Jacundá',
                'state_id' => 15,
            ),
            212 => 
            array (
                'id' => 1503903,
                'name' => 'Juruti',
                'state_id' => 15,
            ),
            213 => 
            array (
                'id' => 1504000,
                'name' => 'Limoeiro do Ajuru',
                'state_id' => 15,
            ),
            214 => 
            array (
                'id' => 1504059,
                'name' => 'Mãe do Rio',
                'state_id' => 15,
            ),
            215 => 
            array (
                'id' => 1504109,
                'name' => 'Magalhães Barata',
                'state_id' => 15,
            ),
            216 => 
            array (
                'id' => 1504208,
                'name' => 'Marabá',
                'state_id' => 15,
            ),
            217 => 
            array (
                'id' => 1504307,
                'name' => 'Maracanã',
                'state_id' => 15,
            ),
            218 => 
            array (
                'id' => 1504406,
                'name' => 'Marapanim',
                'state_id' => 15,
            ),
            219 => 
            array (
                'id' => 1504422,
                'name' => 'Marituba',
                'state_id' => 15,
            ),
            220 => 
            array (
                'id' => 1504455,
                'name' => 'Medicilândia',
                'state_id' => 15,
            ),
            221 => 
            array (
                'id' => 1504505,
                'name' => 'Melgaço',
                'state_id' => 15,
            ),
            222 => 
            array (
                'id' => 1504604,
                'name' => 'Mocajuba',
                'state_id' => 15,
            ),
            223 => 
            array (
                'id' => 1504703,
                'name' => 'Moju',
                'state_id' => 15,
            ),
            224 => 
            array (
                'id' => 1504752,
                'name' => 'Mojuí dos Campos',
                'state_id' => 15,
            ),
            225 => 
            array (
                'id' => 1504802,
                'name' => 'Monte Alegre',
                'state_id' => 15,
            ),
            226 => 
            array (
                'id' => 1504901,
                'name' => 'Muaná',
                'state_id' => 15,
            ),
            227 => 
            array (
                'id' => 1504950,
                'name' => 'Nova Esperança do Piriá',
                'state_id' => 15,
            ),
            228 => 
            array (
                'id' => 1504976,
                'name' => 'Nova Ipixuna',
                'state_id' => 15,
            ),
            229 => 
            array (
                'id' => 1505007,
                'name' => 'Nova Timboteua',
                'state_id' => 15,
            ),
            230 => 
            array (
                'id' => 1505031,
                'name' => 'Novo Progresso',
                'state_id' => 15,
            ),
            231 => 
            array (
                'id' => 1505064,
                'name' => 'Novo Repartimento',
                'state_id' => 15,
            ),
            232 => 
            array (
                'id' => 1505106,
                'name' => 'Óbidos',
                'state_id' => 15,
            ),
            233 => 
            array (
                'id' => 1505205,
                'name' => 'Oeiras do Pará',
                'state_id' => 15,
            ),
            234 => 
            array (
                'id' => 1505304,
                'name' => 'Oriximiná',
                'state_id' => 15,
            ),
            235 => 
            array (
                'id' => 1505403,
                'name' => 'Ourém',
                'state_id' => 15,
            ),
            236 => 
            array (
                'id' => 1505437,
                'name' => 'Ourilândia do Norte',
                'state_id' => 15,
            ),
            237 => 
            array (
                'id' => 1505486,
                'name' => 'Pacajá',
                'state_id' => 15,
            ),
            238 => 
            array (
                'id' => 1505494,
                'name' => 'Palestina do Pará',
                'state_id' => 15,
            ),
            239 => 
            array (
                'id' => 1505502,
                'name' => 'Paragominas',
                'state_id' => 15,
            ),
            240 => 
            array (
                'id' => 1505536,
                'name' => 'Parauapebas',
                'state_id' => 15,
            ),
            241 => 
            array (
                'id' => 1505551,
                'name' => 'Pau D\'Arco',
                'state_id' => 15,
            ),
            242 => 
            array (
                'id' => 1505601,
                'name' => 'Peixe-Boi',
                'state_id' => 15,
            ),
            243 => 
            array (
                'id' => 1505635,
                'name' => 'Piçarra',
                'state_id' => 15,
            ),
            244 => 
            array (
                'id' => 1505650,
                'name' => 'Placas',
                'state_id' => 15,
            ),
            245 => 
            array (
                'id' => 1505700,
                'name' => 'Ponta de Pedras',
                'state_id' => 15,
            ),
            246 => 
            array (
                'id' => 1505809,
                'name' => 'Portel',
                'state_id' => 15,
            ),
            247 => 
            array (
                'id' => 1505908,
                'name' => 'Porto de Moz',
                'state_id' => 15,
            ),
            248 => 
            array (
                'id' => 1506005,
                'name' => 'Prainha',
                'state_id' => 15,
            ),
            249 => 
            array (
                'id' => 1506104,
                'name' => 'Primavera',
                'state_id' => 15,
            ),
            250 => 
            array (
                'id' => 1506112,
                'name' => 'Quatipuru',
                'state_id' => 15,
            ),
            251 => 
            array (
                'id' => 1506138,
                'name' => 'Redenção',
                'state_id' => 15,
            ),
            252 => 
            array (
                'id' => 1506161,
                'name' => 'Rio Maria',
                'state_id' => 15,
            ),
            253 => 
            array (
                'id' => 1506187,
                'name' => 'Rondon do Pará',
                'state_id' => 15,
            ),
            254 => 
            array (
                'id' => 1506195,
                'name' => 'Rurópolis',
                'state_id' => 15,
            ),
            255 => 
            array (
                'id' => 1506203,
                'name' => 'Salinópolis',
                'state_id' => 15,
            ),
            256 => 
            array (
                'id' => 1506302,
                'name' => 'Salvaterra',
                'state_id' => 15,
            ),
            257 => 
            array (
                'id' => 1506351,
                'name' => 'Santa Bárbara do Pará',
                'state_id' => 15,
            ),
            258 => 
            array (
                'id' => 1506401,
                'name' => 'Santa Cruz do Arari',
                'state_id' => 15,
            ),
            259 => 
            array (
                'id' => 1506500,
                'name' => 'Santa Izabel do Pará',
                'state_id' => 15,
            ),
            260 => 
            array (
                'id' => 1506559,
                'name' => 'Santa Luzia do Pará',
                'state_id' => 15,
            ),
            261 => 
            array (
                'id' => 1506583,
                'name' => 'Santa Maria das Barreiras',
                'state_id' => 15,
            ),
            262 => 
            array (
                'id' => 1506609,
                'name' => 'Santa Maria do Pará',
                'state_id' => 15,
            ),
            263 => 
            array (
                'id' => 1506708,
                'name' => 'Santana do Araguaia',
                'state_id' => 15,
            ),
            264 => 
            array (
                'id' => 1506807,
                'name' => 'Santarém',
                'state_id' => 15,
            ),
            265 => 
            array (
                'id' => 1506906,
                'name' => 'Santarém Novo',
                'state_id' => 15,
            ),
            266 => 
            array (
                'id' => 1507003,
                'name' => 'Santo Antônio do Tauá',
                'state_id' => 15,
            ),
            267 => 
            array (
                'id' => 1507102,
                'name' => 'São Caetano de Odivelas',
                'state_id' => 15,
            ),
            268 => 
            array (
                'id' => 1507151,
                'name' => 'São Domingos do Araguaia',
                'state_id' => 15,
            ),
            269 => 
            array (
                'id' => 1507201,
                'name' => 'São Domingos do Capim',
                'state_id' => 15,
            ),
            270 => 
            array (
                'id' => 1507300,
                'name' => 'São Félix do Xingu',
                'state_id' => 15,
            ),
            271 => 
            array (
                'id' => 1507409,
                'name' => 'São Francisco do Pará',
                'state_id' => 15,
            ),
            272 => 
            array (
                'id' => 1507458,
                'name' => 'São Geraldo do Araguaia',
                'state_id' => 15,
            ),
            273 => 
            array (
                'id' => 1507466,
                'name' => 'São João da Ponta',
                'state_id' => 15,
            ),
            274 => 
            array (
                'id' => 1507474,
                'name' => 'São João de Pirabas',
                'state_id' => 15,
            ),
            275 => 
            array (
                'id' => 1507508,
                'name' => 'São João do Araguaia',
                'state_id' => 15,
            ),
            276 => 
            array (
                'id' => 1507607,
                'name' => 'São Miguel do Guamá',
                'state_id' => 15,
            ),
            277 => 
            array (
                'id' => 1507706,
                'name' => 'São Sebastião da Boa Vista',
                'state_id' => 15,
            ),
            278 => 
            array (
                'id' => 1507755,
                'name' => 'Sapucaia',
                'state_id' => 15,
            ),
            279 => 
            array (
                'id' => 1507805,
                'name' => 'Senador José Porfírio',
                'state_id' => 15,
            ),
            280 => 
            array (
                'id' => 1507904,
                'name' => 'Soure',
                'state_id' => 15,
            ),
            281 => 
            array (
                'id' => 1507953,
                'name' => 'Tailândia',
                'state_id' => 15,
            ),
            282 => 
            array (
                'id' => 1507961,
                'name' => 'Terra Alta',
                'state_id' => 15,
            ),
            283 => 
            array (
                'id' => 1507979,
                'name' => 'Terra Santa',
                'state_id' => 15,
            ),
            284 => 
            array (
                'id' => 1508001,
                'name' => 'Tomé-Açu',
                'state_id' => 15,
            ),
            285 => 
            array (
                'id' => 1508035,
                'name' => 'Tracuateua',
                'state_id' => 15,
            ),
            286 => 
            array (
                'id' => 1508050,
                'name' => 'Trairão',
                'state_id' => 15,
            ),
            287 => 
            array (
                'id' => 1508084,
                'name' => 'Tucumã',
                'state_id' => 15,
            ),
            288 => 
            array (
                'id' => 1508100,
                'name' => 'Tucuruí',
                'state_id' => 15,
            ),
            289 => 
            array (
                'id' => 1508126,
                'name' => 'Ulianópolis',
                'state_id' => 15,
            ),
            290 => 
            array (
                'id' => 1508159,
                'name' => 'Uruará',
                'state_id' => 15,
            ),
            291 => 
            array (
                'id' => 1508209,
                'name' => 'Vigia',
                'state_id' => 15,
            ),
            292 => 
            array (
                'id' => 1508308,
                'name' => 'Viseu',
                'state_id' => 15,
            ),
            293 => 
            array (
                'id' => 1508357,
                'name' => 'Vitória do Xingu',
                'state_id' => 15,
            ),
            294 => 
            array (
                'id' => 1508407,
                'name' => 'Xinguara',
                'state_id' => 15,
            ),
            295 => 
            array (
                'id' => 1600055,
                'name' => 'Serra do Navio',
                'state_id' => 16,
            ),
            296 => 
            array (
                'id' => 1600105,
                'name' => 'Amapá',
                'state_id' => 16,
            ),
            297 => 
            array (
                'id' => 1600154,
                'name' => 'Pedra Branca do Amapari',
                'state_id' => 16,
            ),
            298 => 
            array (
                'id' => 1600204,
                'name' => 'Calçoene',
                'state_id' => 16,
            ),
            299 => 
            array (
                'id' => 1600212,
                'name' => 'Cutias',
                'state_id' => 16,
            ),
            300 => 
            array (
                'id' => 1600238,
                'name' => 'Ferreira Gomes',
                'state_id' => 16,
            ),
            301 => 
            array (
                'id' => 1600253,
                'name' => 'Itaubal',
                'state_id' => 16,
            ),
            302 => 
            array (
                'id' => 1600279,
                'name' => 'Laranjal do Jari',
                'state_id' => 16,
            ),
            303 => 
            array (
                'id' => 1600303,
                'name' => 'Macapá',
                'state_id' => 16,
            ),
            304 => 
            array (
                'id' => 1600402,
                'name' => 'Mazagão',
                'state_id' => 16,
            ),
            305 => 
            array (
                'id' => 1600501,
                'name' => 'Oiapoque',
                'state_id' => 16,
            ),
            306 => 
            array (
                'id' => 1600535,
                'name' => 'Porto Grande',
                'state_id' => 16,
            ),
            307 => 
            array (
                'id' => 1600550,
                'name' => 'Pracuúba',
                'state_id' => 16,
            ),
            308 => 
            array (
                'id' => 1600600,
                'name' => 'Santana',
                'state_id' => 16,
            ),
            309 => 
            array (
                'id' => 1600709,
                'name' => 'Tartarugalzinho',
                'state_id' => 16,
            ),
            310 => 
            array (
                'id' => 1600808,
                'name' => 'Vitória do Jari',
                'state_id' => 16,
            ),
            311 => 
            array (
                'id' => 1700251,
                'name' => 'Abreulândia',
                'state_id' => 17,
            ),
            312 => 
            array (
                'id' => 1700301,
                'name' => 'Aguiarnópolis',
                'state_id' => 17,
            ),
            313 => 
            array (
                'id' => 1700350,
                'name' => 'Aliança do Tocantins',
                'state_id' => 17,
            ),
            314 => 
            array (
                'id' => 1700400,
                'name' => 'Almas',
                'state_id' => 17,
            ),
            315 => 
            array (
                'id' => 1700707,
                'name' => 'Alvorada',
                'state_id' => 17,
            ),
            316 => 
            array (
                'id' => 1701002,
                'name' => 'Ananás',
                'state_id' => 17,
            ),
            317 => 
            array (
                'id' => 1701051,
                'name' => 'Angico',
                'state_id' => 17,
            ),
            318 => 
            array (
                'id' => 1701101,
                'name' => 'Aparecida do Rio Negro',
                'state_id' => 17,
            ),
            319 => 
            array (
                'id' => 1701309,
                'name' => 'Aragominas',
                'state_id' => 17,
            ),
            320 => 
            array (
                'id' => 1701903,
                'name' => 'Araguacema',
                'state_id' => 17,
            ),
            321 => 
            array (
                'id' => 1702000,
                'name' => 'Araguaçu',
                'state_id' => 17,
            ),
            322 => 
            array (
                'id' => 1702109,
                'name' => 'Araguaína',
                'state_id' => 17,
            ),
            323 => 
            array (
                'id' => 1702158,
                'name' => 'Araguanã',
                'state_id' => 17,
            ),
            324 => 
            array (
                'id' => 1702208,
                'name' => 'Araguatins',
                'state_id' => 17,
            ),
            325 => 
            array (
                'id' => 1702307,
                'name' => 'Arapoema',
                'state_id' => 17,
            ),
            326 => 
            array (
                'id' => 1702406,
                'name' => 'Arraias',
                'state_id' => 17,
            ),
            327 => 
            array (
                'id' => 1702554,
                'name' => 'Augustinópolis',
                'state_id' => 17,
            ),
            328 => 
            array (
                'id' => 1702703,
                'name' => 'Aurora do Tocantins',
                'state_id' => 17,
            ),
            329 => 
            array (
                'id' => 1702901,
                'name' => 'Axixá do Tocantins',
                'state_id' => 17,
            ),
            330 => 
            array (
                'id' => 1703008,
                'name' => 'Babaçulândia',
                'state_id' => 17,
            ),
            331 => 
            array (
                'id' => 1703057,
                'name' => 'Bandeirantes do Tocantins',
                'state_id' => 17,
            ),
            332 => 
            array (
                'id' => 1703073,
                'name' => 'Barra do Ouro',
                'state_id' => 17,
            ),
            333 => 
            array (
                'id' => 1703107,
                'name' => 'Barrolândia',
                'state_id' => 17,
            ),
            334 => 
            array (
                'id' => 1703206,
                'name' => 'Bernardo Sayão',
                'state_id' => 17,
            ),
            335 => 
            array (
                'id' => 1703305,
                'name' => 'Bom Jesus do Tocantins',
                'state_id' => 17,
            ),
            336 => 
            array (
                'id' => 1703602,
                'name' => 'Brasilândia do Tocantins',
                'state_id' => 17,
            ),
            337 => 
            array (
                'id' => 1703701,
                'name' => 'Brejinho de Nazaré',
                'state_id' => 17,
            ),
            338 => 
            array (
                'id' => 1703800,
                'name' => 'Buriti do Tocantins',
                'state_id' => 17,
            ),
            339 => 
            array (
                'id' => 1703826,
                'name' => 'Cachoeirinha',
                'state_id' => 17,
            ),
            340 => 
            array (
                'id' => 1703842,
                'name' => 'Campos Lindos',
                'state_id' => 17,
            ),
            341 => 
            array (
                'id' => 1703867,
                'name' => 'Cariri do Tocantins',
                'state_id' => 17,
            ),
            342 => 
            array (
                'id' => 1703883,
                'name' => 'Carmolândia',
                'state_id' => 17,
            ),
            343 => 
            array (
                'id' => 1703891,
                'name' => 'Carrasco Bonito',
                'state_id' => 17,
            ),
            344 => 
            array (
                'id' => 1703909,
                'name' => 'Caseara',
                'state_id' => 17,
            ),
            345 => 
            array (
                'id' => 1704105,
                'name' => 'Centenário',
                'state_id' => 17,
            ),
            346 => 
            array (
                'id' => 1704600,
                'name' => 'Chapada de Areia',
                'state_id' => 17,
            ),
            347 => 
            array (
                'id' => 1705102,
                'name' => 'Chapada da Natividade',
                'state_id' => 17,
            ),
            348 => 
            array (
                'id' => 1705508,
                'name' => 'Colinas do Tocantins',
                'state_id' => 17,
            ),
            349 => 
            array (
                'id' => 1705557,
                'name' => 'Combinado',
                'state_id' => 17,
            ),
            350 => 
            array (
                'id' => 1705607,
                'name' => 'Conceição do Tocantins',
                'state_id' => 17,
            ),
            351 => 
            array (
                'id' => 1706001,
                'name' => 'Couto Magalhães',
                'state_id' => 17,
            ),
            352 => 
            array (
                'id' => 1706100,
                'name' => 'Cristalândia',
                'state_id' => 17,
            ),
            353 => 
            array (
                'id' => 1706258,
                'name' => 'Crixás do Tocantins',
                'state_id' => 17,
            ),
            354 => 
            array (
                'id' => 1706506,
                'name' => 'Darcinópolis',
                'state_id' => 17,
            ),
            355 => 
            array (
                'id' => 1707009,
                'name' => 'Dianópolis',
                'state_id' => 17,
            ),
            356 => 
            array (
                'id' => 1707108,
                'name' => 'Divinópolis do Tocantins',
                'state_id' => 17,
            ),
            357 => 
            array (
                'id' => 1707207,
                'name' => 'Dois Irmãos do Tocantins',
                'state_id' => 17,
            ),
            358 => 
            array (
                'id' => 1707306,
                'name' => 'Dueré',
                'state_id' => 17,
            ),
            359 => 
            array (
                'id' => 1707405,
                'name' => 'Esperantina',
                'state_id' => 17,
            ),
            360 => 
            array (
                'id' => 1707553,
                'name' => 'Fátima',
                'state_id' => 17,
            ),
            361 => 
            array (
                'id' => 1707652,
                'name' => 'Figueirópolis',
                'state_id' => 17,
            ),
            362 => 
            array (
                'id' => 1707702,
                'name' => 'Filadélfia',
                'state_id' => 17,
            ),
            363 => 
            array (
                'id' => 1708205,
                'name' => 'Formoso do Araguaia',
                'state_id' => 17,
            ),
            364 => 
            array (
                'id' => 1708254,
                'name' => 'Tabocão',
                'state_id' => 17,
            ),
            365 => 
            array (
                'id' => 1708304,
                'name' => 'Goianorte',
                'state_id' => 17,
            ),
            366 => 
            array (
                'id' => 1709005,
                'name' => 'Goiatins',
                'state_id' => 17,
            ),
            367 => 
            array (
                'id' => 1709302,
                'name' => 'Guaraí',
                'state_id' => 17,
            ),
            368 => 
            array (
                'id' => 1709500,
                'name' => 'Gurupi',
                'state_id' => 17,
            ),
            369 => 
            array (
                'id' => 1709807,
                'name' => 'Ipueiras',
                'state_id' => 17,
            ),
            370 => 
            array (
                'id' => 1710508,
                'name' => 'Itacajá',
                'state_id' => 17,
            ),
            371 => 
            array (
                'id' => 1710706,
                'name' => 'Itaguatins',
                'state_id' => 17,
            ),
            372 => 
            array (
                'id' => 1710904,
                'name' => 'Itapiratins',
                'state_id' => 17,
            ),
            373 => 
            array (
                'id' => 1711100,
                'name' => 'Itaporã do Tocantins',
                'state_id' => 17,
            ),
            374 => 
            array (
                'id' => 1711506,
                'name' => 'Jaú do Tocantins',
                'state_id' => 17,
            ),
            375 => 
            array (
                'id' => 1711803,
                'name' => 'Juarina',
                'state_id' => 17,
            ),
            376 => 
            array (
                'id' => 1711902,
                'name' => 'Lagoa da Confusão',
                'state_id' => 17,
            ),
            377 => 
            array (
                'id' => 1711951,
                'name' => 'Lagoa do Tocantins',
                'state_id' => 17,
            ),
            378 => 
            array (
                'id' => 1712009,
                'name' => 'Lajeado',
                'state_id' => 17,
            ),
            379 => 
            array (
                'id' => 1712157,
                'name' => 'Lavandeira',
                'state_id' => 17,
            ),
            380 => 
            array (
                'id' => 1712405,
                'name' => 'Lizarda',
                'state_id' => 17,
            ),
            381 => 
            array (
                'id' => 1712454,
                'name' => 'Luzinópolis',
                'state_id' => 17,
            ),
            382 => 
            array (
                'id' => 1712504,
                'name' => 'Marianópolis do Tocantins',
                'state_id' => 17,
            ),
            383 => 
            array (
                'id' => 1712702,
                'name' => 'Mateiros',
                'state_id' => 17,
            ),
            384 => 
            array (
                'id' => 1712801,
                'name' => 'Maurilândia do Tocantins',
                'state_id' => 17,
            ),
            385 => 
            array (
                'id' => 1713205,
                'name' => 'Miracema do Tocantins',
                'state_id' => 17,
            ),
            386 => 
            array (
                'id' => 1713304,
                'name' => 'Miranorte',
                'state_id' => 17,
            ),
            387 => 
            array (
                'id' => 1713601,
                'name' => 'Monte do Carmo',
                'state_id' => 17,
            ),
            388 => 
            array (
                'id' => 1713700,
                'name' => 'Monte Santo do Tocantins',
                'state_id' => 17,
            ),
            389 => 
            array (
                'id' => 1713809,
                'name' => 'Palmeiras do Tocantins',
                'state_id' => 17,
            ),
            390 => 
            array (
                'id' => 1713957,
                'name' => 'Muricilândia',
                'state_id' => 17,
            ),
            391 => 
            array (
                'id' => 1714203,
                'name' => 'Natividade',
                'state_id' => 17,
            ),
            392 => 
            array (
                'id' => 1714302,
                'name' => 'Nazaré',
                'state_id' => 17,
            ),
            393 => 
            array (
                'id' => 1714880,
                'name' => 'Nova Olinda',
                'state_id' => 17,
            ),
            394 => 
            array (
                'id' => 1715002,
                'name' => 'Nova Rosalândia',
                'state_id' => 17,
            ),
            395 => 
            array (
                'id' => 1715101,
                'name' => 'Novo Acordo',
                'state_id' => 17,
            ),
            396 => 
            array (
                'id' => 1715150,
                'name' => 'Novo Alegre',
                'state_id' => 17,
            ),
            397 => 
            array (
                'id' => 1715259,
                'name' => 'Novo Jardim',
                'state_id' => 17,
            ),
            398 => 
            array (
                'id' => 1715507,
                'name' => 'Oliveira de Fátima',
                'state_id' => 17,
            ),
            399 => 
            array (
                'id' => 1715705,
                'name' => 'Palmeirante',
                'state_id' => 17,
            ),
            400 => 
            array (
                'id' => 1715754,
                'name' => 'Palmeirópolis',
                'state_id' => 17,
            ),
            401 => 
            array (
                'id' => 1716109,
                'name' => 'Paraíso do Tocantins',
                'state_id' => 17,
            ),
            402 => 
            array (
                'id' => 1716208,
                'name' => 'Paranã',
                'state_id' => 17,
            ),
            403 => 
            array (
                'id' => 1716307,
                'name' => 'Pau D\'Arco',
                'state_id' => 17,
            ),
            404 => 
            array (
                'id' => 1716505,
                'name' => 'Pedro Afonso',
                'state_id' => 17,
            ),
            405 => 
            array (
                'id' => 1716604,
                'name' => 'Peixe',
                'state_id' => 17,
            ),
            406 => 
            array (
                'id' => 1716653,
                'name' => 'Pequizeiro',
                'state_id' => 17,
            ),
            407 => 
            array (
                'id' => 1716703,
                'name' => 'Colméia',
                'state_id' => 17,
            ),
            408 => 
            array (
                'id' => 1717008,
                'name' => 'Pindorama do Tocantins',
                'state_id' => 17,
            ),
            409 => 
            array (
                'id' => 1717206,
                'name' => 'Piraquê',
                'state_id' => 17,
            ),
            410 => 
            array (
                'id' => 1717503,
                'name' => 'Pium',
                'state_id' => 17,
            ),
            411 => 
            array (
                'id' => 1717800,
                'name' => 'Ponte Alta do Bom Jesus',
                'state_id' => 17,
            ),
            412 => 
            array (
                'id' => 1717909,
                'name' => 'Ponte Alta do Tocantins',
                'state_id' => 17,
            ),
            413 => 
            array (
                'id' => 1718006,
                'name' => 'Porto Alegre do Tocantins',
                'state_id' => 17,
            ),
            414 => 
            array (
                'id' => 1718204,
                'name' => 'Porto Nacional',
                'state_id' => 17,
            ),
            415 => 
            array (
                'id' => 1718303,
                'name' => 'Praia Norte',
                'state_id' => 17,
            ),
            416 => 
            array (
                'id' => 1718402,
                'name' => 'Presidente Kennedy',
                'state_id' => 17,
            ),
            417 => 
            array (
                'id' => 1718451,
                'name' => 'Pugmil',
                'state_id' => 17,
            ),
            418 => 
            array (
                'id' => 1718501,
                'name' => 'Recursolândia',
                'state_id' => 17,
            ),
            419 => 
            array (
                'id' => 1718550,
                'name' => 'Riachinho',
                'state_id' => 17,
            ),
            420 => 
            array (
                'id' => 1718659,
                'name' => 'Rio da Conceição',
                'state_id' => 17,
            ),
            421 => 
            array (
                'id' => 1718709,
                'name' => 'Rio dos Bois',
                'state_id' => 17,
            ),
            422 => 
            array (
                'id' => 1718758,
                'name' => 'Rio Sono',
                'state_id' => 17,
            ),
            423 => 
            array (
                'id' => 1718808,
                'name' => 'Sampaio',
                'state_id' => 17,
            ),
            424 => 
            array (
                'id' => 1718840,
                'name' => 'Sandolândia',
                'state_id' => 17,
            ),
            425 => 
            array (
                'id' => 1718865,
                'name' => 'Santa Fé do Araguaia',
                'state_id' => 17,
            ),
            426 => 
            array (
                'id' => 1718881,
                'name' => 'Santa Maria do Tocantins',
                'state_id' => 17,
            ),
            427 => 
            array (
                'id' => 1718899,
                'name' => 'Santa Rita do Tocantins',
                'state_id' => 17,
            ),
            428 => 
            array (
                'id' => 1718907,
                'name' => 'Santa Rosa do Tocantins',
                'state_id' => 17,
            ),
            429 => 
            array (
                'id' => 1719004,
                'name' => 'Santa Tereza do Tocantins',
                'state_id' => 17,
            ),
            430 => 
            array (
                'id' => 1720002,
                'name' => 'Santa Terezinha do Tocantins',
                'state_id' => 17,
            ),
            431 => 
            array (
                'id' => 1720101,
                'name' => 'São Bento do Tocantins',
                'state_id' => 17,
            ),
            432 => 
            array (
                'id' => 1720150,
                'name' => 'São Félix do Tocantins',
                'state_id' => 17,
            ),
            433 => 
            array (
                'id' => 1720200,
                'name' => 'São Miguel do Tocantins',
                'state_id' => 17,
            ),
            434 => 
            array (
                'id' => 1720259,
                'name' => 'São Salvador do Tocantins',
                'state_id' => 17,
            ),
            435 => 
            array (
                'id' => 1720309,
                'name' => 'São Sebastião do Tocantins',
                'state_id' => 17,
            ),
            436 => 
            array (
                'id' => 1720499,
                'name' => 'São Valério',
                'state_id' => 17,
            ),
            437 => 
            array (
                'id' => 1720655,
                'name' => 'Silvanópolis',
                'state_id' => 17,
            ),
            438 => 
            array (
                'id' => 1720804,
                'name' => 'Sítio Novo do Tocantins',
                'state_id' => 17,
            ),
            439 => 
            array (
                'id' => 1720853,
                'name' => 'Sucupira',
                'state_id' => 17,
            ),
            440 => 
            array (
                'id' => 1720903,
                'name' => 'Taguatinga',
                'state_id' => 17,
            ),
            441 => 
            array (
                'id' => 1720937,
                'name' => 'Taipas do Tocantins',
                'state_id' => 17,
            ),
            442 => 
            array (
                'id' => 1720978,
                'name' => 'Talismã',
                'state_id' => 17,
            ),
            443 => 
            array (
                'id' => 1721000,
                'name' => 'Palmas',
                'state_id' => 17,
            ),
            444 => 
            array (
                'id' => 1721109,
                'name' => 'Tocantínia',
                'state_id' => 17,
            ),
            445 => 
            array (
                'id' => 1721208,
                'name' => 'Tocantinópolis',
                'state_id' => 17,
            ),
            446 => 
            array (
                'id' => 1721257,
                'name' => 'Tupirama',
                'state_id' => 17,
            ),
            447 => 
            array (
                'id' => 1721307,
                'name' => 'Tupiratins',
                'state_id' => 17,
            ),
            448 => 
            array (
                'id' => 1722081,
                'name' => 'Wanderlândia',
                'state_id' => 17,
            ),
            449 => 
            array (
                'id' => 1722107,
                'name' => 'Xambioá',
                'state_id' => 17,
            ),
            450 => 
            array (
                'id' => 2100055,
                'name' => 'Açailândia',
                'state_id' => 21,
            ),
            451 => 
            array (
                'id' => 2100105,
                'name' => 'Afonso Cunha',
                'state_id' => 21,
            ),
            452 => 
            array (
                'id' => 2100154,
                'name' => 'Água Doce do Maranhão',
                'state_id' => 21,
            ),
            453 => 
            array (
                'id' => 2100204,
                'name' => 'Alcântara',
                'state_id' => 21,
            ),
            454 => 
            array (
                'id' => 2100303,
                'name' => 'Aldeias Altas',
                'state_id' => 21,
            ),
            455 => 
            array (
                'id' => 2100402,
                'name' => 'Altamira do Maranhão',
                'state_id' => 21,
            ),
            456 => 
            array (
                'id' => 2100436,
                'name' => 'Alto Alegre do Maranhão',
                'state_id' => 21,
            ),
            457 => 
            array (
                'id' => 2100477,
                'name' => 'Alto Alegre do Pindaré',
                'state_id' => 21,
            ),
            458 => 
            array (
                'id' => 2100501,
                'name' => 'Alto Parnaíba',
                'state_id' => 21,
            ),
            459 => 
            array (
                'id' => 2100550,
                'name' => 'Amapá do Maranhão',
                'state_id' => 21,
            ),
            460 => 
            array (
                'id' => 2100600,
                'name' => 'Amarante do Maranhão',
                'state_id' => 21,
            ),
            461 => 
            array (
                'id' => 2100709,
                'name' => 'Anajatuba',
                'state_id' => 21,
            ),
            462 => 
            array (
                'id' => 2100808,
                'name' => 'Anapurus',
                'state_id' => 21,
            ),
            463 => 
            array (
                'id' => 2100832,
                'name' => 'Apicum-Açu',
                'state_id' => 21,
            ),
            464 => 
            array (
                'id' => 2100873,
                'name' => 'Araguanã',
                'state_id' => 21,
            ),
            465 => 
            array (
                'id' => 2100907,
                'name' => 'Araioses',
                'state_id' => 21,
            ),
            466 => 
            array (
                'id' => 2100956,
                'name' => 'Arame',
                'state_id' => 21,
            ),
            467 => 
            array (
                'id' => 2101004,
                'name' => 'Arari',
                'state_id' => 21,
            ),
            468 => 
            array (
                'id' => 2101103,
                'name' => 'Axixá',
                'state_id' => 21,
            ),
            469 => 
            array (
                'id' => 2101202,
                'name' => 'Bacabal',
                'state_id' => 21,
            ),
            470 => 
            array (
                'id' => 2101251,
                'name' => 'Bacabeira',
                'state_id' => 21,
            ),
            471 => 
            array (
                'id' => 2101301,
                'name' => 'Bacuri',
                'state_id' => 21,
            ),
            472 => 
            array (
                'id' => 2101350,
                'name' => 'Bacurituba',
                'state_id' => 21,
            ),
            473 => 
            array (
                'id' => 2101400,
                'name' => 'Balsas',
                'state_id' => 21,
            ),
            474 => 
            array (
                'id' => 2101509,
                'name' => 'Barão de Grajaú',
                'state_id' => 21,
            ),
            475 => 
            array (
                'id' => 2101608,
                'name' => 'Barra do Corda',
                'state_id' => 21,
            ),
            476 => 
            array (
                'id' => 2101707,
                'name' => 'Barreirinhas',
                'state_id' => 21,
            ),
            477 => 
            array (
                'id' => 2101731,
                'name' => 'Belágua',
                'state_id' => 21,
            ),
            478 => 
            array (
                'id' => 2101772,
                'name' => 'Bela Vista do Maranhão',
                'state_id' => 21,
            ),
            479 => 
            array (
                'id' => 2101806,
                'name' => 'Benedito Leite',
                'state_id' => 21,
            ),
            480 => 
            array (
                'id' => 2101905,
                'name' => 'Bequimão',
                'state_id' => 21,
            ),
            481 => 
            array (
                'id' => 2101939,
                'name' => 'Bernardo do Mearim',
                'state_id' => 21,
            ),
            482 => 
            array (
                'id' => 2101970,
                'name' => 'Boa Vista do Gurupi',
                'state_id' => 21,
            ),
            483 => 
            array (
                'id' => 2102002,
                'name' => 'Bom Jardim',
                'state_id' => 21,
            ),
            484 => 
            array (
                'id' => 2102036,
                'name' => 'Bom Jesus das Selvas',
                'state_id' => 21,
            ),
            485 => 
            array (
                'id' => 2102077,
                'name' => 'Bom Lugar',
                'state_id' => 21,
            ),
            486 => 
            array (
                'id' => 2102101,
                'name' => 'Brejo',
                'state_id' => 21,
            ),
            487 => 
            array (
                'id' => 2102150,
                'name' => 'Brejo de Areia',
                'state_id' => 21,
            ),
            488 => 
            array (
                'id' => 2102200,
                'name' => 'Buriti',
                'state_id' => 21,
            ),
            489 => 
            array (
                'id' => 2102309,
                'name' => 'Buriti Bravo',
                'state_id' => 21,
            ),
            490 => 
            array (
                'id' => 2102325,
                'name' => 'Buriticupu',
                'state_id' => 21,
            ),
            491 => 
            array (
                'id' => 2102358,
                'name' => 'Buritirana',
                'state_id' => 21,
            ),
            492 => 
            array (
                'id' => 2102374,
                'name' => 'Cachoeira Grande',
                'state_id' => 21,
            ),
            493 => 
            array (
                'id' => 2102408,
                'name' => 'Cajapió',
                'state_id' => 21,
            ),
            494 => 
            array (
                'id' => 2102507,
                'name' => 'Cajari',
                'state_id' => 21,
            ),
            495 => 
            array (
                'id' => 2102556,
                'name' => 'Campestre do Maranhão',
                'state_id' => 21,
            ),
            496 => 
            array (
                'id' => 2102606,
                'name' => 'Cândido Mendes',
                'state_id' => 21,
            ),
            497 => 
            array (
                'id' => 2102705,
                'name' => 'Cantanhede',
                'state_id' => 21,
            ),
            498 => 
            array (
                'id' => 2102754,
                'name' => 'Capinzal do Norte',
                'state_id' => 21,
            ),
            499 => 
            array (
                'id' => 2102804,
                'name' => 'Carolina',
                'state_id' => 21,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 2102903,
                'name' => 'Carutapera',
                'state_id' => 21,
            ),
            1 => 
            array (
                'id' => 2103000,
                'name' => 'Caxias',
                'state_id' => 21,
            ),
            2 => 
            array (
                'id' => 2103109,
                'name' => 'Cedral',
                'state_id' => 21,
            ),
            3 => 
            array (
                'id' => 2103125,
                'name' => 'Central do Maranhão',
                'state_id' => 21,
            ),
            4 => 
            array (
                'id' => 2103158,
                'name' => 'Centro do Guilherme',
                'state_id' => 21,
            ),
            5 => 
            array (
                'id' => 2103174,
                'name' => 'Centro Novo do Maranhão',
                'state_id' => 21,
            ),
            6 => 
            array (
                'id' => 2103208,
                'name' => 'Chapadinha',
                'state_id' => 21,
            ),
            7 => 
            array (
                'id' => 2103257,
                'name' => 'Cidelândia',
                'state_id' => 21,
            ),
            8 => 
            array (
                'id' => 2103307,
                'name' => 'Codó',
                'state_id' => 21,
            ),
            9 => 
            array (
                'id' => 2103406,
                'name' => 'Coelho Neto',
                'state_id' => 21,
            ),
            10 => 
            array (
                'id' => 2103505,
                'name' => 'Colinas',
                'state_id' => 21,
            ),
            11 => 
            array (
                'id' => 2103554,
                'name' => 'Conceição do Lago-Açu',
                'state_id' => 21,
            ),
            12 => 
            array (
                'id' => 2103604,
                'name' => 'Coroatá',
                'state_id' => 21,
            ),
            13 => 
            array (
                'id' => 2103703,
                'name' => 'Cururupu',
                'state_id' => 21,
            ),
            14 => 
            array (
                'id' => 2103752,
                'name' => 'Davinópolis',
                'state_id' => 21,
            ),
            15 => 
            array (
                'id' => 2103802,
                'name' => 'Dom Pedro',
                'state_id' => 21,
            ),
            16 => 
            array (
                'id' => 2103901,
                'name' => 'Duque Bacelar',
                'state_id' => 21,
            ),
            17 => 
            array (
                'id' => 2104008,
                'name' => 'Esperantinópolis',
                'state_id' => 21,
            ),
            18 => 
            array (
                'id' => 2104057,
                'name' => 'Estreito',
                'state_id' => 21,
            ),
            19 => 
            array (
                'id' => 2104073,
                'name' => 'Feira Nova do Maranhão',
                'state_id' => 21,
            ),
            20 => 
            array (
                'id' => 2104081,
                'name' => 'Fernando Falcão',
                'state_id' => 21,
            ),
            21 => 
            array (
                'id' => 2104099,
                'name' => 'Formosa da Serra Negra',
                'state_id' => 21,
            ),
            22 => 
            array (
                'id' => 2104107,
                'name' => 'Fortaleza dos Nogueiras',
                'state_id' => 21,
            ),
            23 => 
            array (
                'id' => 2104206,
                'name' => 'Fortuna',
                'state_id' => 21,
            ),
            24 => 
            array (
                'id' => 2104305,
                'name' => 'Godofredo Viana',
                'state_id' => 21,
            ),
            25 => 
            array (
                'id' => 2104404,
                'name' => 'Gonçalves Dias',
                'state_id' => 21,
            ),
            26 => 
            array (
                'id' => 2104503,
                'name' => 'Governador Archer',
                'state_id' => 21,
            ),
            27 => 
            array (
                'id' => 2104552,
                'name' => 'Governador Edison Lobão',
                'state_id' => 21,
            ),
            28 => 
            array (
                'id' => 2104602,
                'name' => 'Governador Eugênio Barros',
                'state_id' => 21,
            ),
            29 => 
            array (
                'id' => 2104628,
                'name' => 'Governador Luiz Rocha',
                'state_id' => 21,
            ),
            30 => 
            array (
                'id' => 2104651,
                'name' => 'Governador Newton Bello',
                'state_id' => 21,
            ),
            31 => 
            array (
                'id' => 2104677,
                'name' => 'Governador Nunes Freire',
                'state_id' => 21,
            ),
            32 => 
            array (
                'id' => 2104701,
                'name' => 'Graça Aranha',
                'state_id' => 21,
            ),
            33 => 
            array (
                'id' => 2104800,
                'name' => 'Grajaú',
                'state_id' => 21,
            ),
            34 => 
            array (
                'id' => 2104909,
                'name' => 'Guimarães',
                'state_id' => 21,
            ),
            35 => 
            array (
                'id' => 2105005,
                'name' => 'Humberto de Campos',
                'state_id' => 21,
            ),
            36 => 
            array (
                'id' => 2105104,
                'name' => 'Icatu',
                'state_id' => 21,
            ),
            37 => 
            array (
                'id' => 2105153,
                'name' => 'Igarapé do Meio',
                'state_id' => 21,
            ),
            38 => 
            array (
                'id' => 2105203,
                'name' => 'Igarapé Grande',
                'state_id' => 21,
            ),
            39 => 
            array (
                'id' => 2105302,
                'name' => 'Imperatriz',
                'state_id' => 21,
            ),
            40 => 
            array (
                'id' => 2105351,
                'name' => 'Itaipava do Grajaú',
                'state_id' => 21,
            ),
            41 => 
            array (
                'id' => 2105401,
                'name' => 'Itapecuru Mirim',
                'state_id' => 21,
            ),
            42 => 
            array (
                'id' => 2105427,
                'name' => 'Itinga do Maranhão',
                'state_id' => 21,
            ),
            43 => 
            array (
                'id' => 2105450,
                'name' => 'Jatobá',
                'state_id' => 21,
            ),
            44 => 
            array (
                'id' => 2105476,
                'name' => 'Jenipapo dos Vieiras',
                'state_id' => 21,
            ),
            45 => 
            array (
                'id' => 2105500,
                'name' => 'João Lisboa',
                'state_id' => 21,
            ),
            46 => 
            array (
                'id' => 2105609,
                'name' => 'Joselândia',
                'state_id' => 21,
            ),
            47 => 
            array (
                'id' => 2105658,
                'name' => 'Junco do Maranhão',
                'state_id' => 21,
            ),
            48 => 
            array (
                'id' => 2105708,
                'name' => 'Lago da Pedra',
                'state_id' => 21,
            ),
            49 => 
            array (
                'id' => 2105807,
                'name' => 'Lago do Junco',
                'state_id' => 21,
            ),
            50 => 
            array (
                'id' => 2105906,
                'name' => 'Lago Verde',
                'state_id' => 21,
            ),
            51 => 
            array (
                'id' => 2105922,
                'name' => 'Lagoa do Mato',
                'state_id' => 21,
            ),
            52 => 
            array (
                'id' => 2105948,
                'name' => 'Lago dos Rodrigues',
                'state_id' => 21,
            ),
            53 => 
            array (
                'id' => 2105963,
                'name' => 'Lagoa Grande do Maranhão',
                'state_id' => 21,
            ),
            54 => 
            array (
                'id' => 2105989,
                'name' => 'Lajeado Novo',
                'state_id' => 21,
            ),
            55 => 
            array (
                'id' => 2106003,
                'name' => 'Lima Campos',
                'state_id' => 21,
            ),
            56 => 
            array (
                'id' => 2106102,
                'name' => 'Loreto',
                'state_id' => 21,
            ),
            57 => 
            array (
                'id' => 2106201,
                'name' => 'Luís Domingues',
                'state_id' => 21,
            ),
            58 => 
            array (
                'id' => 2106300,
                'name' => 'Magalhães de Almeida',
                'state_id' => 21,
            ),
            59 => 
            array (
                'id' => 2106326,
                'name' => 'Maracaçumé',
                'state_id' => 21,
            ),
            60 => 
            array (
                'id' => 2106359,
                'name' => 'Marajá do Sena',
                'state_id' => 21,
            ),
            61 => 
            array (
                'id' => 2106375,
                'name' => 'Maranhãozinho',
                'state_id' => 21,
            ),
            62 => 
            array (
                'id' => 2106409,
                'name' => 'Mata Roma',
                'state_id' => 21,
            ),
            63 => 
            array (
                'id' => 2106508,
                'name' => 'Matinha',
                'state_id' => 21,
            ),
            64 => 
            array (
                'id' => 2106607,
                'name' => 'Matões',
                'state_id' => 21,
            ),
            65 => 
            array (
                'id' => 2106631,
                'name' => 'Matões do Norte',
                'state_id' => 21,
            ),
            66 => 
            array (
                'id' => 2106672,
                'name' => 'Milagres do Maranhão',
                'state_id' => 21,
            ),
            67 => 
            array (
                'id' => 2106706,
                'name' => 'Mirador',
                'state_id' => 21,
            ),
            68 => 
            array (
                'id' => 2106755,
                'name' => 'Miranda do Norte',
                'state_id' => 21,
            ),
            69 => 
            array (
                'id' => 2106805,
                'name' => 'Mirinzal',
                'state_id' => 21,
            ),
            70 => 
            array (
                'id' => 2106904,
                'name' => 'Monção',
                'state_id' => 21,
            ),
            71 => 
            array (
                'id' => 2107001,
                'name' => 'Montes Altos',
                'state_id' => 21,
            ),
            72 => 
            array (
                'id' => 2107100,
                'name' => 'Morros',
                'state_id' => 21,
            ),
            73 => 
            array (
                'id' => 2107209,
                'name' => 'Nina Rodrigues',
                'state_id' => 21,
            ),
            74 => 
            array (
                'id' => 2107258,
                'name' => 'Nova Colinas',
                'state_id' => 21,
            ),
            75 => 
            array (
                'id' => 2107308,
                'name' => 'Nova Iorque',
                'state_id' => 21,
            ),
            76 => 
            array (
                'id' => 2107357,
                'name' => 'Nova Olinda do Maranhão',
                'state_id' => 21,
            ),
            77 => 
            array (
                'id' => 2107407,
                'name' => 'Olho d\'Água das Cunhãs',
                'state_id' => 21,
            ),
            78 => 
            array (
                'id' => 2107456,
                'name' => 'Olinda Nova do Maranhão',
                'state_id' => 21,
            ),
            79 => 
            array (
                'id' => 2107506,
                'name' => 'Paço do Lumiar',
                'state_id' => 21,
            ),
            80 => 
            array (
                'id' => 2107605,
                'name' => 'Palmeirândia',
                'state_id' => 21,
            ),
            81 => 
            array (
                'id' => 2107704,
                'name' => 'Paraibano',
                'state_id' => 21,
            ),
            82 => 
            array (
                'id' => 2107803,
                'name' => 'Parnarama',
                'state_id' => 21,
            ),
            83 => 
            array (
                'id' => 2107902,
                'name' => 'Passagem Franca',
                'state_id' => 21,
            ),
            84 => 
            array (
                'id' => 2108009,
                'name' => 'Pastos Bons',
                'state_id' => 21,
            ),
            85 => 
            array (
                'id' => 2108058,
                'name' => 'Paulino Neves',
                'state_id' => 21,
            ),
            86 => 
            array (
                'id' => 2108108,
                'name' => 'Paulo Ramos',
                'state_id' => 21,
            ),
            87 => 
            array (
                'id' => 2108207,
                'name' => 'Pedreiras',
                'state_id' => 21,
            ),
            88 => 
            array (
                'id' => 2108256,
                'name' => 'Pedro do Rosário',
                'state_id' => 21,
            ),
            89 => 
            array (
                'id' => 2108306,
                'name' => 'Penalva',
                'state_id' => 21,
            ),
            90 => 
            array (
                'id' => 2108405,
                'name' => 'Peri Mirim',
                'state_id' => 21,
            ),
            91 => 
            array (
                'id' => 2108454,
                'name' => 'Peritoró',
                'state_id' => 21,
            ),
            92 => 
            array (
                'id' => 2108504,
                'name' => 'Pindaré-Mirim',
                'state_id' => 21,
            ),
            93 => 
            array (
                'id' => 2108603,
                'name' => 'Pinheiro',
                'state_id' => 21,
            ),
            94 => 
            array (
                'id' => 2108702,
                'name' => 'Pio XII',
                'state_id' => 21,
            ),
            95 => 
            array (
                'id' => 2108801,
                'name' => 'Pirapemas',
                'state_id' => 21,
            ),
            96 => 
            array (
                'id' => 2108900,
                'name' => 'Poção de Pedras',
                'state_id' => 21,
            ),
            97 => 
            array (
                'id' => 2109007,
                'name' => 'Porto Franco',
                'state_id' => 21,
            ),
            98 => 
            array (
                'id' => 2109056,
                'name' => 'Porto Rico do Maranhão',
                'state_id' => 21,
            ),
            99 => 
            array (
                'id' => 2109106,
                'name' => 'Presidente Dutra',
                'state_id' => 21,
            ),
            100 => 
            array (
                'id' => 2109205,
                'name' => 'Presidente Juscelino',
                'state_id' => 21,
            ),
            101 => 
            array (
                'id' => 2109239,
                'name' => 'Presidente Médici',
                'state_id' => 21,
            ),
            102 => 
            array (
                'id' => 2109270,
                'name' => 'Presidente Sarney',
                'state_id' => 21,
            ),
            103 => 
            array (
                'id' => 2109304,
                'name' => 'Presidente Vargas',
                'state_id' => 21,
            ),
            104 => 
            array (
                'id' => 2109403,
                'name' => 'Primeira Cruz',
                'state_id' => 21,
            ),
            105 => 
            array (
                'id' => 2109452,
                'name' => 'Raposa',
                'state_id' => 21,
            ),
            106 => 
            array (
                'id' => 2109502,
                'name' => 'Riachão',
                'state_id' => 21,
            ),
            107 => 
            array (
                'id' => 2109551,
                'name' => 'Ribamar Fiquene',
                'state_id' => 21,
            ),
            108 => 
            array (
                'id' => 2109601,
                'name' => 'Rosário',
                'state_id' => 21,
            ),
            109 => 
            array (
                'id' => 2109700,
                'name' => 'Sambaíba',
                'state_id' => 21,
            ),
            110 => 
            array (
                'id' => 2109759,
                'name' => 'Santa Filomena do Maranhão',
                'state_id' => 21,
            ),
            111 => 
            array (
                'id' => 2109809,
                'name' => 'Santa Helena',
                'state_id' => 21,
            ),
            112 => 
            array (
                'id' => 2109908,
                'name' => 'Santa Inês',
                'state_id' => 21,
            ),
            113 => 
            array (
                'id' => 2110005,
                'name' => 'Santa Luzia',
                'state_id' => 21,
            ),
            114 => 
            array (
                'id' => 2110039,
                'name' => 'Santa Luzia do Paruá',
                'state_id' => 21,
            ),
            115 => 
            array (
                'id' => 2110104,
                'name' => 'Santa Quitéria do Maranhão',
                'state_id' => 21,
            ),
            116 => 
            array (
                'id' => 2110203,
                'name' => 'Santa Rita',
                'state_id' => 21,
            ),
            117 => 
            array (
                'id' => 2110237,
                'name' => 'Santana do Maranhão',
                'state_id' => 21,
            ),
            118 => 
            array (
                'id' => 2110278,
                'name' => 'Santo Amaro do Maranhão',
                'state_id' => 21,
            ),
            119 => 
            array (
                'id' => 2110302,
                'name' => 'Santo Antônio dos Lopes',
                'state_id' => 21,
            ),
            120 => 
            array (
                'id' => 2110401,
                'name' => 'São Benedito do Rio Preto',
                'state_id' => 21,
            ),
            121 => 
            array (
                'id' => 2110500,
                'name' => 'São Bento',
                'state_id' => 21,
            ),
            122 => 
            array (
                'id' => 2110609,
                'name' => 'São Bernardo',
                'state_id' => 21,
            ),
            123 => 
            array (
                'id' => 2110658,
                'name' => 'São Domingos do Azeitão',
                'state_id' => 21,
            ),
            124 => 
            array (
                'id' => 2110708,
                'name' => 'São Domingos do Maranhão',
                'state_id' => 21,
            ),
            125 => 
            array (
                'id' => 2110807,
                'name' => 'São Félix de Balsas',
                'state_id' => 21,
            ),
            126 => 
            array (
                'id' => 2110856,
                'name' => 'São Francisco do Brejão',
                'state_id' => 21,
            ),
            127 => 
            array (
                'id' => 2110906,
                'name' => 'São Francisco do Maranhão',
                'state_id' => 21,
            ),
            128 => 
            array (
                'id' => 2111003,
                'name' => 'São João Batista',
                'state_id' => 21,
            ),
            129 => 
            array (
                'id' => 2111029,
                'name' => 'São João do Carú',
                'state_id' => 21,
            ),
            130 => 
            array (
                'id' => 2111052,
                'name' => 'São João do Paraíso',
                'state_id' => 21,
            ),
            131 => 
            array (
                'id' => 2111078,
                'name' => 'São João do Soter',
                'state_id' => 21,
            ),
            132 => 
            array (
                'id' => 2111102,
                'name' => 'São João dos Patos',
                'state_id' => 21,
            ),
            133 => 
            array (
                'id' => 2111201,
                'name' => 'São José de Ribamar',
                'state_id' => 21,
            ),
            134 => 
            array (
                'id' => 2111250,
                'name' => 'São José dos Basílios',
                'state_id' => 21,
            ),
            135 => 
            array (
                'id' => 2111300,
                'name' => 'São Luís',
                'state_id' => 21,
            ),
            136 => 
            array (
                'id' => 2111409,
                'name' => 'São Luís Gonzaga do Maranhão',
                'state_id' => 21,
            ),
            137 => 
            array (
                'id' => 2111508,
                'name' => 'São Mateus do Maranhão',
                'state_id' => 21,
            ),
            138 => 
            array (
                'id' => 2111532,
                'name' => 'São Pedro da Água Branca',
                'state_id' => 21,
            ),
            139 => 
            array (
                'id' => 2111573,
                'name' => 'São Pedro dos Crentes',
                'state_id' => 21,
            ),
            140 => 
            array (
                'id' => 2111607,
                'name' => 'São Raimundo das Mangabeiras',
                'state_id' => 21,
            ),
            141 => 
            array (
                'id' => 2111631,
                'name' => 'São Raimundo do Doca Bezerra',
                'state_id' => 21,
            ),
            142 => 
            array (
                'id' => 2111672,
                'name' => 'São Roberto',
                'state_id' => 21,
            ),
            143 => 
            array (
                'id' => 2111706,
                'name' => 'São Vicente Ferrer',
                'state_id' => 21,
            ),
            144 => 
            array (
                'id' => 2111722,
                'name' => 'Satubinha',
                'state_id' => 21,
            ),
            145 => 
            array (
                'id' => 2111748,
                'name' => 'Senador Alexandre Costa',
                'state_id' => 21,
            ),
            146 => 
            array (
                'id' => 2111763,
                'name' => 'Senador La Rocque',
                'state_id' => 21,
            ),
            147 => 
            array (
                'id' => 2111789,
                'name' => 'Serrano do Maranhão',
                'state_id' => 21,
            ),
            148 => 
            array (
                'id' => 2111805,
                'name' => 'Sítio Novo',
                'state_id' => 21,
            ),
            149 => 
            array (
                'id' => 2111904,
                'name' => 'Sucupira do Norte',
                'state_id' => 21,
            ),
            150 => 
            array (
                'id' => 2111953,
                'name' => 'Sucupira do Riachão',
                'state_id' => 21,
            ),
            151 => 
            array (
                'id' => 2112001,
                'name' => 'Tasso Fragoso',
                'state_id' => 21,
            ),
            152 => 
            array (
                'id' => 2112100,
                'name' => 'Timbiras',
                'state_id' => 21,
            ),
            153 => 
            array (
                'id' => 2112209,
                'name' => 'Timon',
                'state_id' => 21,
            ),
            154 => 
            array (
                'id' => 2112233,
                'name' => 'Trizidela do Vale',
                'state_id' => 21,
            ),
            155 => 
            array (
                'id' => 2112274,
                'name' => 'Tufilândia',
                'state_id' => 21,
            ),
            156 => 
            array (
                'id' => 2112308,
                'name' => 'Tuntum',
                'state_id' => 21,
            ),
            157 => 
            array (
                'id' => 2112407,
                'name' => 'Turiaçu',
                'state_id' => 21,
            ),
            158 => 
            array (
                'id' => 2112456,
                'name' => 'Turilândia',
                'state_id' => 21,
            ),
            159 => 
            array (
                'id' => 2112506,
                'name' => 'Tutóia',
                'state_id' => 21,
            ),
            160 => 
            array (
                'id' => 2112605,
                'name' => 'Urbano Santos',
                'state_id' => 21,
            ),
            161 => 
            array (
                'id' => 2112704,
                'name' => 'Vargem Grande',
                'state_id' => 21,
            ),
            162 => 
            array (
                'id' => 2112803,
                'name' => 'Viana',
                'state_id' => 21,
            ),
            163 => 
            array (
                'id' => 2112852,
                'name' => 'Vila Nova dos Martírios',
                'state_id' => 21,
            ),
            164 => 
            array (
                'id' => 2112902,
                'name' => 'Vitória do Mearim',
                'state_id' => 21,
            ),
            165 => 
            array (
                'id' => 2113009,
                'name' => 'Vitorino Freire',
                'state_id' => 21,
            ),
            166 => 
            array (
                'id' => 2114007,
                'name' => 'Zé Doca',
                'state_id' => 21,
            ),
            167 => 
            array (
                'id' => 2200053,
                'name' => 'Acauã',
                'state_id' => 22,
            ),
            168 => 
            array (
                'id' => 2200103,
                'name' => 'Agricolândia',
                'state_id' => 22,
            ),
            169 => 
            array (
                'id' => 2200202,
                'name' => 'Água Branca',
                'state_id' => 22,
            ),
            170 => 
            array (
                'id' => 2200251,
                'name' => 'Alagoinha do Piauí',
                'state_id' => 22,
            ),
            171 => 
            array (
                'id' => 2200277,
                'name' => 'Alegrete do Piauí',
                'state_id' => 22,
            ),
            172 => 
            array (
                'id' => 2200301,
                'name' => 'Alto Longá',
                'state_id' => 22,
            ),
            173 => 
            array (
                'id' => 2200400,
                'name' => 'Altos',
                'state_id' => 22,
            ),
            174 => 
            array (
                'id' => 2200459,
                'name' => 'Alvorada do Gurguéia',
                'state_id' => 22,
            ),
            175 => 
            array (
                'id' => 2200509,
                'name' => 'Amarante',
                'state_id' => 22,
            ),
            176 => 
            array (
                'id' => 2200608,
                'name' => 'Angical do Piauí',
                'state_id' => 22,
            ),
            177 => 
            array (
                'id' => 2200707,
                'name' => 'Anísio de Abreu',
                'state_id' => 22,
            ),
            178 => 
            array (
                'id' => 2200806,
                'name' => 'Antônio Almeida',
                'state_id' => 22,
            ),
            179 => 
            array (
                'id' => 2200905,
                'name' => 'Aroazes',
                'state_id' => 22,
            ),
            180 => 
            array (
                'id' => 2200954,
                'name' => 'Aroeiras do Itaim',
                'state_id' => 22,
            ),
            181 => 
            array (
                'id' => 2201002,
                'name' => 'Arraial',
                'state_id' => 22,
            ),
            182 => 
            array (
                'id' => 2201051,
                'name' => 'Assunção do Piauí',
                'state_id' => 22,
            ),
            183 => 
            array (
                'id' => 2201101,
                'name' => 'Avelino Lopes',
                'state_id' => 22,
            ),
            184 => 
            array (
                'id' => 2201150,
                'name' => 'Baixa Grande do Ribeiro',
                'state_id' => 22,
            ),
            185 => 
            array (
                'id' => 2201176,
                'name' => 'Barra D\'Alcântara',
                'state_id' => 22,
            ),
            186 => 
            array (
                'id' => 2201200,
                'name' => 'Barras',
                'state_id' => 22,
            ),
            187 => 
            array (
                'id' => 2201309,
                'name' => 'Barreiras do Piauí',
                'state_id' => 22,
            ),
            188 => 
            array (
                'id' => 2201408,
                'name' => 'Barro Duro',
                'state_id' => 22,
            ),
            189 => 
            array (
                'id' => 2201507,
                'name' => 'Batalha',
                'state_id' => 22,
            ),
            190 => 
            array (
                'id' => 2201556,
                'name' => 'Bela Vista do Piauí',
                'state_id' => 22,
            ),
            191 => 
            array (
                'id' => 2201572,
                'name' => 'Belém do Piauí',
                'state_id' => 22,
            ),
            192 => 
            array (
                'id' => 2201606,
                'name' => 'Beneditinos',
                'state_id' => 22,
            ),
            193 => 
            array (
                'id' => 2201705,
                'name' => 'Bertolínia',
                'state_id' => 22,
            ),
            194 => 
            array (
                'id' => 2201739,
                'name' => 'Betânia do Piauí',
                'state_id' => 22,
            ),
            195 => 
            array (
                'id' => 2201770,
                'name' => 'Boa Hora',
                'state_id' => 22,
            ),
            196 => 
            array (
                'id' => 2201804,
                'name' => 'Bocaina',
                'state_id' => 22,
            ),
            197 => 
            array (
                'id' => 2201903,
                'name' => 'Bom Jesus',
                'state_id' => 22,
            ),
            198 => 
            array (
                'id' => 2201919,
                'name' => 'Bom Princípio do Piauí',
                'state_id' => 22,
            ),
            199 => 
            array (
                'id' => 2201929,
                'name' => 'Bonfim do Piauí',
                'state_id' => 22,
            ),
            200 => 
            array (
                'id' => 2201945,
                'name' => 'Boqueirão do Piauí',
                'state_id' => 22,
            ),
            201 => 
            array (
                'id' => 2201960,
                'name' => 'Brasileira',
                'state_id' => 22,
            ),
            202 => 
            array (
                'id' => 2201988,
                'name' => 'Brejo do Piauí',
                'state_id' => 22,
            ),
            203 => 
            array (
                'id' => 2202000,
                'name' => 'Buriti dos Lopes',
                'state_id' => 22,
            ),
            204 => 
            array (
                'id' => 2202026,
                'name' => 'Buriti dos Montes',
                'state_id' => 22,
            ),
            205 => 
            array (
                'id' => 2202059,
                'name' => 'Cabeceiras do Piauí',
                'state_id' => 22,
            ),
            206 => 
            array (
                'id' => 2202075,
                'name' => 'Cajazeiras do Piauí',
                'state_id' => 22,
            ),
            207 => 
            array (
                'id' => 2202083,
                'name' => 'Cajueiro da Praia',
                'state_id' => 22,
            ),
            208 => 
            array (
                'id' => 2202091,
                'name' => 'Caldeirão Grande do Piauí',
                'state_id' => 22,
            ),
            209 => 
            array (
                'id' => 2202109,
                'name' => 'Campinas do Piauí',
                'state_id' => 22,
            ),
            210 => 
            array (
                'id' => 2202117,
                'name' => 'Campo Alegre do Fidalgo',
                'state_id' => 22,
            ),
            211 => 
            array (
                'id' => 2202133,
                'name' => 'Campo Grande do Piauí',
                'state_id' => 22,
            ),
            212 => 
            array (
                'id' => 2202174,
                'name' => 'Campo Largo do Piauí',
                'state_id' => 22,
            ),
            213 => 
            array (
                'id' => 2202208,
                'name' => 'Campo Maior',
                'state_id' => 22,
            ),
            214 => 
            array (
                'id' => 2202251,
                'name' => 'Canavieira',
                'state_id' => 22,
            ),
            215 => 
            array (
                'id' => 2202307,
                'name' => 'Canto do Buriti',
                'state_id' => 22,
            ),
            216 => 
            array (
                'id' => 2202406,
                'name' => 'Capitão de Campos',
                'state_id' => 22,
            ),
            217 => 
            array (
                'id' => 2202455,
                'name' => 'Capitão Gervásio Oliveira',
                'state_id' => 22,
            ),
            218 => 
            array (
                'id' => 2202505,
                'name' => 'Caracol',
                'state_id' => 22,
            ),
            219 => 
            array (
                'id' => 2202539,
                'name' => 'Caraúbas do Piauí',
                'state_id' => 22,
            ),
            220 => 
            array (
                'id' => 2202554,
                'name' => 'Caridade do Piauí',
                'state_id' => 22,
            ),
            221 => 
            array (
                'id' => 2202604,
                'name' => 'Castelo do Piauí',
                'state_id' => 22,
            ),
            222 => 
            array (
                'id' => 2202653,
                'name' => 'Caxingó',
                'state_id' => 22,
            ),
            223 => 
            array (
                'id' => 2202703,
                'name' => 'Cocal',
                'state_id' => 22,
            ),
            224 => 
            array (
                'id' => 2202711,
                'name' => 'Cocal de Telha',
                'state_id' => 22,
            ),
            225 => 
            array (
                'id' => 2202729,
                'name' => 'Cocal dos Alves',
                'state_id' => 22,
            ),
            226 => 
            array (
                'id' => 2202737,
                'name' => 'Coivaras',
                'state_id' => 22,
            ),
            227 => 
            array (
                'id' => 2202752,
                'name' => 'Colônia do Gurguéia',
                'state_id' => 22,
            ),
            228 => 
            array (
                'id' => 2202778,
                'name' => 'Colônia do Piauí',
                'state_id' => 22,
            ),
            229 => 
            array (
                'id' => 2202802,
                'name' => 'Conceição do Canindé',
                'state_id' => 22,
            ),
            230 => 
            array (
                'id' => 2202851,
                'name' => 'Coronel José Dias',
                'state_id' => 22,
            ),
            231 => 
            array (
                'id' => 2202901,
                'name' => 'Corrente',
                'state_id' => 22,
            ),
            232 => 
            array (
                'id' => 2203008,
                'name' => 'Cristalândia do Piauí',
                'state_id' => 22,
            ),
            233 => 
            array (
                'id' => 2203107,
                'name' => 'Cristino Castro',
                'state_id' => 22,
            ),
            234 => 
            array (
                'id' => 2203206,
                'name' => 'Curimatá',
                'state_id' => 22,
            ),
            235 => 
            array (
                'id' => 2203230,
                'name' => 'Currais',
                'state_id' => 22,
            ),
            236 => 
            array (
                'id' => 2203255,
                'name' => 'Curralinhos',
                'state_id' => 22,
            ),
            237 => 
            array (
                'id' => 2203271,
                'name' => 'Curral Novo do Piauí',
                'state_id' => 22,
            ),
            238 => 
            array (
                'id' => 2203305,
                'name' => 'Demerval Lobão',
                'state_id' => 22,
            ),
            239 => 
            array (
                'id' => 2203354,
                'name' => 'Dirceu Arcoverde',
                'state_id' => 22,
            ),
            240 => 
            array (
                'id' => 2203404,
                'name' => 'Dom Expedito Lopes',
                'state_id' => 22,
            ),
            241 => 
            array (
                'id' => 2203420,
                'name' => 'Domingos Mourão',
                'state_id' => 22,
            ),
            242 => 
            array (
                'id' => 2203453,
                'name' => 'Dom Inocêncio',
                'state_id' => 22,
            ),
            243 => 
            array (
                'id' => 2203503,
                'name' => 'Elesbão Veloso',
                'state_id' => 22,
            ),
            244 => 
            array (
                'id' => 2203602,
                'name' => 'Eliseu Martins',
                'state_id' => 22,
            ),
            245 => 
            array (
                'id' => 2203701,
                'name' => 'Esperantina',
                'state_id' => 22,
            ),
            246 => 
            array (
                'id' => 2203750,
                'name' => 'Fartura do Piauí',
                'state_id' => 22,
            ),
            247 => 
            array (
                'id' => 2203800,
                'name' => 'Flores do Piauí',
                'state_id' => 22,
            ),
            248 => 
            array (
                'id' => 2203859,
                'name' => 'Floresta do Piauí',
                'state_id' => 22,
            ),
            249 => 
            array (
                'id' => 2203909,
                'name' => 'Floriano',
                'state_id' => 22,
            ),
            250 => 
            array (
                'id' => 2204006,
                'name' => 'Francinópolis',
                'state_id' => 22,
            ),
            251 => 
            array (
                'id' => 2204105,
                'name' => 'Francisco Ayres',
                'state_id' => 22,
            ),
            252 => 
            array (
                'id' => 2204154,
                'name' => 'Francisco Macedo',
                'state_id' => 22,
            ),
            253 => 
            array (
                'id' => 2204204,
                'name' => 'Francisco Santos',
                'state_id' => 22,
            ),
            254 => 
            array (
                'id' => 2204303,
                'name' => 'Fronteiras',
                'state_id' => 22,
            ),
            255 => 
            array (
                'id' => 2204352,
                'name' => 'Geminiano',
                'state_id' => 22,
            ),
            256 => 
            array (
                'id' => 2204402,
                'name' => 'Gilbués',
                'state_id' => 22,
            ),
            257 => 
            array (
                'id' => 2204501,
                'name' => 'Guadalupe',
                'state_id' => 22,
            ),
            258 => 
            array (
                'id' => 2204550,
                'name' => 'Guaribas',
                'state_id' => 22,
            ),
            259 => 
            array (
                'id' => 2204600,
                'name' => 'Hugo Napoleão',
                'state_id' => 22,
            ),
            260 => 
            array (
                'id' => 2204659,
                'name' => 'Ilha Grande',
                'state_id' => 22,
            ),
            261 => 
            array (
                'id' => 2204709,
                'name' => 'Inhuma',
                'state_id' => 22,
            ),
            262 => 
            array (
                'id' => 2204808,
                'name' => 'Ipiranga do Piauí',
                'state_id' => 22,
            ),
            263 => 
            array (
                'id' => 2204907,
                'name' => 'Isaías Coelho',
                'state_id' => 22,
            ),
            264 => 
            array (
                'id' => 2205003,
                'name' => 'Itainópolis',
                'state_id' => 22,
            ),
            265 => 
            array (
                'id' => 2205102,
                'name' => 'Itaueira',
                'state_id' => 22,
            ),
            266 => 
            array (
                'id' => 2205151,
                'name' => 'Jacobina do Piauí',
                'state_id' => 22,
            ),
            267 => 
            array (
                'id' => 2205201,
                'name' => 'Jaicós',
                'state_id' => 22,
            ),
            268 => 
            array (
                'id' => 2205250,
                'name' => 'Jardim do Mulato',
                'state_id' => 22,
            ),
            269 => 
            array (
                'id' => 2205276,
                'name' => 'Jatobá do Piauí',
                'state_id' => 22,
            ),
            270 => 
            array (
                'id' => 2205300,
                'name' => 'Jerumenha',
                'state_id' => 22,
            ),
            271 => 
            array (
                'id' => 2205359,
                'name' => 'João Costa',
                'state_id' => 22,
            ),
            272 => 
            array (
                'id' => 2205409,
                'name' => 'Joaquim Pires',
                'state_id' => 22,
            ),
            273 => 
            array (
                'id' => 2205458,
                'name' => 'Joca Marques',
                'state_id' => 22,
            ),
            274 => 
            array (
                'id' => 2205508,
                'name' => 'José de Freitas',
                'state_id' => 22,
            ),
            275 => 
            array (
                'id' => 2205516,
                'name' => 'Juazeiro do Piauí',
                'state_id' => 22,
            ),
            276 => 
            array (
                'id' => 2205524,
                'name' => 'Júlio Borges',
                'state_id' => 22,
            ),
            277 => 
            array (
                'id' => 2205532,
                'name' => 'Jurema',
                'state_id' => 22,
            ),
            278 => 
            array (
                'id' => 2205540,
                'name' => 'Lagoinha do Piauí',
                'state_id' => 22,
            ),
            279 => 
            array (
                'id' => 2205557,
                'name' => 'Lagoa Alegre',
                'state_id' => 22,
            ),
            280 => 
            array (
                'id' => 2205565,
                'name' => 'Lagoa do Barro do Piauí',
                'state_id' => 22,
            ),
            281 => 
            array (
                'id' => 2205573,
                'name' => 'Lagoa de São Francisco',
                'state_id' => 22,
            ),
            282 => 
            array (
                'id' => 2205581,
                'name' => 'Lagoa do Piauí',
                'state_id' => 22,
            ),
            283 => 
            array (
                'id' => 2205599,
                'name' => 'Lagoa do Sítio',
                'state_id' => 22,
            ),
            284 => 
            array (
                'id' => 2205607,
                'name' => 'Landri Sales',
                'state_id' => 22,
            ),
            285 => 
            array (
                'id' => 2205706,
                'name' => 'Luís Correia',
                'state_id' => 22,
            ),
            286 => 
            array (
                'id' => 2205805,
                'name' => 'Luzilândia',
                'state_id' => 22,
            ),
            287 => 
            array (
                'id' => 2205854,
                'name' => 'Madeiro',
                'state_id' => 22,
            ),
            288 => 
            array (
                'id' => 2205904,
                'name' => 'Manoel Emídio',
                'state_id' => 22,
            ),
            289 => 
            array (
                'id' => 2205953,
                'name' => 'Marcolândia',
                'state_id' => 22,
            ),
            290 => 
            array (
                'id' => 2206001,
                'name' => 'Marcos Parente',
                'state_id' => 22,
            ),
            291 => 
            array (
                'id' => 2206050,
                'name' => 'Massapê do Piauí',
                'state_id' => 22,
            ),
            292 => 
            array (
                'id' => 2206100,
                'name' => 'Matias Olímpio',
                'state_id' => 22,
            ),
            293 => 
            array (
                'id' => 2206209,
                'name' => 'Miguel Alves',
                'state_id' => 22,
            ),
            294 => 
            array (
                'id' => 2206308,
                'name' => 'Miguel Leão',
                'state_id' => 22,
            ),
            295 => 
            array (
                'id' => 2206357,
                'name' => 'Milton Brandão',
                'state_id' => 22,
            ),
            296 => 
            array (
                'id' => 2206407,
                'name' => 'Monsenhor Gil',
                'state_id' => 22,
            ),
            297 => 
            array (
                'id' => 2206506,
                'name' => 'Monsenhor Hipólito',
                'state_id' => 22,
            ),
            298 => 
            array (
                'id' => 2206605,
                'name' => 'Monte Alegre do Piauí',
                'state_id' => 22,
            ),
            299 => 
            array (
                'id' => 2206654,
                'name' => 'Morro Cabeça no Tempo',
                'state_id' => 22,
            ),
            300 => 
            array (
                'id' => 2206670,
                'name' => 'Morro do Chapéu do Piauí',
                'state_id' => 22,
            ),
            301 => 
            array (
                'id' => 2206696,
                'name' => 'Murici dos Portelas',
                'state_id' => 22,
            ),
            302 => 
            array (
                'id' => 2206704,
                'name' => 'Nazaré do Piauí',
                'state_id' => 22,
            ),
            303 => 
            array (
                'id' => 2206720,
                'name' => 'Nazária',
                'state_id' => 22,
            ),
            304 => 
            array (
                'id' => 2206753,
                'name' => 'Nossa Senhora de Nazaré',
                'state_id' => 22,
            ),
            305 => 
            array (
                'id' => 2206803,
                'name' => 'Nossa Senhora dos Remédios',
                'state_id' => 22,
            ),
            306 => 
            array (
                'id' => 2206902,
                'name' => 'Novo Oriente do Piauí',
                'state_id' => 22,
            ),
            307 => 
            array (
                'id' => 2206951,
                'name' => 'Novo Santo Antônio',
                'state_id' => 22,
            ),
            308 => 
            array (
                'id' => 2207009,
                'name' => 'Oeiras',
                'state_id' => 22,
            ),
            309 => 
            array (
                'id' => 2207108,
                'name' => 'Olho D\'Água do Piauí',
                'state_id' => 22,
            ),
            310 => 
            array (
                'id' => 2207207,
                'name' => 'Padre Marcos',
                'state_id' => 22,
            ),
            311 => 
            array (
                'id' => 2207306,
                'name' => 'Paes Landim',
                'state_id' => 22,
            ),
            312 => 
            array (
                'id' => 2207355,
                'name' => 'Pajeú do Piauí',
                'state_id' => 22,
            ),
            313 => 
            array (
                'id' => 2207405,
                'name' => 'Palmeira do Piauí',
                'state_id' => 22,
            ),
            314 => 
            array (
                'id' => 2207504,
                'name' => 'Palmeirais',
                'state_id' => 22,
            ),
            315 => 
            array (
                'id' => 2207553,
                'name' => 'Paquetá',
                'state_id' => 22,
            ),
            316 => 
            array (
                'id' => 2207603,
                'name' => 'Parnaguá',
                'state_id' => 22,
            ),
            317 => 
            array (
                'id' => 2207702,
                'name' => 'Parnaíba',
                'state_id' => 22,
            ),
            318 => 
            array (
                'id' => 2207751,
                'name' => 'Passagem Franca do Piauí',
                'state_id' => 22,
            ),
            319 => 
            array (
                'id' => 2207777,
                'name' => 'Patos do Piauí',
                'state_id' => 22,
            ),
            320 => 
            array (
                'id' => 2207793,
                'name' => 'Pau D\'Arco do Piauí',
                'state_id' => 22,
            ),
            321 => 
            array (
                'id' => 2207801,
                'name' => 'Paulistana',
                'state_id' => 22,
            ),
            322 => 
            array (
                'id' => 2207850,
                'name' => 'Pavussu',
                'state_id' => 22,
            ),
            323 => 
            array (
                'id' => 2207900,
                'name' => 'Pedro II',
                'state_id' => 22,
            ),
            324 => 
            array (
                'id' => 2207934,
                'name' => 'Pedro Laurentino',
                'state_id' => 22,
            ),
            325 => 
            array (
                'id' => 2207959,
                'name' => 'Nova Santa Rita',
                'state_id' => 22,
            ),
            326 => 
            array (
                'id' => 2208007,
                'name' => 'Picos',
                'state_id' => 22,
            ),
            327 => 
            array (
                'id' => 2208106,
                'name' => 'Pimenteiras',
                'state_id' => 22,
            ),
            328 => 
            array (
                'id' => 2208205,
                'name' => 'Pio IX',
                'state_id' => 22,
            ),
            329 => 
            array (
                'id' => 2208304,
                'name' => 'Piracuruca',
                'state_id' => 22,
            ),
            330 => 
            array (
                'id' => 2208403,
                'name' => 'Piripiri',
                'state_id' => 22,
            ),
            331 => 
            array (
                'id' => 2208502,
                'name' => 'Porto',
                'state_id' => 22,
            ),
            332 => 
            array (
                'id' => 2208551,
                'name' => 'Porto Alegre do Piauí',
                'state_id' => 22,
            ),
            333 => 
            array (
                'id' => 2208601,
                'name' => 'Prata do Piauí',
                'state_id' => 22,
            ),
            334 => 
            array (
                'id' => 2208650,
                'name' => 'Queimada Nova',
                'state_id' => 22,
            ),
            335 => 
            array (
                'id' => 2208700,
                'name' => 'Redenção do Gurguéia',
                'state_id' => 22,
            ),
            336 => 
            array (
                'id' => 2208809,
                'name' => 'Regeneração',
                'state_id' => 22,
            ),
            337 => 
            array (
                'id' => 2208858,
                'name' => 'Riacho Frio',
                'state_id' => 22,
            ),
            338 => 
            array (
                'id' => 2208874,
                'name' => 'Ribeira do Piauí',
                'state_id' => 22,
            ),
            339 => 
            array (
                'id' => 2208908,
                'name' => 'Ribeiro Gonçalves',
                'state_id' => 22,
            ),
            340 => 
            array (
                'id' => 2209005,
                'name' => 'Rio Grande do Piauí',
                'state_id' => 22,
            ),
            341 => 
            array (
                'id' => 2209104,
                'name' => 'Santa Cruz do Piauí',
                'state_id' => 22,
            ),
            342 => 
            array (
                'id' => 2209153,
                'name' => 'Santa Cruz dos Milagres',
                'state_id' => 22,
            ),
            343 => 
            array (
                'id' => 2209203,
                'name' => 'Santa Filomena',
                'state_id' => 22,
            ),
            344 => 
            array (
                'id' => 2209302,
                'name' => 'Santa Luz',
                'state_id' => 22,
            ),
            345 => 
            array (
                'id' => 2209351,
                'name' => 'Santana do Piauí',
                'state_id' => 22,
            ),
            346 => 
            array (
                'id' => 2209377,
                'name' => 'Santa Rosa do Piauí',
                'state_id' => 22,
            ),
            347 => 
            array (
                'id' => 2209401,
                'name' => 'Santo Antônio de Lisboa',
                'state_id' => 22,
            ),
            348 => 
            array (
                'id' => 2209450,
                'name' => 'Santo Antônio dos Milagres',
                'state_id' => 22,
            ),
            349 => 
            array (
                'id' => 2209500,
                'name' => 'Santo Inácio do Piauí',
                'state_id' => 22,
            ),
            350 => 
            array (
                'id' => 2209559,
                'name' => 'São Braz do Piauí',
                'state_id' => 22,
            ),
            351 => 
            array (
                'id' => 2209609,
                'name' => 'São Félix do Piauí',
                'state_id' => 22,
            ),
            352 => 
            array (
                'id' => 2209658,
                'name' => 'São Francisco de Assis do Piauí',
                'state_id' => 22,
            ),
            353 => 
            array (
                'id' => 2209708,
                'name' => 'São Francisco do Piauí',
                'state_id' => 22,
            ),
            354 => 
            array (
                'id' => 2209757,
                'name' => 'São Gonçalo do Gurguéia',
                'state_id' => 22,
            ),
            355 => 
            array (
                'id' => 2209807,
                'name' => 'São Gonçalo do Piauí',
                'state_id' => 22,
            ),
            356 => 
            array (
                'id' => 2209856,
                'name' => 'São João da Canabrava',
                'state_id' => 22,
            ),
            357 => 
            array (
                'id' => 2209872,
                'name' => 'São João da Fronteira',
                'state_id' => 22,
            ),
            358 => 
            array (
                'id' => 2209906,
                'name' => 'São João da Serra',
                'state_id' => 22,
            ),
            359 => 
            array (
                'id' => 2209955,
                'name' => 'São João da Varjota',
                'state_id' => 22,
            ),
            360 => 
            array (
                'id' => 2209971,
                'name' => 'São João do Arraial',
                'state_id' => 22,
            ),
            361 => 
            array (
                'id' => 2210003,
                'name' => 'São João do Piauí',
                'state_id' => 22,
            ),
            362 => 
            array (
                'id' => 2210052,
                'name' => 'São José do Divino',
                'state_id' => 22,
            ),
            363 => 
            array (
                'id' => 2210102,
                'name' => 'São José do Peixe',
                'state_id' => 22,
            ),
            364 => 
            array (
                'id' => 2210201,
                'name' => 'São José do Piauí',
                'state_id' => 22,
            ),
            365 => 
            array (
                'id' => 2210300,
                'name' => 'São Julião',
                'state_id' => 22,
            ),
            366 => 
            array (
                'id' => 2210359,
                'name' => 'São Lourenço do Piauí',
                'state_id' => 22,
            ),
            367 => 
            array (
                'id' => 2210375,
                'name' => 'São Luis do Piauí',
                'state_id' => 22,
            ),
            368 => 
            array (
                'id' => 2210383,
                'name' => 'São Miguel da Baixa Grande',
                'state_id' => 22,
            ),
            369 => 
            array (
                'id' => 2210391,
                'name' => 'São Miguel do Fidalgo',
                'state_id' => 22,
            ),
            370 => 
            array (
                'id' => 2210409,
                'name' => 'São Miguel do Tapuio',
                'state_id' => 22,
            ),
            371 => 
            array (
                'id' => 2210508,
                'name' => 'São Pedro do Piauí',
                'state_id' => 22,
            ),
            372 => 
            array (
                'id' => 2210607,
                'name' => 'São Raimundo Nonato',
                'state_id' => 22,
            ),
            373 => 
            array (
                'id' => 2210623,
                'name' => 'Sebastião Barros',
                'state_id' => 22,
            ),
            374 => 
            array (
                'id' => 2210631,
                'name' => 'Sebastião Leal',
                'state_id' => 22,
            ),
            375 => 
            array (
                'id' => 2210656,
                'name' => 'Sigefredo Pacheco',
                'state_id' => 22,
            ),
            376 => 
            array (
                'id' => 2210706,
                'name' => 'Simões',
                'state_id' => 22,
            ),
            377 => 
            array (
                'id' => 2210805,
                'name' => 'Simplício Mendes',
                'state_id' => 22,
            ),
            378 => 
            array (
                'id' => 2210904,
                'name' => 'Socorro do Piauí',
                'state_id' => 22,
            ),
            379 => 
            array (
                'id' => 2210938,
                'name' => 'Sussuapara',
                'state_id' => 22,
            ),
            380 => 
            array (
                'id' => 2210953,
                'name' => 'Tamboril do Piauí',
                'state_id' => 22,
            ),
            381 => 
            array (
                'id' => 2210979,
                'name' => 'Tanque do Piauí',
                'state_id' => 22,
            ),
            382 => 
            array (
                'id' => 2211001,
                'name' => 'Teresina',
                'state_id' => 22,
            ),
            383 => 
            array (
                'id' => 2211100,
                'name' => 'União',
                'state_id' => 22,
            ),
            384 => 
            array (
                'id' => 2211209,
                'name' => 'Uruçuí',
                'state_id' => 22,
            ),
            385 => 
            array (
                'id' => 2211308,
                'name' => 'Valença do Piauí',
                'state_id' => 22,
            ),
            386 => 
            array (
                'id' => 2211357,
                'name' => 'Várzea Branca',
                'state_id' => 22,
            ),
            387 => 
            array (
                'id' => 2211407,
                'name' => 'Várzea Grande',
                'state_id' => 22,
            ),
            388 => 
            array (
                'id' => 2211506,
                'name' => 'Vera Mendes',
                'state_id' => 22,
            ),
            389 => 
            array (
                'id' => 2211605,
                'name' => 'Vila Nova do Piauí',
                'state_id' => 22,
            ),
            390 => 
            array (
                'id' => 2211704,
                'name' => 'Wall Ferraz',
                'state_id' => 22,
            ),
            391 => 
            array (
                'id' => 2300101,
                'name' => 'Abaiara',
                'state_id' => 23,
            ),
            392 => 
            array (
                'id' => 2300150,
                'name' => 'Acarape',
                'state_id' => 23,
            ),
            393 => 
            array (
                'id' => 2300200,
                'name' => 'Acaraú',
                'state_id' => 23,
            ),
            394 => 
            array (
                'id' => 2300309,
                'name' => 'Acopiara',
                'state_id' => 23,
            ),
            395 => 
            array (
                'id' => 2300408,
                'name' => 'Aiuaba',
                'state_id' => 23,
            ),
            396 => 
            array (
                'id' => 2300507,
                'name' => 'Alcântaras',
                'state_id' => 23,
            ),
            397 => 
            array (
                'id' => 2300606,
                'name' => 'Altaneira',
                'state_id' => 23,
            ),
            398 => 
            array (
                'id' => 2300705,
                'name' => 'Alto Santo',
                'state_id' => 23,
            ),
            399 => 
            array (
                'id' => 2300754,
                'name' => 'Amontada',
                'state_id' => 23,
            ),
            400 => 
            array (
                'id' => 2300804,
                'name' => 'Antonina do Norte',
                'state_id' => 23,
            ),
            401 => 
            array (
                'id' => 2300903,
                'name' => 'Apuiarés',
                'state_id' => 23,
            ),
            402 => 
            array (
                'id' => 2301000,
                'name' => 'Aquiraz',
                'state_id' => 23,
            ),
            403 => 
            array (
                'id' => 2301109,
                'name' => 'Aracati',
                'state_id' => 23,
            ),
            404 => 
            array (
                'id' => 2301208,
                'name' => 'Aracoiaba',
                'state_id' => 23,
            ),
            405 => 
            array (
                'id' => 2301257,
                'name' => 'Ararendá',
                'state_id' => 23,
            ),
            406 => 
            array (
                'id' => 2301307,
                'name' => 'Araripe',
                'state_id' => 23,
            ),
            407 => 
            array (
                'id' => 2301406,
                'name' => 'Aratuba',
                'state_id' => 23,
            ),
            408 => 
            array (
                'id' => 2301505,
                'name' => 'Arneiroz',
                'state_id' => 23,
            ),
            409 => 
            array (
                'id' => 2301604,
                'name' => 'Assaré',
                'state_id' => 23,
            ),
            410 => 
            array (
                'id' => 2301703,
                'name' => 'Aurora',
                'state_id' => 23,
            ),
            411 => 
            array (
                'id' => 2301802,
                'name' => 'Baixio',
                'state_id' => 23,
            ),
            412 => 
            array (
                'id' => 2301851,
                'name' => 'Banabuiú',
                'state_id' => 23,
            ),
            413 => 
            array (
                'id' => 2301901,
                'name' => 'Barbalha',
                'state_id' => 23,
            ),
            414 => 
            array (
                'id' => 2301950,
                'name' => 'Barreira',
                'state_id' => 23,
            ),
            415 => 
            array (
                'id' => 2302008,
                'name' => 'Barro',
                'state_id' => 23,
            ),
            416 => 
            array (
                'id' => 2302057,
                'name' => 'Barroquinha',
                'state_id' => 23,
            ),
            417 => 
            array (
                'id' => 2302107,
                'name' => 'Baturité',
                'state_id' => 23,
            ),
            418 => 
            array (
                'id' => 2302206,
                'name' => 'Beberibe',
                'state_id' => 23,
            ),
            419 => 
            array (
                'id' => 2302305,
                'name' => 'Bela Cruz',
                'state_id' => 23,
            ),
            420 => 
            array (
                'id' => 2302404,
                'name' => 'Boa Viagem',
                'state_id' => 23,
            ),
            421 => 
            array (
                'id' => 2302503,
                'name' => 'Brejo Santo',
                'state_id' => 23,
            ),
            422 => 
            array (
                'id' => 2302602,
                'name' => 'Camocim',
                'state_id' => 23,
            ),
            423 => 
            array (
                'id' => 2302701,
                'name' => 'Campos Sales',
                'state_id' => 23,
            ),
            424 => 
            array (
                'id' => 2302800,
                'name' => 'Canindé',
                'state_id' => 23,
            ),
            425 => 
            array (
                'id' => 2302909,
                'name' => 'Capistrano',
                'state_id' => 23,
            ),
            426 => 
            array (
                'id' => 2303006,
                'name' => 'Caridade',
                'state_id' => 23,
            ),
            427 => 
            array (
                'id' => 2303105,
                'name' => 'Cariré',
                'state_id' => 23,
            ),
            428 => 
            array (
                'id' => 2303204,
                'name' => 'Caririaçu',
                'state_id' => 23,
            ),
            429 => 
            array (
                'id' => 2303303,
                'name' => 'Cariús',
                'state_id' => 23,
            ),
            430 => 
            array (
                'id' => 2303402,
                'name' => 'Carnaubal',
                'state_id' => 23,
            ),
            431 => 
            array (
                'id' => 2303501,
                'name' => 'Cascavel',
                'state_id' => 23,
            ),
            432 => 
            array (
                'id' => 2303600,
                'name' => 'Catarina',
                'state_id' => 23,
            ),
            433 => 
            array (
                'id' => 2303659,
                'name' => 'Catunda',
                'state_id' => 23,
            ),
            434 => 
            array (
                'id' => 2303709,
                'name' => 'Caucaia',
                'state_id' => 23,
            ),
            435 => 
            array (
                'id' => 2303808,
                'name' => 'Cedro',
                'state_id' => 23,
            ),
            436 => 
            array (
                'id' => 2303907,
                'name' => 'Chaval',
                'state_id' => 23,
            ),
            437 => 
            array (
                'id' => 2303931,
                'name' => 'Choró',
                'state_id' => 23,
            ),
            438 => 
            array (
                'id' => 2303956,
                'name' => 'Chorozinho',
                'state_id' => 23,
            ),
            439 => 
            array (
                'id' => 2304004,
                'name' => 'Coreaú',
                'state_id' => 23,
            ),
            440 => 
            array (
                'id' => 2304103,
                'name' => 'Crateús',
                'state_id' => 23,
            ),
            441 => 
            array (
                'id' => 2304202,
                'name' => 'Crato',
                'state_id' => 23,
            ),
            442 => 
            array (
                'id' => 2304236,
                'name' => 'Croatá',
                'state_id' => 23,
            ),
            443 => 
            array (
                'id' => 2304251,
                'name' => 'Cruz',
                'state_id' => 23,
            ),
            444 => 
            array (
                'id' => 2304269,
                'name' => 'Deputado Irapuan Pinheiro',
                'state_id' => 23,
            ),
            445 => 
            array (
                'id' => 2304277,
                'name' => 'Ereré',
                'state_id' => 23,
            ),
            446 => 
            array (
                'id' => 2304285,
                'name' => 'Eusébio',
                'state_id' => 23,
            ),
            447 => 
            array (
                'id' => 2304301,
                'name' => 'Farias Brito',
                'state_id' => 23,
            ),
            448 => 
            array (
                'id' => 2304350,
                'name' => 'Forquilha',
                'state_id' => 23,
            ),
            449 => 
            array (
                'id' => 2304400,
                'name' => 'Fortaleza',
                'state_id' => 23,
            ),
            450 => 
            array (
                'id' => 2304459,
                'name' => 'Fortim',
                'state_id' => 23,
            ),
            451 => 
            array (
                'id' => 2304509,
                'name' => 'Frecheirinha',
                'state_id' => 23,
            ),
            452 => 
            array (
                'id' => 2304608,
                'name' => 'General Sampaio',
                'state_id' => 23,
            ),
            453 => 
            array (
                'id' => 2304657,
                'name' => 'Graça',
                'state_id' => 23,
            ),
            454 => 
            array (
                'id' => 2304707,
                'name' => 'Granja',
                'state_id' => 23,
            ),
            455 => 
            array (
                'id' => 2304806,
                'name' => 'Granjeiro',
                'state_id' => 23,
            ),
            456 => 
            array (
                'id' => 2304905,
                'name' => 'Groaíras',
                'state_id' => 23,
            ),
            457 => 
            array (
                'id' => 2304954,
                'name' => 'Guaiúba',
                'state_id' => 23,
            ),
            458 => 
            array (
                'id' => 2305001,
                'name' => 'Guaraciaba do Norte',
                'state_id' => 23,
            ),
            459 => 
            array (
                'id' => 2305100,
                'name' => 'Guaramiranga',
                'state_id' => 23,
            ),
            460 => 
            array (
                'id' => 2305209,
                'name' => 'Hidrolândia',
                'state_id' => 23,
            ),
            461 => 
            array (
                'id' => 2305233,
                'name' => 'Horizonte',
                'state_id' => 23,
            ),
            462 => 
            array (
                'id' => 2305266,
                'name' => 'Ibaretama',
                'state_id' => 23,
            ),
            463 => 
            array (
                'id' => 2305308,
                'name' => 'Ibiapina',
                'state_id' => 23,
            ),
            464 => 
            array (
                'id' => 2305332,
                'name' => 'Ibicuitinga',
                'state_id' => 23,
            ),
            465 => 
            array (
                'id' => 2305357,
                'name' => 'Icapuí',
                'state_id' => 23,
            ),
            466 => 
            array (
                'id' => 2305407,
                'name' => 'Icó',
                'state_id' => 23,
            ),
            467 => 
            array (
                'id' => 2305506,
                'name' => 'Iguatu',
                'state_id' => 23,
            ),
            468 => 
            array (
                'id' => 2305605,
                'name' => 'Independência',
                'state_id' => 23,
            ),
            469 => 
            array (
                'id' => 2305654,
                'name' => 'Ipaporanga',
                'state_id' => 23,
            ),
            470 => 
            array (
                'id' => 2305704,
                'name' => 'Ipaumirim',
                'state_id' => 23,
            ),
            471 => 
            array (
                'id' => 2305803,
                'name' => 'Ipu',
                'state_id' => 23,
            ),
            472 => 
            array (
                'id' => 2305902,
                'name' => 'Ipueiras',
                'state_id' => 23,
            ),
            473 => 
            array (
                'id' => 2306009,
                'name' => 'Iracema',
                'state_id' => 23,
            ),
            474 => 
            array (
                'id' => 2306108,
                'name' => 'Irauçuba',
                'state_id' => 23,
            ),
            475 => 
            array (
                'id' => 2306207,
                'name' => 'Itaiçaba',
                'state_id' => 23,
            ),
            476 => 
            array (
                'id' => 2306256,
                'name' => 'Itaitinga',
                'state_id' => 23,
            ),
            477 => 
            array (
                'id' => 2306306,
                'name' => 'Itapajé',
                'state_id' => 23,
            ),
            478 => 
            array (
                'id' => 2306405,
                'name' => 'Itapipoca',
                'state_id' => 23,
            ),
            479 => 
            array (
                'id' => 2306504,
                'name' => 'Itapiúna',
                'state_id' => 23,
            ),
            480 => 
            array (
                'id' => 2306553,
                'name' => 'Itarema',
                'state_id' => 23,
            ),
            481 => 
            array (
                'id' => 2306603,
                'name' => 'Itatira',
                'state_id' => 23,
            ),
            482 => 
            array (
                'id' => 2306702,
                'name' => 'Jaguaretama',
                'state_id' => 23,
            ),
            483 => 
            array (
                'id' => 2306801,
                'name' => 'Jaguaribara',
                'state_id' => 23,
            ),
            484 => 
            array (
                'id' => 2306900,
                'name' => 'Jaguaribe',
                'state_id' => 23,
            ),
            485 => 
            array (
                'id' => 2307007,
                'name' => 'Jaguaruana',
                'state_id' => 23,
            ),
            486 => 
            array (
                'id' => 2307106,
                'name' => 'Jardim',
                'state_id' => 23,
            ),
            487 => 
            array (
                'id' => 2307205,
                'name' => 'Jati',
                'state_id' => 23,
            ),
            488 => 
            array (
                'id' => 2307254,
                'name' => 'Jijoca de Jericoacoara',
                'state_id' => 23,
            ),
            489 => 
            array (
                'id' => 2307304,
                'name' => 'Juazeiro do Norte',
                'state_id' => 23,
            ),
            490 => 
            array (
                'id' => 2307403,
                'name' => 'Jucás',
                'state_id' => 23,
            ),
            491 => 
            array (
                'id' => 2307502,
                'name' => 'Lavras da Mangabeira',
                'state_id' => 23,
            ),
            492 => 
            array (
                'id' => 2307601,
                'name' => 'Limoeiro do Norte',
                'state_id' => 23,
            ),
            493 => 
            array (
                'id' => 2307635,
                'name' => 'Madalena',
                'state_id' => 23,
            ),
            494 => 
            array (
                'id' => 2307650,
                'name' => 'Maracanaú',
                'state_id' => 23,
            ),
            495 => 
            array (
                'id' => 2307700,
                'name' => 'Maranguape',
                'state_id' => 23,
            ),
            496 => 
            array (
                'id' => 2307809,
                'name' => 'Marco',
                'state_id' => 23,
            ),
            497 => 
            array (
                'id' => 2307908,
                'name' => 'Martinópole',
                'state_id' => 23,
            ),
            498 => 
            array (
                'id' => 2308005,
                'name' => 'Massapê',
                'state_id' => 23,
            ),
            499 => 
            array (
                'id' => 2308104,
                'name' => 'Mauriti',
                'state_id' => 23,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 2308203,
                'name' => 'Meruoca',
                'state_id' => 23,
            ),
            1 => 
            array (
                'id' => 2308302,
                'name' => 'Milagres',
                'state_id' => 23,
            ),
            2 => 
            array (
                'id' => 2308351,
                'name' => 'Milhã',
                'state_id' => 23,
            ),
            3 => 
            array (
                'id' => 2308377,
                'name' => 'Miraíma',
                'state_id' => 23,
            ),
            4 => 
            array (
                'id' => 2308401,
                'name' => 'Missão Velha',
                'state_id' => 23,
            ),
            5 => 
            array (
                'id' => 2308500,
                'name' => 'Mombaça',
                'state_id' => 23,
            ),
            6 => 
            array (
                'id' => 2308609,
                'name' => 'Monsenhor Tabosa',
                'state_id' => 23,
            ),
            7 => 
            array (
                'id' => 2308708,
                'name' => 'Morada Nova',
                'state_id' => 23,
            ),
            8 => 
            array (
                'id' => 2308807,
                'name' => 'Moraújo',
                'state_id' => 23,
            ),
            9 => 
            array (
                'id' => 2308906,
                'name' => 'Morrinhos',
                'state_id' => 23,
            ),
            10 => 
            array (
                'id' => 2309003,
                'name' => 'Mucambo',
                'state_id' => 23,
            ),
            11 => 
            array (
                'id' => 2309102,
                'name' => 'Mulungu',
                'state_id' => 23,
            ),
            12 => 
            array (
                'id' => 2309201,
                'name' => 'Nova Olinda',
                'state_id' => 23,
            ),
            13 => 
            array (
                'id' => 2309300,
                'name' => 'Nova Russas',
                'state_id' => 23,
            ),
            14 => 
            array (
                'id' => 2309409,
                'name' => 'Novo Oriente',
                'state_id' => 23,
            ),
            15 => 
            array (
                'id' => 2309458,
                'name' => 'Ocara',
                'state_id' => 23,
            ),
            16 => 
            array (
                'id' => 2309508,
                'name' => 'Orós',
                'state_id' => 23,
            ),
            17 => 
            array (
                'id' => 2309607,
                'name' => 'Pacajus',
                'state_id' => 23,
            ),
            18 => 
            array (
                'id' => 2309706,
                'name' => 'Pacatuba',
                'state_id' => 23,
            ),
            19 => 
            array (
                'id' => 2309805,
                'name' => 'Pacoti',
                'state_id' => 23,
            ),
            20 => 
            array (
                'id' => 2309904,
                'name' => 'Pacujá',
                'state_id' => 23,
            ),
            21 => 
            array (
                'id' => 2310001,
                'name' => 'Palhano',
                'state_id' => 23,
            ),
            22 => 
            array (
                'id' => 2310100,
                'name' => 'Palmácia',
                'state_id' => 23,
            ),
            23 => 
            array (
                'id' => 2310209,
                'name' => 'Paracuru',
                'state_id' => 23,
            ),
            24 => 
            array (
                'id' => 2310258,
                'name' => 'Paraipaba',
                'state_id' => 23,
            ),
            25 => 
            array (
                'id' => 2310308,
                'name' => 'Parambu',
                'state_id' => 23,
            ),
            26 => 
            array (
                'id' => 2310407,
                'name' => 'Paramoti',
                'state_id' => 23,
            ),
            27 => 
            array (
                'id' => 2310506,
                'name' => 'Pedra Branca',
                'state_id' => 23,
            ),
            28 => 
            array (
                'id' => 2310605,
                'name' => 'Penaforte',
                'state_id' => 23,
            ),
            29 => 
            array (
                'id' => 2310704,
                'name' => 'Pentecoste',
                'state_id' => 23,
            ),
            30 => 
            array (
                'id' => 2310803,
                'name' => 'Pereiro',
                'state_id' => 23,
            ),
            31 => 
            array (
                'id' => 2310852,
                'name' => 'Pindoretama',
                'state_id' => 23,
            ),
            32 => 
            array (
                'id' => 2310902,
                'name' => 'Piquet Carneiro',
                'state_id' => 23,
            ),
            33 => 
            array (
                'id' => 2310951,
                'name' => 'Pires Ferreira',
                'state_id' => 23,
            ),
            34 => 
            array (
                'id' => 2311009,
                'name' => 'Poranga',
                'state_id' => 23,
            ),
            35 => 
            array (
                'id' => 2311108,
                'name' => 'Porteiras',
                'state_id' => 23,
            ),
            36 => 
            array (
                'id' => 2311207,
                'name' => 'Potengi',
                'state_id' => 23,
            ),
            37 => 
            array (
                'id' => 2311231,
                'name' => 'Potiretama',
                'state_id' => 23,
            ),
            38 => 
            array (
                'id' => 2311264,
                'name' => 'Quiterianópolis',
                'state_id' => 23,
            ),
            39 => 
            array (
                'id' => 2311306,
                'name' => 'Quixadá',
                'state_id' => 23,
            ),
            40 => 
            array (
                'id' => 2311355,
                'name' => 'Quixelô',
                'state_id' => 23,
            ),
            41 => 
            array (
                'id' => 2311405,
                'name' => 'Quixeramobim',
                'state_id' => 23,
            ),
            42 => 
            array (
                'id' => 2311504,
                'name' => 'Quixeré',
                'state_id' => 23,
            ),
            43 => 
            array (
                'id' => 2311603,
                'name' => 'Redenção',
                'state_id' => 23,
            ),
            44 => 
            array (
                'id' => 2311702,
                'name' => 'Reriutaba',
                'state_id' => 23,
            ),
            45 => 
            array (
                'id' => 2311801,
                'name' => 'Russas',
                'state_id' => 23,
            ),
            46 => 
            array (
                'id' => 2311900,
                'name' => 'Saboeiro',
                'state_id' => 23,
            ),
            47 => 
            array (
                'id' => 2311959,
                'name' => 'Salitre',
                'state_id' => 23,
            ),
            48 => 
            array (
                'id' => 2312007,
                'name' => 'Santana do Acaraú',
                'state_id' => 23,
            ),
            49 => 
            array (
                'id' => 2312106,
                'name' => 'Santana do Cariri',
                'state_id' => 23,
            ),
            50 => 
            array (
                'id' => 2312205,
                'name' => 'Santa Quitéria',
                'state_id' => 23,
            ),
            51 => 
            array (
                'id' => 2312304,
                'name' => 'São Benedito',
                'state_id' => 23,
            ),
            52 => 
            array (
                'id' => 2312403,
                'name' => 'São Gonçalo do Amarante',
                'state_id' => 23,
            ),
            53 => 
            array (
                'id' => 2312502,
                'name' => 'São João do Jaguaribe',
                'state_id' => 23,
            ),
            54 => 
            array (
                'id' => 2312601,
                'name' => 'São Luís do Curu',
                'state_id' => 23,
            ),
            55 => 
            array (
                'id' => 2312700,
                'name' => 'Senador Pompeu',
                'state_id' => 23,
            ),
            56 => 
            array (
                'id' => 2312809,
                'name' => 'Senador Sá',
                'state_id' => 23,
            ),
            57 => 
            array (
                'id' => 2312908,
                'name' => 'Sobral',
                'state_id' => 23,
            ),
            58 => 
            array (
                'id' => 2313005,
                'name' => 'Solonópole',
                'state_id' => 23,
            ),
            59 => 
            array (
                'id' => 2313104,
                'name' => 'Tabuleiro do Norte',
                'state_id' => 23,
            ),
            60 => 
            array (
                'id' => 2313203,
                'name' => 'Tamboril',
                'state_id' => 23,
            ),
            61 => 
            array (
                'id' => 2313252,
                'name' => 'Tarrafas',
                'state_id' => 23,
            ),
            62 => 
            array (
                'id' => 2313302,
                'name' => 'Tauá',
                'state_id' => 23,
            ),
            63 => 
            array (
                'id' => 2313351,
                'name' => 'Tejuçuoca',
                'state_id' => 23,
            ),
            64 => 
            array (
                'id' => 2313401,
                'name' => 'Tianguá',
                'state_id' => 23,
            ),
            65 => 
            array (
                'id' => 2313500,
                'name' => 'Trairi',
                'state_id' => 23,
            ),
            66 => 
            array (
                'id' => 2313559,
                'name' => 'Tururu',
                'state_id' => 23,
            ),
            67 => 
            array (
                'id' => 2313609,
                'name' => 'Ubajara',
                'state_id' => 23,
            ),
            68 => 
            array (
                'id' => 2313708,
                'name' => 'Umari',
                'state_id' => 23,
            ),
            69 => 
            array (
                'id' => 2313757,
                'name' => 'Umirim',
                'state_id' => 23,
            ),
            70 => 
            array (
                'id' => 2313807,
                'name' => 'Uruburetama',
                'state_id' => 23,
            ),
            71 => 
            array (
                'id' => 2313906,
                'name' => 'Uruoca',
                'state_id' => 23,
            ),
            72 => 
            array (
                'id' => 2313955,
                'name' => 'Varjota',
                'state_id' => 23,
            ),
            73 => 
            array (
                'id' => 2314003,
                'name' => 'Várzea Alegre',
                'state_id' => 23,
            ),
            74 => 
            array (
                'id' => 2314102,
                'name' => 'Viçosa do Ceará',
                'state_id' => 23,
            ),
            75 => 
            array (
                'id' => 2400109,
                'name' => 'Acari',
                'state_id' => 24,
            ),
            76 => 
            array (
                'id' => 2400208,
                'name' => 'Açu',
                'state_id' => 24,
            ),
            77 => 
            array (
                'id' => 2400307,
                'name' => 'Afonso Bezerra',
                'state_id' => 24,
            ),
            78 => 
            array (
                'id' => 2400406,
                'name' => 'Água Nova',
                'state_id' => 24,
            ),
            79 => 
            array (
                'id' => 2400505,
                'name' => 'Alexandria',
                'state_id' => 24,
            ),
            80 => 
            array (
                'id' => 2400604,
                'name' => 'Almino Afonso',
                'state_id' => 24,
            ),
            81 => 
            array (
                'id' => 2400703,
                'name' => 'Alto do Rodrigues',
                'state_id' => 24,
            ),
            82 => 
            array (
                'id' => 2400802,
                'name' => 'Angicos',
                'state_id' => 24,
            ),
            83 => 
            array (
                'id' => 2400901,
                'name' => 'Antônio Martins',
                'state_id' => 24,
            ),
            84 => 
            array (
                'id' => 2401008,
                'name' => 'Apodi',
                'state_id' => 24,
            ),
            85 => 
            array (
                'id' => 2401107,
                'name' => 'Areia Branca',
                'state_id' => 24,
            ),
            86 => 
            array (
                'id' => 2401206,
                'name' => 'Arês',
                'state_id' => 24,
            ),
            87 => 
            array (
                'id' => 2401305,
                'name' => 'Campo Grande',
                'state_id' => 24,
            ),
            88 => 
            array (
                'id' => 2401404,
                'name' => 'Baía Formosa',
                'state_id' => 24,
            ),
            89 => 
            array (
                'id' => 2401453,
                'name' => 'Baraúna',
                'state_id' => 24,
            ),
            90 => 
            array (
                'id' => 2401503,
                'name' => 'Barcelona',
                'state_id' => 24,
            ),
            91 => 
            array (
                'id' => 2401602,
                'name' => 'Bento Fernandes',
                'state_id' => 24,
            ),
            92 => 
            array (
                'id' => 2401651,
                'name' => 'Bodó',
                'state_id' => 24,
            ),
            93 => 
            array (
                'id' => 2401701,
                'name' => 'Bom Jesus',
                'state_id' => 24,
            ),
            94 => 
            array (
                'id' => 2401800,
                'name' => 'Brejinho',
                'state_id' => 24,
            ),
            95 => 
            array (
                'id' => 2401859,
                'name' => 'Caiçara do Norte',
                'state_id' => 24,
            ),
            96 => 
            array (
                'id' => 2401909,
                'name' => 'Caiçara do Rio do Vento',
                'state_id' => 24,
            ),
            97 => 
            array (
                'id' => 2402006,
                'name' => 'Caicó',
                'state_id' => 24,
            ),
            98 => 
            array (
                'id' => 2402105,
                'name' => 'Campo Redondo',
                'state_id' => 24,
            ),
            99 => 
            array (
                'id' => 2402204,
                'name' => 'Canguaretama',
                'state_id' => 24,
            ),
            100 => 
            array (
                'id' => 2402303,
                'name' => 'Caraúbas',
                'state_id' => 24,
            ),
            101 => 
            array (
                'id' => 2402402,
                'name' => 'Carnaúba dos Dantas',
                'state_id' => 24,
            ),
            102 => 
            array (
                'id' => 2402501,
                'name' => 'Carnaubais',
                'state_id' => 24,
            ),
            103 => 
            array (
                'id' => 2402600,
                'name' => 'Ceará-Mirim',
                'state_id' => 24,
            ),
            104 => 
            array (
                'id' => 2402709,
                'name' => 'Cerro Corá',
                'state_id' => 24,
            ),
            105 => 
            array (
                'id' => 2402808,
                'name' => 'Coronel Ezequiel',
                'state_id' => 24,
            ),
            106 => 
            array (
                'id' => 2402907,
                'name' => 'Coronel João Pessoa',
                'state_id' => 24,
            ),
            107 => 
            array (
                'id' => 2403004,
                'name' => 'Cruzeta',
                'state_id' => 24,
            ),
            108 => 
            array (
                'id' => 2403103,
                'name' => 'Currais Novos',
                'state_id' => 24,
            ),
            109 => 
            array (
                'id' => 2403202,
                'name' => 'Doutor Severiano',
                'state_id' => 24,
            ),
            110 => 
            array (
                'id' => 2403251,
                'name' => 'Parnamirim',
                'state_id' => 24,
            ),
            111 => 
            array (
                'id' => 2403301,
                'name' => 'Encanto',
                'state_id' => 24,
            ),
            112 => 
            array (
                'id' => 2403400,
                'name' => 'Equador',
                'state_id' => 24,
            ),
            113 => 
            array (
                'id' => 2403509,
                'name' => 'Espírito Santo',
                'state_id' => 24,
            ),
            114 => 
            array (
                'id' => 2403608,
                'name' => 'Extremoz',
                'state_id' => 24,
            ),
            115 => 
            array (
                'id' => 2403707,
                'name' => 'Felipe Guerra',
                'state_id' => 24,
            ),
            116 => 
            array (
                'id' => 2403756,
                'name' => 'Fernando Pedroza',
                'state_id' => 24,
            ),
            117 => 
            array (
                'id' => 2403806,
                'name' => 'Florânia',
                'state_id' => 24,
            ),
            118 => 
            array (
                'id' => 2403905,
                'name' => 'Francisco Dantas',
                'state_id' => 24,
            ),
            119 => 
            array (
                'id' => 2404002,
                'name' => 'Frutuoso Gomes',
                'state_id' => 24,
            ),
            120 => 
            array (
                'id' => 2404101,
                'name' => 'Galinhos',
                'state_id' => 24,
            ),
            121 => 
            array (
                'id' => 2404200,
                'name' => 'Goianinha',
                'state_id' => 24,
            ),
            122 => 
            array (
                'id' => 2404309,
                'name' => 'Governador Dix-Sept Rosado',
                'state_id' => 24,
            ),
            123 => 
            array (
                'id' => 2404408,
                'name' => 'Grossos',
                'state_id' => 24,
            ),
            124 => 
            array (
                'id' => 2404507,
                'name' => 'Guamaré',
                'state_id' => 24,
            ),
            125 => 
            array (
                'id' => 2404606,
                'name' => 'Ielmo Marinho',
                'state_id' => 24,
            ),
            126 => 
            array (
                'id' => 2404705,
                'name' => 'Ipanguaçu',
                'state_id' => 24,
            ),
            127 => 
            array (
                'id' => 2404804,
                'name' => 'Ipueira',
                'state_id' => 24,
            ),
            128 => 
            array (
                'id' => 2404853,
                'name' => 'Itajá',
                'state_id' => 24,
            ),
            129 => 
            array (
                'id' => 2404903,
                'name' => 'Itaú',
                'state_id' => 24,
            ),
            130 => 
            array (
                'id' => 2405009,
                'name' => 'Jaçanã',
                'state_id' => 24,
            ),
            131 => 
            array (
                'id' => 2405108,
                'name' => 'Jandaíra',
                'state_id' => 24,
            ),
            132 => 
            array (
                'id' => 2405207,
                'name' => 'Janduís',
                'state_id' => 24,
            ),
            133 => 
            array (
                'id' => 2405306,
                'name' => 'Januário Cicco',
                'state_id' => 24,
            ),
            134 => 
            array (
                'id' => 2405405,
                'name' => 'Japi',
                'state_id' => 24,
            ),
            135 => 
            array (
                'id' => 2405504,
                'name' => 'Jardim de Angicos',
                'state_id' => 24,
            ),
            136 => 
            array (
                'id' => 2405603,
                'name' => 'Jardim de Piranhas',
                'state_id' => 24,
            ),
            137 => 
            array (
                'id' => 2405702,
                'name' => 'Jardim do Seridó',
                'state_id' => 24,
            ),
            138 => 
            array (
                'id' => 2405801,
                'name' => 'João Câmara',
                'state_id' => 24,
            ),
            139 => 
            array (
                'id' => 2405900,
                'name' => 'João Dias',
                'state_id' => 24,
            ),
            140 => 
            array (
                'id' => 2406007,
                'name' => 'José da Penha',
                'state_id' => 24,
            ),
            141 => 
            array (
                'id' => 2406106,
                'name' => 'Jucurutu',
                'state_id' => 24,
            ),
            142 => 
            array (
                'id' => 2406155,
                'name' => 'Jundiá',
                'state_id' => 24,
            ),
            143 => 
            array (
                'id' => 2406205,
                'name' => 'Lagoa d\'Anta',
                'state_id' => 24,
            ),
            144 => 
            array (
                'id' => 2406304,
                'name' => 'Lagoa de Pedras',
                'state_id' => 24,
            ),
            145 => 
            array (
                'id' => 2406403,
                'name' => 'Lagoa de Velhos',
                'state_id' => 24,
            ),
            146 => 
            array (
                'id' => 2406502,
                'name' => 'Lagoa Nova',
                'state_id' => 24,
            ),
            147 => 
            array (
                'id' => 2406601,
                'name' => 'Lagoa Salgada',
                'state_id' => 24,
            ),
            148 => 
            array (
                'id' => 2406700,
                'name' => 'Lajes',
                'state_id' => 24,
            ),
            149 => 
            array (
                'id' => 2406809,
                'name' => 'Lajes Pintadas',
                'state_id' => 24,
            ),
            150 => 
            array (
                'id' => 2406908,
                'name' => 'Lucrécia',
                'state_id' => 24,
            ),
            151 => 
            array (
                'id' => 2407005,
                'name' => 'Luís Gomes',
                'state_id' => 24,
            ),
            152 => 
            array (
                'id' => 2407104,
                'name' => 'Macaíba',
                'state_id' => 24,
            ),
            153 => 
            array (
                'id' => 2407203,
                'name' => 'Macau',
                'state_id' => 24,
            ),
            154 => 
            array (
                'id' => 2407252,
                'name' => 'Major Sales',
                'state_id' => 24,
            ),
            155 => 
            array (
                'id' => 2407302,
                'name' => 'Marcelino Vieira',
                'state_id' => 24,
            ),
            156 => 
            array (
                'id' => 2407401,
                'name' => 'Martins',
                'state_id' => 24,
            ),
            157 => 
            array (
                'id' => 2407500,
                'name' => 'Maxaranguape',
                'state_id' => 24,
            ),
            158 => 
            array (
                'id' => 2407609,
                'name' => 'Messias Targino',
                'state_id' => 24,
            ),
            159 => 
            array (
                'id' => 2407708,
                'name' => 'Montanhas',
                'state_id' => 24,
            ),
            160 => 
            array (
                'id' => 2407807,
                'name' => 'Monte Alegre',
                'state_id' => 24,
            ),
            161 => 
            array (
                'id' => 2407906,
                'name' => 'Monte das Gameleiras',
                'state_id' => 24,
            ),
            162 => 
            array (
                'id' => 2408003,
                'name' => 'Mossoró',
                'state_id' => 24,
            ),
            163 => 
            array (
                'id' => 2408102,
                'name' => 'Natal',
                'state_id' => 24,
            ),
            164 => 
            array (
                'id' => 2408201,
                'name' => 'Nísia Floresta',
                'state_id' => 24,
            ),
            165 => 
            array (
                'id' => 2408300,
                'name' => 'Nova Cruz',
                'state_id' => 24,
            ),
            166 => 
            array (
                'id' => 2408409,
                'name' => 'Olho d\'Água do Borges',
                'state_id' => 24,
            ),
            167 => 
            array (
                'id' => 2408508,
                'name' => 'Ouro Branco',
                'state_id' => 24,
            ),
            168 => 
            array (
                'id' => 2408607,
                'name' => 'Paraná',
                'state_id' => 24,
            ),
            169 => 
            array (
                'id' => 2408706,
                'name' => 'Paraú',
                'state_id' => 24,
            ),
            170 => 
            array (
                'id' => 2408805,
                'name' => 'Parazinho',
                'state_id' => 24,
            ),
            171 => 
            array (
                'id' => 2408904,
                'name' => 'Parelhas',
                'state_id' => 24,
            ),
            172 => 
            array (
                'id' => 2408953,
                'name' => 'Rio do Fogo',
                'state_id' => 24,
            ),
            173 => 
            array (
                'id' => 2409100,
                'name' => 'Passa e Fica',
                'state_id' => 24,
            ),
            174 => 
            array (
                'id' => 2409209,
                'name' => 'Passagem',
                'state_id' => 24,
            ),
            175 => 
            array (
                'id' => 2409308,
                'name' => 'Patu',
                'state_id' => 24,
            ),
            176 => 
            array (
                'id' => 2409332,
                'name' => 'Santa Maria',
                'state_id' => 24,
            ),
            177 => 
            array (
                'id' => 2409407,
                'name' => 'Pau dos Ferros',
                'state_id' => 24,
            ),
            178 => 
            array (
                'id' => 2409506,
                'name' => 'Pedra Grande',
                'state_id' => 24,
            ),
            179 => 
            array (
                'id' => 2409605,
                'name' => 'Pedra Preta',
                'state_id' => 24,
            ),
            180 => 
            array (
                'id' => 2409704,
                'name' => 'Pedro Avelino',
                'state_id' => 24,
            ),
            181 => 
            array (
                'id' => 2409803,
                'name' => 'Pedro Velho',
                'state_id' => 24,
            ),
            182 => 
            array (
                'id' => 2409902,
                'name' => 'Pendências',
                'state_id' => 24,
            ),
            183 => 
            array (
                'id' => 2410009,
                'name' => 'Pilões',
                'state_id' => 24,
            ),
            184 => 
            array (
                'id' => 2410108,
                'name' => 'Poço Branco',
                'state_id' => 24,
            ),
            185 => 
            array (
                'id' => 2410207,
                'name' => 'Portalegre',
                'state_id' => 24,
            ),
            186 => 
            array (
                'id' => 2410256,
                'name' => 'Porto do Mangue',
                'state_id' => 24,
            ),
            187 => 
            array (
                'id' => 2410306,
                'name' => 'Serra Caiada',
                'state_id' => 24,
            ),
            188 => 
            array (
                'id' => 2410405,
                'name' => 'Pureza',
                'state_id' => 24,
            ),
            189 => 
            array (
                'id' => 2410504,
                'name' => 'Rafael Fernandes',
                'state_id' => 24,
            ),
            190 => 
            array (
                'id' => 2410603,
                'name' => 'Rafael Godeiro',
                'state_id' => 24,
            ),
            191 => 
            array (
                'id' => 2410702,
                'name' => 'Riacho da Cruz',
                'state_id' => 24,
            ),
            192 => 
            array (
                'id' => 2410801,
                'name' => 'Riacho de Santana',
                'state_id' => 24,
            ),
            193 => 
            array (
                'id' => 2410900,
                'name' => 'Riachuelo',
                'state_id' => 24,
            ),
            194 => 
            array (
                'id' => 2411007,
                'name' => 'Rodolfo Fernandes',
                'state_id' => 24,
            ),
            195 => 
            array (
                'id' => 2411056,
                'name' => 'Tibau',
                'state_id' => 24,
            ),
            196 => 
            array (
                'id' => 2411106,
                'name' => 'Ruy Barbosa',
                'state_id' => 24,
            ),
            197 => 
            array (
                'id' => 2411205,
                'name' => 'Santa Cruz',
                'state_id' => 24,
            ),
            198 => 
            array (
                'id' => 2411403,
                'name' => 'Santana do Matos',
                'state_id' => 24,
            ),
            199 => 
            array (
                'id' => 2411429,
                'name' => 'Santana do Seridó',
                'state_id' => 24,
            ),
            200 => 
            array (
                'id' => 2411502,
                'name' => 'Santo Antônio',
                'state_id' => 24,
            ),
            201 => 
            array (
                'id' => 2411601,
                'name' => 'São Bento do Norte',
                'state_id' => 24,
            ),
            202 => 
            array (
                'id' => 2411700,
                'name' => 'São Bento do Trairí',
                'state_id' => 24,
            ),
            203 => 
            array (
                'id' => 2411809,
                'name' => 'São Fernando',
                'state_id' => 24,
            ),
            204 => 
            array (
                'id' => 2411908,
                'name' => 'São Francisco do Oeste',
                'state_id' => 24,
            ),
            205 => 
            array (
                'id' => 2412005,
                'name' => 'São Gonçalo do Amarante',
                'state_id' => 24,
            ),
            206 => 
            array (
                'id' => 2412104,
                'name' => 'São João do Sabugi',
                'state_id' => 24,
            ),
            207 => 
            array (
                'id' => 2412203,
                'name' => 'São José de Mipibu',
                'state_id' => 24,
            ),
            208 => 
            array (
                'id' => 2412302,
                'name' => 'São José do Campestre',
                'state_id' => 24,
            ),
            209 => 
            array (
                'id' => 2412401,
                'name' => 'São José do Seridó',
                'state_id' => 24,
            ),
            210 => 
            array (
                'id' => 2412500,
                'name' => 'São Miguel',
                'state_id' => 24,
            ),
            211 => 
            array (
                'id' => 2412559,
                'name' => 'São Miguel do Gostoso',
                'state_id' => 24,
            ),
            212 => 
            array (
                'id' => 2412609,
                'name' => 'São Paulo do Potengi',
                'state_id' => 24,
            ),
            213 => 
            array (
                'id' => 2412708,
                'name' => 'São Pedro',
                'state_id' => 24,
            ),
            214 => 
            array (
                'id' => 2412807,
                'name' => 'São Rafael',
                'state_id' => 24,
            ),
            215 => 
            array (
                'id' => 2412906,
                'name' => 'São Tomé',
                'state_id' => 24,
            ),
            216 => 
            array (
                'id' => 2413003,
                'name' => 'São Vicente',
                'state_id' => 24,
            ),
            217 => 
            array (
                'id' => 2413102,
                'name' => 'Senador Elói de Souza',
                'state_id' => 24,
            ),
            218 => 
            array (
                'id' => 2413201,
                'name' => 'Senador Georgino Avelino',
                'state_id' => 24,
            ),
            219 => 
            array (
                'id' => 2413300,
                'name' => 'Serra de São Bento',
                'state_id' => 24,
            ),
            220 => 
            array (
                'id' => 2413359,
                'name' => 'Serra do Mel',
                'state_id' => 24,
            ),
            221 => 
            array (
                'id' => 2413409,
                'name' => 'Serra Negra do Norte',
                'state_id' => 24,
            ),
            222 => 
            array (
                'id' => 2413508,
                'name' => 'Serrinha',
                'state_id' => 24,
            ),
            223 => 
            array (
                'id' => 2413557,
                'name' => 'Serrinha dos Pintos',
                'state_id' => 24,
            ),
            224 => 
            array (
                'id' => 2413607,
                'name' => 'Severiano Melo',
                'state_id' => 24,
            ),
            225 => 
            array (
                'id' => 2413706,
                'name' => 'Sítio Novo',
                'state_id' => 24,
            ),
            226 => 
            array (
                'id' => 2413805,
                'name' => 'Taboleiro Grande',
                'state_id' => 24,
            ),
            227 => 
            array (
                'id' => 2413904,
                'name' => 'Taipu',
                'state_id' => 24,
            ),
            228 => 
            array (
                'id' => 2414001,
                'name' => 'Tangará',
                'state_id' => 24,
            ),
            229 => 
            array (
                'id' => 2414100,
                'name' => 'Tenente Ananias',
                'state_id' => 24,
            ),
            230 => 
            array (
                'id' => 2414159,
                'name' => 'Tenente Laurentino Cruz',
                'state_id' => 24,
            ),
            231 => 
            array (
                'id' => 2414209,
                'name' => 'Tibau do Sul',
                'state_id' => 24,
            ),
            232 => 
            array (
                'id' => 2414308,
                'name' => 'Timbaúba dos Batistas',
                'state_id' => 24,
            ),
            233 => 
            array (
                'id' => 2414407,
                'name' => 'Touros',
                'state_id' => 24,
            ),
            234 => 
            array (
                'id' => 2414456,
                'name' => 'Triunfo Potiguar',
                'state_id' => 24,
            ),
            235 => 
            array (
                'id' => 2414506,
                'name' => 'Umarizal',
                'state_id' => 24,
            ),
            236 => 
            array (
                'id' => 2414605,
                'name' => 'Upanema',
                'state_id' => 24,
            ),
            237 => 
            array (
                'id' => 2414704,
                'name' => 'Várzea',
                'state_id' => 24,
            ),
            238 => 
            array (
                'id' => 2414753,
                'name' => 'Venha-Ver',
                'state_id' => 24,
            ),
            239 => 
            array (
                'id' => 2414803,
                'name' => 'Vera Cruz',
                'state_id' => 24,
            ),
            240 => 
            array (
                'id' => 2414902,
                'name' => 'Viçosa',
                'state_id' => 24,
            ),
            241 => 
            array (
                'id' => 2415008,
                'name' => 'Vila Flor',
                'state_id' => 24,
            ),
            242 => 
            array (
                'id' => 2500106,
                'name' => 'Água Branca',
                'state_id' => 25,
            ),
            243 => 
            array (
                'id' => 2500205,
                'name' => 'Aguiar',
                'state_id' => 25,
            ),
            244 => 
            array (
                'id' => 2500304,
                'name' => 'Alagoa Grande',
                'state_id' => 25,
            ),
            245 => 
            array (
                'id' => 2500403,
                'name' => 'Alagoa Nova',
                'state_id' => 25,
            ),
            246 => 
            array (
                'id' => 2500502,
                'name' => 'Alagoinha',
                'state_id' => 25,
            ),
            247 => 
            array (
                'id' => 2500536,
                'name' => 'Alcantil',
                'state_id' => 25,
            ),
            248 => 
            array (
                'id' => 2500577,
                'name' => 'Algodão de Jandaíra',
                'state_id' => 25,
            ),
            249 => 
            array (
                'id' => 2500601,
                'name' => 'Alhandra',
                'state_id' => 25,
            ),
            250 => 
            array (
                'id' => 2500700,
                'name' => 'São João do Rio do Peixe',
                'state_id' => 25,
            ),
            251 => 
            array (
                'id' => 2500734,
                'name' => 'Amparo',
                'state_id' => 25,
            ),
            252 => 
            array (
                'id' => 2500775,
                'name' => 'Aparecida',
                'state_id' => 25,
            ),
            253 => 
            array (
                'id' => 2500809,
                'name' => 'Araçagi',
                'state_id' => 25,
            ),
            254 => 
            array (
                'id' => 2500908,
                'name' => 'Arara',
                'state_id' => 25,
            ),
            255 => 
            array (
                'id' => 2501005,
                'name' => 'Araruna',
                'state_id' => 25,
            ),
            256 => 
            array (
                'id' => 2501104,
                'name' => 'Areia',
                'state_id' => 25,
            ),
            257 => 
            array (
                'id' => 2501153,
                'name' => 'Areia de Baraúnas',
                'state_id' => 25,
            ),
            258 => 
            array (
                'id' => 2501203,
                'name' => 'Areial',
                'state_id' => 25,
            ),
            259 => 
            array (
                'id' => 2501302,
                'name' => 'Aroeiras',
                'state_id' => 25,
            ),
            260 => 
            array (
                'id' => 2501351,
                'name' => 'Assunção',
                'state_id' => 25,
            ),
            261 => 
            array (
                'id' => 2501401,
                'name' => 'Baía da Traição',
                'state_id' => 25,
            ),
            262 => 
            array (
                'id' => 2501500,
                'name' => 'Bananeiras',
                'state_id' => 25,
            ),
            263 => 
            array (
                'id' => 2501534,
                'name' => 'Baraúna',
                'state_id' => 25,
            ),
            264 => 
            array (
                'id' => 2501575,
                'name' => 'Barra de Santana',
                'state_id' => 25,
            ),
            265 => 
            array (
                'id' => 2501609,
                'name' => 'Barra de Santa Rosa',
                'state_id' => 25,
            ),
            266 => 
            array (
                'id' => 2501708,
                'name' => 'Barra de São Miguel',
                'state_id' => 25,
            ),
            267 => 
            array (
                'id' => 2501807,
                'name' => 'Bayeux',
                'state_id' => 25,
            ),
            268 => 
            array (
                'id' => 2501906,
                'name' => 'Belém',
                'state_id' => 25,
            ),
            269 => 
            array (
                'id' => 2502003,
                'name' => 'Belém do Brejo do Cruz',
                'state_id' => 25,
            ),
            270 => 
            array (
                'id' => 2502052,
                'name' => 'Bernardino Batista',
                'state_id' => 25,
            ),
            271 => 
            array (
                'id' => 2502102,
                'name' => 'Boa Ventura',
                'state_id' => 25,
            ),
            272 => 
            array (
                'id' => 2502151,
                'name' => 'Boa Vista',
                'state_id' => 25,
            ),
            273 => 
            array (
                'id' => 2502201,
                'name' => 'Bom Jesus',
                'state_id' => 25,
            ),
            274 => 
            array (
                'id' => 2502300,
                'name' => 'Bom Sucesso',
                'state_id' => 25,
            ),
            275 => 
            array (
                'id' => 2502409,
                'name' => 'Bonito de Santa Fé',
                'state_id' => 25,
            ),
            276 => 
            array (
                'id' => 2502508,
                'name' => 'Boqueirão',
                'state_id' => 25,
            ),
            277 => 
            array (
                'id' => 2502607,
                'name' => 'Igaracy',
                'state_id' => 25,
            ),
            278 => 
            array (
                'id' => 2502706,
                'name' => 'Borborema',
                'state_id' => 25,
            ),
            279 => 
            array (
                'id' => 2502805,
                'name' => 'Brejo do Cruz',
                'state_id' => 25,
            ),
            280 => 
            array (
                'id' => 2502904,
                'name' => 'Brejo dos Santos',
                'state_id' => 25,
            ),
            281 => 
            array (
                'id' => 2503001,
                'name' => 'Caaporã',
                'state_id' => 25,
            ),
            282 => 
            array (
                'id' => 2503100,
                'name' => 'Cabaceiras',
                'state_id' => 25,
            ),
            283 => 
            array (
                'id' => 2503209,
                'name' => 'Cabedelo',
                'state_id' => 25,
            ),
            284 => 
            array (
                'id' => 2503308,
                'name' => 'Cachoeira dos Índios',
                'state_id' => 25,
            ),
            285 => 
            array (
                'id' => 2503407,
                'name' => 'Cacimba de Areia',
                'state_id' => 25,
            ),
            286 => 
            array (
                'id' => 2503506,
                'name' => 'Cacimba de Dentro',
                'state_id' => 25,
            ),
            287 => 
            array (
                'id' => 2503555,
                'name' => 'Cacimbas',
                'state_id' => 25,
            ),
            288 => 
            array (
                'id' => 2503605,
                'name' => 'Caiçara',
                'state_id' => 25,
            ),
            289 => 
            array (
                'id' => 2503704,
                'name' => 'Cajazeiras',
                'state_id' => 25,
            ),
            290 => 
            array (
                'id' => 2503753,
                'name' => 'Cajazeirinhas',
                'state_id' => 25,
            ),
            291 => 
            array (
                'id' => 2503803,
                'name' => 'Caldas Brandão',
                'state_id' => 25,
            ),
            292 => 
            array (
                'id' => 2503902,
                'name' => 'Camalaú',
                'state_id' => 25,
            ),
            293 => 
            array (
                'id' => 2504009,
                'name' => 'Campina Grande',
                'state_id' => 25,
            ),
            294 => 
            array (
                'id' => 2504033,
                'name' => 'Capim',
                'state_id' => 25,
            ),
            295 => 
            array (
                'id' => 2504074,
                'name' => 'Caraúbas',
                'state_id' => 25,
            ),
            296 => 
            array (
                'id' => 2504108,
                'name' => 'Carrapateira',
                'state_id' => 25,
            ),
            297 => 
            array (
                'id' => 2504157,
                'name' => 'Casserengue',
                'state_id' => 25,
            ),
            298 => 
            array (
                'id' => 2504207,
                'name' => 'Catingueira',
                'state_id' => 25,
            ),
            299 => 
            array (
                'id' => 2504306,
                'name' => 'Catolé do Rocha',
                'state_id' => 25,
            ),
            300 => 
            array (
                'id' => 2504355,
                'name' => 'Caturité',
                'state_id' => 25,
            ),
            301 => 
            array (
                'id' => 2504405,
                'name' => 'Conceição',
                'state_id' => 25,
            ),
            302 => 
            array (
                'id' => 2504504,
                'name' => 'Condado',
                'state_id' => 25,
            ),
            303 => 
            array (
                'id' => 2504603,
                'name' => 'Conde',
                'state_id' => 25,
            ),
            304 => 
            array (
                'id' => 2504702,
                'name' => 'Congo',
                'state_id' => 25,
            ),
            305 => 
            array (
                'id' => 2504801,
                'name' => 'Coremas',
                'state_id' => 25,
            ),
            306 => 
            array (
                'id' => 2504850,
                'name' => 'Coxixola',
                'state_id' => 25,
            ),
            307 => 
            array (
                'id' => 2504900,
                'name' => 'Cruz do Espírito Santo',
                'state_id' => 25,
            ),
            308 => 
            array (
                'id' => 2505006,
                'name' => 'Cubati',
                'state_id' => 25,
            ),
            309 => 
            array (
                'id' => 2505105,
                'name' => 'Cuité',
                'state_id' => 25,
            ),
            310 => 
            array (
                'id' => 2505204,
                'name' => 'Cuitegi',
                'state_id' => 25,
            ),
            311 => 
            array (
                'id' => 2505238,
                'name' => 'Cuité de Mamanguape',
                'state_id' => 25,
            ),
            312 => 
            array (
                'id' => 2505279,
                'name' => 'Curral de Cima',
                'state_id' => 25,
            ),
            313 => 
            array (
                'id' => 2505303,
                'name' => 'Curral Velho',
                'state_id' => 25,
            ),
            314 => 
            array (
                'id' => 2505352,
                'name' => 'Damião',
                'state_id' => 25,
            ),
            315 => 
            array (
                'id' => 2505402,
                'name' => 'Desterro',
                'state_id' => 25,
            ),
            316 => 
            array (
                'id' => 2505501,
                'name' => 'Vista Serrana',
                'state_id' => 25,
            ),
            317 => 
            array (
                'id' => 2505600,
                'name' => 'Diamante',
                'state_id' => 25,
            ),
            318 => 
            array (
                'id' => 2505709,
                'name' => 'Dona Inês',
                'state_id' => 25,
            ),
            319 => 
            array (
                'id' => 2505808,
                'name' => 'Duas Estradas',
                'state_id' => 25,
            ),
            320 => 
            array (
                'id' => 2505907,
                'name' => 'Emas',
                'state_id' => 25,
            ),
            321 => 
            array (
                'id' => 2506004,
                'name' => 'Esperança',
                'state_id' => 25,
            ),
            322 => 
            array (
                'id' => 2506103,
                'name' => 'Fagundes',
                'state_id' => 25,
            ),
            323 => 
            array (
                'id' => 2506202,
                'name' => 'Frei Martinho',
                'state_id' => 25,
            ),
            324 => 
            array (
                'id' => 2506251,
                'name' => 'Gado Bravo',
                'state_id' => 25,
            ),
            325 => 
            array (
                'id' => 2506301,
                'name' => 'Guarabira',
                'state_id' => 25,
            ),
            326 => 
            array (
                'id' => 2506400,
                'name' => 'Gurinhém',
                'state_id' => 25,
            ),
            327 => 
            array (
                'id' => 2506509,
                'name' => 'Gurjão',
                'state_id' => 25,
            ),
            328 => 
            array (
                'id' => 2506608,
                'name' => 'Ibiara',
                'state_id' => 25,
            ),
            329 => 
            array (
                'id' => 2506707,
                'name' => 'Imaculada',
                'state_id' => 25,
            ),
            330 => 
            array (
                'id' => 2506806,
                'name' => 'Ingá',
                'state_id' => 25,
            ),
            331 => 
            array (
                'id' => 2506905,
                'name' => 'Itabaiana',
                'state_id' => 25,
            ),
            332 => 
            array (
                'id' => 2507002,
                'name' => 'Itaporanga',
                'state_id' => 25,
            ),
            333 => 
            array (
                'id' => 2507101,
                'name' => 'Itapororoca',
                'state_id' => 25,
            ),
            334 => 
            array (
                'id' => 2507200,
                'name' => 'Itatuba',
                'state_id' => 25,
            ),
            335 => 
            array (
                'id' => 2507309,
                'name' => 'Jacaraú',
                'state_id' => 25,
            ),
            336 => 
            array (
                'id' => 2507408,
                'name' => 'Jericó',
                'state_id' => 25,
            ),
            337 => 
            array (
                'id' => 2507507,
                'name' => 'João Pessoa',
                'state_id' => 25,
            ),
            338 => 
            array (
                'id' => 2507606,
                'name' => 'Juarez Távora',
                'state_id' => 25,
            ),
            339 => 
            array (
                'id' => 2507705,
                'name' => 'Juazeirinho',
                'state_id' => 25,
            ),
            340 => 
            array (
                'id' => 2507804,
                'name' => 'Junco do Seridó',
                'state_id' => 25,
            ),
            341 => 
            array (
                'id' => 2507903,
                'name' => 'Juripiranga',
                'state_id' => 25,
            ),
            342 => 
            array (
                'id' => 2508000,
                'name' => 'Juru',
                'state_id' => 25,
            ),
            343 => 
            array (
                'id' => 2508109,
                'name' => 'Lagoa',
                'state_id' => 25,
            ),
            344 => 
            array (
                'id' => 2508208,
                'name' => 'Lagoa de Dentro',
                'state_id' => 25,
            ),
            345 => 
            array (
                'id' => 2508307,
                'name' => 'Lagoa Seca',
                'state_id' => 25,
            ),
            346 => 
            array (
                'id' => 2508406,
                'name' => 'Lastro',
                'state_id' => 25,
            ),
            347 => 
            array (
                'id' => 2508505,
                'name' => 'Livramento',
                'state_id' => 25,
            ),
            348 => 
            array (
                'id' => 2508554,
                'name' => 'Logradouro',
                'state_id' => 25,
            ),
            349 => 
            array (
                'id' => 2508604,
                'name' => 'Lucena',
                'state_id' => 25,
            ),
            350 => 
            array (
                'id' => 2508703,
                'name' => 'Mãe d\'Água',
                'state_id' => 25,
            ),
            351 => 
            array (
                'id' => 2508802,
                'name' => 'Malta',
                'state_id' => 25,
            ),
            352 => 
            array (
                'id' => 2508901,
                'name' => 'Mamanguape',
                'state_id' => 25,
            ),
            353 => 
            array (
                'id' => 2509008,
                'name' => 'Manaíra',
                'state_id' => 25,
            ),
            354 => 
            array (
                'id' => 2509057,
                'name' => 'Marcação',
                'state_id' => 25,
            ),
            355 => 
            array (
                'id' => 2509107,
                'name' => 'Mari',
                'state_id' => 25,
            ),
            356 => 
            array (
                'id' => 2509156,
                'name' => 'Marizópolis',
                'state_id' => 25,
            ),
            357 => 
            array (
                'id' => 2509206,
                'name' => 'Massaranduba',
                'state_id' => 25,
            ),
            358 => 
            array (
                'id' => 2509305,
                'name' => 'Mataraca',
                'state_id' => 25,
            ),
            359 => 
            array (
                'id' => 2509339,
                'name' => 'Matinhas',
                'state_id' => 25,
            ),
            360 => 
            array (
                'id' => 2509370,
                'name' => 'Mato Grosso',
                'state_id' => 25,
            ),
            361 => 
            array (
                'id' => 2509396,
                'name' => 'Maturéia',
                'state_id' => 25,
            ),
            362 => 
            array (
                'id' => 2509404,
                'name' => 'Mogeiro',
                'state_id' => 25,
            ),
            363 => 
            array (
                'id' => 2509503,
                'name' => 'Montadas',
                'state_id' => 25,
            ),
            364 => 
            array (
                'id' => 2509602,
                'name' => 'Monte Horebe',
                'state_id' => 25,
            ),
            365 => 
            array (
                'id' => 2509701,
                'name' => 'Monteiro',
                'state_id' => 25,
            ),
            366 => 
            array (
                'id' => 2509800,
                'name' => 'Mulungu',
                'state_id' => 25,
            ),
            367 => 
            array (
                'id' => 2509909,
                'name' => 'Natuba',
                'state_id' => 25,
            ),
            368 => 
            array (
                'id' => 2510006,
                'name' => 'Nazarezinho',
                'state_id' => 25,
            ),
            369 => 
            array (
                'id' => 2510105,
                'name' => 'Nova Floresta',
                'state_id' => 25,
            ),
            370 => 
            array (
                'id' => 2510204,
                'name' => 'Nova Olinda',
                'state_id' => 25,
            ),
            371 => 
            array (
                'id' => 2510303,
                'name' => 'Nova Palmeira',
                'state_id' => 25,
            ),
            372 => 
            array (
                'id' => 2510402,
                'name' => 'Olho d\'Água',
                'state_id' => 25,
            ),
            373 => 
            array (
                'id' => 2510501,
                'name' => 'Olivedos',
                'state_id' => 25,
            ),
            374 => 
            array (
                'id' => 2510600,
                'name' => 'Ouro Velho',
                'state_id' => 25,
            ),
            375 => 
            array (
                'id' => 2510659,
                'name' => 'Parari',
                'state_id' => 25,
            ),
            376 => 
            array (
                'id' => 2510709,
                'name' => 'Passagem',
                'state_id' => 25,
            ),
            377 => 
            array (
                'id' => 2510808,
                'name' => 'Patos',
                'state_id' => 25,
            ),
            378 => 
            array (
                'id' => 2510907,
                'name' => 'Paulista',
                'state_id' => 25,
            ),
            379 => 
            array (
                'id' => 2511004,
                'name' => 'Pedra Branca',
                'state_id' => 25,
            ),
            380 => 
            array (
                'id' => 2511103,
                'name' => 'Pedra Lavrada',
                'state_id' => 25,
            ),
            381 => 
            array (
                'id' => 2511202,
                'name' => 'Pedras de Fogo',
                'state_id' => 25,
            ),
            382 => 
            array (
                'id' => 2511301,
                'name' => 'Piancó',
                'state_id' => 25,
            ),
            383 => 
            array (
                'id' => 2511400,
                'name' => 'Picuí',
                'state_id' => 25,
            ),
            384 => 
            array (
                'id' => 2511509,
                'name' => 'Pilar',
                'state_id' => 25,
            ),
            385 => 
            array (
                'id' => 2511608,
                'name' => 'Pilões',
                'state_id' => 25,
            ),
            386 => 
            array (
                'id' => 2511707,
                'name' => 'Pilõezinhos',
                'state_id' => 25,
            ),
            387 => 
            array (
                'id' => 2511806,
                'name' => 'Pirpirituba',
                'state_id' => 25,
            ),
            388 => 
            array (
                'id' => 2511905,
                'name' => 'Pitimbu',
                'state_id' => 25,
            ),
            389 => 
            array (
                'id' => 2512002,
                'name' => 'Pocinhos',
                'state_id' => 25,
            ),
            390 => 
            array (
                'id' => 2512036,
                'name' => 'Poço Dantas',
                'state_id' => 25,
            ),
            391 => 
            array (
                'id' => 2512077,
                'name' => 'Poço de José de Moura',
                'state_id' => 25,
            ),
            392 => 
            array (
                'id' => 2512101,
                'name' => 'Pombal',
                'state_id' => 25,
            ),
            393 => 
            array (
                'id' => 2512200,
                'name' => 'Prata',
                'state_id' => 25,
            ),
            394 => 
            array (
                'id' => 2512309,
                'name' => 'Princesa Isabel',
                'state_id' => 25,
            ),
            395 => 
            array (
                'id' => 2512408,
                'name' => 'Puxinanã',
                'state_id' => 25,
            ),
            396 => 
            array (
                'id' => 2512507,
                'name' => 'Queimadas',
                'state_id' => 25,
            ),
            397 => 
            array (
                'id' => 2512606,
                'name' => 'Quixaba',
                'state_id' => 25,
            ),
            398 => 
            array (
                'id' => 2512705,
                'name' => 'Remígio',
                'state_id' => 25,
            ),
            399 => 
            array (
                'id' => 2512721,
                'name' => 'Pedro Régis',
                'state_id' => 25,
            ),
            400 => 
            array (
                'id' => 2512747,
                'name' => 'Riachão',
                'state_id' => 25,
            ),
            401 => 
            array (
                'id' => 2512754,
                'name' => 'Riachão do Bacamarte',
                'state_id' => 25,
            ),
            402 => 
            array (
                'id' => 2512762,
                'name' => 'Riachão do Poço',
                'state_id' => 25,
            ),
            403 => 
            array (
                'id' => 2512788,
                'name' => 'Riacho de Santo Antônio',
                'state_id' => 25,
            ),
            404 => 
            array (
                'id' => 2512804,
                'name' => 'Riacho dos Cavalos',
                'state_id' => 25,
            ),
            405 => 
            array (
                'id' => 2512903,
                'name' => 'Rio Tinto',
                'state_id' => 25,
            ),
            406 => 
            array (
                'id' => 2513000,
                'name' => 'Salgadinho',
                'state_id' => 25,
            ),
            407 => 
            array (
                'id' => 2513109,
                'name' => 'Salgado de São Félix',
                'state_id' => 25,
            ),
            408 => 
            array (
                'id' => 2513158,
                'name' => 'Santa Cecília',
                'state_id' => 25,
            ),
            409 => 
            array (
                'id' => 2513208,
                'name' => 'Santa Cruz',
                'state_id' => 25,
            ),
            410 => 
            array (
                'id' => 2513307,
                'name' => 'Santa Helena',
                'state_id' => 25,
            ),
            411 => 
            array (
                'id' => 2513356,
                'name' => 'Santa Inês',
                'state_id' => 25,
            ),
            412 => 
            array (
                'id' => 2513406,
                'name' => 'Santa Luzia',
                'state_id' => 25,
            ),
            413 => 
            array (
                'id' => 2513505,
                'name' => 'Santana de Mangueira',
                'state_id' => 25,
            ),
            414 => 
            array (
                'id' => 2513604,
                'name' => 'Santana dos Garrotes',
                'state_id' => 25,
            ),
            415 => 
            array (
                'id' => 2513653,
                'name' => 'Joca Claudino',
                'state_id' => 25,
            ),
            416 => 
            array (
                'id' => 2513703,
                'name' => 'Santa Rita',
                'state_id' => 25,
            ),
            417 => 
            array (
                'id' => 2513802,
                'name' => 'Santa Teresinha',
                'state_id' => 25,
            ),
            418 => 
            array (
                'id' => 2513851,
                'name' => 'Santo André',
                'state_id' => 25,
            ),
            419 => 
            array (
                'id' => 2513901,
                'name' => 'São Bento',
                'state_id' => 25,
            ),
            420 => 
            array (
                'id' => 2513927,
                'name' => 'São Bentinho',
                'state_id' => 25,
            ),
            421 => 
            array (
                'id' => 2513943,
                'name' => 'São Domingos do Cariri',
                'state_id' => 25,
            ),
            422 => 
            array (
                'id' => 2513968,
                'name' => 'São Domingos',
                'state_id' => 25,
            ),
            423 => 
            array (
                'id' => 2513984,
                'name' => 'São Francisco',
                'state_id' => 25,
            ),
            424 => 
            array (
                'id' => 2514008,
                'name' => 'São João do Cariri',
                'state_id' => 25,
            ),
            425 => 
            array (
                'id' => 2514107,
                'name' => 'São João do Tigre',
                'state_id' => 25,
            ),
            426 => 
            array (
                'id' => 2514206,
                'name' => 'São José da Lagoa Tapada',
                'state_id' => 25,
            ),
            427 => 
            array (
                'id' => 2514305,
                'name' => 'São José de Caiana',
                'state_id' => 25,
            ),
            428 => 
            array (
                'id' => 2514404,
                'name' => 'São José de Espinharas',
                'state_id' => 25,
            ),
            429 => 
            array (
                'id' => 2514453,
                'name' => 'São José dos Ramos',
                'state_id' => 25,
            ),
            430 => 
            array (
                'id' => 2514503,
                'name' => 'São José de Piranhas',
                'state_id' => 25,
            ),
            431 => 
            array (
                'id' => 2514552,
                'name' => 'São José de Princesa',
                'state_id' => 25,
            ),
            432 => 
            array (
                'id' => 2514602,
                'name' => 'São José do Bonfim',
                'state_id' => 25,
            ),
            433 => 
            array (
                'id' => 2514651,
                'name' => 'São José do Brejo do Cruz',
                'state_id' => 25,
            ),
            434 => 
            array (
                'id' => 2514701,
                'name' => 'São José do Sabugi',
                'state_id' => 25,
            ),
            435 => 
            array (
                'id' => 2514800,
                'name' => 'São José dos Cordeiros',
                'state_id' => 25,
            ),
            436 => 
            array (
                'id' => 2514909,
                'name' => 'São Mamede',
                'state_id' => 25,
            ),
            437 => 
            array (
                'id' => 2515005,
                'name' => 'São Miguel de Taipu',
                'state_id' => 25,
            ),
            438 => 
            array (
                'id' => 2515104,
                'name' => 'São Sebastião de Lagoa de Roça',
                'state_id' => 25,
            ),
            439 => 
            array (
                'id' => 2515203,
                'name' => 'São Sebastião do Umbuzeiro',
                'state_id' => 25,
            ),
            440 => 
            array (
                'id' => 2515302,
                'name' => 'Sapé',
                'state_id' => 25,
            ),
            441 => 
            array (
                'id' => 2515401,
                'name' => 'São Vicente do Seridó',
                'state_id' => 25,
            ),
            442 => 
            array (
                'id' => 2515500,
                'name' => 'Serra Branca',
                'state_id' => 25,
            ),
            443 => 
            array (
                'id' => 2515609,
                'name' => 'Serra da Raiz',
                'state_id' => 25,
            ),
            444 => 
            array (
                'id' => 2515708,
                'name' => 'Serra Grande',
                'state_id' => 25,
            ),
            445 => 
            array (
                'id' => 2515807,
                'name' => 'Serra Redonda',
                'state_id' => 25,
            ),
            446 => 
            array (
                'id' => 2515906,
                'name' => 'Serraria',
                'state_id' => 25,
            ),
            447 => 
            array (
                'id' => 2515930,
                'name' => 'Sertãozinho',
                'state_id' => 25,
            ),
            448 => 
            array (
                'id' => 2515971,
                'name' => 'Sobrado',
                'state_id' => 25,
            ),
            449 => 
            array (
                'id' => 2516003,
                'name' => 'Solânea',
                'state_id' => 25,
            ),
            450 => 
            array (
                'id' => 2516102,
                'name' => 'Soledade',
                'state_id' => 25,
            ),
            451 => 
            array (
                'id' => 2516151,
                'name' => 'Sossêgo',
                'state_id' => 25,
            ),
            452 => 
            array (
                'id' => 2516201,
                'name' => 'Sousa',
                'state_id' => 25,
            ),
            453 => 
            array (
                'id' => 2516300,
                'name' => 'Sumé',
                'state_id' => 25,
            ),
            454 => 
            array (
                'id' => 2516409,
                'name' => 'Tacima',
                'state_id' => 25,
            ),
            455 => 
            array (
                'id' => 2516508,
                'name' => 'Taperoá',
                'state_id' => 25,
            ),
            456 => 
            array (
                'id' => 2516607,
                'name' => 'Tavares',
                'state_id' => 25,
            ),
            457 => 
            array (
                'id' => 2516706,
                'name' => 'Teixeira',
                'state_id' => 25,
            ),
            458 => 
            array (
                'id' => 2516755,
                'name' => 'Tenório',
                'state_id' => 25,
            ),
            459 => 
            array (
                'id' => 2516805,
                'name' => 'Triunfo',
                'state_id' => 25,
            ),
            460 => 
            array (
                'id' => 2516904,
                'name' => 'Uiraúna',
                'state_id' => 25,
            ),
            461 => 
            array (
                'id' => 2517001,
                'name' => 'Umbuzeiro',
                'state_id' => 25,
            ),
            462 => 
            array (
                'id' => 2517100,
                'name' => 'Várzea',
                'state_id' => 25,
            ),
            463 => 
            array (
                'id' => 2517209,
                'name' => 'Vieirópolis',
                'state_id' => 25,
            ),
            464 => 
            array (
                'id' => 2517407,
                'name' => 'Zabelê',
                'state_id' => 25,
            ),
            465 => 
            array (
                'id' => 2600054,
                'name' => 'Abreu e Lima',
                'state_id' => 26,
            ),
            466 => 
            array (
                'id' => 2600104,
                'name' => 'Afogados da Ingazeira',
                'state_id' => 26,
            ),
            467 => 
            array (
                'id' => 2600203,
                'name' => 'Afrânio',
                'state_id' => 26,
            ),
            468 => 
            array (
                'id' => 2600302,
                'name' => 'Agrestina',
                'state_id' => 26,
            ),
            469 => 
            array (
                'id' => 2600401,
                'name' => 'Água Preta',
                'state_id' => 26,
            ),
            470 => 
            array (
                'id' => 2600500,
                'name' => 'Águas Belas',
                'state_id' => 26,
            ),
            471 => 
            array (
                'id' => 2600609,
                'name' => 'Alagoinha',
                'state_id' => 26,
            ),
            472 => 
            array (
                'id' => 2600708,
                'name' => 'Aliança',
                'state_id' => 26,
            ),
            473 => 
            array (
                'id' => 2600807,
                'name' => 'Altinho',
                'state_id' => 26,
            ),
            474 => 
            array (
                'id' => 2600906,
                'name' => 'Amaraji',
                'state_id' => 26,
            ),
            475 => 
            array (
                'id' => 2601003,
                'name' => 'Angelim',
                'state_id' => 26,
            ),
            476 => 
            array (
                'id' => 2601052,
                'name' => 'Araçoiaba',
                'state_id' => 26,
            ),
            477 => 
            array (
                'id' => 2601102,
                'name' => 'Araripina',
                'state_id' => 26,
            ),
            478 => 
            array (
                'id' => 2601201,
                'name' => 'Arcoverde',
                'state_id' => 26,
            ),
            479 => 
            array (
                'id' => 2601300,
                'name' => 'Barra de Guabiraba',
                'state_id' => 26,
            ),
            480 => 
            array (
                'id' => 2601409,
                'name' => 'Barreiros',
                'state_id' => 26,
            ),
            481 => 
            array (
                'id' => 2601508,
                'name' => 'Belém de Maria',
                'state_id' => 26,
            ),
            482 => 
            array (
                'id' => 2601607,
                'name' => 'Belém do São Francisco',
                'state_id' => 26,
            ),
            483 => 
            array (
                'id' => 2601706,
                'name' => 'Belo Jardim',
                'state_id' => 26,
            ),
            484 => 
            array (
                'id' => 2601805,
                'name' => 'Betânia',
                'state_id' => 26,
            ),
            485 => 
            array (
                'id' => 2601904,
                'name' => 'Bezerros',
                'state_id' => 26,
            ),
            486 => 
            array (
                'id' => 2602001,
                'name' => 'Bodocó',
                'state_id' => 26,
            ),
            487 => 
            array (
                'id' => 2602100,
                'name' => 'Bom Conselho',
                'state_id' => 26,
            ),
            488 => 
            array (
                'id' => 2602209,
                'name' => 'Bom Jardim',
                'state_id' => 26,
            ),
            489 => 
            array (
                'id' => 2602308,
                'name' => 'Bonito',
                'state_id' => 26,
            ),
            490 => 
            array (
                'id' => 2602407,
                'name' => 'Brejão',
                'state_id' => 26,
            ),
            491 => 
            array (
                'id' => 2602506,
                'name' => 'Brejinho',
                'state_id' => 26,
            ),
            492 => 
            array (
                'id' => 2602605,
                'name' => 'Brejo da Madre de Deus',
                'state_id' => 26,
            ),
            493 => 
            array (
                'id' => 2602704,
                'name' => 'Buenos Aires',
                'state_id' => 26,
            ),
            494 => 
            array (
                'id' => 2602803,
                'name' => 'Buíque',
                'state_id' => 26,
            ),
            495 => 
            array (
                'id' => 2602902,
                'name' => 'Cabo de Santo Agostinho',
                'state_id' => 26,
            ),
            496 => 
            array (
                'id' => 2603009,
                'name' => 'Cabrobó',
                'state_id' => 26,
            ),
            497 => 
            array (
                'id' => 2603108,
                'name' => 'Cachoeirinha',
                'state_id' => 26,
            ),
            498 => 
            array (
                'id' => 2603207,
                'name' => 'Caetés',
                'state_id' => 26,
            ),
            499 => 
            array (
                'id' => 2603306,
                'name' => 'Calçado',
                'state_id' => 26,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 2603405,
                'name' => 'Calumbi',
                'state_id' => 26,
            ),
            1 => 
            array (
                'id' => 2603454,
                'name' => 'Camaragibe',
                'state_id' => 26,
            ),
            2 => 
            array (
                'id' => 2603504,
                'name' => 'Camocim de São Félix',
                'state_id' => 26,
            ),
            3 => 
            array (
                'id' => 2603603,
                'name' => 'Camutanga',
                'state_id' => 26,
            ),
            4 => 
            array (
                'id' => 2603702,
                'name' => 'Canhotinho',
                'state_id' => 26,
            ),
            5 => 
            array (
                'id' => 2603801,
                'name' => 'Capoeiras',
                'state_id' => 26,
            ),
            6 => 
            array (
                'id' => 2603900,
                'name' => 'Carnaíba',
                'state_id' => 26,
            ),
            7 => 
            array (
                'id' => 2603926,
                'name' => 'Carnaubeira da Penha',
                'state_id' => 26,
            ),
            8 => 
            array (
                'id' => 2604007,
                'name' => 'Carpina',
                'state_id' => 26,
            ),
            9 => 
            array (
                'id' => 2604106,
                'name' => 'Caruaru',
                'state_id' => 26,
            ),
            10 => 
            array (
                'id' => 2604155,
                'name' => 'Casinhas',
                'state_id' => 26,
            ),
            11 => 
            array (
                'id' => 2604205,
                'name' => 'Catende',
                'state_id' => 26,
            ),
            12 => 
            array (
                'id' => 2604304,
                'name' => 'Cedro',
                'state_id' => 26,
            ),
            13 => 
            array (
                'id' => 2604403,
                'name' => 'Chã de Alegria',
                'state_id' => 26,
            ),
            14 => 
            array (
                'id' => 2604502,
                'name' => 'Chã Grande',
                'state_id' => 26,
            ),
            15 => 
            array (
                'id' => 2604601,
                'name' => 'Condado',
                'state_id' => 26,
            ),
            16 => 
            array (
                'id' => 2604700,
                'name' => 'Correntes',
                'state_id' => 26,
            ),
            17 => 
            array (
                'id' => 2604809,
                'name' => 'Cortês',
                'state_id' => 26,
            ),
            18 => 
            array (
                'id' => 2604908,
                'name' => 'Cumaru',
                'state_id' => 26,
            ),
            19 => 
            array (
                'id' => 2605004,
                'name' => 'Cupira',
                'state_id' => 26,
            ),
            20 => 
            array (
                'id' => 2605103,
                'name' => 'Custódia',
                'state_id' => 26,
            ),
            21 => 
            array (
                'id' => 2605152,
                'name' => 'Dormentes',
                'state_id' => 26,
            ),
            22 => 
            array (
                'id' => 2605202,
                'name' => 'Escada',
                'state_id' => 26,
            ),
            23 => 
            array (
                'id' => 2605301,
                'name' => 'Exu',
                'state_id' => 26,
            ),
            24 => 
            array (
                'id' => 2605400,
                'name' => 'Feira Nova',
                'state_id' => 26,
            ),
            25 => 
            array (
                'id' => 2605459,
                'name' => 'Fernando de Noronha',
                'state_id' => 26,
            ),
            26 => 
            array (
                'id' => 2605509,
                'name' => 'Ferreiros',
                'state_id' => 26,
            ),
            27 => 
            array (
                'id' => 2605608,
                'name' => 'Flores',
                'state_id' => 26,
            ),
            28 => 
            array (
                'id' => 2605707,
                'name' => 'Floresta',
                'state_id' => 26,
            ),
            29 => 
            array (
                'id' => 2605806,
                'name' => 'Frei Miguelinho',
                'state_id' => 26,
            ),
            30 => 
            array (
                'id' => 2605905,
                'name' => 'Gameleira',
                'state_id' => 26,
            ),
            31 => 
            array (
                'id' => 2606002,
                'name' => 'Garanhuns',
                'state_id' => 26,
            ),
            32 => 
            array (
                'id' => 2606101,
                'name' => 'Glória do Goitá',
                'state_id' => 26,
            ),
            33 => 
            array (
                'id' => 2606200,
                'name' => 'Goiana',
                'state_id' => 26,
            ),
            34 => 
            array (
                'id' => 2606309,
                'name' => 'Granito',
                'state_id' => 26,
            ),
            35 => 
            array (
                'id' => 2606408,
                'name' => 'Gravatá',
                'state_id' => 26,
            ),
            36 => 
            array (
                'id' => 2606507,
                'name' => 'Iati',
                'state_id' => 26,
            ),
            37 => 
            array (
                'id' => 2606606,
                'name' => 'Ibimirim',
                'state_id' => 26,
            ),
            38 => 
            array (
                'id' => 2606705,
                'name' => 'Ibirajuba',
                'state_id' => 26,
            ),
            39 => 
            array (
                'id' => 2606804,
                'name' => 'Igarassu',
                'state_id' => 26,
            ),
            40 => 
            array (
                'id' => 2606903,
                'name' => 'Iguaracy',
                'state_id' => 26,
            ),
            41 => 
            array (
                'id' => 2607000,
                'name' => 'Inajá',
                'state_id' => 26,
            ),
            42 => 
            array (
                'id' => 2607109,
                'name' => 'Ingazeira',
                'state_id' => 26,
            ),
            43 => 
            array (
                'id' => 2607208,
                'name' => 'Ipojuca',
                'state_id' => 26,
            ),
            44 => 
            array (
                'id' => 2607307,
                'name' => 'Ipubi',
                'state_id' => 26,
            ),
            45 => 
            array (
                'id' => 2607406,
                'name' => 'Itacuruba',
                'state_id' => 26,
            ),
            46 => 
            array (
                'id' => 2607505,
                'name' => 'Itaíba',
                'state_id' => 26,
            ),
            47 => 
            array (
                'id' => 2607604,
                'name' => 'Ilha de Itamaracá',
                'state_id' => 26,
            ),
            48 => 
            array (
                'id' => 2607653,
                'name' => 'Itambé',
                'state_id' => 26,
            ),
            49 => 
            array (
                'id' => 2607703,
                'name' => 'Itapetim',
                'state_id' => 26,
            ),
            50 => 
            array (
                'id' => 2607752,
                'name' => 'Itapissuma',
                'state_id' => 26,
            ),
            51 => 
            array (
                'id' => 2607802,
                'name' => 'Itaquitinga',
                'state_id' => 26,
            ),
            52 => 
            array (
                'id' => 2607901,
                'name' => 'Jaboatão dos Guararapes',
                'state_id' => 26,
            ),
            53 => 
            array (
                'id' => 2607950,
                'name' => 'Jaqueira',
                'state_id' => 26,
            ),
            54 => 
            array (
                'id' => 2608008,
                'name' => 'Jataúba',
                'state_id' => 26,
            ),
            55 => 
            array (
                'id' => 2608057,
                'name' => 'Jatobá',
                'state_id' => 26,
            ),
            56 => 
            array (
                'id' => 2608107,
                'name' => 'João Alfredo',
                'state_id' => 26,
            ),
            57 => 
            array (
                'id' => 2608206,
                'name' => 'Joaquim Nabuco',
                'state_id' => 26,
            ),
            58 => 
            array (
                'id' => 2608255,
                'name' => 'Jucati',
                'state_id' => 26,
            ),
            59 => 
            array (
                'id' => 2608305,
                'name' => 'Jupi',
                'state_id' => 26,
            ),
            60 => 
            array (
                'id' => 2608404,
                'name' => 'Jurema',
                'state_id' => 26,
            ),
            61 => 
            array (
                'id' => 2608453,
                'name' => 'Lagoa do Carro',
                'state_id' => 26,
            ),
            62 => 
            array (
                'id' => 2608503,
                'name' => 'Lagoa de Itaenga',
                'state_id' => 26,
            ),
            63 => 
            array (
                'id' => 2608602,
                'name' => 'Lagoa do Ouro',
                'state_id' => 26,
            ),
            64 => 
            array (
                'id' => 2608701,
                'name' => 'Lagoa dos Gatos',
                'state_id' => 26,
            ),
            65 => 
            array (
                'id' => 2608750,
                'name' => 'Lagoa Grande',
                'state_id' => 26,
            ),
            66 => 
            array (
                'id' => 2608800,
                'name' => 'Lajedo',
                'state_id' => 26,
            ),
            67 => 
            array (
                'id' => 2608909,
                'name' => 'Limoeiro',
                'state_id' => 26,
            ),
            68 => 
            array (
                'id' => 2609006,
                'name' => 'Macaparana',
                'state_id' => 26,
            ),
            69 => 
            array (
                'id' => 2609105,
                'name' => 'Machados',
                'state_id' => 26,
            ),
            70 => 
            array (
                'id' => 2609154,
                'name' => 'Manari',
                'state_id' => 26,
            ),
            71 => 
            array (
                'id' => 2609204,
                'name' => 'Maraial',
                'state_id' => 26,
            ),
            72 => 
            array (
                'id' => 2609303,
                'name' => 'Mirandiba',
                'state_id' => 26,
            ),
            73 => 
            array (
                'id' => 2609402,
                'name' => 'Moreno',
                'state_id' => 26,
            ),
            74 => 
            array (
                'id' => 2609501,
                'name' => 'Nazaré da Mata',
                'state_id' => 26,
            ),
            75 => 
            array (
                'id' => 2609600,
                'name' => 'Olinda',
                'state_id' => 26,
            ),
            76 => 
            array (
                'id' => 2609709,
                'name' => 'Orobó',
                'state_id' => 26,
            ),
            77 => 
            array (
                'id' => 2609808,
                'name' => 'Orocó',
                'state_id' => 26,
            ),
            78 => 
            array (
                'id' => 2609907,
                'name' => 'Ouricuri',
                'state_id' => 26,
            ),
            79 => 
            array (
                'id' => 2610004,
                'name' => 'Palmares',
                'state_id' => 26,
            ),
            80 => 
            array (
                'id' => 2610103,
                'name' => 'Palmeirina',
                'state_id' => 26,
            ),
            81 => 
            array (
                'id' => 2610202,
                'name' => 'Panelas',
                'state_id' => 26,
            ),
            82 => 
            array (
                'id' => 2610301,
                'name' => 'Paranatama',
                'state_id' => 26,
            ),
            83 => 
            array (
                'id' => 2610400,
                'name' => 'Parnamirim',
                'state_id' => 26,
            ),
            84 => 
            array (
                'id' => 2610509,
                'name' => 'Passira',
                'state_id' => 26,
            ),
            85 => 
            array (
                'id' => 2610608,
                'name' => 'Paudalho',
                'state_id' => 26,
            ),
            86 => 
            array (
                'id' => 2610707,
                'name' => 'Paulista',
                'state_id' => 26,
            ),
            87 => 
            array (
                'id' => 2610806,
                'name' => 'Pedra',
                'state_id' => 26,
            ),
            88 => 
            array (
                'id' => 2610905,
                'name' => 'Pesqueira',
                'state_id' => 26,
            ),
            89 => 
            array (
                'id' => 2611002,
                'name' => 'Petrolândia',
                'state_id' => 26,
            ),
            90 => 
            array (
                'id' => 2611101,
                'name' => 'Petrolina',
                'state_id' => 26,
            ),
            91 => 
            array (
                'id' => 2611200,
                'name' => 'Poção',
                'state_id' => 26,
            ),
            92 => 
            array (
                'id' => 2611309,
                'name' => 'Pombos',
                'state_id' => 26,
            ),
            93 => 
            array (
                'id' => 2611408,
                'name' => 'Primavera',
                'state_id' => 26,
            ),
            94 => 
            array (
                'id' => 2611507,
                'name' => 'Quipapá',
                'state_id' => 26,
            ),
            95 => 
            array (
                'id' => 2611533,
                'name' => 'Quixaba',
                'state_id' => 26,
            ),
            96 => 
            array (
                'id' => 2611606,
                'name' => 'Recife',
                'state_id' => 26,
            ),
            97 => 
            array (
                'id' => 2611705,
                'name' => 'Riacho das Almas',
                'state_id' => 26,
            ),
            98 => 
            array (
                'id' => 2611804,
                'name' => 'Ribeirão',
                'state_id' => 26,
            ),
            99 => 
            array (
                'id' => 2611903,
                'name' => 'Rio Formoso',
                'state_id' => 26,
            ),
            100 => 
            array (
                'id' => 2612000,
                'name' => 'Sairé',
                'state_id' => 26,
            ),
            101 => 
            array (
                'id' => 2612109,
                'name' => 'Salgadinho',
                'state_id' => 26,
            ),
            102 => 
            array (
                'id' => 2612208,
                'name' => 'Salgueiro',
                'state_id' => 26,
            ),
            103 => 
            array (
                'id' => 2612307,
                'name' => 'Saloá',
                'state_id' => 26,
            ),
            104 => 
            array (
                'id' => 2612406,
                'name' => 'Sanharó',
                'state_id' => 26,
            ),
            105 => 
            array (
                'id' => 2612455,
                'name' => 'Santa Cruz',
                'state_id' => 26,
            ),
            106 => 
            array (
                'id' => 2612471,
                'name' => 'Santa Cruz da Baixa Verde',
                'state_id' => 26,
            ),
            107 => 
            array (
                'id' => 2612505,
                'name' => 'Santa Cruz do Capibaribe',
                'state_id' => 26,
            ),
            108 => 
            array (
                'id' => 2612554,
                'name' => 'Santa Filomena',
                'state_id' => 26,
            ),
            109 => 
            array (
                'id' => 2612604,
                'name' => 'Santa Maria da Boa Vista',
                'state_id' => 26,
            ),
            110 => 
            array (
                'id' => 2612703,
                'name' => 'Santa Maria do Cambucá',
                'state_id' => 26,
            ),
            111 => 
            array (
                'id' => 2612802,
                'name' => 'Santa Terezinha',
                'state_id' => 26,
            ),
            112 => 
            array (
                'id' => 2612901,
                'name' => 'São Benedito do Sul',
                'state_id' => 26,
            ),
            113 => 
            array (
                'id' => 2613008,
                'name' => 'São Bento do Una',
                'state_id' => 26,
            ),
            114 => 
            array (
                'id' => 2613107,
                'name' => 'São Caitano',
                'state_id' => 26,
            ),
            115 => 
            array (
                'id' => 2613206,
                'name' => 'São João',
                'state_id' => 26,
            ),
            116 => 
            array (
                'id' => 2613305,
                'name' => 'São Joaquim do Monte',
                'state_id' => 26,
            ),
            117 => 
            array (
                'id' => 2613404,
                'name' => 'São José da Coroa Grande',
                'state_id' => 26,
            ),
            118 => 
            array (
                'id' => 2613503,
                'name' => 'São José do Belmonte',
                'state_id' => 26,
            ),
            119 => 
            array (
                'id' => 2613602,
                'name' => 'São José do Egito',
                'state_id' => 26,
            ),
            120 => 
            array (
                'id' => 2613701,
                'name' => 'São Lourenço da Mata',
                'state_id' => 26,
            ),
            121 => 
            array (
                'id' => 2613800,
                'name' => 'São Vicente Férrer',
                'state_id' => 26,
            ),
            122 => 
            array (
                'id' => 2613909,
                'name' => 'Serra Talhada',
                'state_id' => 26,
            ),
            123 => 
            array (
                'id' => 2614006,
                'name' => 'Serrita',
                'state_id' => 26,
            ),
            124 => 
            array (
                'id' => 2614105,
                'name' => 'Sertânia',
                'state_id' => 26,
            ),
            125 => 
            array (
                'id' => 2614204,
                'name' => 'Sirinhaém',
                'state_id' => 26,
            ),
            126 => 
            array (
                'id' => 2614303,
                'name' => 'Moreilândia',
                'state_id' => 26,
            ),
            127 => 
            array (
                'id' => 2614402,
                'name' => 'Solidão',
                'state_id' => 26,
            ),
            128 => 
            array (
                'id' => 2614501,
                'name' => 'Surubim',
                'state_id' => 26,
            ),
            129 => 
            array (
                'id' => 2614600,
                'name' => 'Tabira',
                'state_id' => 26,
            ),
            130 => 
            array (
                'id' => 2614709,
                'name' => 'Tacaimbó',
                'state_id' => 26,
            ),
            131 => 
            array (
                'id' => 2614808,
                'name' => 'Tacaratu',
                'state_id' => 26,
            ),
            132 => 
            array (
                'id' => 2614857,
                'name' => 'Tamandaré',
                'state_id' => 26,
            ),
            133 => 
            array (
                'id' => 2615003,
                'name' => 'Taquaritinga do Norte',
                'state_id' => 26,
            ),
            134 => 
            array (
                'id' => 2615102,
                'name' => 'Terezinha',
                'state_id' => 26,
            ),
            135 => 
            array (
                'id' => 2615201,
                'name' => 'Terra Nova',
                'state_id' => 26,
            ),
            136 => 
            array (
                'id' => 2615300,
                'name' => 'Timbaúba',
                'state_id' => 26,
            ),
            137 => 
            array (
                'id' => 2615409,
                'name' => 'Toritama',
                'state_id' => 26,
            ),
            138 => 
            array (
                'id' => 2615508,
                'name' => 'Tracunhaém',
                'state_id' => 26,
            ),
            139 => 
            array (
                'id' => 2615607,
                'name' => 'Trindade',
                'state_id' => 26,
            ),
            140 => 
            array (
                'id' => 2615706,
                'name' => 'Triunfo',
                'state_id' => 26,
            ),
            141 => 
            array (
                'id' => 2615805,
                'name' => 'Tupanatinga',
                'state_id' => 26,
            ),
            142 => 
            array (
                'id' => 2615904,
                'name' => 'Tuparetama',
                'state_id' => 26,
            ),
            143 => 
            array (
                'id' => 2616001,
                'name' => 'Venturosa',
                'state_id' => 26,
            ),
            144 => 
            array (
                'id' => 2616100,
                'name' => 'Verdejante',
                'state_id' => 26,
            ),
            145 => 
            array (
                'id' => 2616183,
                'name' => 'Vertente do Lério',
                'state_id' => 26,
            ),
            146 => 
            array (
                'id' => 2616209,
                'name' => 'Vertentes',
                'state_id' => 26,
            ),
            147 => 
            array (
                'id' => 2616308,
                'name' => 'Vicência',
                'state_id' => 26,
            ),
            148 => 
            array (
                'id' => 2616407,
                'name' => 'Vitória de Santo Antão',
                'state_id' => 26,
            ),
            149 => 
            array (
                'id' => 2616506,
                'name' => 'Xexéu',
                'state_id' => 26,
            ),
            150 => 
            array (
                'id' => 2700102,
                'name' => 'Água Branca',
                'state_id' => 27,
            ),
            151 => 
            array (
                'id' => 2700201,
                'name' => 'Anadia',
                'state_id' => 27,
            ),
            152 => 
            array (
                'id' => 2700300,
                'name' => 'Arapiraca',
                'state_id' => 27,
            ),
            153 => 
            array (
                'id' => 2700409,
                'name' => 'Atalaia',
                'state_id' => 27,
            ),
            154 => 
            array (
                'id' => 2700508,
                'name' => 'Barra de Santo Antônio',
                'state_id' => 27,
            ),
            155 => 
            array (
                'id' => 2700607,
                'name' => 'Barra de São Miguel',
                'state_id' => 27,
            ),
            156 => 
            array (
                'id' => 2700706,
                'name' => 'Batalha',
                'state_id' => 27,
            ),
            157 => 
            array (
                'id' => 2700805,
                'name' => 'Belém',
                'state_id' => 27,
            ),
            158 => 
            array (
                'id' => 2700904,
                'name' => 'Belo Monte',
                'state_id' => 27,
            ),
            159 => 
            array (
                'id' => 2701001,
                'name' => 'Boca da Mata',
                'state_id' => 27,
            ),
            160 => 
            array (
                'id' => 2701100,
                'name' => 'Branquinha',
                'state_id' => 27,
            ),
            161 => 
            array (
                'id' => 2701209,
                'name' => 'Cacimbinhas',
                'state_id' => 27,
            ),
            162 => 
            array (
                'id' => 2701308,
                'name' => 'Cajueiro',
                'state_id' => 27,
            ),
            163 => 
            array (
                'id' => 2701357,
                'name' => 'Campestre',
                'state_id' => 27,
            ),
            164 => 
            array (
                'id' => 2701407,
                'name' => 'Campo Alegre',
                'state_id' => 27,
            ),
            165 => 
            array (
                'id' => 2701506,
                'name' => 'Campo Grande',
                'state_id' => 27,
            ),
            166 => 
            array (
                'id' => 2701605,
                'name' => 'Canapi',
                'state_id' => 27,
            ),
            167 => 
            array (
                'id' => 2701704,
                'name' => 'Capela',
                'state_id' => 27,
            ),
            168 => 
            array (
                'id' => 2701803,
                'name' => 'Carneiros',
                'state_id' => 27,
            ),
            169 => 
            array (
                'id' => 2701902,
                'name' => 'Chã Preta',
                'state_id' => 27,
            ),
            170 => 
            array (
                'id' => 2702009,
                'name' => 'Coité do Nóia',
                'state_id' => 27,
            ),
            171 => 
            array (
                'id' => 2702108,
                'name' => 'Colônia Leopoldina',
                'state_id' => 27,
            ),
            172 => 
            array (
                'id' => 2702207,
                'name' => 'Coqueiro Seco',
                'state_id' => 27,
            ),
            173 => 
            array (
                'id' => 2702306,
                'name' => 'Coruripe',
                'state_id' => 27,
            ),
            174 => 
            array (
                'id' => 2702355,
                'name' => 'Craíbas',
                'state_id' => 27,
            ),
            175 => 
            array (
                'id' => 2702405,
                'name' => 'Delmiro Gouveia',
                'state_id' => 27,
            ),
            176 => 
            array (
                'id' => 2702504,
                'name' => 'Dois Riachos',
                'state_id' => 27,
            ),
            177 => 
            array (
                'id' => 2702553,
                'name' => 'Estrela de Alagoas',
                'state_id' => 27,
            ),
            178 => 
            array (
                'id' => 2702603,
                'name' => 'Feira Grande',
                'state_id' => 27,
            ),
            179 => 
            array (
                'id' => 2702702,
                'name' => 'Feliz Deserto',
                'state_id' => 27,
            ),
            180 => 
            array (
                'id' => 2702801,
                'name' => 'Flexeiras',
                'state_id' => 27,
            ),
            181 => 
            array (
                'id' => 2702900,
                'name' => 'Girau do Ponciano',
                'state_id' => 27,
            ),
            182 => 
            array (
                'id' => 2703007,
                'name' => 'Ibateguara',
                'state_id' => 27,
            ),
            183 => 
            array (
                'id' => 2703106,
                'name' => 'Igaci',
                'state_id' => 27,
            ),
            184 => 
            array (
                'id' => 2703205,
                'name' => 'Igreja Nova',
                'state_id' => 27,
            ),
            185 => 
            array (
                'id' => 2703304,
                'name' => 'Inhapi',
                'state_id' => 27,
            ),
            186 => 
            array (
                'id' => 2703403,
                'name' => 'Jacaré dos Homens',
                'state_id' => 27,
            ),
            187 => 
            array (
                'id' => 2703502,
                'name' => 'Jacuípe',
                'state_id' => 27,
            ),
            188 => 
            array (
                'id' => 2703601,
                'name' => 'Japaratinga',
                'state_id' => 27,
            ),
            189 => 
            array (
                'id' => 2703700,
                'name' => 'Jaramataia',
                'state_id' => 27,
            ),
            190 => 
            array (
                'id' => 2703759,
                'name' => 'Jequiá da Praia',
                'state_id' => 27,
            ),
            191 => 
            array (
                'id' => 2703809,
                'name' => 'Joaquim Gomes',
                'state_id' => 27,
            ),
            192 => 
            array (
                'id' => 2703908,
                'name' => 'Jundiá',
                'state_id' => 27,
            ),
            193 => 
            array (
                'id' => 2704005,
                'name' => 'Junqueiro',
                'state_id' => 27,
            ),
            194 => 
            array (
                'id' => 2704104,
                'name' => 'Lagoa da Canoa',
                'state_id' => 27,
            ),
            195 => 
            array (
                'id' => 2704203,
                'name' => 'Limoeiro de Anadia',
                'state_id' => 27,
            ),
            196 => 
            array (
                'id' => 2704302,
                'name' => 'Maceió',
                'state_id' => 27,
            ),
            197 => 
            array (
                'id' => 2704401,
                'name' => 'Major Isidoro',
                'state_id' => 27,
            ),
            198 => 
            array (
                'id' => 2704500,
                'name' => 'Maragogi',
                'state_id' => 27,
            ),
            199 => 
            array (
                'id' => 2704609,
                'name' => 'Maravilha',
                'state_id' => 27,
            ),
            200 => 
            array (
                'id' => 2704708,
                'name' => 'Marechal Deodoro',
                'state_id' => 27,
            ),
            201 => 
            array (
                'id' => 2704807,
                'name' => 'Maribondo',
                'state_id' => 27,
            ),
            202 => 
            array (
                'id' => 2704906,
                'name' => 'Mar Vermelho',
                'state_id' => 27,
            ),
            203 => 
            array (
                'id' => 2705002,
                'name' => 'Mata Grande',
                'state_id' => 27,
            ),
            204 => 
            array (
                'id' => 2705101,
                'name' => 'Matriz de Camaragibe',
                'state_id' => 27,
            ),
            205 => 
            array (
                'id' => 2705200,
                'name' => 'Messias',
                'state_id' => 27,
            ),
            206 => 
            array (
                'id' => 2705309,
                'name' => 'Minador do Negrão',
                'state_id' => 27,
            ),
            207 => 
            array (
                'id' => 2705408,
                'name' => 'Monteirópolis',
                'state_id' => 27,
            ),
            208 => 
            array (
                'id' => 2705507,
                'name' => 'Murici',
                'state_id' => 27,
            ),
            209 => 
            array (
                'id' => 2705606,
                'name' => 'Novo Lino',
                'state_id' => 27,
            ),
            210 => 
            array (
                'id' => 2705705,
                'name' => 'Olho d\'Água das Flores',
                'state_id' => 27,
            ),
            211 => 
            array (
                'id' => 2705804,
                'name' => 'Olho d\'Água do Casado',
                'state_id' => 27,
            ),
            212 => 
            array (
                'id' => 2705903,
                'name' => 'Olho d\'Água Grande',
                'state_id' => 27,
            ),
            213 => 
            array (
                'id' => 2706000,
                'name' => 'Olivença',
                'state_id' => 27,
            ),
            214 => 
            array (
                'id' => 2706109,
                'name' => 'Ouro Branco',
                'state_id' => 27,
            ),
            215 => 
            array (
                'id' => 2706208,
                'name' => 'Palestina',
                'state_id' => 27,
            ),
            216 => 
            array (
                'id' => 2706307,
                'name' => 'Palmeira dos Índios',
                'state_id' => 27,
            ),
            217 => 
            array (
                'id' => 2706406,
                'name' => 'Pão de Açúcar',
                'state_id' => 27,
            ),
            218 => 
            array (
                'id' => 2706422,
                'name' => 'Pariconha',
                'state_id' => 27,
            ),
            219 => 
            array (
                'id' => 2706448,
                'name' => 'Paripueira',
                'state_id' => 27,
            ),
            220 => 
            array (
                'id' => 2706505,
                'name' => 'Passo de Camaragibe',
                'state_id' => 27,
            ),
            221 => 
            array (
                'id' => 2706604,
                'name' => 'Paulo Jacinto',
                'state_id' => 27,
            ),
            222 => 
            array (
                'id' => 2706703,
                'name' => 'Penedo',
                'state_id' => 27,
            ),
            223 => 
            array (
                'id' => 2706802,
                'name' => 'Piaçabuçu',
                'state_id' => 27,
            ),
            224 => 
            array (
                'id' => 2706901,
                'name' => 'Pilar',
                'state_id' => 27,
            ),
            225 => 
            array (
                'id' => 2707008,
                'name' => 'Pindoba',
                'state_id' => 27,
            ),
            226 => 
            array (
                'id' => 2707107,
                'name' => 'Piranhas',
                'state_id' => 27,
            ),
            227 => 
            array (
                'id' => 2707206,
                'name' => 'Poço das Trincheiras',
                'state_id' => 27,
            ),
            228 => 
            array (
                'id' => 2707305,
                'name' => 'Porto Calvo',
                'state_id' => 27,
            ),
            229 => 
            array (
                'id' => 2707404,
                'name' => 'Porto de Pedras',
                'state_id' => 27,
            ),
            230 => 
            array (
                'id' => 2707503,
                'name' => 'Porto Real do Colégio',
                'state_id' => 27,
            ),
            231 => 
            array (
                'id' => 2707602,
                'name' => 'Quebrangulo',
                'state_id' => 27,
            ),
            232 => 
            array (
                'id' => 2707701,
                'name' => 'Rio Largo',
                'state_id' => 27,
            ),
            233 => 
            array (
                'id' => 2707800,
                'name' => 'Roteiro',
                'state_id' => 27,
            ),
            234 => 
            array (
                'id' => 2707909,
                'name' => 'Santa Luzia do Norte',
                'state_id' => 27,
            ),
            235 => 
            array (
                'id' => 2708006,
                'name' => 'Santana do Ipanema',
                'state_id' => 27,
            ),
            236 => 
            array (
                'id' => 2708105,
                'name' => 'Santana do Mundaú',
                'state_id' => 27,
            ),
            237 => 
            array (
                'id' => 2708204,
                'name' => 'São Brás',
                'state_id' => 27,
            ),
            238 => 
            array (
                'id' => 2708303,
                'name' => 'São José da Laje',
                'state_id' => 27,
            ),
            239 => 
            array (
                'id' => 2708402,
                'name' => 'São José da Tapera',
                'state_id' => 27,
            ),
            240 => 
            array (
                'id' => 2708501,
                'name' => 'São Luís do Quitunde',
                'state_id' => 27,
            ),
            241 => 
            array (
                'id' => 2708600,
                'name' => 'São Miguel dos Campos',
                'state_id' => 27,
            ),
            242 => 
            array (
                'id' => 2708709,
                'name' => 'São Miguel dos Milagres',
                'state_id' => 27,
            ),
            243 => 
            array (
                'id' => 2708808,
                'name' => 'São Sebastião',
                'state_id' => 27,
            ),
            244 => 
            array (
                'id' => 2708907,
                'name' => 'Satuba',
                'state_id' => 27,
            ),
            245 => 
            array (
                'id' => 2708956,
                'name' => 'Senador Rui Palmeira',
                'state_id' => 27,
            ),
            246 => 
            array (
                'id' => 2709004,
                'name' => 'Tanque d\'Arca',
                'state_id' => 27,
            ),
            247 => 
            array (
                'id' => 2709103,
                'name' => 'Taquarana',
                'state_id' => 27,
            ),
            248 => 
            array (
                'id' => 2709152,
                'name' => 'Teotônio Vilela',
                'state_id' => 27,
            ),
            249 => 
            array (
                'id' => 2709202,
                'name' => 'Traipu',
                'state_id' => 27,
            ),
            250 => 
            array (
                'id' => 2709301,
                'name' => 'União dos Palmares',
                'state_id' => 27,
            ),
            251 => 
            array (
                'id' => 2709400,
                'name' => 'Viçosa',
                'state_id' => 27,
            ),
            252 => 
            array (
                'id' => 2800100,
                'name' => 'Amparo do São Francisco',
                'state_id' => 28,
            ),
            253 => 
            array (
                'id' => 2800209,
                'name' => 'Aquidabã',
                'state_id' => 28,
            ),
            254 => 
            array (
                'id' => 2800308,
                'name' => 'Aracaju',
                'state_id' => 28,
            ),
            255 => 
            array (
                'id' => 2800407,
                'name' => 'Arauá',
                'state_id' => 28,
            ),
            256 => 
            array (
                'id' => 2800506,
                'name' => 'Areia Branca',
                'state_id' => 28,
            ),
            257 => 
            array (
                'id' => 2800605,
                'name' => 'Barra dos Coqueiros',
                'state_id' => 28,
            ),
            258 => 
            array (
                'id' => 2800670,
                'name' => 'Boquim',
                'state_id' => 28,
            ),
            259 => 
            array (
                'id' => 2800704,
                'name' => 'Brejo Grande',
                'state_id' => 28,
            ),
            260 => 
            array (
                'id' => 2801009,
                'name' => 'Campo do Brito',
                'state_id' => 28,
            ),
            261 => 
            array (
                'id' => 2801108,
                'name' => 'Canhoba',
                'state_id' => 28,
            ),
            262 => 
            array (
                'id' => 2801207,
                'name' => 'Canindé de São Francisco',
                'state_id' => 28,
            ),
            263 => 
            array (
                'id' => 2801306,
                'name' => 'Capela',
                'state_id' => 28,
            ),
            264 => 
            array (
                'id' => 2801405,
                'name' => 'Carira',
                'state_id' => 28,
            ),
            265 => 
            array (
                'id' => 2801504,
                'name' => 'Carmópolis',
                'state_id' => 28,
            ),
            266 => 
            array (
                'id' => 2801603,
                'name' => 'Cedro de São João',
                'state_id' => 28,
            ),
            267 => 
            array (
                'id' => 2801702,
                'name' => 'Cristinápolis',
                'state_id' => 28,
            ),
            268 => 
            array (
                'id' => 2801900,
                'name' => 'Cumbe',
                'state_id' => 28,
            ),
            269 => 
            array (
                'id' => 2802007,
                'name' => 'Divina Pastora',
                'state_id' => 28,
            ),
            270 => 
            array (
                'id' => 2802106,
                'name' => 'Estância',
                'state_id' => 28,
            ),
            271 => 
            array (
                'id' => 2802205,
                'name' => 'Feira Nova',
                'state_id' => 28,
            ),
            272 => 
            array (
                'id' => 2802304,
                'name' => 'Frei Paulo',
                'state_id' => 28,
            ),
            273 => 
            array (
                'id' => 2802403,
                'name' => 'Gararu',
                'state_id' => 28,
            ),
            274 => 
            array (
                'id' => 2802502,
                'name' => 'General Maynard',
                'state_id' => 28,
            ),
            275 => 
            array (
                'id' => 2802601,
                'name' => 'Gracho Cardoso',
                'state_id' => 28,
            ),
            276 => 
            array (
                'id' => 2802700,
                'name' => 'Ilha das Flores',
                'state_id' => 28,
            ),
            277 => 
            array (
                'id' => 2802809,
                'name' => 'Indiaroba',
                'state_id' => 28,
            ),
            278 => 
            array (
                'id' => 2802908,
                'name' => 'Itabaiana',
                'state_id' => 28,
            ),
            279 => 
            array (
                'id' => 2803005,
                'name' => 'Itabaianinha',
                'state_id' => 28,
            ),
            280 => 
            array (
                'id' => 2803104,
                'name' => 'Itabi',
                'state_id' => 28,
            ),
            281 => 
            array (
                'id' => 2803203,
                'name' => 'Itaporanga d\'Ajuda',
                'state_id' => 28,
            ),
            282 => 
            array (
                'id' => 2803302,
                'name' => 'Japaratuba',
                'state_id' => 28,
            ),
            283 => 
            array (
                'id' => 2803401,
                'name' => 'Japoatã',
                'state_id' => 28,
            ),
            284 => 
            array (
                'id' => 2803500,
                'name' => 'Lagarto',
                'state_id' => 28,
            ),
            285 => 
            array (
                'id' => 2803609,
                'name' => 'Laranjeiras',
                'state_id' => 28,
            ),
            286 => 
            array (
                'id' => 2803708,
                'name' => 'Macambira',
                'state_id' => 28,
            ),
            287 => 
            array (
                'id' => 2803807,
                'name' => 'Malhada dos Bois',
                'state_id' => 28,
            ),
            288 => 
            array (
                'id' => 2803906,
                'name' => 'Malhador',
                'state_id' => 28,
            ),
            289 => 
            array (
                'id' => 2804003,
                'name' => 'Maruim',
                'state_id' => 28,
            ),
            290 => 
            array (
                'id' => 2804102,
                'name' => 'Moita Bonita',
                'state_id' => 28,
            ),
            291 => 
            array (
                'id' => 2804201,
                'name' => 'Monte Alegre de Sergipe',
                'state_id' => 28,
            ),
            292 => 
            array (
                'id' => 2804300,
                'name' => 'Muribeca',
                'state_id' => 28,
            ),
            293 => 
            array (
                'id' => 2804409,
                'name' => 'Neópolis',
                'state_id' => 28,
            ),
            294 => 
            array (
                'id' => 2804458,
                'name' => 'Nossa Senhora Aparecida',
                'state_id' => 28,
            ),
            295 => 
            array (
                'id' => 2804508,
                'name' => 'Nossa Senhora da Glória',
                'state_id' => 28,
            ),
            296 => 
            array (
                'id' => 2804607,
                'name' => 'Nossa Senhora das Dores',
                'state_id' => 28,
            ),
            297 => 
            array (
                'id' => 2804706,
                'name' => 'Nossa Senhora de Lourdes',
                'state_id' => 28,
            ),
            298 => 
            array (
                'id' => 2804805,
                'name' => 'Nossa Senhora do Socorro',
                'state_id' => 28,
            ),
            299 => 
            array (
                'id' => 2804904,
                'name' => 'Pacatuba',
                'state_id' => 28,
            ),
            300 => 
            array (
                'id' => 2805000,
                'name' => 'Pedra Mole',
                'state_id' => 28,
            ),
            301 => 
            array (
                'id' => 2805109,
                'name' => 'Pedrinhas',
                'state_id' => 28,
            ),
            302 => 
            array (
                'id' => 2805208,
                'name' => 'Pinhão',
                'state_id' => 28,
            ),
            303 => 
            array (
                'id' => 2805307,
                'name' => 'Pirambu',
                'state_id' => 28,
            ),
            304 => 
            array (
                'id' => 2805406,
                'name' => 'Poço Redondo',
                'state_id' => 28,
            ),
            305 => 
            array (
                'id' => 2805505,
                'name' => 'Poço Verde',
                'state_id' => 28,
            ),
            306 => 
            array (
                'id' => 2805604,
                'name' => 'Porto da Folha',
                'state_id' => 28,
            ),
            307 => 
            array (
                'id' => 2805703,
                'name' => 'Propriá',
                'state_id' => 28,
            ),
            308 => 
            array (
                'id' => 2805802,
                'name' => 'Riachão do Dantas',
                'state_id' => 28,
            ),
            309 => 
            array (
                'id' => 2805901,
                'name' => 'Riachuelo',
                'state_id' => 28,
            ),
            310 => 
            array (
                'id' => 2806008,
                'name' => 'Ribeirópolis',
                'state_id' => 28,
            ),
            311 => 
            array (
                'id' => 2806107,
                'name' => 'Rosário do Catete',
                'state_id' => 28,
            ),
            312 => 
            array (
                'id' => 2806206,
                'name' => 'Salgado',
                'state_id' => 28,
            ),
            313 => 
            array (
                'id' => 2806305,
                'name' => 'Santa Luzia do Itanhy',
                'state_id' => 28,
            ),
            314 => 
            array (
                'id' => 2806404,
                'name' => 'Santana do São Francisco',
                'state_id' => 28,
            ),
            315 => 
            array (
                'id' => 2806503,
                'name' => 'Santa Rosa de Lima',
                'state_id' => 28,
            ),
            316 => 
            array (
                'id' => 2806602,
                'name' => 'Santo Amaro das Brotas',
                'state_id' => 28,
            ),
            317 => 
            array (
                'id' => 2806701,
                'name' => 'São Cristóvão',
                'state_id' => 28,
            ),
            318 => 
            array (
                'id' => 2806800,
                'name' => 'São Domingos',
                'state_id' => 28,
            ),
            319 => 
            array (
                'id' => 2806909,
                'name' => 'São Francisco',
                'state_id' => 28,
            ),
            320 => 
            array (
                'id' => 2807006,
                'name' => 'São Miguel do Aleixo',
                'state_id' => 28,
            ),
            321 => 
            array (
                'id' => 2807105,
                'name' => 'Simão Dias',
                'state_id' => 28,
            ),
            322 => 
            array (
                'id' => 2807204,
                'name' => 'Siriri',
                'state_id' => 28,
            ),
            323 => 
            array (
                'id' => 2807303,
                'name' => 'Telha',
                'state_id' => 28,
            ),
            324 => 
            array (
                'id' => 2807402,
                'name' => 'Tobias Barreto',
                'state_id' => 28,
            ),
            325 => 
            array (
                'id' => 2807501,
                'name' => 'Tomar do Geru',
                'state_id' => 28,
            ),
            326 => 
            array (
                'id' => 2807600,
                'name' => 'Umbaúba',
                'state_id' => 28,
            ),
            327 => 
            array (
                'id' => 2900108,
                'name' => 'Abaíra',
                'state_id' => 29,
            ),
            328 => 
            array (
                'id' => 2900207,
                'name' => 'Abaré',
                'state_id' => 29,
            ),
            329 => 
            array (
                'id' => 2900306,
                'name' => 'Acajutiba',
                'state_id' => 29,
            ),
            330 => 
            array (
                'id' => 2900355,
                'name' => 'Adustina',
                'state_id' => 29,
            ),
            331 => 
            array (
                'id' => 2900405,
                'name' => 'Água Fria',
                'state_id' => 29,
            ),
            332 => 
            array (
                'id' => 2900504,
                'name' => 'Érico Cardoso',
                'state_id' => 29,
            ),
            333 => 
            array (
                'id' => 2900603,
                'name' => 'Aiquara',
                'state_id' => 29,
            ),
            334 => 
            array (
                'id' => 2900702,
                'name' => 'Alagoinhas',
                'state_id' => 29,
            ),
            335 => 
            array (
                'id' => 2900801,
                'name' => 'Alcobaça',
                'state_id' => 29,
            ),
            336 => 
            array (
                'id' => 2900900,
                'name' => 'Almadina',
                'state_id' => 29,
            ),
            337 => 
            array (
                'id' => 2901007,
                'name' => 'Amargosa',
                'state_id' => 29,
            ),
            338 => 
            array (
                'id' => 2901106,
                'name' => 'Amélia Rodrigues',
                'state_id' => 29,
            ),
            339 => 
            array (
                'id' => 2901155,
                'name' => 'América Dourada',
                'state_id' => 29,
            ),
            340 => 
            array (
                'id' => 2901205,
                'name' => 'Anagé',
                'state_id' => 29,
            ),
            341 => 
            array (
                'id' => 2901304,
                'name' => 'Andaraí',
                'state_id' => 29,
            ),
            342 => 
            array (
                'id' => 2901353,
                'name' => 'Andorinha',
                'state_id' => 29,
            ),
            343 => 
            array (
                'id' => 2901403,
                'name' => 'Angical',
                'state_id' => 29,
            ),
            344 => 
            array (
                'id' => 2901502,
                'name' => 'Anguera',
                'state_id' => 29,
            ),
            345 => 
            array (
                'id' => 2901601,
                'name' => 'Antas',
                'state_id' => 29,
            ),
            346 => 
            array (
                'id' => 2901700,
                'name' => 'Antônio Cardoso',
                'state_id' => 29,
            ),
            347 => 
            array (
                'id' => 2901809,
                'name' => 'Antônio Gonçalves',
                'state_id' => 29,
            ),
            348 => 
            array (
                'id' => 2901908,
                'name' => 'Aporá',
                'state_id' => 29,
            ),
            349 => 
            array (
                'id' => 2901957,
                'name' => 'Apuarema',
                'state_id' => 29,
            ),
            350 => 
            array (
                'id' => 2902005,
                'name' => 'Aracatu',
                'state_id' => 29,
            ),
            351 => 
            array (
                'id' => 2902054,
                'name' => 'Araçás',
                'state_id' => 29,
            ),
            352 => 
            array (
                'id' => 2902104,
                'name' => 'Araci',
                'state_id' => 29,
            ),
            353 => 
            array (
                'id' => 2902203,
                'name' => 'Aramari',
                'state_id' => 29,
            ),
            354 => 
            array (
                'id' => 2902252,
                'name' => 'Arataca',
                'state_id' => 29,
            ),
            355 => 
            array (
                'id' => 2902302,
                'name' => 'Aratuípe',
                'state_id' => 29,
            ),
            356 => 
            array (
                'id' => 2902401,
                'name' => 'Aurelino Leal',
                'state_id' => 29,
            ),
            357 => 
            array (
                'id' => 2902500,
                'name' => 'Baianópolis',
                'state_id' => 29,
            ),
            358 => 
            array (
                'id' => 2902609,
                'name' => 'Baixa Grande',
                'state_id' => 29,
            ),
            359 => 
            array (
                'id' => 2902658,
                'name' => 'Banzaê',
                'state_id' => 29,
            ),
            360 => 
            array (
                'id' => 2902708,
                'name' => 'Barra',
                'state_id' => 29,
            ),
            361 => 
            array (
                'id' => 2902807,
                'name' => 'Barra da Estiva',
                'state_id' => 29,
            ),
            362 => 
            array (
                'id' => 2902906,
                'name' => 'Barra do Choça',
                'state_id' => 29,
            ),
            363 => 
            array (
                'id' => 2903003,
                'name' => 'Barra do Mendes',
                'state_id' => 29,
            ),
            364 => 
            array (
                'id' => 2903102,
                'name' => 'Barra do Rocha',
                'state_id' => 29,
            ),
            365 => 
            array (
                'id' => 2903201,
                'name' => 'Barreiras',
                'state_id' => 29,
            ),
            366 => 
            array (
                'id' => 2903235,
                'name' => 'Barro Alto',
                'state_id' => 29,
            ),
            367 => 
            array (
                'id' => 2903276,
                'name' => 'Barrocas',
                'state_id' => 29,
            ),
            368 => 
            array (
                'id' => 2903300,
                'name' => 'Barro Preto',
                'state_id' => 29,
            ),
            369 => 
            array (
                'id' => 2903409,
                'name' => 'Belmonte',
                'state_id' => 29,
            ),
            370 => 
            array (
                'id' => 2903508,
                'name' => 'Belo Campo',
                'state_id' => 29,
            ),
            371 => 
            array (
                'id' => 2903607,
                'name' => 'Biritinga',
                'state_id' => 29,
            ),
            372 => 
            array (
                'id' => 2903706,
                'name' => 'Boa Nova',
                'state_id' => 29,
            ),
            373 => 
            array (
                'id' => 2903805,
                'name' => 'Boa Vista do Tupim',
                'state_id' => 29,
            ),
            374 => 
            array (
                'id' => 2903904,
                'name' => 'Bom Jesus da Lapa',
                'state_id' => 29,
            ),
            375 => 
            array (
                'id' => 2903953,
                'name' => 'Bom Jesus da Serra',
                'state_id' => 29,
            ),
            376 => 
            array (
                'id' => 2904001,
                'name' => 'Boninal',
                'state_id' => 29,
            ),
            377 => 
            array (
                'id' => 2904050,
                'name' => 'Bonito',
                'state_id' => 29,
            ),
            378 => 
            array (
                'id' => 2904100,
                'name' => 'Boquira',
                'state_id' => 29,
            ),
            379 => 
            array (
                'id' => 2904209,
                'name' => 'Botuporã',
                'state_id' => 29,
            ),
            380 => 
            array (
                'id' => 2904308,
                'name' => 'Brejões',
                'state_id' => 29,
            ),
            381 => 
            array (
                'id' => 2904407,
                'name' => 'Brejolândia',
                'state_id' => 29,
            ),
            382 => 
            array (
                'id' => 2904506,
                'name' => 'Brotas de Macaúbas',
                'state_id' => 29,
            ),
            383 => 
            array (
                'id' => 2904605,
                'name' => 'Brumado',
                'state_id' => 29,
            ),
            384 => 
            array (
                'id' => 2904704,
                'name' => 'Buerarema',
                'state_id' => 29,
            ),
            385 => 
            array (
                'id' => 2904753,
                'name' => 'Buritirama',
                'state_id' => 29,
            ),
            386 => 
            array (
                'id' => 2904803,
                'name' => 'Caatiba',
                'state_id' => 29,
            ),
            387 => 
            array (
                'id' => 2904852,
                'name' => 'Cabaceiras do Paraguaçu',
                'state_id' => 29,
            ),
            388 => 
            array (
                'id' => 2904902,
                'name' => 'Cachoeira',
                'state_id' => 29,
            ),
            389 => 
            array (
                'id' => 2905008,
                'name' => 'Caculé',
                'state_id' => 29,
            ),
            390 => 
            array (
                'id' => 2905107,
                'name' => 'Caém',
                'state_id' => 29,
            ),
            391 => 
            array (
                'id' => 2905156,
                'name' => 'Caetanos',
                'state_id' => 29,
            ),
            392 => 
            array (
                'id' => 2905206,
                'name' => 'Caetité',
                'state_id' => 29,
            ),
            393 => 
            array (
                'id' => 2905305,
                'name' => 'Cafarnaum',
                'state_id' => 29,
            ),
            394 => 
            array (
                'id' => 2905404,
                'name' => 'Cairu',
                'state_id' => 29,
            ),
            395 => 
            array (
                'id' => 2905503,
                'name' => 'Caldeirão Grande',
                'state_id' => 29,
            ),
            396 => 
            array (
                'id' => 2905602,
                'name' => 'Camacan',
                'state_id' => 29,
            ),
            397 => 
            array (
                'id' => 2905701,
                'name' => 'Camaçari',
                'state_id' => 29,
            ),
            398 => 
            array (
                'id' => 2905800,
                'name' => 'Camamu',
                'state_id' => 29,
            ),
            399 => 
            array (
                'id' => 2905909,
                'name' => 'Campo Alegre de Lourdes',
                'state_id' => 29,
            ),
            400 => 
            array (
                'id' => 2906006,
                'name' => 'Campo Formoso',
                'state_id' => 29,
            ),
            401 => 
            array (
                'id' => 2906105,
                'name' => 'Canápolis',
                'state_id' => 29,
            ),
            402 => 
            array (
                'id' => 2906204,
                'name' => 'Canarana',
                'state_id' => 29,
            ),
            403 => 
            array (
                'id' => 2906303,
                'name' => 'Canavieiras',
                'state_id' => 29,
            ),
            404 => 
            array (
                'id' => 2906402,
                'name' => 'Candeal',
                'state_id' => 29,
            ),
            405 => 
            array (
                'id' => 2906501,
                'name' => 'Candeias',
                'state_id' => 29,
            ),
            406 => 
            array (
                'id' => 2906600,
                'name' => 'Candiba',
                'state_id' => 29,
            ),
            407 => 
            array (
                'id' => 2906709,
                'name' => 'Cândido Sales',
                'state_id' => 29,
            ),
            408 => 
            array (
                'id' => 2906808,
                'name' => 'Cansanção',
                'state_id' => 29,
            ),
            409 => 
            array (
                'id' => 2906824,
                'name' => 'Canudos',
                'state_id' => 29,
            ),
            410 => 
            array (
                'id' => 2906857,
                'name' => 'Capela do Alto Alegre',
                'state_id' => 29,
            ),
            411 => 
            array (
                'id' => 2906873,
                'name' => 'Capim Grosso',
                'state_id' => 29,
            ),
            412 => 
            array (
                'id' => 2906899,
                'name' => 'Caraíbas',
                'state_id' => 29,
            ),
            413 => 
            array (
                'id' => 2906907,
                'name' => 'Caravelas',
                'state_id' => 29,
            ),
            414 => 
            array (
                'id' => 2907004,
                'name' => 'Cardeal da Silva',
                'state_id' => 29,
            ),
            415 => 
            array (
                'id' => 2907103,
                'name' => 'Carinhanha',
                'state_id' => 29,
            ),
            416 => 
            array (
                'id' => 2907202,
                'name' => 'Casa Nova',
                'state_id' => 29,
            ),
            417 => 
            array (
                'id' => 2907301,
                'name' => 'Castro Alves',
                'state_id' => 29,
            ),
            418 => 
            array (
                'id' => 2907400,
                'name' => 'Catolândia',
                'state_id' => 29,
            ),
            419 => 
            array (
                'id' => 2907509,
                'name' => 'Catu',
                'state_id' => 29,
            ),
            420 => 
            array (
                'id' => 2907558,
                'name' => 'Caturama',
                'state_id' => 29,
            ),
            421 => 
            array (
                'id' => 2907608,
                'name' => 'Central',
                'state_id' => 29,
            ),
            422 => 
            array (
                'id' => 2907707,
                'name' => 'Chorrochó',
                'state_id' => 29,
            ),
            423 => 
            array (
                'id' => 2907806,
                'name' => 'Cícero Dantas',
                'state_id' => 29,
            ),
            424 => 
            array (
                'id' => 2907905,
                'name' => 'Cipó',
                'state_id' => 29,
            ),
            425 => 
            array (
                'id' => 2908002,
                'name' => 'Coaraci',
                'state_id' => 29,
            ),
            426 => 
            array (
                'id' => 2908101,
                'name' => 'Cocos',
                'state_id' => 29,
            ),
            427 => 
            array (
                'id' => 2908200,
                'name' => 'Conceição da Feira',
                'state_id' => 29,
            ),
            428 => 
            array (
                'id' => 2908309,
                'name' => 'Conceição do Almeida',
                'state_id' => 29,
            ),
            429 => 
            array (
                'id' => 2908408,
                'name' => 'Conceição do Coité',
                'state_id' => 29,
            ),
            430 => 
            array (
                'id' => 2908507,
                'name' => 'Conceição do Jacuípe',
                'state_id' => 29,
            ),
            431 => 
            array (
                'id' => 2908606,
                'name' => 'Conde',
                'state_id' => 29,
            ),
            432 => 
            array (
                'id' => 2908705,
                'name' => 'Condeúba',
                'state_id' => 29,
            ),
            433 => 
            array (
                'id' => 2908804,
                'name' => 'Contendas do Sincorá',
                'state_id' => 29,
            ),
            434 => 
            array (
                'id' => 2908903,
                'name' => 'Coração de Maria',
                'state_id' => 29,
            ),
            435 => 
            array (
                'id' => 2909000,
                'name' => 'Cordeiros',
                'state_id' => 29,
            ),
            436 => 
            array (
                'id' => 2909109,
                'name' => 'Coribe',
                'state_id' => 29,
            ),
            437 => 
            array (
                'id' => 2909208,
                'name' => 'Coronel João Sá',
                'state_id' => 29,
            ),
            438 => 
            array (
                'id' => 2909307,
                'name' => 'Correntina',
                'state_id' => 29,
            ),
            439 => 
            array (
                'id' => 2909406,
                'name' => 'Cotegipe',
                'state_id' => 29,
            ),
            440 => 
            array (
                'id' => 2909505,
                'name' => 'Cravolândia',
                'state_id' => 29,
            ),
            441 => 
            array (
                'id' => 2909604,
                'name' => 'Crisópolis',
                'state_id' => 29,
            ),
            442 => 
            array (
                'id' => 2909703,
                'name' => 'Cristópolis',
                'state_id' => 29,
            ),
            443 => 
            array (
                'id' => 2909802,
                'name' => 'Cruz das Almas',
                'state_id' => 29,
            ),
            444 => 
            array (
                'id' => 2909901,
                'name' => 'Curaçá',
                'state_id' => 29,
            ),
            445 => 
            array (
                'id' => 2910008,
                'name' => 'Dário Meira',
                'state_id' => 29,
            ),
            446 => 
            array (
                'id' => 2910057,
                'name' => 'Dias d\'Ávila',
                'state_id' => 29,
            ),
            447 => 
            array (
                'id' => 2910107,
                'name' => 'Dom Basílio',
                'state_id' => 29,
            ),
            448 => 
            array (
                'id' => 2910206,
                'name' => 'Dom Macedo Costa',
                'state_id' => 29,
            ),
            449 => 
            array (
                'id' => 2910305,
                'name' => 'Elísio Medrado',
                'state_id' => 29,
            ),
            450 => 
            array (
                'id' => 2910404,
                'name' => 'Encruzilhada',
                'state_id' => 29,
            ),
            451 => 
            array (
                'id' => 2910503,
                'name' => 'Entre Rios',
                'state_id' => 29,
            ),
            452 => 
            array (
                'id' => 2910602,
                'name' => 'Esplanada',
                'state_id' => 29,
            ),
            453 => 
            array (
                'id' => 2910701,
                'name' => 'Euclides da Cunha',
                'state_id' => 29,
            ),
            454 => 
            array (
                'id' => 2910727,
                'name' => 'Eunápolis',
                'state_id' => 29,
            ),
            455 => 
            array (
                'id' => 2910750,
                'name' => 'Fátima',
                'state_id' => 29,
            ),
            456 => 
            array (
                'id' => 2910776,
                'name' => 'Feira da Mata',
                'state_id' => 29,
            ),
            457 => 
            array (
                'id' => 2910800,
                'name' => 'Feira de Santana',
                'state_id' => 29,
            ),
            458 => 
            array (
                'id' => 2910859,
                'name' => 'Filadélfia',
                'state_id' => 29,
            ),
            459 => 
            array (
                'id' => 2910909,
                'name' => 'Firmino Alves',
                'state_id' => 29,
            ),
            460 => 
            array (
                'id' => 2911006,
                'name' => 'Floresta Azul',
                'state_id' => 29,
            ),
            461 => 
            array (
                'id' => 2911105,
                'name' => 'Formosa do Rio Preto',
                'state_id' => 29,
            ),
            462 => 
            array (
                'id' => 2911204,
                'name' => 'Gandu',
                'state_id' => 29,
            ),
            463 => 
            array (
                'id' => 2911253,
                'name' => 'Gavião',
                'state_id' => 29,
            ),
            464 => 
            array (
                'id' => 2911303,
                'name' => 'Gentio do Ouro',
                'state_id' => 29,
            ),
            465 => 
            array (
                'id' => 2911402,
                'name' => 'Glória',
                'state_id' => 29,
            ),
            466 => 
            array (
                'id' => 2911501,
                'name' => 'Gongogi',
                'state_id' => 29,
            ),
            467 => 
            array (
                'id' => 2911600,
                'name' => 'Governador Mangabeira',
                'state_id' => 29,
            ),
            468 => 
            array (
                'id' => 2911659,
                'name' => 'Guajeru',
                'state_id' => 29,
            ),
            469 => 
            array (
                'id' => 2911709,
                'name' => 'Guanambi',
                'state_id' => 29,
            ),
            470 => 
            array (
                'id' => 2911808,
                'name' => 'Guaratinga',
                'state_id' => 29,
            ),
            471 => 
            array (
                'id' => 2911857,
                'name' => 'Heliópolis',
                'state_id' => 29,
            ),
            472 => 
            array (
                'id' => 2911907,
                'name' => 'Iaçu',
                'state_id' => 29,
            ),
            473 => 
            array (
                'id' => 2912004,
                'name' => 'Ibiassucê',
                'state_id' => 29,
            ),
            474 => 
            array (
                'id' => 2912103,
                'name' => 'Ibicaraí',
                'state_id' => 29,
            ),
            475 => 
            array (
                'id' => 2912202,
                'name' => 'Ibicoara',
                'state_id' => 29,
            ),
            476 => 
            array (
                'id' => 2912301,
                'name' => 'Ibicuí',
                'state_id' => 29,
            ),
            477 => 
            array (
                'id' => 2912400,
                'name' => 'Ibipeba',
                'state_id' => 29,
            ),
            478 => 
            array (
                'id' => 2912509,
                'name' => 'Ibipitanga',
                'state_id' => 29,
            ),
            479 => 
            array (
                'id' => 2912608,
                'name' => 'Ibiquera',
                'state_id' => 29,
            ),
            480 => 
            array (
                'id' => 2912707,
                'name' => 'Ibirapitanga',
                'state_id' => 29,
            ),
            481 => 
            array (
                'id' => 2912806,
                'name' => 'Ibirapuã',
                'state_id' => 29,
            ),
            482 => 
            array (
                'id' => 2912905,
                'name' => 'Ibirataia',
                'state_id' => 29,
            ),
            483 => 
            array (
                'id' => 2913002,
                'name' => 'Ibitiara',
                'state_id' => 29,
            ),
            484 => 
            array (
                'id' => 2913101,
                'name' => 'Ibititá',
                'state_id' => 29,
            ),
            485 => 
            array (
                'id' => 2913200,
                'name' => 'Ibotirama',
                'state_id' => 29,
            ),
            486 => 
            array (
                'id' => 2913309,
                'name' => 'Ichu',
                'state_id' => 29,
            ),
            487 => 
            array (
                'id' => 2913408,
                'name' => 'Igaporã',
                'state_id' => 29,
            ),
            488 => 
            array (
                'id' => 2913457,
                'name' => 'Igrapiúna',
                'state_id' => 29,
            ),
            489 => 
            array (
                'id' => 2913507,
                'name' => 'Iguaí',
                'state_id' => 29,
            ),
            490 => 
            array (
                'id' => 2913606,
                'name' => 'Ilhéus',
                'state_id' => 29,
            ),
            491 => 
            array (
                'id' => 2913705,
                'name' => 'Inhambupe',
                'state_id' => 29,
            ),
            492 => 
            array (
                'id' => 2913804,
                'name' => 'Ipecaetá',
                'state_id' => 29,
            ),
            493 => 
            array (
                'id' => 2913903,
                'name' => 'Ipiaú',
                'state_id' => 29,
            ),
            494 => 
            array (
                'id' => 2914000,
                'name' => 'Ipirá',
                'state_id' => 29,
            ),
            495 => 
            array (
                'id' => 2914109,
                'name' => 'Ipupiara',
                'state_id' => 29,
            ),
            496 => 
            array (
                'id' => 2914208,
                'name' => 'Irajuba',
                'state_id' => 29,
            ),
            497 => 
            array (
                'id' => 2914307,
                'name' => 'Iramaia',
                'state_id' => 29,
            ),
            498 => 
            array (
                'id' => 2914406,
                'name' => 'Iraquara',
                'state_id' => 29,
            ),
            499 => 
            array (
                'id' => 2914505,
                'name' => 'Irará',
                'state_id' => 29,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 2914604,
                'name' => 'Irecê',
                'state_id' => 29,
            ),
            1 => 
            array (
                'id' => 2914653,
                'name' => 'Itabela',
                'state_id' => 29,
            ),
            2 => 
            array (
                'id' => 2914703,
                'name' => 'Itaberaba',
                'state_id' => 29,
            ),
            3 => 
            array (
                'id' => 2914802,
                'name' => 'Itabuna',
                'state_id' => 29,
            ),
            4 => 
            array (
                'id' => 2914901,
                'name' => 'Itacaré',
                'state_id' => 29,
            ),
            5 => 
            array (
                'id' => 2915007,
                'name' => 'Itaeté',
                'state_id' => 29,
            ),
            6 => 
            array (
                'id' => 2915106,
                'name' => 'Itagi',
                'state_id' => 29,
            ),
            7 => 
            array (
                'id' => 2915205,
                'name' => 'Itagibá',
                'state_id' => 29,
            ),
            8 => 
            array (
                'id' => 2915304,
                'name' => 'Itagimirim',
                'state_id' => 29,
            ),
            9 => 
            array (
                'id' => 2915353,
                'name' => 'Itaguaçu da Bahia',
                'state_id' => 29,
            ),
            10 => 
            array (
                'id' => 2915403,
                'name' => 'Itaju do Colônia',
                'state_id' => 29,
            ),
            11 => 
            array (
                'id' => 2915502,
                'name' => 'Itajuípe',
                'state_id' => 29,
            ),
            12 => 
            array (
                'id' => 2915601,
                'name' => 'Itamaraju',
                'state_id' => 29,
            ),
            13 => 
            array (
                'id' => 2915700,
                'name' => 'Itamari',
                'state_id' => 29,
            ),
            14 => 
            array (
                'id' => 2915809,
                'name' => 'Itambé',
                'state_id' => 29,
            ),
            15 => 
            array (
                'id' => 2915908,
                'name' => 'Itanagra',
                'state_id' => 29,
            ),
            16 => 
            array (
                'id' => 2916005,
                'name' => 'Itanhém',
                'state_id' => 29,
            ),
            17 => 
            array (
                'id' => 2916104,
                'name' => 'Itaparica',
                'state_id' => 29,
            ),
            18 => 
            array (
                'id' => 2916203,
                'name' => 'Itapé',
                'state_id' => 29,
            ),
            19 => 
            array (
                'id' => 2916302,
                'name' => 'Itapebi',
                'state_id' => 29,
            ),
            20 => 
            array (
                'id' => 2916401,
                'name' => 'Itapetinga',
                'state_id' => 29,
            ),
            21 => 
            array (
                'id' => 2916500,
                'name' => 'Itapicuru',
                'state_id' => 29,
            ),
            22 => 
            array (
                'id' => 2916609,
                'name' => 'Itapitanga',
                'state_id' => 29,
            ),
            23 => 
            array (
                'id' => 2916708,
                'name' => 'Itaquara',
                'state_id' => 29,
            ),
            24 => 
            array (
                'id' => 2916807,
                'name' => 'Itarantim',
                'state_id' => 29,
            ),
            25 => 
            array (
                'id' => 2916856,
                'name' => 'Itatim',
                'state_id' => 29,
            ),
            26 => 
            array (
                'id' => 2916906,
                'name' => 'Itiruçu',
                'state_id' => 29,
            ),
            27 => 
            array (
                'id' => 2917003,
                'name' => 'Itiúba',
                'state_id' => 29,
            ),
            28 => 
            array (
                'id' => 2917102,
                'name' => 'Itororó',
                'state_id' => 29,
            ),
            29 => 
            array (
                'id' => 2917201,
                'name' => 'Ituaçu',
                'state_id' => 29,
            ),
            30 => 
            array (
                'id' => 2917300,
                'name' => 'Ituberá',
                'state_id' => 29,
            ),
            31 => 
            array (
                'id' => 2917334,
                'name' => 'Iuiu',
                'state_id' => 29,
            ),
            32 => 
            array (
                'id' => 2917359,
                'name' => 'Jaborandi',
                'state_id' => 29,
            ),
            33 => 
            array (
                'id' => 2917409,
                'name' => 'Jacaraci',
                'state_id' => 29,
            ),
            34 => 
            array (
                'id' => 2917508,
                'name' => 'Jacobina',
                'state_id' => 29,
            ),
            35 => 
            array (
                'id' => 2917607,
                'name' => 'Jaguaquara',
                'state_id' => 29,
            ),
            36 => 
            array (
                'id' => 2917706,
                'name' => 'Jaguarari',
                'state_id' => 29,
            ),
            37 => 
            array (
                'id' => 2917805,
                'name' => 'Jaguaripe',
                'state_id' => 29,
            ),
            38 => 
            array (
                'id' => 2917904,
                'name' => 'Jandaíra',
                'state_id' => 29,
            ),
            39 => 
            array (
                'id' => 2918001,
                'name' => 'Jequié',
                'state_id' => 29,
            ),
            40 => 
            array (
                'id' => 2918100,
                'name' => 'Jeremoabo',
                'state_id' => 29,
            ),
            41 => 
            array (
                'id' => 2918209,
                'name' => 'Jiquiriçá',
                'state_id' => 29,
            ),
            42 => 
            array (
                'id' => 2918308,
                'name' => 'Jitaúna',
                'state_id' => 29,
            ),
            43 => 
            array (
                'id' => 2918357,
                'name' => 'João Dourado',
                'state_id' => 29,
            ),
            44 => 
            array (
                'id' => 2918407,
                'name' => 'Juazeiro',
                'state_id' => 29,
            ),
            45 => 
            array (
                'id' => 2918456,
                'name' => 'Jucuruçu',
                'state_id' => 29,
            ),
            46 => 
            array (
                'id' => 2918506,
                'name' => 'Jussara',
                'state_id' => 29,
            ),
            47 => 
            array (
                'id' => 2918555,
                'name' => 'Jussari',
                'state_id' => 29,
            ),
            48 => 
            array (
                'id' => 2918605,
                'name' => 'Jussiape',
                'state_id' => 29,
            ),
            49 => 
            array (
                'id' => 2918704,
                'name' => 'Lafaiete Coutinho',
                'state_id' => 29,
            ),
            50 => 
            array (
                'id' => 2918753,
                'name' => 'Lagoa Real',
                'state_id' => 29,
            ),
            51 => 
            array (
                'id' => 2918803,
                'name' => 'Laje',
                'state_id' => 29,
            ),
            52 => 
            array (
                'id' => 2918902,
                'name' => 'Lajedão',
                'state_id' => 29,
            ),
            53 => 
            array (
                'id' => 2919009,
                'name' => 'Lajedinho',
                'state_id' => 29,
            ),
            54 => 
            array (
                'id' => 2919058,
                'name' => 'Lajedo do Tabocal',
                'state_id' => 29,
            ),
            55 => 
            array (
                'id' => 2919108,
                'name' => 'Lamarão',
                'state_id' => 29,
            ),
            56 => 
            array (
                'id' => 2919157,
                'name' => 'Lapão',
                'state_id' => 29,
            ),
            57 => 
            array (
                'id' => 2919207,
                'name' => 'Lauro de Freitas',
                'state_id' => 29,
            ),
            58 => 
            array (
                'id' => 2919306,
                'name' => 'Lençóis',
                'state_id' => 29,
            ),
            59 => 
            array (
                'id' => 2919405,
                'name' => 'Licínio de Almeida',
                'state_id' => 29,
            ),
            60 => 
            array (
                'id' => 2919504,
                'name' => 'Livramento de Nossa Senhora',
                'state_id' => 29,
            ),
            61 => 
            array (
                'id' => 2919553,
                'name' => 'Luís Eduardo Magalhães',
                'state_id' => 29,
            ),
            62 => 
            array (
                'id' => 2919603,
                'name' => 'Macajuba',
                'state_id' => 29,
            ),
            63 => 
            array (
                'id' => 2919702,
                'name' => 'Macarani',
                'state_id' => 29,
            ),
            64 => 
            array (
                'id' => 2919801,
                'name' => 'Macaúbas',
                'state_id' => 29,
            ),
            65 => 
            array (
                'id' => 2919900,
                'name' => 'Macururé',
                'state_id' => 29,
            ),
            66 => 
            array (
                'id' => 2919926,
                'name' => 'Madre de Deus',
                'state_id' => 29,
            ),
            67 => 
            array (
                'id' => 2919959,
                'name' => 'Maetinga',
                'state_id' => 29,
            ),
            68 => 
            array (
                'id' => 2920007,
                'name' => 'Maiquinique',
                'state_id' => 29,
            ),
            69 => 
            array (
                'id' => 2920106,
                'name' => 'Mairi',
                'state_id' => 29,
            ),
            70 => 
            array (
                'id' => 2920205,
                'name' => 'Malhada',
                'state_id' => 29,
            ),
            71 => 
            array (
                'id' => 2920304,
                'name' => 'Malhada de Pedras',
                'state_id' => 29,
            ),
            72 => 
            array (
                'id' => 2920403,
                'name' => 'Manoel Vitorino',
                'state_id' => 29,
            ),
            73 => 
            array (
                'id' => 2920452,
                'name' => 'Mansidão',
                'state_id' => 29,
            ),
            74 => 
            array (
                'id' => 2920502,
                'name' => 'Maracás',
                'state_id' => 29,
            ),
            75 => 
            array (
                'id' => 2920601,
                'name' => 'Maragogipe',
                'state_id' => 29,
            ),
            76 => 
            array (
                'id' => 2920700,
                'name' => 'Maraú',
                'state_id' => 29,
            ),
            77 => 
            array (
                'id' => 2920809,
                'name' => 'Marcionílio Souza',
                'state_id' => 29,
            ),
            78 => 
            array (
                'id' => 2920908,
                'name' => 'Mascote',
                'state_id' => 29,
            ),
            79 => 
            array (
                'id' => 2921005,
                'name' => 'Mata de São João',
                'state_id' => 29,
            ),
            80 => 
            array (
                'id' => 2921054,
                'name' => 'Matina',
                'state_id' => 29,
            ),
            81 => 
            array (
                'id' => 2921104,
                'name' => 'Medeiros Neto',
                'state_id' => 29,
            ),
            82 => 
            array (
                'id' => 2921203,
                'name' => 'Miguel Calmon',
                'state_id' => 29,
            ),
            83 => 
            array (
                'id' => 2921302,
                'name' => 'Milagres',
                'state_id' => 29,
            ),
            84 => 
            array (
                'id' => 2921401,
                'name' => 'Mirangaba',
                'state_id' => 29,
            ),
            85 => 
            array (
                'id' => 2921450,
                'name' => 'Mirante',
                'state_id' => 29,
            ),
            86 => 
            array (
                'id' => 2921500,
                'name' => 'Monte Santo',
                'state_id' => 29,
            ),
            87 => 
            array (
                'id' => 2921609,
                'name' => 'Morpará',
                'state_id' => 29,
            ),
            88 => 
            array (
                'id' => 2921708,
                'name' => 'Morro do Chapéu',
                'state_id' => 29,
            ),
            89 => 
            array (
                'id' => 2921807,
                'name' => 'Mortugaba',
                'state_id' => 29,
            ),
            90 => 
            array (
                'id' => 2921906,
                'name' => 'Mucugê',
                'state_id' => 29,
            ),
            91 => 
            array (
                'id' => 2922003,
                'name' => 'Mucuri',
                'state_id' => 29,
            ),
            92 => 
            array (
                'id' => 2922052,
                'name' => 'Mulungu do Morro',
                'state_id' => 29,
            ),
            93 => 
            array (
                'id' => 2922102,
                'name' => 'Mundo Novo',
                'state_id' => 29,
            ),
            94 => 
            array (
                'id' => 2922201,
                'name' => 'Muniz Ferreira',
                'state_id' => 29,
            ),
            95 => 
            array (
                'id' => 2922250,
                'name' => 'Muquém do São Francisco',
                'state_id' => 29,
            ),
            96 => 
            array (
                'id' => 2922300,
                'name' => 'Muritiba',
                'state_id' => 29,
            ),
            97 => 
            array (
                'id' => 2922409,
                'name' => 'Mutuípe',
                'state_id' => 29,
            ),
            98 => 
            array (
                'id' => 2922508,
                'name' => 'Nazaré',
                'state_id' => 29,
            ),
            99 => 
            array (
                'id' => 2922607,
                'name' => 'Nilo Peçanha',
                'state_id' => 29,
            ),
            100 => 
            array (
                'id' => 2922656,
                'name' => 'Nordestina',
                'state_id' => 29,
            ),
            101 => 
            array (
                'id' => 2922706,
                'name' => 'Nova Canaã',
                'state_id' => 29,
            ),
            102 => 
            array (
                'id' => 2922730,
                'name' => 'Nova Fátima',
                'state_id' => 29,
            ),
            103 => 
            array (
                'id' => 2922755,
                'name' => 'Nova Ibiá',
                'state_id' => 29,
            ),
            104 => 
            array (
                'id' => 2922805,
                'name' => 'Nova Itarana',
                'state_id' => 29,
            ),
            105 => 
            array (
                'id' => 2922854,
                'name' => 'Nova Redenção',
                'state_id' => 29,
            ),
            106 => 
            array (
                'id' => 2922904,
                'name' => 'Nova Soure',
                'state_id' => 29,
            ),
            107 => 
            array (
                'id' => 2923001,
                'name' => 'Nova Viçosa',
                'state_id' => 29,
            ),
            108 => 
            array (
                'id' => 2923035,
                'name' => 'Novo Horizonte',
                'state_id' => 29,
            ),
            109 => 
            array (
                'id' => 2923050,
                'name' => 'Novo Triunfo',
                'state_id' => 29,
            ),
            110 => 
            array (
                'id' => 2923100,
                'name' => 'Olindina',
                'state_id' => 29,
            ),
            111 => 
            array (
                'id' => 2923209,
                'name' => 'Oliveira dos Brejinhos',
                'state_id' => 29,
            ),
            112 => 
            array (
                'id' => 2923308,
                'name' => 'Ouriçangas',
                'state_id' => 29,
            ),
            113 => 
            array (
                'id' => 2923357,
                'name' => 'Ourolândia',
                'state_id' => 29,
            ),
            114 => 
            array (
                'id' => 2923407,
                'name' => 'Palmas de Monte Alto',
                'state_id' => 29,
            ),
            115 => 
            array (
                'id' => 2923506,
                'name' => 'Palmeiras',
                'state_id' => 29,
            ),
            116 => 
            array (
                'id' => 2923605,
                'name' => 'Paramirim',
                'state_id' => 29,
            ),
            117 => 
            array (
                'id' => 2923704,
                'name' => 'Paratinga',
                'state_id' => 29,
            ),
            118 => 
            array (
                'id' => 2923803,
                'name' => 'Paripiranga',
                'state_id' => 29,
            ),
            119 => 
            array (
                'id' => 2923902,
                'name' => 'Pau Brasil',
                'state_id' => 29,
            ),
            120 => 
            array (
                'id' => 2924009,
                'name' => 'Paulo Afonso',
                'state_id' => 29,
            ),
            121 => 
            array (
                'id' => 2924058,
                'name' => 'Pé de Serra',
                'state_id' => 29,
            ),
            122 => 
            array (
                'id' => 2924108,
                'name' => 'Pedrão',
                'state_id' => 29,
            ),
            123 => 
            array (
                'id' => 2924207,
                'name' => 'Pedro Alexandre',
                'state_id' => 29,
            ),
            124 => 
            array (
                'id' => 2924306,
                'name' => 'Piatã',
                'state_id' => 29,
            ),
            125 => 
            array (
                'id' => 2924405,
                'name' => 'Pilão Arcado',
                'state_id' => 29,
            ),
            126 => 
            array (
                'id' => 2924504,
                'name' => 'Pindaí',
                'state_id' => 29,
            ),
            127 => 
            array (
                'id' => 2924603,
                'name' => 'Pindobaçu',
                'state_id' => 29,
            ),
            128 => 
            array (
                'id' => 2924652,
                'name' => 'Pintadas',
                'state_id' => 29,
            ),
            129 => 
            array (
                'id' => 2924678,
                'name' => 'Piraí do Norte',
                'state_id' => 29,
            ),
            130 => 
            array (
                'id' => 2924702,
                'name' => 'Piripá',
                'state_id' => 29,
            ),
            131 => 
            array (
                'id' => 2924801,
                'name' => 'Piritiba',
                'state_id' => 29,
            ),
            132 => 
            array (
                'id' => 2924900,
                'name' => 'Planaltino',
                'state_id' => 29,
            ),
            133 => 
            array (
                'id' => 2925006,
                'name' => 'Planalto',
                'state_id' => 29,
            ),
            134 => 
            array (
                'id' => 2925105,
                'name' => 'Poções',
                'state_id' => 29,
            ),
            135 => 
            array (
                'id' => 2925204,
                'name' => 'Pojuca',
                'state_id' => 29,
            ),
            136 => 
            array (
                'id' => 2925253,
                'name' => 'Ponto Novo',
                'state_id' => 29,
            ),
            137 => 
            array (
                'id' => 2925303,
                'name' => 'Porto Seguro',
                'state_id' => 29,
            ),
            138 => 
            array (
                'id' => 2925402,
                'name' => 'Potiraguá',
                'state_id' => 29,
            ),
            139 => 
            array (
                'id' => 2925501,
                'name' => 'Prado',
                'state_id' => 29,
            ),
            140 => 
            array (
                'id' => 2925600,
                'name' => 'Presidente Dutra',
                'state_id' => 29,
            ),
            141 => 
            array (
                'id' => 2925709,
                'name' => 'Presidente Jânio Quadros',
                'state_id' => 29,
            ),
            142 => 
            array (
                'id' => 2925758,
                'name' => 'Presidente Tancredo Neves',
                'state_id' => 29,
            ),
            143 => 
            array (
                'id' => 2925808,
                'name' => 'Queimadas',
                'state_id' => 29,
            ),
            144 => 
            array (
                'id' => 2925907,
                'name' => 'Quijingue',
                'state_id' => 29,
            ),
            145 => 
            array (
                'id' => 2925931,
                'name' => 'Quixabeira',
                'state_id' => 29,
            ),
            146 => 
            array (
                'id' => 2925956,
                'name' => 'Rafael Jambeiro',
                'state_id' => 29,
            ),
            147 => 
            array (
                'id' => 2926004,
                'name' => 'Remanso',
                'state_id' => 29,
            ),
            148 => 
            array (
                'id' => 2926103,
                'name' => 'Retirolândia',
                'state_id' => 29,
            ),
            149 => 
            array (
                'id' => 2926202,
                'name' => 'Riachão das Neves',
                'state_id' => 29,
            ),
            150 => 
            array (
                'id' => 2926301,
                'name' => 'Riachão do Jacuípe',
                'state_id' => 29,
            ),
            151 => 
            array (
                'id' => 2926400,
                'name' => 'Riacho de Santana',
                'state_id' => 29,
            ),
            152 => 
            array (
                'id' => 2926509,
                'name' => 'Ribeira do Amparo',
                'state_id' => 29,
            ),
            153 => 
            array (
                'id' => 2926608,
                'name' => 'Ribeira do Pombal',
                'state_id' => 29,
            ),
            154 => 
            array (
                'id' => 2926657,
                'name' => 'Ribeirão do Largo',
                'state_id' => 29,
            ),
            155 => 
            array (
                'id' => 2926707,
                'name' => 'Rio de Contas',
                'state_id' => 29,
            ),
            156 => 
            array (
                'id' => 2926806,
                'name' => 'Rio do Antônio',
                'state_id' => 29,
            ),
            157 => 
            array (
                'id' => 2926905,
                'name' => 'Rio do Pires',
                'state_id' => 29,
            ),
            158 => 
            array (
                'id' => 2927002,
                'name' => 'Rio Real',
                'state_id' => 29,
            ),
            159 => 
            array (
                'id' => 2927101,
                'name' => 'Rodelas',
                'state_id' => 29,
            ),
            160 => 
            array (
                'id' => 2927200,
                'name' => 'Ruy Barbosa',
                'state_id' => 29,
            ),
            161 => 
            array (
                'id' => 2927309,
                'name' => 'Salinas da Margarida',
                'state_id' => 29,
            ),
            162 => 
            array (
                'id' => 2927408,
                'name' => 'Salvador',
                'state_id' => 29,
            ),
            163 => 
            array (
                'id' => 2927507,
                'name' => 'Santa Bárbara',
                'state_id' => 29,
            ),
            164 => 
            array (
                'id' => 2927606,
                'name' => 'Santa Brígida',
                'state_id' => 29,
            ),
            165 => 
            array (
                'id' => 2927705,
                'name' => 'Santa Cruz Cabrália',
                'state_id' => 29,
            ),
            166 => 
            array (
                'id' => 2927804,
                'name' => 'Santa Cruz da Vitória',
                'state_id' => 29,
            ),
            167 => 
            array (
                'id' => 2927903,
                'name' => 'Santa Inês',
                'state_id' => 29,
            ),
            168 => 
            array (
                'id' => 2928000,
                'name' => 'Santaluz',
                'state_id' => 29,
            ),
            169 => 
            array (
                'id' => 2928059,
                'name' => 'Santa Luzia',
                'state_id' => 29,
            ),
            170 => 
            array (
                'id' => 2928109,
                'name' => 'Santa Maria da Vitória',
                'state_id' => 29,
            ),
            171 => 
            array (
                'id' => 2928208,
                'name' => 'Santana',
                'state_id' => 29,
            ),
            172 => 
            array (
                'id' => 2928307,
                'name' => 'Santanópolis',
                'state_id' => 29,
            ),
            173 => 
            array (
                'id' => 2928406,
                'name' => 'Santa Rita de Cássia',
                'state_id' => 29,
            ),
            174 => 
            array (
                'id' => 2928505,
                'name' => 'Santa Terezinha',
                'state_id' => 29,
            ),
            175 => 
            array (
                'id' => 2928604,
                'name' => 'Santo Amaro',
                'state_id' => 29,
            ),
            176 => 
            array (
                'id' => 2928703,
                'name' => 'Santo Antônio de Jesus',
                'state_id' => 29,
            ),
            177 => 
            array (
                'id' => 2928802,
                'name' => 'Santo Estêvão',
                'state_id' => 29,
            ),
            178 => 
            array (
                'id' => 2928901,
                'name' => 'São Desidério',
                'state_id' => 29,
            ),
            179 => 
            array (
                'id' => 2928950,
                'name' => 'São Domingos',
                'state_id' => 29,
            ),
            180 => 
            array (
                'id' => 2929008,
                'name' => 'São Félix',
                'state_id' => 29,
            ),
            181 => 
            array (
                'id' => 2929057,
                'name' => 'São Félix do Coribe',
                'state_id' => 29,
            ),
            182 => 
            array (
                'id' => 2929107,
                'name' => 'São Felipe',
                'state_id' => 29,
            ),
            183 => 
            array (
                'id' => 2929206,
                'name' => 'São Francisco do Conde',
                'state_id' => 29,
            ),
            184 => 
            array (
                'id' => 2929255,
                'name' => 'São Gabriel',
                'state_id' => 29,
            ),
            185 => 
            array (
                'id' => 2929305,
                'name' => 'São Gonçalo dos Campos',
                'state_id' => 29,
            ),
            186 => 
            array (
                'id' => 2929354,
                'name' => 'São José da Vitória',
                'state_id' => 29,
            ),
            187 => 
            array (
                'id' => 2929370,
                'name' => 'São José do Jacuípe',
                'state_id' => 29,
            ),
            188 => 
            array (
                'id' => 2929404,
                'name' => 'São Miguel das Matas',
                'state_id' => 29,
            ),
            189 => 
            array (
                'id' => 2929503,
                'name' => 'São Sebastião do Passé',
                'state_id' => 29,
            ),
            190 => 
            array (
                'id' => 2929602,
                'name' => 'Sapeaçu',
                'state_id' => 29,
            ),
            191 => 
            array (
                'id' => 2929701,
                'name' => 'Sátiro Dias',
                'state_id' => 29,
            ),
            192 => 
            array (
                'id' => 2929750,
                'name' => 'Saubara',
                'state_id' => 29,
            ),
            193 => 
            array (
                'id' => 2929800,
                'name' => 'Saúde',
                'state_id' => 29,
            ),
            194 => 
            array (
                'id' => 2929909,
                'name' => 'Seabra',
                'state_id' => 29,
            ),
            195 => 
            array (
                'id' => 2930006,
                'name' => 'Sebastião Laranjeiras',
                'state_id' => 29,
            ),
            196 => 
            array (
                'id' => 2930105,
                'name' => 'Senhor do Bonfim',
                'state_id' => 29,
            ),
            197 => 
            array (
                'id' => 2930154,
                'name' => 'Serra do Ramalho',
                'state_id' => 29,
            ),
            198 => 
            array (
                'id' => 2930204,
                'name' => 'Sento Sé',
                'state_id' => 29,
            ),
            199 => 
            array (
                'id' => 2930303,
                'name' => 'Serra Dourada',
                'state_id' => 29,
            ),
            200 => 
            array (
                'id' => 2930402,
                'name' => 'Serra Preta',
                'state_id' => 29,
            ),
            201 => 
            array (
                'id' => 2930501,
                'name' => 'Serrinha',
                'state_id' => 29,
            ),
            202 => 
            array (
                'id' => 2930600,
                'name' => 'Serrolândia',
                'state_id' => 29,
            ),
            203 => 
            array (
                'id' => 2930709,
                'name' => 'Simões Filho',
                'state_id' => 29,
            ),
            204 => 
            array (
                'id' => 2930758,
                'name' => 'Sítio do Mato',
                'state_id' => 29,
            ),
            205 => 
            array (
                'id' => 2930766,
                'name' => 'Sítio do Quinto',
                'state_id' => 29,
            ),
            206 => 
            array (
                'id' => 2930774,
                'name' => 'Sobradinho',
                'state_id' => 29,
            ),
            207 => 
            array (
                'id' => 2930808,
                'name' => 'Souto Soares',
                'state_id' => 29,
            ),
            208 => 
            array (
                'id' => 2930907,
                'name' => 'Tabocas do Brejo Velho',
                'state_id' => 29,
            ),
            209 => 
            array (
                'id' => 2931004,
                'name' => 'Tanhaçu',
                'state_id' => 29,
            ),
            210 => 
            array (
                'id' => 2931053,
                'name' => 'Tanque Novo',
                'state_id' => 29,
            ),
            211 => 
            array (
                'id' => 2931103,
                'name' => 'Tanquinho',
                'state_id' => 29,
            ),
            212 => 
            array (
                'id' => 2931202,
                'name' => 'Taperoá',
                'state_id' => 29,
            ),
            213 => 
            array (
                'id' => 2931301,
                'name' => 'Tapiramutá',
                'state_id' => 29,
            ),
            214 => 
            array (
                'id' => 2931350,
                'name' => 'Teixeira de Freitas',
                'state_id' => 29,
            ),
            215 => 
            array (
                'id' => 2931400,
                'name' => 'Teodoro Sampaio',
                'state_id' => 29,
            ),
            216 => 
            array (
                'id' => 2931509,
                'name' => 'Teofilândia',
                'state_id' => 29,
            ),
            217 => 
            array (
                'id' => 2931608,
                'name' => 'Teolândia',
                'state_id' => 29,
            ),
            218 => 
            array (
                'id' => 2931707,
                'name' => 'Terra Nova',
                'state_id' => 29,
            ),
            219 => 
            array (
                'id' => 2931806,
                'name' => 'Tremedal',
                'state_id' => 29,
            ),
            220 => 
            array (
                'id' => 2931905,
                'name' => 'Tucano',
                'state_id' => 29,
            ),
            221 => 
            array (
                'id' => 2932002,
                'name' => 'Uauá',
                'state_id' => 29,
            ),
            222 => 
            array (
                'id' => 2932101,
                'name' => 'Ubaíra',
                'state_id' => 29,
            ),
            223 => 
            array (
                'id' => 2932200,
                'name' => 'Ubaitaba',
                'state_id' => 29,
            ),
            224 => 
            array (
                'id' => 2932309,
                'name' => 'Ubatã',
                'state_id' => 29,
            ),
            225 => 
            array (
                'id' => 2932408,
                'name' => 'Uibaí',
                'state_id' => 29,
            ),
            226 => 
            array (
                'id' => 2932457,
                'name' => 'Umburanas',
                'state_id' => 29,
            ),
            227 => 
            array (
                'id' => 2932507,
                'name' => 'Una',
                'state_id' => 29,
            ),
            228 => 
            array (
                'id' => 2932606,
                'name' => 'Urandi',
                'state_id' => 29,
            ),
            229 => 
            array (
                'id' => 2932705,
                'name' => 'Uruçuca',
                'state_id' => 29,
            ),
            230 => 
            array (
                'id' => 2932804,
                'name' => 'Utinga',
                'state_id' => 29,
            ),
            231 => 
            array (
                'id' => 2932903,
                'name' => 'Valença',
                'state_id' => 29,
            ),
            232 => 
            array (
                'id' => 2933000,
                'name' => 'Valente',
                'state_id' => 29,
            ),
            233 => 
            array (
                'id' => 2933059,
                'name' => 'Várzea da Roça',
                'state_id' => 29,
            ),
            234 => 
            array (
                'id' => 2933109,
                'name' => 'Várzea do Poço',
                'state_id' => 29,
            ),
            235 => 
            array (
                'id' => 2933158,
                'name' => 'Várzea Nova',
                'state_id' => 29,
            ),
            236 => 
            array (
                'id' => 2933174,
                'name' => 'Varzedo',
                'state_id' => 29,
            ),
            237 => 
            array (
                'id' => 2933208,
                'name' => 'Vera Cruz',
                'state_id' => 29,
            ),
            238 => 
            array (
                'id' => 2933257,
                'name' => 'Vereda',
                'state_id' => 29,
            ),
            239 => 
            array (
                'id' => 2933307,
                'name' => 'Vitória da Conquista',
                'state_id' => 29,
            ),
            240 => 
            array (
                'id' => 2933406,
                'name' => 'Wagner',
                'state_id' => 29,
            ),
            241 => 
            array (
                'id' => 2933455,
                'name' => 'Wanderley',
                'state_id' => 29,
            ),
            242 => 
            array (
                'id' => 2933505,
                'name' => 'Wenceslau Guimarães',
                'state_id' => 29,
            ),
            243 => 
            array (
                'id' => 2933604,
                'name' => 'Xique-Xique',
                'state_id' => 29,
            ),
            244 => 
            array (
                'id' => 3100104,
                'name' => 'Abadia dos Dourados',
                'state_id' => 31,
            ),
            245 => 
            array (
                'id' => 3100203,
                'name' => 'Abaeté',
                'state_id' => 31,
            ),
            246 => 
            array (
                'id' => 3100302,
                'name' => 'Abre Campo',
                'state_id' => 31,
            ),
            247 => 
            array (
                'id' => 3100401,
                'name' => 'Acaiaca',
                'state_id' => 31,
            ),
            248 => 
            array (
                'id' => 3100500,
                'name' => 'Açucena',
                'state_id' => 31,
            ),
            249 => 
            array (
                'id' => 3100609,
                'name' => 'Água Boa',
                'state_id' => 31,
            ),
            250 => 
            array (
                'id' => 3100708,
                'name' => 'Água Comprida',
                'state_id' => 31,
            ),
            251 => 
            array (
                'id' => 3100807,
                'name' => 'Aguanil',
                'state_id' => 31,
            ),
            252 => 
            array (
                'id' => 3100906,
                'name' => 'Águas Formosas',
                'state_id' => 31,
            ),
            253 => 
            array (
                'id' => 3101003,
                'name' => 'Águas Vermelhas',
                'state_id' => 31,
            ),
            254 => 
            array (
                'id' => 3101102,
                'name' => 'Aimorés',
                'state_id' => 31,
            ),
            255 => 
            array (
                'id' => 3101201,
                'name' => 'Aiuruoca',
                'state_id' => 31,
            ),
            256 => 
            array (
                'id' => 3101300,
                'name' => 'Alagoa',
                'state_id' => 31,
            ),
            257 => 
            array (
                'id' => 3101409,
                'name' => 'Albertina',
                'state_id' => 31,
            ),
            258 => 
            array (
                'id' => 3101508,
                'name' => 'Além Paraíba',
                'state_id' => 31,
            ),
            259 => 
            array (
                'id' => 3101607,
                'name' => 'Alfenas',
                'state_id' => 31,
            ),
            260 => 
            array (
                'id' => 3101631,
                'name' => 'Alfredo Vasconcelos',
                'state_id' => 31,
            ),
            261 => 
            array (
                'id' => 3101706,
                'name' => 'Almenara',
                'state_id' => 31,
            ),
            262 => 
            array (
                'id' => 3101805,
                'name' => 'Alpercata',
                'state_id' => 31,
            ),
            263 => 
            array (
                'id' => 3101904,
                'name' => 'Alpinópolis',
                'state_id' => 31,
            ),
            264 => 
            array (
                'id' => 3102001,
                'name' => 'Alterosa',
                'state_id' => 31,
            ),
            265 => 
            array (
                'id' => 3102050,
                'name' => 'Alto Caparaó',
                'state_id' => 31,
            ),
            266 => 
            array (
                'id' => 3102100,
                'name' => 'Alto Rio Doce',
                'state_id' => 31,
            ),
            267 => 
            array (
                'id' => 3102209,
                'name' => 'Alvarenga',
                'state_id' => 31,
            ),
            268 => 
            array (
                'id' => 3102308,
                'name' => 'Alvinópolis',
                'state_id' => 31,
            ),
            269 => 
            array (
                'id' => 3102407,
                'name' => 'Alvorada de Minas',
                'state_id' => 31,
            ),
            270 => 
            array (
                'id' => 3102506,
                'name' => 'Amparo do Serra',
                'state_id' => 31,
            ),
            271 => 
            array (
                'id' => 3102605,
                'name' => 'Andradas',
                'state_id' => 31,
            ),
            272 => 
            array (
                'id' => 3102704,
                'name' => 'Cachoeira de Pajeú',
                'state_id' => 31,
            ),
            273 => 
            array (
                'id' => 3102803,
                'name' => 'Andrelândia',
                'state_id' => 31,
            ),
            274 => 
            array (
                'id' => 3102852,
                'name' => 'Angelândia',
                'state_id' => 31,
            ),
            275 => 
            array (
                'id' => 3102902,
                'name' => 'Antônio Carlos',
                'state_id' => 31,
            ),
            276 => 
            array (
                'id' => 3103009,
                'name' => 'Antônio Dias',
                'state_id' => 31,
            ),
            277 => 
            array (
                'id' => 3103108,
                'name' => 'Antônio Prado de Minas',
                'state_id' => 31,
            ),
            278 => 
            array (
                'id' => 3103207,
                'name' => 'Araçaí',
                'state_id' => 31,
            ),
            279 => 
            array (
                'id' => 3103306,
                'name' => 'Aracitaba',
                'state_id' => 31,
            ),
            280 => 
            array (
                'id' => 3103405,
                'name' => 'Araçuaí',
                'state_id' => 31,
            ),
            281 => 
            array (
                'id' => 3103504,
                'name' => 'Araguari',
                'state_id' => 31,
            ),
            282 => 
            array (
                'id' => 3103603,
                'name' => 'Arantina',
                'state_id' => 31,
            ),
            283 => 
            array (
                'id' => 3103702,
                'name' => 'Araponga',
                'state_id' => 31,
            ),
            284 => 
            array (
                'id' => 3103751,
                'name' => 'Araporã',
                'state_id' => 31,
            ),
            285 => 
            array (
                'id' => 3103801,
                'name' => 'Arapuá',
                'state_id' => 31,
            ),
            286 => 
            array (
                'id' => 3103900,
                'name' => 'Araújos',
                'state_id' => 31,
            ),
            287 => 
            array (
                'id' => 3104007,
                'name' => 'Araxá',
                'state_id' => 31,
            ),
            288 => 
            array (
                'id' => 3104106,
                'name' => 'Arceburgo',
                'state_id' => 31,
            ),
            289 => 
            array (
                'id' => 3104205,
                'name' => 'Arcos',
                'state_id' => 31,
            ),
            290 => 
            array (
                'id' => 3104304,
                'name' => 'Areado',
                'state_id' => 31,
            ),
            291 => 
            array (
                'id' => 3104403,
                'name' => 'Argirita',
                'state_id' => 31,
            ),
            292 => 
            array (
                'id' => 3104452,
                'name' => 'Aricanduva',
                'state_id' => 31,
            ),
            293 => 
            array (
                'id' => 3104502,
                'name' => 'Arinos',
                'state_id' => 31,
            ),
            294 => 
            array (
                'id' => 3104601,
                'name' => 'Astolfo Dutra',
                'state_id' => 31,
            ),
            295 => 
            array (
                'id' => 3104700,
                'name' => 'Ataléia',
                'state_id' => 31,
            ),
            296 => 
            array (
                'id' => 3104809,
                'name' => 'Augusto de Lima',
                'state_id' => 31,
            ),
            297 => 
            array (
                'id' => 3104908,
                'name' => 'Baependi',
                'state_id' => 31,
            ),
            298 => 
            array (
                'id' => 3105004,
                'name' => 'Baldim',
                'state_id' => 31,
            ),
            299 => 
            array (
                'id' => 3105103,
                'name' => 'Bambuí',
                'state_id' => 31,
            ),
            300 => 
            array (
                'id' => 3105202,
                'name' => 'Bandeira',
                'state_id' => 31,
            ),
            301 => 
            array (
                'id' => 3105301,
                'name' => 'Bandeira do Sul',
                'state_id' => 31,
            ),
            302 => 
            array (
                'id' => 3105400,
                'name' => 'Barão de Cocais',
                'state_id' => 31,
            ),
            303 => 
            array (
                'id' => 3105509,
                'name' => 'Barão de Monte Alto',
                'state_id' => 31,
            ),
            304 => 
            array (
                'id' => 3105608,
                'name' => 'Barbacena',
                'state_id' => 31,
            ),
            305 => 
            array (
                'id' => 3105707,
                'name' => 'Barra Longa',
                'state_id' => 31,
            ),
            306 => 
            array (
                'id' => 3105905,
                'name' => 'Barroso',
                'state_id' => 31,
            ),
            307 => 
            array (
                'id' => 3106002,
                'name' => 'Bela Vista de Minas',
                'state_id' => 31,
            ),
            308 => 
            array (
                'id' => 3106101,
                'name' => 'Belmiro Braga',
                'state_id' => 31,
            ),
            309 => 
            array (
                'id' => 3106200,
                'name' => 'Belo Horizonte',
                'state_id' => 31,
            ),
            310 => 
            array (
                'id' => 3106309,
                'name' => 'Belo Oriente',
                'state_id' => 31,
            ),
            311 => 
            array (
                'id' => 3106408,
                'name' => 'Belo Vale',
                'state_id' => 31,
            ),
            312 => 
            array (
                'id' => 3106507,
                'name' => 'Berilo',
                'state_id' => 31,
            ),
            313 => 
            array (
                'id' => 3106606,
                'name' => 'Bertópolis',
                'state_id' => 31,
            ),
            314 => 
            array (
                'id' => 3106655,
                'name' => 'Berizal',
                'state_id' => 31,
            ),
            315 => 
            array (
                'id' => 3106705,
                'name' => 'Betim',
                'state_id' => 31,
            ),
            316 => 
            array (
                'id' => 3106804,
                'name' => 'Bias Fortes',
                'state_id' => 31,
            ),
            317 => 
            array (
                'id' => 3106903,
                'name' => 'Bicas',
                'state_id' => 31,
            ),
            318 => 
            array (
                'id' => 3107000,
                'name' => 'Biquinhas',
                'state_id' => 31,
            ),
            319 => 
            array (
                'id' => 3107109,
                'name' => 'Boa Esperança',
                'state_id' => 31,
            ),
            320 => 
            array (
                'id' => 3107208,
                'name' => 'Bocaina de Minas',
                'state_id' => 31,
            ),
            321 => 
            array (
                'id' => 3107307,
                'name' => 'Bocaiúva',
                'state_id' => 31,
            ),
            322 => 
            array (
                'id' => 3107406,
                'name' => 'Bom Despacho',
                'state_id' => 31,
            ),
            323 => 
            array (
                'id' => 3107505,
                'name' => 'Bom Jardim de Minas',
                'state_id' => 31,
            ),
            324 => 
            array (
                'id' => 3107604,
                'name' => 'Bom Jesus da Penha',
                'state_id' => 31,
            ),
            325 => 
            array (
                'id' => 3107703,
                'name' => 'Bom Jesus do Amparo',
                'state_id' => 31,
            ),
            326 => 
            array (
                'id' => 3107802,
                'name' => 'Bom Jesus do Galho',
                'state_id' => 31,
            ),
            327 => 
            array (
                'id' => 3107901,
                'name' => 'Bom Repouso',
                'state_id' => 31,
            ),
            328 => 
            array (
                'id' => 3108008,
                'name' => 'Bom Sucesso',
                'state_id' => 31,
            ),
            329 => 
            array (
                'id' => 3108107,
                'name' => 'Bonfim',
                'state_id' => 31,
            ),
            330 => 
            array (
                'id' => 3108206,
                'name' => 'Bonfinópolis de Minas',
                'state_id' => 31,
            ),
            331 => 
            array (
                'id' => 3108255,
                'name' => 'Bonito de Minas',
                'state_id' => 31,
            ),
            332 => 
            array (
                'id' => 3108305,
                'name' => 'Borda da Mata',
                'state_id' => 31,
            ),
            333 => 
            array (
                'id' => 3108404,
                'name' => 'Botelhos',
                'state_id' => 31,
            ),
            334 => 
            array (
                'id' => 3108503,
                'name' => 'Botumirim',
                'state_id' => 31,
            ),
            335 => 
            array (
                'id' => 3108552,
                'name' => 'Brasilândia de Minas',
                'state_id' => 31,
            ),
            336 => 
            array (
                'id' => 3108602,
                'name' => 'Brasília de Minas',
                'state_id' => 31,
            ),
            337 => 
            array (
                'id' => 3108701,
                'name' => 'Brás Pires',
                'state_id' => 31,
            ),
            338 => 
            array (
                'id' => 3108800,
                'name' => 'Braúnas',
                'state_id' => 31,
            ),
            339 => 
            array (
                'id' => 3108909,
                'name' => 'Brazópolis',
                'state_id' => 31,
            ),
            340 => 
            array (
                'id' => 3109006,
                'name' => 'Brumadinho',
                'state_id' => 31,
            ),
            341 => 
            array (
                'id' => 3109105,
                'name' => 'Bueno Brandão',
                'state_id' => 31,
            ),
            342 => 
            array (
                'id' => 3109204,
                'name' => 'Buenópolis',
                'state_id' => 31,
            ),
            343 => 
            array (
                'id' => 3109253,
                'name' => 'Bugre',
                'state_id' => 31,
            ),
            344 => 
            array (
                'id' => 3109303,
                'name' => 'Buritis',
                'state_id' => 31,
            ),
            345 => 
            array (
                'id' => 3109402,
                'name' => 'Buritizeiro',
                'state_id' => 31,
            ),
            346 => 
            array (
                'id' => 3109451,
                'name' => 'Cabeceira Grande',
                'state_id' => 31,
            ),
            347 => 
            array (
                'id' => 3109501,
                'name' => 'Cabo Verde',
                'state_id' => 31,
            ),
            348 => 
            array (
                'id' => 3109600,
                'name' => 'Cachoeira da Prata',
                'state_id' => 31,
            ),
            349 => 
            array (
                'id' => 3109709,
                'name' => 'Cachoeira de Minas',
                'state_id' => 31,
            ),
            350 => 
            array (
                'id' => 3109808,
                'name' => 'Cachoeira Dourada',
                'state_id' => 31,
            ),
            351 => 
            array (
                'id' => 3109907,
                'name' => 'Caetanópolis',
                'state_id' => 31,
            ),
            352 => 
            array (
                'id' => 3110004,
                'name' => 'Caeté',
                'state_id' => 31,
            ),
            353 => 
            array (
                'id' => 3110103,
                'name' => 'Caiana',
                'state_id' => 31,
            ),
            354 => 
            array (
                'id' => 3110202,
                'name' => 'Cajuri',
                'state_id' => 31,
            ),
            355 => 
            array (
                'id' => 3110301,
                'name' => 'Caldas',
                'state_id' => 31,
            ),
            356 => 
            array (
                'id' => 3110400,
                'name' => 'Camacho',
                'state_id' => 31,
            ),
            357 => 
            array (
                'id' => 3110509,
                'name' => 'Camanducaia',
                'state_id' => 31,
            ),
            358 => 
            array (
                'id' => 3110608,
                'name' => 'Cambuí',
                'state_id' => 31,
            ),
            359 => 
            array (
                'id' => 3110707,
                'name' => 'Cambuquira',
                'state_id' => 31,
            ),
            360 => 
            array (
                'id' => 3110806,
                'name' => 'Campanário',
                'state_id' => 31,
            ),
            361 => 
            array (
                'id' => 3110905,
                'name' => 'Campanha',
                'state_id' => 31,
            ),
            362 => 
            array (
                'id' => 3111002,
                'name' => 'Campestre',
                'state_id' => 31,
            ),
            363 => 
            array (
                'id' => 3111101,
                'name' => 'Campina Verde',
                'state_id' => 31,
            ),
            364 => 
            array (
                'id' => 3111150,
                'name' => 'Campo Azul',
                'state_id' => 31,
            ),
            365 => 
            array (
                'id' => 3111200,
                'name' => 'Campo Belo',
                'state_id' => 31,
            ),
            366 => 
            array (
                'id' => 3111309,
                'name' => 'Campo do Meio',
                'state_id' => 31,
            ),
            367 => 
            array (
                'id' => 3111408,
                'name' => 'Campo Florido',
                'state_id' => 31,
            ),
            368 => 
            array (
                'id' => 3111507,
                'name' => 'Campos Altos',
                'state_id' => 31,
            ),
            369 => 
            array (
                'id' => 3111606,
                'name' => 'Campos Gerais',
                'state_id' => 31,
            ),
            370 => 
            array (
                'id' => 3111705,
                'name' => 'Canaã',
                'state_id' => 31,
            ),
            371 => 
            array (
                'id' => 3111804,
                'name' => 'Canápolis',
                'state_id' => 31,
            ),
            372 => 
            array (
                'id' => 3111903,
                'name' => 'Cana Verde',
                'state_id' => 31,
            ),
            373 => 
            array (
                'id' => 3112000,
                'name' => 'Candeias',
                'state_id' => 31,
            ),
            374 => 
            array (
                'id' => 3112059,
                'name' => 'Cantagalo',
                'state_id' => 31,
            ),
            375 => 
            array (
                'id' => 3112109,
                'name' => 'Caparaó',
                'state_id' => 31,
            ),
            376 => 
            array (
                'id' => 3112208,
                'name' => 'Capela Nova',
                'state_id' => 31,
            ),
            377 => 
            array (
                'id' => 3112307,
                'name' => 'Capelinha',
                'state_id' => 31,
            ),
            378 => 
            array (
                'id' => 3112406,
                'name' => 'Capetinga',
                'state_id' => 31,
            ),
            379 => 
            array (
                'id' => 3112505,
                'name' => 'Capim Branco',
                'state_id' => 31,
            ),
            380 => 
            array (
                'id' => 3112604,
                'name' => 'Capinópolis',
                'state_id' => 31,
            ),
            381 => 
            array (
                'id' => 3112653,
                'name' => 'Capitão Andrade',
                'state_id' => 31,
            ),
            382 => 
            array (
                'id' => 3112703,
                'name' => 'Capitão Enéas',
                'state_id' => 31,
            ),
            383 => 
            array (
                'id' => 3112802,
                'name' => 'Capitólio',
                'state_id' => 31,
            ),
            384 => 
            array (
                'id' => 3112901,
                'name' => 'Caputira',
                'state_id' => 31,
            ),
            385 => 
            array (
                'id' => 3113008,
                'name' => 'Caraí',
                'state_id' => 31,
            ),
            386 => 
            array (
                'id' => 3113107,
                'name' => 'Caranaíba',
                'state_id' => 31,
            ),
            387 => 
            array (
                'id' => 3113206,
                'name' => 'Carandaí',
                'state_id' => 31,
            ),
            388 => 
            array (
                'id' => 3113305,
                'name' => 'Carangola',
                'state_id' => 31,
            ),
            389 => 
            array (
                'id' => 3113404,
                'name' => 'Caratinga',
                'state_id' => 31,
            ),
            390 => 
            array (
                'id' => 3113503,
                'name' => 'Carbonita',
                'state_id' => 31,
            ),
            391 => 
            array (
                'id' => 3113602,
                'name' => 'Careaçu',
                'state_id' => 31,
            ),
            392 => 
            array (
                'id' => 3113701,
                'name' => 'Carlos Chagas',
                'state_id' => 31,
            ),
            393 => 
            array (
                'id' => 3113800,
                'name' => 'Carmésia',
                'state_id' => 31,
            ),
            394 => 
            array (
                'id' => 3113909,
                'name' => 'Carmo da Cachoeira',
                'state_id' => 31,
            ),
            395 => 
            array (
                'id' => 3114006,
                'name' => 'Carmo da Mata',
                'state_id' => 31,
            ),
            396 => 
            array (
                'id' => 3114105,
                'name' => 'Carmo de Minas',
                'state_id' => 31,
            ),
            397 => 
            array (
                'id' => 3114204,
                'name' => 'Carmo do Cajuru',
                'state_id' => 31,
            ),
            398 => 
            array (
                'id' => 3114303,
                'name' => 'Carmo do Paranaíba',
                'state_id' => 31,
            ),
            399 => 
            array (
                'id' => 3114402,
                'name' => 'Carmo do Rio Claro',
                'state_id' => 31,
            ),
            400 => 
            array (
                'id' => 3114501,
                'name' => 'Carmópolis de Minas',
                'state_id' => 31,
            ),
            401 => 
            array (
                'id' => 3114550,
                'name' => 'Carneirinho',
                'state_id' => 31,
            ),
            402 => 
            array (
                'id' => 3114600,
                'name' => 'Carrancas',
                'state_id' => 31,
            ),
            403 => 
            array (
                'id' => 3114709,
                'name' => 'Carvalhópolis',
                'state_id' => 31,
            ),
            404 => 
            array (
                'id' => 3114808,
                'name' => 'Carvalhos',
                'state_id' => 31,
            ),
            405 => 
            array (
                'id' => 3114907,
                'name' => 'Casa Grande',
                'state_id' => 31,
            ),
            406 => 
            array (
                'id' => 3115003,
                'name' => 'Cascalho Rico',
                'state_id' => 31,
            ),
            407 => 
            array (
                'id' => 3115102,
                'name' => 'Cássia',
                'state_id' => 31,
            ),
            408 => 
            array (
                'id' => 3115201,
                'name' => 'Conceição da Barra de Minas',
                'state_id' => 31,
            ),
            409 => 
            array (
                'id' => 3115300,
                'name' => 'Cataguases',
                'state_id' => 31,
            ),
            410 => 
            array (
                'id' => 3115359,
                'name' => 'Catas Altas',
                'state_id' => 31,
            ),
            411 => 
            array (
                'id' => 3115409,
                'name' => 'Catas Altas da Noruega',
                'state_id' => 31,
            ),
            412 => 
            array (
                'id' => 3115458,
                'name' => 'Catuji',
                'state_id' => 31,
            ),
            413 => 
            array (
                'id' => 3115474,
                'name' => 'Catuti',
                'state_id' => 31,
            ),
            414 => 
            array (
                'id' => 3115508,
                'name' => 'Caxambu',
                'state_id' => 31,
            ),
            415 => 
            array (
                'id' => 3115607,
                'name' => 'Cedro do Abaeté',
                'state_id' => 31,
            ),
            416 => 
            array (
                'id' => 3115706,
                'name' => 'Central de Minas',
                'state_id' => 31,
            ),
            417 => 
            array (
                'id' => 3115805,
                'name' => 'Centralina',
                'state_id' => 31,
            ),
            418 => 
            array (
                'id' => 3115904,
                'name' => 'Chácara',
                'state_id' => 31,
            ),
            419 => 
            array (
                'id' => 3116001,
                'name' => 'Chalé',
                'state_id' => 31,
            ),
            420 => 
            array (
                'id' => 3116100,
                'name' => 'Chapada do Norte',
                'state_id' => 31,
            ),
            421 => 
            array (
                'id' => 3116159,
                'name' => 'Chapada Gaúcha',
                'state_id' => 31,
            ),
            422 => 
            array (
                'id' => 3116209,
                'name' => 'Chiador',
                'state_id' => 31,
            ),
            423 => 
            array (
                'id' => 3116308,
                'name' => 'Cipotânea',
                'state_id' => 31,
            ),
            424 => 
            array (
                'id' => 3116407,
                'name' => 'Claraval',
                'state_id' => 31,
            ),
            425 => 
            array (
                'id' => 3116506,
                'name' => 'Claro dos Poções',
                'state_id' => 31,
            ),
            426 => 
            array (
                'id' => 3116605,
                'name' => 'Cláudio',
                'state_id' => 31,
            ),
            427 => 
            array (
                'id' => 3116704,
                'name' => 'Coimbra',
                'state_id' => 31,
            ),
            428 => 
            array (
                'id' => 3116803,
                'name' => 'Coluna',
                'state_id' => 31,
            ),
            429 => 
            array (
                'id' => 3116902,
                'name' => 'Comendador Gomes',
                'state_id' => 31,
            ),
            430 => 
            array (
                'id' => 3117009,
                'name' => 'Comercinho',
                'state_id' => 31,
            ),
            431 => 
            array (
                'id' => 3117108,
                'name' => 'Conceição da Aparecida',
                'state_id' => 31,
            ),
            432 => 
            array (
                'id' => 3117207,
                'name' => 'Conceição das Pedras',
                'state_id' => 31,
            ),
            433 => 
            array (
                'id' => 3117306,
                'name' => 'Conceição das Alagoas',
                'state_id' => 31,
            ),
            434 => 
            array (
                'id' => 3117405,
                'name' => 'Conceição de Ipanema',
                'state_id' => 31,
            ),
            435 => 
            array (
                'id' => 3117504,
                'name' => 'Conceição do Mato Dentro',
                'state_id' => 31,
            ),
            436 => 
            array (
                'id' => 3117603,
                'name' => 'Conceição do Pará',
                'state_id' => 31,
            ),
            437 => 
            array (
                'id' => 3117702,
                'name' => 'Conceição do Rio Verde',
                'state_id' => 31,
            ),
            438 => 
            array (
                'id' => 3117801,
                'name' => 'Conceição dos Ouros',
                'state_id' => 31,
            ),
            439 => 
            array (
                'id' => 3117836,
                'name' => 'Cônego Marinho',
                'state_id' => 31,
            ),
            440 => 
            array (
                'id' => 3117876,
                'name' => 'Confins',
                'state_id' => 31,
            ),
            441 => 
            array (
                'id' => 3117900,
                'name' => 'Congonhal',
                'state_id' => 31,
            ),
            442 => 
            array (
                'id' => 3118007,
                'name' => 'Congonhas',
                'state_id' => 31,
            ),
            443 => 
            array (
                'id' => 3118106,
                'name' => 'Congonhas do Norte',
                'state_id' => 31,
            ),
            444 => 
            array (
                'id' => 3118205,
                'name' => 'Conquista',
                'state_id' => 31,
            ),
            445 => 
            array (
                'id' => 3118304,
                'name' => 'Conselheiro Lafaiete',
                'state_id' => 31,
            ),
            446 => 
            array (
                'id' => 3118403,
                'name' => 'Conselheiro Pena',
                'state_id' => 31,
            ),
            447 => 
            array (
                'id' => 3118502,
                'name' => 'Consolação',
                'state_id' => 31,
            ),
            448 => 
            array (
                'id' => 3118601,
                'name' => 'Contagem',
                'state_id' => 31,
            ),
            449 => 
            array (
                'id' => 3118700,
                'name' => 'Coqueiral',
                'state_id' => 31,
            ),
            450 => 
            array (
                'id' => 3118809,
                'name' => 'Coração de Jesus',
                'state_id' => 31,
            ),
            451 => 
            array (
                'id' => 3118908,
                'name' => 'Cordisburgo',
                'state_id' => 31,
            ),
            452 => 
            array (
                'id' => 3119005,
                'name' => 'Cordislândia',
                'state_id' => 31,
            ),
            453 => 
            array (
                'id' => 3119104,
                'name' => 'Corinto',
                'state_id' => 31,
            ),
            454 => 
            array (
                'id' => 3119203,
                'name' => 'Coroaci',
                'state_id' => 31,
            ),
            455 => 
            array (
                'id' => 3119302,
                'name' => 'Coromandel',
                'state_id' => 31,
            ),
            456 => 
            array (
                'id' => 3119401,
                'name' => 'Coronel Fabriciano',
                'state_id' => 31,
            ),
            457 => 
            array (
                'id' => 3119500,
                'name' => 'Coronel Murta',
                'state_id' => 31,
            ),
            458 => 
            array (
                'id' => 3119609,
                'name' => 'Coronel Pacheco',
                'state_id' => 31,
            ),
            459 => 
            array (
                'id' => 3119708,
                'name' => 'Coronel Xavier Chaves',
                'state_id' => 31,
            ),
            460 => 
            array (
                'id' => 3119807,
                'name' => 'Córrego Danta',
                'state_id' => 31,
            ),
            461 => 
            array (
                'id' => 3119906,
                'name' => 'Córrego do Bom Jesus',
                'state_id' => 31,
            ),
            462 => 
            array (
                'id' => 3119955,
                'name' => 'Córrego Fundo',
                'state_id' => 31,
            ),
            463 => 
            array (
                'id' => 3120003,
                'name' => 'Córrego Novo',
                'state_id' => 31,
            ),
            464 => 
            array (
                'id' => 3120102,
                'name' => 'Couto de Magalhães de Minas',
                'state_id' => 31,
            ),
            465 => 
            array (
                'id' => 3120151,
                'name' => 'Crisólita',
                'state_id' => 31,
            ),
            466 => 
            array (
                'id' => 3120201,
                'name' => 'Cristais',
                'state_id' => 31,
            ),
            467 => 
            array (
                'id' => 3120300,
                'name' => 'Cristália',
                'state_id' => 31,
            ),
            468 => 
            array (
                'id' => 3120409,
                'name' => 'Cristiano Otoni',
                'state_id' => 31,
            ),
            469 => 
            array (
                'id' => 3120508,
                'name' => 'Cristina',
                'state_id' => 31,
            ),
            470 => 
            array (
                'id' => 3120607,
                'name' => 'Crucilândia',
                'state_id' => 31,
            ),
            471 => 
            array (
                'id' => 3120706,
                'name' => 'Cruzeiro da Fortaleza',
                'state_id' => 31,
            ),
            472 => 
            array (
                'id' => 3120805,
                'name' => 'Cruzília',
                'state_id' => 31,
            ),
            473 => 
            array (
                'id' => 3120839,
                'name' => 'Cuparaque',
                'state_id' => 31,
            ),
            474 => 
            array (
                'id' => 3120870,
                'name' => 'Curral de Dentro',
                'state_id' => 31,
            ),
            475 => 
            array (
                'id' => 3120904,
                'name' => 'Curvelo',
                'state_id' => 31,
            ),
            476 => 
            array (
                'id' => 3121001,
                'name' => 'Datas',
                'state_id' => 31,
            ),
            477 => 
            array (
                'id' => 3121100,
                'name' => 'Delfim Moreira',
                'state_id' => 31,
            ),
            478 => 
            array (
                'id' => 3121209,
                'name' => 'Delfinópolis',
                'state_id' => 31,
            ),
            479 => 
            array (
                'id' => 3121258,
                'name' => 'Delta',
                'state_id' => 31,
            ),
            480 => 
            array (
                'id' => 3121308,
                'name' => 'Descoberto',
                'state_id' => 31,
            ),
            481 => 
            array (
                'id' => 3121407,
                'name' => 'Desterro de Entre Rios',
                'state_id' => 31,
            ),
            482 => 
            array (
                'id' => 3121506,
                'name' => 'Desterro do Melo',
                'state_id' => 31,
            ),
            483 => 
            array (
                'id' => 3121605,
                'name' => 'Diamantina',
                'state_id' => 31,
            ),
            484 => 
            array (
                'id' => 3121704,
                'name' => 'Diogo de Vasconcelos',
                'state_id' => 31,
            ),
            485 => 
            array (
                'id' => 3121803,
                'name' => 'Dionísio',
                'state_id' => 31,
            ),
            486 => 
            array (
                'id' => 3121902,
                'name' => 'Divinésia',
                'state_id' => 31,
            ),
            487 => 
            array (
                'id' => 3122009,
                'name' => 'Divino',
                'state_id' => 31,
            ),
            488 => 
            array (
                'id' => 3122108,
                'name' => 'Divino das Laranjeiras',
                'state_id' => 31,
            ),
            489 => 
            array (
                'id' => 3122207,
                'name' => 'Divinolândia de Minas',
                'state_id' => 31,
            ),
            490 => 
            array (
                'id' => 3122306,
                'name' => 'Divinópolis',
                'state_id' => 31,
            ),
            491 => 
            array (
                'id' => 3122355,
                'name' => 'Divisa Alegre',
                'state_id' => 31,
            ),
            492 => 
            array (
                'id' => 3122405,
                'name' => 'Divisa Nova',
                'state_id' => 31,
            ),
            493 => 
            array (
                'id' => 3122454,
                'name' => 'Divisópolis',
                'state_id' => 31,
            ),
            494 => 
            array (
                'id' => 3122470,
                'name' => 'Dom Bosco',
                'state_id' => 31,
            ),
            495 => 
            array (
                'id' => 3122504,
                'name' => 'Dom Cavati',
                'state_id' => 31,
            ),
            496 => 
            array (
                'id' => 3122603,
                'name' => 'Dom Joaquim',
                'state_id' => 31,
            ),
            497 => 
            array (
                'id' => 3122702,
                'name' => 'Dom Silvério',
                'state_id' => 31,
            ),
            498 => 
            array (
                'id' => 3122801,
                'name' => 'Dom Viçoso',
                'state_id' => 31,
            ),
            499 => 
            array (
                'id' => 3122900,
                'name' => 'Dona Euzébia',
                'state_id' => 31,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 3123007,
                'name' => 'Dores de Campos',
                'state_id' => 31,
            ),
            1 => 
            array (
                'id' => 3123106,
                'name' => 'Dores de Guanhães',
                'state_id' => 31,
            ),
            2 => 
            array (
                'id' => 3123205,
                'name' => 'Dores do Indaiá',
                'state_id' => 31,
            ),
            3 => 
            array (
                'id' => 3123304,
                'name' => 'Dores do Turvo',
                'state_id' => 31,
            ),
            4 => 
            array (
                'id' => 3123403,
                'name' => 'Doresópolis',
                'state_id' => 31,
            ),
            5 => 
            array (
                'id' => 3123502,
                'name' => 'Douradoquara',
                'state_id' => 31,
            ),
            6 => 
            array (
                'id' => 3123528,
                'name' => 'Durandé',
                'state_id' => 31,
            ),
            7 => 
            array (
                'id' => 3123601,
                'name' => 'Elói Mendes',
                'state_id' => 31,
            ),
            8 => 
            array (
                'id' => 3123700,
                'name' => 'Engenheiro Caldas',
                'state_id' => 31,
            ),
            9 => 
            array (
                'id' => 3123809,
                'name' => 'Engenheiro Navarro',
                'state_id' => 31,
            ),
            10 => 
            array (
                'id' => 3123858,
                'name' => 'Entre Folhas',
                'state_id' => 31,
            ),
            11 => 
            array (
                'id' => 3123908,
                'name' => 'Entre Rios de Minas',
                'state_id' => 31,
            ),
            12 => 
            array (
                'id' => 3124005,
                'name' => 'Ervália',
                'state_id' => 31,
            ),
            13 => 
            array (
                'id' => 3124104,
                'name' => 'Esmeraldas',
                'state_id' => 31,
            ),
            14 => 
            array (
                'id' => 3124203,
                'name' => 'Espera Feliz',
                'state_id' => 31,
            ),
            15 => 
            array (
                'id' => 3124302,
                'name' => 'Espinosa',
                'state_id' => 31,
            ),
            16 => 
            array (
                'id' => 3124401,
                'name' => 'Espírito Santo do Dourado',
                'state_id' => 31,
            ),
            17 => 
            array (
                'id' => 3124500,
                'name' => 'Estiva',
                'state_id' => 31,
            ),
            18 => 
            array (
                'id' => 3124609,
                'name' => 'Estrela Dalva',
                'state_id' => 31,
            ),
            19 => 
            array (
                'id' => 3124708,
                'name' => 'Estrela do Indaiá',
                'state_id' => 31,
            ),
            20 => 
            array (
                'id' => 3124807,
                'name' => 'Estrela do Sul',
                'state_id' => 31,
            ),
            21 => 
            array (
                'id' => 3124906,
                'name' => 'Eugenópolis',
                'state_id' => 31,
            ),
            22 => 
            array (
                'id' => 3125002,
                'name' => 'Ewbank da Câmara',
                'state_id' => 31,
            ),
            23 => 
            array (
                'id' => 3125101,
                'name' => 'Extrema',
                'state_id' => 31,
            ),
            24 => 
            array (
                'id' => 3125200,
                'name' => 'Fama',
                'state_id' => 31,
            ),
            25 => 
            array (
                'id' => 3125309,
                'name' => 'Faria Lemos',
                'state_id' => 31,
            ),
            26 => 
            array (
                'id' => 3125408,
                'name' => 'Felício dos Santos',
                'state_id' => 31,
            ),
            27 => 
            array (
                'id' => 3125507,
                'name' => 'São Gonçalo do Rio Preto',
                'state_id' => 31,
            ),
            28 => 
            array (
                'id' => 3125606,
                'name' => 'Felisburgo',
                'state_id' => 31,
            ),
            29 => 
            array (
                'id' => 3125705,
                'name' => 'Felixlândia',
                'state_id' => 31,
            ),
            30 => 
            array (
                'id' => 3125804,
                'name' => 'Fernandes Tourinho',
                'state_id' => 31,
            ),
            31 => 
            array (
                'id' => 3125903,
                'name' => 'Ferros',
                'state_id' => 31,
            ),
            32 => 
            array (
                'id' => 3125952,
                'name' => 'Fervedouro',
                'state_id' => 31,
            ),
            33 => 
            array (
                'id' => 3126000,
                'name' => 'Florestal',
                'state_id' => 31,
            ),
            34 => 
            array (
                'id' => 3126109,
                'name' => 'Formiga',
                'state_id' => 31,
            ),
            35 => 
            array (
                'id' => 3126208,
                'name' => 'Formoso',
                'state_id' => 31,
            ),
            36 => 
            array (
                'id' => 3126307,
                'name' => 'Fortaleza de Minas',
                'state_id' => 31,
            ),
            37 => 
            array (
                'id' => 3126406,
                'name' => 'Fortuna de Minas',
                'state_id' => 31,
            ),
            38 => 
            array (
                'id' => 3126505,
                'name' => 'Francisco Badaró',
                'state_id' => 31,
            ),
            39 => 
            array (
                'id' => 3126604,
                'name' => 'Francisco Dumont',
                'state_id' => 31,
            ),
            40 => 
            array (
                'id' => 3126703,
                'name' => 'Francisco Sá',
                'state_id' => 31,
            ),
            41 => 
            array (
                'id' => 3126752,
                'name' => 'Franciscópolis',
                'state_id' => 31,
            ),
            42 => 
            array (
                'id' => 3126802,
                'name' => 'Frei Gaspar',
                'state_id' => 31,
            ),
            43 => 
            array (
                'id' => 3126901,
                'name' => 'Frei Inocêncio',
                'state_id' => 31,
            ),
            44 => 
            array (
                'id' => 3126950,
                'name' => 'Frei Lagonegro',
                'state_id' => 31,
            ),
            45 => 
            array (
                'id' => 3127008,
                'name' => 'Fronteira',
                'state_id' => 31,
            ),
            46 => 
            array (
                'id' => 3127057,
                'name' => 'Fronteira dos Vales',
                'state_id' => 31,
            ),
            47 => 
            array (
                'id' => 3127073,
                'name' => 'Fruta de Leite',
                'state_id' => 31,
            ),
            48 => 
            array (
                'id' => 3127107,
                'name' => 'Frutal',
                'state_id' => 31,
            ),
            49 => 
            array (
                'id' => 3127206,
                'name' => 'Funilândia',
                'state_id' => 31,
            ),
            50 => 
            array (
                'id' => 3127305,
                'name' => 'Galiléia',
                'state_id' => 31,
            ),
            51 => 
            array (
                'id' => 3127339,
                'name' => 'Gameleiras',
                'state_id' => 31,
            ),
            52 => 
            array (
                'id' => 3127354,
                'name' => 'Glaucilândia',
                'state_id' => 31,
            ),
            53 => 
            array (
                'id' => 3127370,
                'name' => 'Goiabeira',
                'state_id' => 31,
            ),
            54 => 
            array (
                'id' => 3127388,
                'name' => 'Goianá',
                'state_id' => 31,
            ),
            55 => 
            array (
                'id' => 3127404,
                'name' => 'Gonçalves',
                'state_id' => 31,
            ),
            56 => 
            array (
                'id' => 3127503,
                'name' => 'Gonzaga',
                'state_id' => 31,
            ),
            57 => 
            array (
                'id' => 3127602,
                'name' => 'Gouveia',
                'state_id' => 31,
            ),
            58 => 
            array (
                'id' => 3127701,
                'name' => 'Governador Valadares',
                'state_id' => 31,
            ),
            59 => 
            array (
                'id' => 3127800,
                'name' => 'Grão Mogol',
                'state_id' => 31,
            ),
            60 => 
            array (
                'id' => 3127909,
                'name' => 'Grupiara',
                'state_id' => 31,
            ),
            61 => 
            array (
                'id' => 3128006,
                'name' => 'Guanhães',
                'state_id' => 31,
            ),
            62 => 
            array (
                'id' => 3128105,
                'name' => 'Guapé',
                'state_id' => 31,
            ),
            63 => 
            array (
                'id' => 3128204,
                'name' => 'Guaraciaba',
                'state_id' => 31,
            ),
            64 => 
            array (
                'id' => 3128253,
                'name' => 'Guaraciama',
                'state_id' => 31,
            ),
            65 => 
            array (
                'id' => 3128303,
                'name' => 'Guaranésia',
                'state_id' => 31,
            ),
            66 => 
            array (
                'id' => 3128402,
                'name' => 'Guarani',
                'state_id' => 31,
            ),
            67 => 
            array (
                'id' => 3128501,
                'name' => 'Guarará',
                'state_id' => 31,
            ),
            68 => 
            array (
                'id' => 3128600,
                'name' => 'Guarda-Mor',
                'state_id' => 31,
            ),
            69 => 
            array (
                'id' => 3128709,
                'name' => 'Guaxupé',
                'state_id' => 31,
            ),
            70 => 
            array (
                'id' => 3128808,
                'name' => 'Guidoval',
                'state_id' => 31,
            ),
            71 => 
            array (
                'id' => 3128907,
                'name' => 'Guimarânia',
                'state_id' => 31,
            ),
            72 => 
            array (
                'id' => 3129004,
                'name' => 'Guiricema',
                'state_id' => 31,
            ),
            73 => 
            array (
                'id' => 3129103,
                'name' => 'Gurinhatã',
                'state_id' => 31,
            ),
            74 => 
            array (
                'id' => 3129202,
                'name' => 'Heliodora',
                'state_id' => 31,
            ),
            75 => 
            array (
                'id' => 3129301,
                'name' => 'Iapu',
                'state_id' => 31,
            ),
            76 => 
            array (
                'id' => 3129400,
                'name' => 'Ibertioga',
                'state_id' => 31,
            ),
            77 => 
            array (
                'id' => 3129509,
                'name' => 'Ibiá',
                'state_id' => 31,
            ),
            78 => 
            array (
                'id' => 3129608,
                'name' => 'Ibiaí',
                'state_id' => 31,
            ),
            79 => 
            array (
                'id' => 3129657,
                'name' => 'Ibiracatu',
                'state_id' => 31,
            ),
            80 => 
            array (
                'id' => 3129707,
                'name' => 'Ibiraci',
                'state_id' => 31,
            ),
            81 => 
            array (
                'id' => 3129806,
                'name' => 'Ibirité',
                'state_id' => 31,
            ),
            82 => 
            array (
                'id' => 3129905,
                'name' => 'Ibitiúra de Minas',
                'state_id' => 31,
            ),
            83 => 
            array (
                'id' => 3130002,
                'name' => 'Ibituruna',
                'state_id' => 31,
            ),
            84 => 
            array (
                'id' => 3130051,
                'name' => 'Icaraí de Minas',
                'state_id' => 31,
            ),
            85 => 
            array (
                'id' => 3130101,
                'name' => 'Igarapé',
                'state_id' => 31,
            ),
            86 => 
            array (
                'id' => 3130200,
                'name' => 'Igaratinga',
                'state_id' => 31,
            ),
            87 => 
            array (
                'id' => 3130309,
                'name' => 'Iguatama',
                'state_id' => 31,
            ),
            88 => 
            array (
                'id' => 3130408,
                'name' => 'Ijaci',
                'state_id' => 31,
            ),
            89 => 
            array (
                'id' => 3130507,
                'name' => 'Ilicínea',
                'state_id' => 31,
            ),
            90 => 
            array (
                'id' => 3130556,
                'name' => 'Imbé de Minas',
                'state_id' => 31,
            ),
            91 => 
            array (
                'id' => 3130606,
                'name' => 'Inconfidentes',
                'state_id' => 31,
            ),
            92 => 
            array (
                'id' => 3130655,
                'name' => 'Indaiabira',
                'state_id' => 31,
            ),
            93 => 
            array (
                'id' => 3130705,
                'name' => 'Indianópolis',
                'state_id' => 31,
            ),
            94 => 
            array (
                'id' => 3130804,
                'name' => 'Ingaí',
                'state_id' => 31,
            ),
            95 => 
            array (
                'id' => 3130903,
                'name' => 'Inhapim',
                'state_id' => 31,
            ),
            96 => 
            array (
                'id' => 3131000,
                'name' => 'Inhaúma',
                'state_id' => 31,
            ),
            97 => 
            array (
                'id' => 3131109,
                'name' => 'Inimutaba',
                'state_id' => 31,
            ),
            98 => 
            array (
                'id' => 3131158,
                'name' => 'Ipaba',
                'state_id' => 31,
            ),
            99 => 
            array (
                'id' => 3131208,
                'name' => 'Ipanema',
                'state_id' => 31,
            ),
            100 => 
            array (
                'id' => 3131307,
                'name' => 'Ipatinga',
                'state_id' => 31,
            ),
            101 => 
            array (
                'id' => 3131406,
                'name' => 'Ipiaçu',
                'state_id' => 31,
            ),
            102 => 
            array (
                'id' => 3131505,
                'name' => 'Ipuiúna',
                'state_id' => 31,
            ),
            103 => 
            array (
                'id' => 3131604,
                'name' => 'Iraí de Minas',
                'state_id' => 31,
            ),
            104 => 
            array (
                'id' => 3131703,
                'name' => 'Itabira',
                'state_id' => 31,
            ),
            105 => 
            array (
                'id' => 3131802,
                'name' => 'Itabirinha',
                'state_id' => 31,
            ),
            106 => 
            array (
                'id' => 3131901,
                'name' => 'Itabirito',
                'state_id' => 31,
            ),
            107 => 
            array (
                'id' => 3132008,
                'name' => 'Itacambira',
                'state_id' => 31,
            ),
            108 => 
            array (
                'id' => 3132107,
                'name' => 'Itacarambi',
                'state_id' => 31,
            ),
            109 => 
            array (
                'id' => 3132206,
                'name' => 'Itaguara',
                'state_id' => 31,
            ),
            110 => 
            array (
                'id' => 3132305,
                'name' => 'Itaipé',
                'state_id' => 31,
            ),
            111 => 
            array (
                'id' => 3132404,
                'name' => 'Itajubá',
                'state_id' => 31,
            ),
            112 => 
            array (
                'id' => 3132503,
                'name' => 'Itamarandiba',
                'state_id' => 31,
            ),
            113 => 
            array (
                'id' => 3132602,
                'name' => 'Itamarati de Minas',
                'state_id' => 31,
            ),
            114 => 
            array (
                'id' => 3132701,
                'name' => 'Itambacuri',
                'state_id' => 31,
            ),
            115 => 
            array (
                'id' => 3132800,
                'name' => 'Itambé do Mato Dentro',
                'state_id' => 31,
            ),
            116 => 
            array (
                'id' => 3132909,
                'name' => 'Itamogi',
                'state_id' => 31,
            ),
            117 => 
            array (
                'id' => 3133006,
                'name' => 'Itamonte',
                'state_id' => 31,
            ),
            118 => 
            array (
                'id' => 3133105,
                'name' => 'Itanhandu',
                'state_id' => 31,
            ),
            119 => 
            array (
                'id' => 3133204,
                'name' => 'Itanhomi',
                'state_id' => 31,
            ),
            120 => 
            array (
                'id' => 3133303,
                'name' => 'Itaobim',
                'state_id' => 31,
            ),
            121 => 
            array (
                'id' => 3133402,
                'name' => 'Itapagipe',
                'state_id' => 31,
            ),
            122 => 
            array (
                'id' => 3133501,
                'name' => 'Itapecerica',
                'state_id' => 31,
            ),
            123 => 
            array (
                'id' => 3133600,
                'name' => 'Itapeva',
                'state_id' => 31,
            ),
            124 => 
            array (
                'id' => 3133709,
                'name' => 'Itatiaiuçu',
                'state_id' => 31,
            ),
            125 => 
            array (
                'id' => 3133758,
                'name' => 'Itaú de Minas',
                'state_id' => 31,
            ),
            126 => 
            array (
                'id' => 3133808,
                'name' => 'Itaúna',
                'state_id' => 31,
            ),
            127 => 
            array (
                'id' => 3133907,
                'name' => 'Itaverava',
                'state_id' => 31,
            ),
            128 => 
            array (
                'id' => 3134004,
                'name' => 'Itinga',
                'state_id' => 31,
            ),
            129 => 
            array (
                'id' => 3134103,
                'name' => 'Itueta',
                'state_id' => 31,
            ),
            130 => 
            array (
                'id' => 3134202,
                'name' => 'Ituiutaba',
                'state_id' => 31,
            ),
            131 => 
            array (
                'id' => 3134301,
                'name' => 'Itumirim',
                'state_id' => 31,
            ),
            132 => 
            array (
                'id' => 3134400,
                'name' => 'Iturama',
                'state_id' => 31,
            ),
            133 => 
            array (
                'id' => 3134509,
                'name' => 'Itutinga',
                'state_id' => 31,
            ),
            134 => 
            array (
                'id' => 3134608,
                'name' => 'Jaboticatubas',
                'state_id' => 31,
            ),
            135 => 
            array (
                'id' => 3134707,
                'name' => 'Jacinto',
                'state_id' => 31,
            ),
            136 => 
            array (
                'id' => 3134806,
                'name' => 'Jacuí',
                'state_id' => 31,
            ),
            137 => 
            array (
                'id' => 3134905,
                'name' => 'Jacutinga',
                'state_id' => 31,
            ),
            138 => 
            array (
                'id' => 3135001,
                'name' => 'Jaguaraçu',
                'state_id' => 31,
            ),
            139 => 
            array (
                'id' => 3135050,
                'name' => 'Jaíba',
                'state_id' => 31,
            ),
            140 => 
            array (
                'id' => 3135076,
                'name' => 'Jampruca',
                'state_id' => 31,
            ),
            141 => 
            array (
                'id' => 3135100,
                'name' => 'Janaúba',
                'state_id' => 31,
            ),
            142 => 
            array (
                'id' => 3135209,
                'name' => 'Januária',
                'state_id' => 31,
            ),
            143 => 
            array (
                'id' => 3135308,
                'name' => 'Japaraíba',
                'state_id' => 31,
            ),
            144 => 
            array (
                'id' => 3135357,
                'name' => 'Japonvar',
                'state_id' => 31,
            ),
            145 => 
            array (
                'id' => 3135407,
                'name' => 'Jeceaba',
                'state_id' => 31,
            ),
            146 => 
            array (
                'id' => 3135456,
                'name' => 'Jenipapo de Minas',
                'state_id' => 31,
            ),
            147 => 
            array (
                'id' => 3135506,
                'name' => 'Jequeri',
                'state_id' => 31,
            ),
            148 => 
            array (
                'id' => 3135605,
                'name' => 'Jequitaí',
                'state_id' => 31,
            ),
            149 => 
            array (
                'id' => 3135704,
                'name' => 'Jequitibá',
                'state_id' => 31,
            ),
            150 => 
            array (
                'id' => 3135803,
                'name' => 'Jequitinhonha',
                'state_id' => 31,
            ),
            151 => 
            array (
                'id' => 3135902,
                'name' => 'Jesuânia',
                'state_id' => 31,
            ),
            152 => 
            array (
                'id' => 3136009,
                'name' => 'Joaíma',
                'state_id' => 31,
            ),
            153 => 
            array (
                'id' => 3136108,
                'name' => 'Joanésia',
                'state_id' => 31,
            ),
            154 => 
            array (
                'id' => 3136207,
                'name' => 'João Monlevade',
                'state_id' => 31,
            ),
            155 => 
            array (
                'id' => 3136306,
                'name' => 'João Pinheiro',
                'state_id' => 31,
            ),
            156 => 
            array (
                'id' => 3136405,
                'name' => 'Joaquim Felício',
                'state_id' => 31,
            ),
            157 => 
            array (
                'id' => 3136504,
                'name' => 'Jordânia',
                'state_id' => 31,
            ),
            158 => 
            array (
                'id' => 3136520,
                'name' => 'José Gonçalves de Minas',
                'state_id' => 31,
            ),
            159 => 
            array (
                'id' => 3136553,
                'name' => 'José Raydan',
                'state_id' => 31,
            ),
            160 => 
            array (
                'id' => 3136579,
                'name' => 'Josenópolis',
                'state_id' => 31,
            ),
            161 => 
            array (
                'id' => 3136603,
                'name' => 'Nova União',
                'state_id' => 31,
            ),
            162 => 
            array (
                'id' => 3136652,
                'name' => 'Juatuba',
                'state_id' => 31,
            ),
            163 => 
            array (
                'id' => 3136702,
                'name' => 'Juiz de Fora',
                'state_id' => 31,
            ),
            164 => 
            array (
                'id' => 3136801,
                'name' => 'Juramento',
                'state_id' => 31,
            ),
            165 => 
            array (
                'id' => 3136900,
                'name' => 'Juruaia',
                'state_id' => 31,
            ),
            166 => 
            array (
                'id' => 3136959,
                'name' => 'Juvenília',
                'state_id' => 31,
            ),
            167 => 
            array (
                'id' => 3137007,
                'name' => 'Ladainha',
                'state_id' => 31,
            ),
            168 => 
            array (
                'id' => 3137106,
                'name' => 'Lagamar',
                'state_id' => 31,
            ),
            169 => 
            array (
                'id' => 3137205,
                'name' => 'Lagoa da Prata',
                'state_id' => 31,
            ),
            170 => 
            array (
                'id' => 3137304,
                'name' => 'Lagoa dos Patos',
                'state_id' => 31,
            ),
            171 => 
            array (
                'id' => 3137403,
                'name' => 'Lagoa Dourada',
                'state_id' => 31,
            ),
            172 => 
            array (
                'id' => 3137502,
                'name' => 'Lagoa Formosa',
                'state_id' => 31,
            ),
            173 => 
            array (
                'id' => 3137536,
                'name' => 'Lagoa Grande',
                'state_id' => 31,
            ),
            174 => 
            array (
                'id' => 3137601,
                'name' => 'Lagoa Santa',
                'state_id' => 31,
            ),
            175 => 
            array (
                'id' => 3137700,
                'name' => 'Lajinha',
                'state_id' => 31,
            ),
            176 => 
            array (
                'id' => 3137809,
                'name' => 'Lambari',
                'state_id' => 31,
            ),
            177 => 
            array (
                'id' => 3137908,
                'name' => 'Lamim',
                'state_id' => 31,
            ),
            178 => 
            array (
                'id' => 3138005,
                'name' => 'Laranjal',
                'state_id' => 31,
            ),
            179 => 
            array (
                'id' => 3138104,
                'name' => 'Lassance',
                'state_id' => 31,
            ),
            180 => 
            array (
                'id' => 3138203,
                'name' => 'Lavras',
                'state_id' => 31,
            ),
            181 => 
            array (
                'id' => 3138302,
                'name' => 'Leandro Ferreira',
                'state_id' => 31,
            ),
            182 => 
            array (
                'id' => 3138351,
                'name' => 'Leme do Prado',
                'state_id' => 31,
            ),
            183 => 
            array (
                'id' => 3138401,
                'name' => 'Leopoldina',
                'state_id' => 31,
            ),
            184 => 
            array (
                'id' => 3138500,
                'name' => 'Liberdade',
                'state_id' => 31,
            ),
            185 => 
            array (
                'id' => 3138609,
                'name' => 'Lima Duarte',
                'state_id' => 31,
            ),
            186 => 
            array (
                'id' => 3138625,
                'name' => 'Limeira do Oeste',
                'state_id' => 31,
            ),
            187 => 
            array (
                'id' => 3138658,
                'name' => 'Lontra',
                'state_id' => 31,
            ),
            188 => 
            array (
                'id' => 3138674,
                'name' => 'Luisburgo',
                'state_id' => 31,
            ),
            189 => 
            array (
                'id' => 3138682,
                'name' => 'Luislândia',
                'state_id' => 31,
            ),
            190 => 
            array (
                'id' => 3138708,
                'name' => 'Luminárias',
                'state_id' => 31,
            ),
            191 => 
            array (
                'id' => 3138807,
                'name' => 'Luz',
                'state_id' => 31,
            ),
            192 => 
            array (
                'id' => 3138906,
                'name' => 'Machacalis',
                'state_id' => 31,
            ),
            193 => 
            array (
                'id' => 3139003,
                'name' => 'Machado',
                'state_id' => 31,
            ),
            194 => 
            array (
                'id' => 3139102,
                'name' => 'Madre de Deus de Minas',
                'state_id' => 31,
            ),
            195 => 
            array (
                'id' => 3139201,
                'name' => 'Malacacheta',
                'state_id' => 31,
            ),
            196 => 
            array (
                'id' => 3139250,
                'name' => 'Mamonas',
                'state_id' => 31,
            ),
            197 => 
            array (
                'id' => 3139300,
                'name' => 'Manga',
                'state_id' => 31,
            ),
            198 => 
            array (
                'id' => 3139409,
                'name' => 'Manhuaçu',
                'state_id' => 31,
            ),
            199 => 
            array (
                'id' => 3139508,
                'name' => 'Manhumirim',
                'state_id' => 31,
            ),
            200 => 
            array (
                'id' => 3139607,
                'name' => 'Mantena',
                'state_id' => 31,
            ),
            201 => 
            array (
                'id' => 3139706,
                'name' => 'Maravilhas',
                'state_id' => 31,
            ),
            202 => 
            array (
                'id' => 3139805,
                'name' => 'Mar de Espanha',
                'state_id' => 31,
            ),
            203 => 
            array (
                'id' => 3139904,
                'name' => 'Maria da Fé',
                'state_id' => 31,
            ),
            204 => 
            array (
                'id' => 3140001,
                'name' => 'Mariana',
                'state_id' => 31,
            ),
            205 => 
            array (
                'id' => 3140100,
                'name' => 'Marilac',
                'state_id' => 31,
            ),
            206 => 
            array (
                'id' => 3140159,
                'name' => 'Mário Campos',
                'state_id' => 31,
            ),
            207 => 
            array (
                'id' => 3140209,
                'name' => 'Maripá de Minas',
                'state_id' => 31,
            ),
            208 => 
            array (
                'id' => 3140308,
                'name' => 'Marliéria',
                'state_id' => 31,
            ),
            209 => 
            array (
                'id' => 3140407,
                'name' => 'Marmelópolis',
                'state_id' => 31,
            ),
            210 => 
            array (
                'id' => 3140506,
                'name' => 'Martinho Campos',
                'state_id' => 31,
            ),
            211 => 
            array (
                'id' => 3140530,
                'name' => 'Martins Soares',
                'state_id' => 31,
            ),
            212 => 
            array (
                'id' => 3140555,
                'name' => 'Mata Verde',
                'state_id' => 31,
            ),
            213 => 
            array (
                'id' => 3140605,
                'name' => 'Materlândia',
                'state_id' => 31,
            ),
            214 => 
            array (
                'id' => 3140704,
                'name' => 'Mateus Leme',
                'state_id' => 31,
            ),
            215 => 
            array (
                'id' => 3140803,
                'name' => 'Matias Barbosa',
                'state_id' => 31,
            ),
            216 => 
            array (
                'id' => 3140852,
                'name' => 'Matias Cardoso',
                'state_id' => 31,
            ),
            217 => 
            array (
                'id' => 3140902,
                'name' => 'Matipó',
                'state_id' => 31,
            ),
            218 => 
            array (
                'id' => 3141009,
                'name' => 'Mato Verde',
                'state_id' => 31,
            ),
            219 => 
            array (
                'id' => 3141108,
                'name' => 'Matozinhos',
                'state_id' => 31,
            ),
            220 => 
            array (
                'id' => 3141207,
                'name' => 'Matutina',
                'state_id' => 31,
            ),
            221 => 
            array (
                'id' => 3141306,
                'name' => 'Medeiros',
                'state_id' => 31,
            ),
            222 => 
            array (
                'id' => 3141405,
                'name' => 'Medina',
                'state_id' => 31,
            ),
            223 => 
            array (
                'id' => 3141504,
                'name' => 'Mendes Pimentel',
                'state_id' => 31,
            ),
            224 => 
            array (
                'id' => 3141603,
                'name' => 'Mercês',
                'state_id' => 31,
            ),
            225 => 
            array (
                'id' => 3141702,
                'name' => 'Mesquita',
                'state_id' => 31,
            ),
            226 => 
            array (
                'id' => 3141801,
                'name' => 'Minas Novas',
                'state_id' => 31,
            ),
            227 => 
            array (
                'id' => 3141900,
                'name' => 'Minduri',
                'state_id' => 31,
            ),
            228 => 
            array (
                'id' => 3142007,
                'name' => 'Mirabela',
                'state_id' => 31,
            ),
            229 => 
            array (
                'id' => 3142106,
                'name' => 'Miradouro',
                'state_id' => 31,
            ),
            230 => 
            array (
                'id' => 3142205,
                'name' => 'Miraí',
                'state_id' => 31,
            ),
            231 => 
            array (
                'id' => 3142254,
                'name' => 'Miravânia',
                'state_id' => 31,
            ),
            232 => 
            array (
                'id' => 3142304,
                'name' => 'Moeda',
                'state_id' => 31,
            ),
            233 => 
            array (
                'id' => 3142403,
                'name' => 'Moema',
                'state_id' => 31,
            ),
            234 => 
            array (
                'id' => 3142502,
                'name' => 'Monjolos',
                'state_id' => 31,
            ),
            235 => 
            array (
                'id' => 3142601,
                'name' => 'Monsenhor Paulo',
                'state_id' => 31,
            ),
            236 => 
            array (
                'id' => 3142700,
                'name' => 'Montalvânia',
                'state_id' => 31,
            ),
            237 => 
            array (
                'id' => 3142809,
                'name' => 'Monte Alegre de Minas',
                'state_id' => 31,
            ),
            238 => 
            array (
                'id' => 3142908,
                'name' => 'Monte Azul',
                'state_id' => 31,
            ),
            239 => 
            array (
                'id' => 3143005,
                'name' => 'Monte Belo',
                'state_id' => 31,
            ),
            240 => 
            array (
                'id' => 3143104,
                'name' => 'Monte Carmelo',
                'state_id' => 31,
            ),
            241 => 
            array (
                'id' => 3143153,
                'name' => 'Monte Formoso',
                'state_id' => 31,
            ),
            242 => 
            array (
                'id' => 3143203,
                'name' => 'Monte Santo de Minas',
                'state_id' => 31,
            ),
            243 => 
            array (
                'id' => 3143302,
                'name' => 'Montes Claros',
                'state_id' => 31,
            ),
            244 => 
            array (
                'id' => 3143401,
                'name' => 'Monte Sião',
                'state_id' => 31,
            ),
            245 => 
            array (
                'id' => 3143450,
                'name' => 'Montezuma',
                'state_id' => 31,
            ),
            246 => 
            array (
                'id' => 3143500,
                'name' => 'Morada Nova de Minas',
                'state_id' => 31,
            ),
            247 => 
            array (
                'id' => 3143609,
                'name' => 'Morro da Garça',
                'state_id' => 31,
            ),
            248 => 
            array (
                'id' => 3143708,
                'name' => 'Morro do Pilar',
                'state_id' => 31,
            ),
            249 => 
            array (
                'id' => 3143807,
                'name' => 'Munhoz',
                'state_id' => 31,
            ),
            250 => 
            array (
                'id' => 3143906,
                'name' => 'Muriaé',
                'state_id' => 31,
            ),
            251 => 
            array (
                'id' => 3144003,
                'name' => 'Mutum',
                'state_id' => 31,
            ),
            252 => 
            array (
                'id' => 3144102,
                'name' => 'Muzambinho',
                'state_id' => 31,
            ),
            253 => 
            array (
                'id' => 3144201,
                'name' => 'Nacip Raydan',
                'state_id' => 31,
            ),
            254 => 
            array (
                'id' => 3144300,
                'name' => 'Nanuque',
                'state_id' => 31,
            ),
            255 => 
            array (
                'id' => 3144359,
                'name' => 'Naque',
                'state_id' => 31,
            ),
            256 => 
            array (
                'id' => 3144375,
                'name' => 'Natalândia',
                'state_id' => 31,
            ),
            257 => 
            array (
                'id' => 3144409,
                'name' => 'Natércia',
                'state_id' => 31,
            ),
            258 => 
            array (
                'id' => 3144508,
                'name' => 'Nazareno',
                'state_id' => 31,
            ),
            259 => 
            array (
                'id' => 3144607,
                'name' => 'Nepomuceno',
                'state_id' => 31,
            ),
            260 => 
            array (
                'id' => 3144656,
                'name' => 'Ninheira',
                'state_id' => 31,
            ),
            261 => 
            array (
                'id' => 3144672,
                'name' => 'Nova Belém',
                'state_id' => 31,
            ),
            262 => 
            array (
                'id' => 3144706,
                'name' => 'Nova Era',
                'state_id' => 31,
            ),
            263 => 
            array (
                'id' => 3144805,
                'name' => 'Nova Lima',
                'state_id' => 31,
            ),
            264 => 
            array (
                'id' => 3144904,
                'name' => 'Nova Módica',
                'state_id' => 31,
            ),
            265 => 
            array (
                'id' => 3145000,
                'name' => 'Nova Ponte',
                'state_id' => 31,
            ),
            266 => 
            array (
                'id' => 3145059,
                'name' => 'Nova Porteirinha',
                'state_id' => 31,
            ),
            267 => 
            array (
                'id' => 3145109,
                'name' => 'Nova Resende',
                'state_id' => 31,
            ),
            268 => 
            array (
                'id' => 3145208,
                'name' => 'Nova Serrana',
                'state_id' => 31,
            ),
            269 => 
            array (
                'id' => 3145307,
                'name' => 'Novo Cruzeiro',
                'state_id' => 31,
            ),
            270 => 
            array (
                'id' => 3145356,
                'name' => 'Novo Oriente de Minas',
                'state_id' => 31,
            ),
            271 => 
            array (
                'id' => 3145372,
                'name' => 'Novorizonte',
                'state_id' => 31,
            ),
            272 => 
            array (
                'id' => 3145406,
                'name' => 'Olaria',
                'state_id' => 31,
            ),
            273 => 
            array (
                'id' => 3145455,
                'name' => 'Olhos-d\'Água',
                'state_id' => 31,
            ),
            274 => 
            array (
                'id' => 3145505,
                'name' => 'Olímpio Noronha',
                'state_id' => 31,
            ),
            275 => 
            array (
                'id' => 3145604,
                'name' => 'Oliveira',
                'state_id' => 31,
            ),
            276 => 
            array (
                'id' => 3145703,
                'name' => 'Oliveira Fortes',
                'state_id' => 31,
            ),
            277 => 
            array (
                'id' => 3145802,
                'name' => 'Onça de Pitangui',
                'state_id' => 31,
            ),
            278 => 
            array (
                'id' => 3145851,
                'name' => 'Oratórios',
                'state_id' => 31,
            ),
            279 => 
            array (
                'id' => 3145877,
                'name' => 'Orizânia',
                'state_id' => 31,
            ),
            280 => 
            array (
                'id' => 3145901,
                'name' => 'Ouro Branco',
                'state_id' => 31,
            ),
            281 => 
            array (
                'id' => 3146008,
                'name' => 'Ouro Fino',
                'state_id' => 31,
            ),
            282 => 
            array (
                'id' => 3146107,
                'name' => 'Ouro Preto',
                'state_id' => 31,
            ),
            283 => 
            array (
                'id' => 3146206,
                'name' => 'Ouro Verde de Minas',
                'state_id' => 31,
            ),
            284 => 
            array (
                'id' => 3146255,
                'name' => 'Padre Carvalho',
                'state_id' => 31,
            ),
            285 => 
            array (
                'id' => 3146305,
                'name' => 'Padre Paraíso',
                'state_id' => 31,
            ),
            286 => 
            array (
                'id' => 3146404,
                'name' => 'Paineiras',
                'state_id' => 31,
            ),
            287 => 
            array (
                'id' => 3146503,
                'name' => 'Pains',
                'state_id' => 31,
            ),
            288 => 
            array (
                'id' => 3146552,
                'name' => 'Pai Pedro',
                'state_id' => 31,
            ),
            289 => 
            array (
                'id' => 3146602,
                'name' => 'Paiva',
                'state_id' => 31,
            ),
            290 => 
            array (
                'id' => 3146701,
                'name' => 'Palma',
                'state_id' => 31,
            ),
            291 => 
            array (
                'id' => 3146750,
                'name' => 'Palmópolis',
                'state_id' => 31,
            ),
            292 => 
            array (
                'id' => 3146909,
                'name' => 'Papagaios',
                'state_id' => 31,
            ),
            293 => 
            array (
                'id' => 3147006,
                'name' => 'Paracatu',
                'state_id' => 31,
            ),
            294 => 
            array (
                'id' => 3147105,
                'name' => 'Pará de Minas',
                'state_id' => 31,
            ),
            295 => 
            array (
                'id' => 3147204,
                'name' => 'Paraguaçu',
                'state_id' => 31,
            ),
            296 => 
            array (
                'id' => 3147303,
                'name' => 'Paraisópolis',
                'state_id' => 31,
            ),
            297 => 
            array (
                'id' => 3147402,
                'name' => 'Paraopeba',
                'state_id' => 31,
            ),
            298 => 
            array (
                'id' => 3147501,
                'name' => 'Passabém',
                'state_id' => 31,
            ),
            299 => 
            array (
                'id' => 3147600,
                'name' => 'Passa Quatro',
                'state_id' => 31,
            ),
            300 => 
            array (
                'id' => 3147709,
                'name' => 'Passa Tempo',
                'state_id' => 31,
            ),
            301 => 
            array (
                'id' => 3147808,
                'name' => 'Passa Vinte',
                'state_id' => 31,
            ),
            302 => 
            array (
                'id' => 3147907,
                'name' => 'Passos',
                'state_id' => 31,
            ),
            303 => 
            array (
                'id' => 3147956,
                'name' => 'Patis',
                'state_id' => 31,
            ),
            304 => 
            array (
                'id' => 3148004,
                'name' => 'Patos de Minas',
                'state_id' => 31,
            ),
            305 => 
            array (
                'id' => 3148103,
                'name' => 'Patrocínio',
                'state_id' => 31,
            ),
            306 => 
            array (
                'id' => 3148202,
                'name' => 'Patrocínio do Muriaé',
                'state_id' => 31,
            ),
            307 => 
            array (
                'id' => 3148301,
                'name' => 'Paula Cândido',
                'state_id' => 31,
            ),
            308 => 
            array (
                'id' => 3148400,
                'name' => 'Paulistas',
                'state_id' => 31,
            ),
            309 => 
            array (
                'id' => 3148509,
                'name' => 'Pavão',
                'state_id' => 31,
            ),
            310 => 
            array (
                'id' => 3148608,
                'name' => 'Peçanha',
                'state_id' => 31,
            ),
            311 => 
            array (
                'id' => 3148707,
                'name' => 'Pedra Azul',
                'state_id' => 31,
            ),
            312 => 
            array (
                'id' => 3148756,
                'name' => 'Pedra Bonita',
                'state_id' => 31,
            ),
            313 => 
            array (
                'id' => 3148806,
                'name' => 'Pedra do Anta',
                'state_id' => 31,
            ),
            314 => 
            array (
                'id' => 3148905,
                'name' => 'Pedra do Indaiá',
                'state_id' => 31,
            ),
            315 => 
            array (
                'id' => 3149002,
                'name' => 'Pedra Dourada',
                'state_id' => 31,
            ),
            316 => 
            array (
                'id' => 3149101,
                'name' => 'Pedralva',
                'state_id' => 31,
            ),
            317 => 
            array (
                'id' => 3149150,
                'name' => 'Pedras de Maria da Cruz',
                'state_id' => 31,
            ),
            318 => 
            array (
                'id' => 3149200,
                'name' => 'Pedrinópolis',
                'state_id' => 31,
            ),
            319 => 
            array (
                'id' => 3149309,
                'name' => 'Pedro Leopoldo',
                'state_id' => 31,
            ),
            320 => 
            array (
                'id' => 3149408,
                'name' => 'Pedro Teixeira',
                'state_id' => 31,
            ),
            321 => 
            array (
                'id' => 3149507,
                'name' => 'Pequeri',
                'state_id' => 31,
            ),
            322 => 
            array (
                'id' => 3149606,
                'name' => 'Pequi',
                'state_id' => 31,
            ),
            323 => 
            array (
                'id' => 3149705,
                'name' => 'Perdigão',
                'state_id' => 31,
            ),
            324 => 
            array (
                'id' => 3149804,
                'name' => 'Perdizes',
                'state_id' => 31,
            ),
            325 => 
            array (
                'id' => 3149903,
                'name' => 'Perdões',
                'state_id' => 31,
            ),
            326 => 
            array (
                'id' => 3149952,
                'name' => 'Periquito',
                'state_id' => 31,
            ),
            327 => 
            array (
                'id' => 3150000,
                'name' => 'Pescador',
                'state_id' => 31,
            ),
            328 => 
            array (
                'id' => 3150109,
                'name' => 'Piau',
                'state_id' => 31,
            ),
            329 => 
            array (
                'id' => 3150158,
                'name' => 'Piedade de Caratinga',
                'state_id' => 31,
            ),
            330 => 
            array (
                'id' => 3150208,
                'name' => 'Piedade de Ponte Nova',
                'state_id' => 31,
            ),
            331 => 
            array (
                'id' => 3150307,
                'name' => 'Piedade do Rio Grande',
                'state_id' => 31,
            ),
            332 => 
            array (
                'id' => 3150406,
                'name' => 'Piedade dos Gerais',
                'state_id' => 31,
            ),
            333 => 
            array (
                'id' => 3150505,
                'name' => 'Pimenta',
                'state_id' => 31,
            ),
            334 => 
            array (
                'id' => 3150539,
                'name' => 'Pingo-d\'Água',
                'state_id' => 31,
            ),
            335 => 
            array (
                'id' => 3150570,
                'name' => 'Pintópolis',
                'state_id' => 31,
            ),
            336 => 
            array (
                'id' => 3150604,
                'name' => 'Piracema',
                'state_id' => 31,
            ),
            337 => 
            array (
                'id' => 3150703,
                'name' => 'Pirajuba',
                'state_id' => 31,
            ),
            338 => 
            array (
                'id' => 3150802,
                'name' => 'Piranga',
                'state_id' => 31,
            ),
            339 => 
            array (
                'id' => 3150901,
                'name' => 'Piranguçu',
                'state_id' => 31,
            ),
            340 => 
            array (
                'id' => 3151008,
                'name' => 'Piranguinho',
                'state_id' => 31,
            ),
            341 => 
            array (
                'id' => 3151107,
                'name' => 'Pirapetinga',
                'state_id' => 31,
            ),
            342 => 
            array (
                'id' => 3151206,
                'name' => 'Pirapora',
                'state_id' => 31,
            ),
            343 => 
            array (
                'id' => 3151305,
                'name' => 'Piraúba',
                'state_id' => 31,
            ),
            344 => 
            array (
                'id' => 3151404,
                'name' => 'Pitangui',
                'state_id' => 31,
            ),
            345 => 
            array (
                'id' => 3151503,
                'name' => 'Piumhi',
                'state_id' => 31,
            ),
            346 => 
            array (
                'id' => 3151602,
                'name' => 'Planura',
                'state_id' => 31,
            ),
            347 => 
            array (
                'id' => 3151701,
                'name' => 'Poço Fundo',
                'state_id' => 31,
            ),
            348 => 
            array (
                'id' => 3151800,
                'name' => 'Poços de Caldas',
                'state_id' => 31,
            ),
            349 => 
            array (
                'id' => 3151909,
                'name' => 'Pocrane',
                'state_id' => 31,
            ),
            350 => 
            array (
                'id' => 3152006,
                'name' => 'Pompéu',
                'state_id' => 31,
            ),
            351 => 
            array (
                'id' => 3152105,
                'name' => 'Ponte Nova',
                'state_id' => 31,
            ),
            352 => 
            array (
                'id' => 3152131,
                'name' => 'Ponto Chique',
                'state_id' => 31,
            ),
            353 => 
            array (
                'id' => 3152170,
                'name' => 'Ponto dos Volantes',
                'state_id' => 31,
            ),
            354 => 
            array (
                'id' => 3152204,
                'name' => 'Porteirinha',
                'state_id' => 31,
            ),
            355 => 
            array (
                'id' => 3152303,
                'name' => 'Porto Firme',
                'state_id' => 31,
            ),
            356 => 
            array (
                'id' => 3152402,
                'name' => 'Poté',
                'state_id' => 31,
            ),
            357 => 
            array (
                'id' => 3152501,
                'name' => 'Pouso Alegre',
                'state_id' => 31,
            ),
            358 => 
            array (
                'id' => 3152600,
                'name' => 'Pouso Alto',
                'state_id' => 31,
            ),
            359 => 
            array (
                'id' => 3152709,
                'name' => 'Prados',
                'state_id' => 31,
            ),
            360 => 
            array (
                'id' => 3152808,
                'name' => 'Prata',
                'state_id' => 31,
            ),
            361 => 
            array (
                'id' => 3152907,
                'name' => 'Pratápolis',
                'state_id' => 31,
            ),
            362 => 
            array (
                'id' => 3153004,
                'name' => 'Pratinha',
                'state_id' => 31,
            ),
            363 => 
            array (
                'id' => 3153103,
                'name' => 'Presidente Bernardes',
                'state_id' => 31,
            ),
            364 => 
            array (
                'id' => 3153202,
                'name' => 'Presidente Juscelino',
                'state_id' => 31,
            ),
            365 => 
            array (
                'id' => 3153301,
                'name' => 'Presidente Kubitschek',
                'state_id' => 31,
            ),
            366 => 
            array (
                'id' => 3153400,
                'name' => 'Presidente Olegário',
                'state_id' => 31,
            ),
            367 => 
            array (
                'id' => 3153509,
                'name' => 'Alto Jequitibá',
                'state_id' => 31,
            ),
            368 => 
            array (
                'id' => 3153608,
                'name' => 'Prudente de Morais',
                'state_id' => 31,
            ),
            369 => 
            array (
                'id' => 3153707,
                'name' => 'Quartel Geral',
                'state_id' => 31,
            ),
            370 => 
            array (
                'id' => 3153806,
                'name' => 'Queluzito',
                'state_id' => 31,
            ),
            371 => 
            array (
                'id' => 3153905,
                'name' => 'Raposos',
                'state_id' => 31,
            ),
            372 => 
            array (
                'id' => 3154002,
                'name' => 'Raul Soares',
                'state_id' => 31,
            ),
            373 => 
            array (
                'id' => 3154101,
                'name' => 'Recreio',
                'state_id' => 31,
            ),
            374 => 
            array (
                'id' => 3154150,
                'name' => 'Reduto',
                'state_id' => 31,
            ),
            375 => 
            array (
                'id' => 3154200,
                'name' => 'Resende Costa',
                'state_id' => 31,
            ),
            376 => 
            array (
                'id' => 3154309,
                'name' => 'Resplendor',
                'state_id' => 31,
            ),
            377 => 
            array (
                'id' => 3154408,
                'name' => 'Ressaquinha',
                'state_id' => 31,
            ),
            378 => 
            array (
                'id' => 3154457,
                'name' => 'Riachinho',
                'state_id' => 31,
            ),
            379 => 
            array (
                'id' => 3154507,
                'name' => 'Riacho dos Machados',
                'state_id' => 31,
            ),
            380 => 
            array (
                'id' => 3154606,
                'name' => 'Ribeirão das Neves',
                'state_id' => 31,
            ),
            381 => 
            array (
                'id' => 3154705,
                'name' => 'Ribeirão Vermelho',
                'state_id' => 31,
            ),
            382 => 
            array (
                'id' => 3154804,
                'name' => 'Rio Acima',
                'state_id' => 31,
            ),
            383 => 
            array (
                'id' => 3154903,
                'name' => 'Rio Casca',
                'state_id' => 31,
            ),
            384 => 
            array (
                'id' => 3155009,
                'name' => 'Rio Doce',
                'state_id' => 31,
            ),
            385 => 
            array (
                'id' => 3155108,
                'name' => 'Rio do Prado',
                'state_id' => 31,
            ),
            386 => 
            array (
                'id' => 3155207,
                'name' => 'Rio Espera',
                'state_id' => 31,
            ),
            387 => 
            array (
                'id' => 3155306,
                'name' => 'Rio Manso',
                'state_id' => 31,
            ),
            388 => 
            array (
                'id' => 3155405,
                'name' => 'Rio Novo',
                'state_id' => 31,
            ),
            389 => 
            array (
                'id' => 3155504,
                'name' => 'Rio Paranaíba',
                'state_id' => 31,
            ),
            390 => 
            array (
                'id' => 3155603,
                'name' => 'Rio Pardo de Minas',
                'state_id' => 31,
            ),
            391 => 
            array (
                'id' => 3155702,
                'name' => 'Rio Piracicaba',
                'state_id' => 31,
            ),
            392 => 
            array (
                'id' => 3155801,
                'name' => 'Rio Pomba',
                'state_id' => 31,
            ),
            393 => 
            array (
                'id' => 3155900,
                'name' => 'Rio Preto',
                'state_id' => 31,
            ),
            394 => 
            array (
                'id' => 3156007,
                'name' => 'Rio Vermelho',
                'state_id' => 31,
            ),
            395 => 
            array (
                'id' => 3156106,
                'name' => 'Ritápolis',
                'state_id' => 31,
            ),
            396 => 
            array (
                'id' => 3156205,
                'name' => 'Rochedo de Minas',
                'state_id' => 31,
            ),
            397 => 
            array (
                'id' => 3156304,
                'name' => 'Rodeiro',
                'state_id' => 31,
            ),
            398 => 
            array (
                'id' => 3156403,
                'name' => 'Romaria',
                'state_id' => 31,
            ),
            399 => 
            array (
                'id' => 3156452,
                'name' => 'Rosário da Limeira',
                'state_id' => 31,
            ),
            400 => 
            array (
                'id' => 3156502,
                'name' => 'Rubelita',
                'state_id' => 31,
            ),
            401 => 
            array (
                'id' => 3156601,
                'name' => 'Rubim',
                'state_id' => 31,
            ),
            402 => 
            array (
                'id' => 3156700,
                'name' => 'Sabará',
                'state_id' => 31,
            ),
            403 => 
            array (
                'id' => 3156809,
                'name' => 'Sabinópolis',
                'state_id' => 31,
            ),
            404 => 
            array (
                'id' => 3156908,
                'name' => 'Sacramento',
                'state_id' => 31,
            ),
            405 => 
            array (
                'id' => 3157005,
                'name' => 'Salinas',
                'state_id' => 31,
            ),
            406 => 
            array (
                'id' => 3157104,
                'name' => 'Salto da Divisa',
                'state_id' => 31,
            ),
            407 => 
            array (
                'id' => 3157203,
                'name' => 'Santa Bárbara',
                'state_id' => 31,
            ),
            408 => 
            array (
                'id' => 3157252,
                'name' => 'Santa Bárbara do Leste',
                'state_id' => 31,
            ),
            409 => 
            array (
                'id' => 3157278,
                'name' => 'Santa Bárbara do Monte Verde',
                'state_id' => 31,
            ),
            410 => 
            array (
                'id' => 3157302,
                'name' => 'Santa Bárbara do Tugúrio',
                'state_id' => 31,
            ),
            411 => 
            array (
                'id' => 3157336,
                'name' => 'Santa Cruz de Minas',
                'state_id' => 31,
            ),
            412 => 
            array (
                'id' => 3157377,
                'name' => 'Santa Cruz de Salinas',
                'state_id' => 31,
            ),
            413 => 
            array (
                'id' => 3157401,
                'name' => 'Santa Cruz do Escalvado',
                'state_id' => 31,
            ),
            414 => 
            array (
                'id' => 3157500,
                'name' => 'Santa Efigênia de Minas',
                'state_id' => 31,
            ),
            415 => 
            array (
                'id' => 3157609,
                'name' => 'Santa Fé de Minas',
                'state_id' => 31,
            ),
            416 => 
            array (
                'id' => 3157658,
                'name' => 'Santa Helena de Minas',
                'state_id' => 31,
            ),
            417 => 
            array (
                'id' => 3157708,
                'name' => 'Santa Juliana',
                'state_id' => 31,
            ),
            418 => 
            array (
                'id' => 3157807,
                'name' => 'Santa Luzia',
                'state_id' => 31,
            ),
            419 => 
            array (
                'id' => 3157906,
                'name' => 'Santa Margarida',
                'state_id' => 31,
            ),
            420 => 
            array (
                'id' => 3158003,
                'name' => 'Santa Maria de Itabira',
                'state_id' => 31,
            ),
            421 => 
            array (
                'id' => 3158102,
                'name' => 'Santa Maria do Salto',
                'state_id' => 31,
            ),
            422 => 
            array (
                'id' => 3158201,
                'name' => 'Santa Maria do Suaçuí',
                'state_id' => 31,
            ),
            423 => 
            array (
                'id' => 3158300,
                'name' => 'Santana da Vargem',
                'state_id' => 31,
            ),
            424 => 
            array (
                'id' => 3158409,
                'name' => 'Santana de Cataguases',
                'state_id' => 31,
            ),
            425 => 
            array (
                'id' => 3158508,
                'name' => 'Santana de Pirapama',
                'state_id' => 31,
            ),
            426 => 
            array (
                'id' => 3158607,
                'name' => 'Santana do Deserto',
                'state_id' => 31,
            ),
            427 => 
            array (
                'id' => 3158706,
                'name' => 'Santana do Garambéu',
                'state_id' => 31,
            ),
            428 => 
            array (
                'id' => 3158805,
                'name' => 'Santana do Jacaré',
                'state_id' => 31,
            ),
            429 => 
            array (
                'id' => 3158904,
                'name' => 'Santana do Manhuaçu',
                'state_id' => 31,
            ),
            430 => 
            array (
                'id' => 3158953,
                'name' => 'Santana do Paraíso',
                'state_id' => 31,
            ),
            431 => 
            array (
                'id' => 3159001,
                'name' => 'Santana do Riacho',
                'state_id' => 31,
            ),
            432 => 
            array (
                'id' => 3159100,
                'name' => 'Santana dos Montes',
                'state_id' => 31,
            ),
            433 => 
            array (
                'id' => 3159209,
                'name' => 'Santa Rita de Caldas',
                'state_id' => 31,
            ),
            434 => 
            array (
                'id' => 3159308,
                'name' => 'Santa Rita de Jacutinga',
                'state_id' => 31,
            ),
            435 => 
            array (
                'id' => 3159357,
                'name' => 'Santa Rita de Minas',
                'state_id' => 31,
            ),
            436 => 
            array (
                'id' => 3159407,
                'name' => 'Santa Rita de Ibitipoca',
                'state_id' => 31,
            ),
            437 => 
            array (
                'id' => 3159506,
                'name' => 'Santa Rita do Itueto',
                'state_id' => 31,
            ),
            438 => 
            array (
                'id' => 3159605,
                'name' => 'Santa Rita do Sapucaí',
                'state_id' => 31,
            ),
            439 => 
            array (
                'id' => 3159704,
                'name' => 'Santa Rosa da Serra',
                'state_id' => 31,
            ),
            440 => 
            array (
                'id' => 3159803,
                'name' => 'Santa Vitória',
                'state_id' => 31,
            ),
            441 => 
            array (
                'id' => 3159902,
                'name' => 'Santo Antônio do Amparo',
                'state_id' => 31,
            ),
            442 => 
            array (
                'id' => 3160009,
                'name' => 'Santo Antônio do Aventureiro',
                'state_id' => 31,
            ),
            443 => 
            array (
                'id' => 3160108,
                'name' => 'Santo Antônio do Grama',
                'state_id' => 31,
            ),
            444 => 
            array (
                'id' => 3160207,
                'name' => 'Santo Antônio do Itambé',
                'state_id' => 31,
            ),
            445 => 
            array (
                'id' => 3160306,
                'name' => 'Santo Antônio do Jacinto',
                'state_id' => 31,
            ),
            446 => 
            array (
                'id' => 3160405,
                'name' => 'Santo Antônio do Monte',
                'state_id' => 31,
            ),
            447 => 
            array (
                'id' => 3160454,
                'name' => 'Santo Antônio do Retiro',
                'state_id' => 31,
            ),
            448 => 
            array (
                'id' => 3160504,
                'name' => 'Santo Antônio do Rio Abaixo',
                'state_id' => 31,
            ),
            449 => 
            array (
                'id' => 3160603,
                'name' => 'Santo Hipólito',
                'state_id' => 31,
            ),
            450 => 
            array (
                'id' => 3160702,
                'name' => 'Santos Dumont',
                'state_id' => 31,
            ),
            451 => 
            array (
                'id' => 3160801,
                'name' => 'São Bento Abade',
                'state_id' => 31,
            ),
            452 => 
            array (
                'id' => 3160900,
                'name' => 'São Brás do Suaçuí',
                'state_id' => 31,
            ),
            453 => 
            array (
                'id' => 3160959,
                'name' => 'São Domingos das Dores',
                'state_id' => 31,
            ),
            454 => 
            array (
                'id' => 3161007,
                'name' => 'São Domingos do Prata',
                'state_id' => 31,
            ),
            455 => 
            array (
                'id' => 3161056,
                'name' => 'São Félix de Minas',
                'state_id' => 31,
            ),
            456 => 
            array (
                'id' => 3161106,
                'name' => 'São Francisco',
                'state_id' => 31,
            ),
            457 => 
            array (
                'id' => 3161205,
                'name' => 'São Francisco de Paula',
                'state_id' => 31,
            ),
            458 => 
            array (
                'id' => 3161304,
                'name' => 'São Francisco de Sales',
                'state_id' => 31,
            ),
            459 => 
            array (
                'id' => 3161403,
                'name' => 'São Francisco do Glória',
                'state_id' => 31,
            ),
            460 => 
            array (
                'id' => 3161502,
                'name' => 'São Geraldo',
                'state_id' => 31,
            ),
            461 => 
            array (
                'id' => 3161601,
                'name' => 'São Geraldo da Piedade',
                'state_id' => 31,
            ),
            462 => 
            array (
                'id' => 3161650,
                'name' => 'São Geraldo do Baixio',
                'state_id' => 31,
            ),
            463 => 
            array (
                'id' => 3161700,
                'name' => 'São Gonçalo do Abaeté',
                'state_id' => 31,
            ),
            464 => 
            array (
                'id' => 3161809,
                'name' => 'São Gonçalo do Pará',
                'state_id' => 31,
            ),
            465 => 
            array (
                'id' => 3161908,
                'name' => 'São Gonçalo do Rio Abaixo',
                'state_id' => 31,
            ),
            466 => 
            array (
                'id' => 3162005,
                'name' => 'São Gonçalo do Sapucaí',
                'state_id' => 31,
            ),
            467 => 
            array (
                'id' => 3162104,
                'name' => 'São Gotardo',
                'state_id' => 31,
            ),
            468 => 
            array (
                'id' => 3162203,
                'name' => 'São João Batista do Glória',
                'state_id' => 31,
            ),
            469 => 
            array (
                'id' => 3162252,
                'name' => 'São João da Lagoa',
                'state_id' => 31,
            ),
            470 => 
            array (
                'id' => 3162302,
                'name' => 'São João da Mata',
                'state_id' => 31,
            ),
            471 => 
            array (
                'id' => 3162401,
                'name' => 'São João da Ponte',
                'state_id' => 31,
            ),
            472 => 
            array (
                'id' => 3162450,
                'name' => 'São João das Missões',
                'state_id' => 31,
            ),
            473 => 
            array (
                'id' => 3162500,
                'name' => 'São João del Rei',
                'state_id' => 31,
            ),
            474 => 
            array (
                'id' => 3162559,
                'name' => 'São João do Manhuaçu',
                'state_id' => 31,
            ),
            475 => 
            array (
                'id' => 3162575,
                'name' => 'São João do Manteninha',
                'state_id' => 31,
            ),
            476 => 
            array (
                'id' => 3162609,
                'name' => 'São João do Oriente',
                'state_id' => 31,
            ),
            477 => 
            array (
                'id' => 3162658,
                'name' => 'São João do Pacuí',
                'state_id' => 31,
            ),
            478 => 
            array (
                'id' => 3162708,
                'name' => 'São João do Paraíso',
                'state_id' => 31,
            ),
            479 => 
            array (
                'id' => 3162807,
                'name' => 'São João Evangelista',
                'state_id' => 31,
            ),
            480 => 
            array (
                'id' => 3162906,
                'name' => 'São João Nepomuceno',
                'state_id' => 31,
            ),
            481 => 
            array (
                'id' => 3162922,
                'name' => 'São Joaquim de Bicas',
                'state_id' => 31,
            ),
            482 => 
            array (
                'id' => 3162948,
                'name' => 'São José da Barra',
                'state_id' => 31,
            ),
            483 => 
            array (
                'id' => 3162955,
                'name' => 'São José da Lapa',
                'state_id' => 31,
            ),
            484 => 
            array (
                'id' => 3163003,
                'name' => 'São José da Safira',
                'state_id' => 31,
            ),
            485 => 
            array (
                'id' => 3163102,
                'name' => 'São José da Varginha',
                'state_id' => 31,
            ),
            486 => 
            array (
                'id' => 3163201,
                'name' => 'São José do Alegre',
                'state_id' => 31,
            ),
            487 => 
            array (
                'id' => 3163300,
                'name' => 'São José do Divino',
                'state_id' => 31,
            ),
            488 => 
            array (
                'id' => 3163409,
                'name' => 'São José do Goiabal',
                'state_id' => 31,
            ),
            489 => 
            array (
                'id' => 3163508,
                'name' => 'São José do Jacuri',
                'state_id' => 31,
            ),
            490 => 
            array (
                'id' => 3163607,
                'name' => 'São José do Mantimento',
                'state_id' => 31,
            ),
            491 => 
            array (
                'id' => 3163706,
                'name' => 'São Lourenço',
                'state_id' => 31,
            ),
            492 => 
            array (
                'id' => 3163805,
                'name' => 'São Miguel do Anta',
                'state_id' => 31,
            ),
            493 => 
            array (
                'id' => 3163904,
                'name' => 'São Pedro da União',
                'state_id' => 31,
            ),
            494 => 
            array (
                'id' => 3164001,
                'name' => 'São Pedro dos Ferros',
                'state_id' => 31,
            ),
            495 => 
            array (
                'id' => 3164100,
                'name' => 'São Pedro do Suaçuí',
                'state_id' => 31,
            ),
            496 => 
            array (
                'id' => 3164209,
                'name' => 'São Romão',
                'state_id' => 31,
            ),
            497 => 
            array (
                'id' => 3164308,
                'name' => 'São Roque de Minas',
                'state_id' => 31,
            ),
            498 => 
            array (
                'id' => 3164407,
                'name' => 'São Sebastião da Bela Vista',
                'state_id' => 31,
            ),
            499 => 
            array (
                'id' => 3164431,
                'name' => 'São Sebastião da Vargem Alegre',
                'state_id' => 31,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 3164472,
                'name' => 'São Sebastião do Anta',
                'state_id' => 31,
            ),
            1 => 
            array (
                'id' => 3164506,
                'name' => 'São Sebastião do Maranhão',
                'state_id' => 31,
            ),
            2 => 
            array (
                'id' => 3164605,
                'name' => 'São Sebastião do Oeste',
                'state_id' => 31,
            ),
            3 => 
            array (
                'id' => 3164704,
                'name' => 'São Sebastião do Paraíso',
                'state_id' => 31,
            ),
            4 => 
            array (
                'id' => 3164803,
                'name' => 'São Sebastião do Rio Preto',
                'state_id' => 31,
            ),
            5 => 
            array (
                'id' => 3164902,
                'name' => 'São Sebastião do Rio Verde',
                'state_id' => 31,
            ),
            6 => 
            array (
                'id' => 3165008,
                'name' => 'São Tiago',
                'state_id' => 31,
            ),
            7 => 
            array (
                'id' => 3165107,
                'name' => 'São Tomás de Aquino',
                'state_id' => 31,
            ),
            8 => 
            array (
                'id' => 3165206,
                'name' => 'São Tomé das Letras',
                'state_id' => 31,
            ),
            9 => 
            array (
                'id' => 3165305,
                'name' => 'São Vicente de Minas',
                'state_id' => 31,
            ),
            10 => 
            array (
                'id' => 3165404,
                'name' => 'Sapucaí-Mirim',
                'state_id' => 31,
            ),
            11 => 
            array (
                'id' => 3165503,
                'name' => 'Sardoá',
                'state_id' => 31,
            ),
            12 => 
            array (
                'id' => 3165537,
                'name' => 'Sarzedo',
                'state_id' => 31,
            ),
            13 => 
            array (
                'id' => 3165552,
                'name' => 'Setubinha',
                'state_id' => 31,
            ),
            14 => 
            array (
                'id' => 3165560,
                'name' => 'Sem-Peixe',
                'state_id' => 31,
            ),
            15 => 
            array (
                'id' => 3165578,
                'name' => 'Senador Amaral',
                'state_id' => 31,
            ),
            16 => 
            array (
                'id' => 3165602,
                'name' => 'Senador Cortes',
                'state_id' => 31,
            ),
            17 => 
            array (
                'id' => 3165701,
                'name' => 'Senador Firmino',
                'state_id' => 31,
            ),
            18 => 
            array (
                'id' => 3165800,
                'name' => 'Senador José Bento',
                'state_id' => 31,
            ),
            19 => 
            array (
                'id' => 3165909,
                'name' => 'Senador Modestino Gonçalves',
                'state_id' => 31,
            ),
            20 => 
            array (
                'id' => 3166006,
                'name' => 'Senhora de Oliveira',
                'state_id' => 31,
            ),
            21 => 
            array (
                'id' => 3166105,
                'name' => 'Senhora do Porto',
                'state_id' => 31,
            ),
            22 => 
            array (
                'id' => 3166204,
                'name' => 'Senhora dos Remédios',
                'state_id' => 31,
            ),
            23 => 
            array (
                'id' => 3166303,
                'name' => 'Sericita',
                'state_id' => 31,
            ),
            24 => 
            array (
                'id' => 3166402,
                'name' => 'Seritinga',
                'state_id' => 31,
            ),
            25 => 
            array (
                'id' => 3166501,
                'name' => 'Serra Azul de Minas',
                'state_id' => 31,
            ),
            26 => 
            array (
                'id' => 3166600,
                'name' => 'Serra da Saudade',
                'state_id' => 31,
            ),
            27 => 
            array (
                'id' => 3166709,
                'name' => 'Serra dos Aimorés',
                'state_id' => 31,
            ),
            28 => 
            array (
                'id' => 3166808,
                'name' => 'Serra do Salitre',
                'state_id' => 31,
            ),
            29 => 
            array (
                'id' => 3166907,
                'name' => 'Serrania',
                'state_id' => 31,
            ),
            30 => 
            array (
                'id' => 3166956,
                'name' => 'Serranópolis de Minas',
                'state_id' => 31,
            ),
            31 => 
            array (
                'id' => 3167004,
                'name' => 'Serranos',
                'state_id' => 31,
            ),
            32 => 
            array (
                'id' => 3167103,
                'name' => 'Serro',
                'state_id' => 31,
            ),
            33 => 
            array (
                'id' => 3167202,
                'name' => 'Sete Lagoas',
                'state_id' => 31,
            ),
            34 => 
            array (
                'id' => 3167301,
                'name' => 'Silveirânia',
                'state_id' => 31,
            ),
            35 => 
            array (
                'id' => 3167400,
                'name' => 'Silvianópolis',
                'state_id' => 31,
            ),
            36 => 
            array (
                'id' => 3167509,
                'name' => 'Simão Pereira',
                'state_id' => 31,
            ),
            37 => 
            array (
                'id' => 3167608,
                'name' => 'Simonésia',
                'state_id' => 31,
            ),
            38 => 
            array (
                'id' => 3167707,
                'name' => 'Sobrália',
                'state_id' => 31,
            ),
            39 => 
            array (
                'id' => 3167806,
                'name' => 'Soledade de Minas',
                'state_id' => 31,
            ),
            40 => 
            array (
                'id' => 3167905,
                'name' => 'Tabuleiro',
                'state_id' => 31,
            ),
            41 => 
            array (
                'id' => 3168002,
                'name' => 'Taiobeiras',
                'state_id' => 31,
            ),
            42 => 
            array (
                'id' => 3168051,
                'name' => 'Taparuba',
                'state_id' => 31,
            ),
            43 => 
            array (
                'id' => 3168101,
                'name' => 'Tapira',
                'state_id' => 31,
            ),
            44 => 
            array (
                'id' => 3168200,
                'name' => 'Tapiraí',
                'state_id' => 31,
            ),
            45 => 
            array (
                'id' => 3168309,
                'name' => 'Taquaraçu de Minas',
                'state_id' => 31,
            ),
            46 => 
            array (
                'id' => 3168408,
                'name' => 'Tarumirim',
                'state_id' => 31,
            ),
            47 => 
            array (
                'id' => 3168507,
                'name' => 'Teixeiras',
                'state_id' => 31,
            ),
            48 => 
            array (
                'id' => 3168606,
                'name' => 'Teófilo Otoni',
                'state_id' => 31,
            ),
            49 => 
            array (
                'id' => 3168705,
                'name' => 'Timóteo',
                'state_id' => 31,
            ),
            50 => 
            array (
                'id' => 3168804,
                'name' => 'Tiradentes',
                'state_id' => 31,
            ),
            51 => 
            array (
                'id' => 3168903,
                'name' => 'Tiros',
                'state_id' => 31,
            ),
            52 => 
            array (
                'id' => 3169000,
                'name' => 'Tocantins',
                'state_id' => 31,
            ),
            53 => 
            array (
                'id' => 3169059,
                'name' => 'Tocos do Moji',
                'state_id' => 31,
            ),
            54 => 
            array (
                'id' => 3169109,
                'name' => 'Toledo',
                'state_id' => 31,
            ),
            55 => 
            array (
                'id' => 3169208,
                'name' => 'Tombos',
                'state_id' => 31,
            ),
            56 => 
            array (
                'id' => 3169307,
                'name' => 'Três Corações',
                'state_id' => 31,
            ),
            57 => 
            array (
                'id' => 3169356,
                'name' => 'Três Marias',
                'state_id' => 31,
            ),
            58 => 
            array (
                'id' => 3169406,
                'name' => 'Três Pontas',
                'state_id' => 31,
            ),
            59 => 
            array (
                'id' => 3169505,
                'name' => 'Tumiritinga',
                'state_id' => 31,
            ),
            60 => 
            array (
                'id' => 3169604,
                'name' => 'Tupaciguara',
                'state_id' => 31,
            ),
            61 => 
            array (
                'id' => 3169703,
                'name' => 'Turmalina',
                'state_id' => 31,
            ),
            62 => 
            array (
                'id' => 3169802,
                'name' => 'Turvolândia',
                'state_id' => 31,
            ),
            63 => 
            array (
                'id' => 3169901,
                'name' => 'Ubá',
                'state_id' => 31,
            ),
            64 => 
            array (
                'id' => 3170008,
                'name' => 'Ubaí',
                'state_id' => 31,
            ),
            65 => 
            array (
                'id' => 3170057,
                'name' => 'Ubaporanga',
                'state_id' => 31,
            ),
            66 => 
            array (
                'id' => 3170107,
                'name' => 'Uberaba',
                'state_id' => 31,
            ),
            67 => 
            array (
                'id' => 3170206,
                'name' => 'Uberlândia',
                'state_id' => 31,
            ),
            68 => 
            array (
                'id' => 3170305,
                'name' => 'Umburatiba',
                'state_id' => 31,
            ),
            69 => 
            array (
                'id' => 3170404,
                'name' => 'Unaí',
                'state_id' => 31,
            ),
            70 => 
            array (
                'id' => 3170438,
                'name' => 'União de Minas',
                'state_id' => 31,
            ),
            71 => 
            array (
                'id' => 3170479,
                'name' => 'Uruana de Minas',
                'state_id' => 31,
            ),
            72 => 
            array (
                'id' => 3170503,
                'name' => 'Urucânia',
                'state_id' => 31,
            ),
            73 => 
            array (
                'id' => 3170529,
                'name' => 'Urucuia',
                'state_id' => 31,
            ),
            74 => 
            array (
                'id' => 3170578,
                'name' => 'Vargem Alegre',
                'state_id' => 31,
            ),
            75 => 
            array (
                'id' => 3170602,
                'name' => 'Vargem Bonita',
                'state_id' => 31,
            ),
            76 => 
            array (
                'id' => 3170651,
                'name' => 'Vargem Grande do Rio Pardo',
                'state_id' => 31,
            ),
            77 => 
            array (
                'id' => 3170701,
                'name' => 'Varginha',
                'state_id' => 31,
            ),
            78 => 
            array (
                'id' => 3170750,
                'name' => 'Varjão de Minas',
                'state_id' => 31,
            ),
            79 => 
            array (
                'id' => 3170800,
                'name' => 'Várzea da Palma',
                'state_id' => 31,
            ),
            80 => 
            array (
                'id' => 3170909,
                'name' => 'Varzelândia',
                'state_id' => 31,
            ),
            81 => 
            array (
                'id' => 3171006,
                'name' => 'Vazante',
                'state_id' => 31,
            ),
            82 => 
            array (
                'id' => 3171030,
                'name' => 'Verdelândia',
                'state_id' => 31,
            ),
            83 => 
            array (
                'id' => 3171071,
                'name' => 'Veredinha',
                'state_id' => 31,
            ),
            84 => 
            array (
                'id' => 3171105,
                'name' => 'Veríssimo',
                'state_id' => 31,
            ),
            85 => 
            array (
                'id' => 3171154,
                'name' => 'Vermelho Novo',
                'state_id' => 31,
            ),
            86 => 
            array (
                'id' => 3171204,
                'name' => 'Vespasiano',
                'state_id' => 31,
            ),
            87 => 
            array (
                'id' => 3171303,
                'name' => 'Viçosa',
                'state_id' => 31,
            ),
            88 => 
            array (
                'id' => 3171402,
                'name' => 'Vieiras',
                'state_id' => 31,
            ),
            89 => 
            array (
                'id' => 3171501,
                'name' => 'Mathias Lobato',
                'state_id' => 31,
            ),
            90 => 
            array (
                'id' => 3171600,
                'name' => 'Virgem da Lapa',
                'state_id' => 31,
            ),
            91 => 
            array (
                'id' => 3171709,
                'name' => 'Virgínia',
                'state_id' => 31,
            ),
            92 => 
            array (
                'id' => 3171808,
                'name' => 'Virginópolis',
                'state_id' => 31,
            ),
            93 => 
            array (
                'id' => 3171907,
                'name' => 'Virgolândia',
                'state_id' => 31,
            ),
            94 => 
            array (
                'id' => 3172004,
                'name' => 'Visconde do Rio Branco',
                'state_id' => 31,
            ),
            95 => 
            array (
                'id' => 3172103,
                'name' => 'Volta Grande',
                'state_id' => 31,
            ),
            96 => 
            array (
                'id' => 3172202,
                'name' => 'Wenceslau Braz',
                'state_id' => 31,
            ),
            97 => 
            array (
                'id' => 3200102,
                'name' => 'Afonso Cláudio',
                'state_id' => 32,
            ),
            98 => 
            array (
                'id' => 3200136,
                'name' => 'Águia Branca',
                'state_id' => 32,
            ),
            99 => 
            array (
                'id' => 3200169,
                'name' => 'Água Doce do Norte',
                'state_id' => 32,
            ),
            100 => 
            array (
                'id' => 3200201,
                'name' => 'Alegre',
                'state_id' => 32,
            ),
            101 => 
            array (
                'id' => 3200300,
                'name' => 'Alfredo Chaves',
                'state_id' => 32,
            ),
            102 => 
            array (
                'id' => 3200359,
                'name' => 'Alto Rio Novo',
                'state_id' => 32,
            ),
            103 => 
            array (
                'id' => 3200409,
                'name' => 'Anchieta',
                'state_id' => 32,
            ),
            104 => 
            array (
                'id' => 3200508,
                'name' => 'Apiacá',
                'state_id' => 32,
            ),
            105 => 
            array (
                'id' => 3200607,
                'name' => 'Aracruz',
                'state_id' => 32,
            ),
            106 => 
            array (
                'id' => 3200706,
                'name' => 'Atílio Vivácqua',
                'state_id' => 32,
            ),
            107 => 
            array (
                'id' => 3200805,
                'name' => 'Baixo Guandu',
                'state_id' => 32,
            ),
            108 => 
            array (
                'id' => 3200904,
                'name' => 'Barra de São Francisco',
                'state_id' => 32,
            ),
            109 => 
            array (
                'id' => 3201001,
                'name' => 'Boa Esperança',
                'state_id' => 32,
            ),
            110 => 
            array (
                'id' => 3201100,
                'name' => 'Bom Jesus do Norte',
                'state_id' => 32,
            ),
            111 => 
            array (
                'id' => 3201159,
                'name' => 'Brejetuba',
                'state_id' => 32,
            ),
            112 => 
            array (
                'id' => 3201209,
                'name' => 'Cachoeiro de Itapemirim',
                'state_id' => 32,
            ),
            113 => 
            array (
                'id' => 3201308,
                'name' => 'Cariacica',
                'state_id' => 32,
            ),
            114 => 
            array (
                'id' => 3201407,
                'name' => 'Castelo',
                'state_id' => 32,
            ),
            115 => 
            array (
                'id' => 3201506,
                'name' => 'Colatina',
                'state_id' => 32,
            ),
            116 => 
            array (
                'id' => 3201605,
                'name' => 'Conceição da Barra',
                'state_id' => 32,
            ),
            117 => 
            array (
                'id' => 3201704,
                'name' => 'Conceição do Castelo',
                'state_id' => 32,
            ),
            118 => 
            array (
                'id' => 3201803,
                'name' => 'Divino de São Lourenço',
                'state_id' => 32,
            ),
            119 => 
            array (
                'id' => 3201902,
                'name' => 'Domingos Martins',
                'state_id' => 32,
            ),
            120 => 
            array (
                'id' => 3202009,
                'name' => 'Dores do Rio Preto',
                'state_id' => 32,
            ),
            121 => 
            array (
                'id' => 3202108,
                'name' => 'Ecoporanga',
                'state_id' => 32,
            ),
            122 => 
            array (
                'id' => 3202207,
                'name' => 'Fundão',
                'state_id' => 32,
            ),
            123 => 
            array (
                'id' => 3202256,
                'name' => 'Governador Lindenberg',
                'state_id' => 32,
            ),
            124 => 
            array (
                'id' => 3202306,
                'name' => 'Guaçuí',
                'state_id' => 32,
            ),
            125 => 
            array (
                'id' => 3202405,
                'name' => 'Guarapari',
                'state_id' => 32,
            ),
            126 => 
            array (
                'id' => 3202454,
                'name' => 'Ibatiba',
                'state_id' => 32,
            ),
            127 => 
            array (
                'id' => 3202504,
                'name' => 'Ibiraçu',
                'state_id' => 32,
            ),
            128 => 
            array (
                'id' => 3202553,
                'name' => 'Ibitirama',
                'state_id' => 32,
            ),
            129 => 
            array (
                'id' => 3202603,
                'name' => 'Iconha',
                'state_id' => 32,
            ),
            130 => 
            array (
                'id' => 3202652,
                'name' => 'Irupi',
                'state_id' => 32,
            ),
            131 => 
            array (
                'id' => 3202702,
                'name' => 'Itaguaçu',
                'state_id' => 32,
            ),
            132 => 
            array (
                'id' => 3202801,
                'name' => 'Itapemirim',
                'state_id' => 32,
            ),
            133 => 
            array (
                'id' => 3202900,
                'name' => 'Itarana',
                'state_id' => 32,
            ),
            134 => 
            array (
                'id' => 3203007,
                'name' => 'Iúna',
                'state_id' => 32,
            ),
            135 => 
            array (
                'id' => 3203056,
                'name' => 'Jaguaré',
                'state_id' => 32,
            ),
            136 => 
            array (
                'id' => 3203106,
                'name' => 'Jerônimo Monteiro',
                'state_id' => 32,
            ),
            137 => 
            array (
                'id' => 3203130,
                'name' => 'João Neiva',
                'state_id' => 32,
            ),
            138 => 
            array (
                'id' => 3203163,
                'name' => 'Laranja da Terra',
                'state_id' => 32,
            ),
            139 => 
            array (
                'id' => 3203205,
                'name' => 'Linhares',
                'state_id' => 32,
            ),
            140 => 
            array (
                'id' => 3203304,
                'name' => 'Mantenópolis',
                'state_id' => 32,
            ),
            141 => 
            array (
                'id' => 3203320,
                'name' => 'Marataízes',
                'state_id' => 32,
            ),
            142 => 
            array (
                'id' => 3203346,
                'name' => 'Marechal Floriano',
                'state_id' => 32,
            ),
            143 => 
            array (
                'id' => 3203353,
                'name' => 'Marilândia',
                'state_id' => 32,
            ),
            144 => 
            array (
                'id' => 3203403,
                'name' => 'Mimoso do Sul',
                'state_id' => 32,
            ),
            145 => 
            array (
                'id' => 3203502,
                'name' => 'Montanha',
                'state_id' => 32,
            ),
            146 => 
            array (
                'id' => 3203601,
                'name' => 'Mucurici',
                'state_id' => 32,
            ),
            147 => 
            array (
                'id' => 3203700,
                'name' => 'Muniz Freire',
                'state_id' => 32,
            ),
            148 => 
            array (
                'id' => 3203809,
                'name' => 'Muqui',
                'state_id' => 32,
            ),
            149 => 
            array (
                'id' => 3203908,
                'name' => 'Nova Venécia',
                'state_id' => 32,
            ),
            150 => 
            array (
                'id' => 3204005,
                'name' => 'Pancas',
                'state_id' => 32,
            ),
            151 => 
            array (
                'id' => 3204054,
                'name' => 'Pedro Canário',
                'state_id' => 32,
            ),
            152 => 
            array (
                'id' => 3204104,
                'name' => 'Pinheiros',
                'state_id' => 32,
            ),
            153 => 
            array (
                'id' => 3204203,
                'name' => 'Piúma',
                'state_id' => 32,
            ),
            154 => 
            array (
                'id' => 3204252,
                'name' => 'Ponto Belo',
                'state_id' => 32,
            ),
            155 => 
            array (
                'id' => 3204302,
                'name' => 'Presidente Kennedy',
                'state_id' => 32,
            ),
            156 => 
            array (
                'id' => 3204351,
                'name' => 'Rio Bananal',
                'state_id' => 32,
            ),
            157 => 
            array (
                'id' => 3204401,
                'name' => 'Rio Novo do Sul',
                'state_id' => 32,
            ),
            158 => 
            array (
                'id' => 3204500,
                'name' => 'Santa Leopoldina',
                'state_id' => 32,
            ),
            159 => 
            array (
                'id' => 3204559,
                'name' => 'Santa Maria de Jetibá',
                'state_id' => 32,
            ),
            160 => 
            array (
                'id' => 3204609,
                'name' => 'Santa Teresa',
                'state_id' => 32,
            ),
            161 => 
            array (
                'id' => 3204658,
                'name' => 'São Domingos do Norte',
                'state_id' => 32,
            ),
            162 => 
            array (
                'id' => 3204708,
                'name' => 'São Gabriel da Palha',
                'state_id' => 32,
            ),
            163 => 
            array (
                'id' => 3204807,
                'name' => 'São José do Calçado',
                'state_id' => 32,
            ),
            164 => 
            array (
                'id' => 3204906,
                'name' => 'São Mateus',
                'state_id' => 32,
            ),
            165 => 
            array (
                'id' => 3204955,
                'name' => 'São Roque do Canaã',
                'state_id' => 32,
            ),
            166 => 
            array (
                'id' => 3205002,
                'name' => 'Serra',
                'state_id' => 32,
            ),
            167 => 
            array (
                'id' => 3205010,
                'name' => 'Sooretama',
                'state_id' => 32,
            ),
            168 => 
            array (
                'id' => 3205036,
                'name' => 'Vargem Alta',
                'state_id' => 32,
            ),
            169 => 
            array (
                'id' => 3205069,
                'name' => 'Venda Nova do Imigrante',
                'state_id' => 32,
            ),
            170 => 
            array (
                'id' => 3205101,
                'name' => 'Viana',
                'state_id' => 32,
            ),
            171 => 
            array (
                'id' => 3205150,
                'name' => 'Vila Pavão',
                'state_id' => 32,
            ),
            172 => 
            array (
                'id' => 3205176,
                'name' => 'Vila Valério',
                'state_id' => 32,
            ),
            173 => 
            array (
                'id' => 3205200,
                'name' => 'Vila Velha',
                'state_id' => 32,
            ),
            174 => 
            array (
                'id' => 3205309,
                'name' => 'Vitória',
                'state_id' => 32,
            ),
            175 => 
            array (
                'id' => 3300100,
                'name' => 'Angra dos Reis',
                'state_id' => 33,
            ),
            176 => 
            array (
                'id' => 3300159,
                'name' => 'Aperibé',
                'state_id' => 33,
            ),
            177 => 
            array (
                'id' => 3300209,
                'name' => 'Araruama',
                'state_id' => 33,
            ),
            178 => 
            array (
                'id' => 3300225,
                'name' => 'Areal',
                'state_id' => 33,
            ),
            179 => 
            array (
                'id' => 3300233,
                'name' => 'Armação dos Búzios',
                'state_id' => 33,
            ),
            180 => 
            array (
                'id' => 3300258,
                'name' => 'Arraial do Cabo',
                'state_id' => 33,
            ),
            181 => 
            array (
                'id' => 3300308,
                'name' => 'Barra do Piraí',
                'state_id' => 33,
            ),
            182 => 
            array (
                'id' => 3300407,
                'name' => 'Barra Mansa',
                'state_id' => 33,
            ),
            183 => 
            array (
                'id' => 3300456,
                'name' => 'Belford Roxo',
                'state_id' => 33,
            ),
            184 => 
            array (
                'id' => 3300506,
                'name' => 'Bom Jardim',
                'state_id' => 33,
            ),
            185 => 
            array (
                'id' => 3300605,
                'name' => 'Bom Jesus do Itabapoana',
                'state_id' => 33,
            ),
            186 => 
            array (
                'id' => 3300704,
                'name' => 'Cabo Frio',
                'state_id' => 33,
            ),
            187 => 
            array (
                'id' => 3300803,
                'name' => 'Cachoeiras de Macacu',
                'state_id' => 33,
            ),
            188 => 
            array (
                'id' => 3300902,
                'name' => 'Cambuci',
                'state_id' => 33,
            ),
            189 => 
            array (
                'id' => 3300936,
                'name' => 'Carapebus',
                'state_id' => 33,
            ),
            190 => 
            array (
                'id' => 3300951,
                'name' => 'Comendador Levy Gasparian',
                'state_id' => 33,
            ),
            191 => 
            array (
                'id' => 3301009,
                'name' => 'Campos dos Goytacazes',
                'state_id' => 33,
            ),
            192 => 
            array (
                'id' => 3301108,
                'name' => 'Cantagalo',
                'state_id' => 33,
            ),
            193 => 
            array (
                'id' => 3301157,
                'name' => 'Cardoso Moreira',
                'state_id' => 33,
            ),
            194 => 
            array (
                'id' => 3301207,
                'name' => 'Carmo',
                'state_id' => 33,
            ),
            195 => 
            array (
                'id' => 3301306,
                'name' => 'Casimiro de Abreu',
                'state_id' => 33,
            ),
            196 => 
            array (
                'id' => 3301405,
                'name' => 'Conceição de Macabu',
                'state_id' => 33,
            ),
            197 => 
            array (
                'id' => 3301504,
                'name' => 'Cordeiro',
                'state_id' => 33,
            ),
            198 => 
            array (
                'id' => 3301603,
                'name' => 'Duas Barras',
                'state_id' => 33,
            ),
            199 => 
            array (
                'id' => 3301702,
                'name' => 'Duque de Caxias',
                'state_id' => 33,
            ),
            200 => 
            array (
                'id' => 3301801,
                'name' => 'Engenheiro Paulo de Frontin',
                'state_id' => 33,
            ),
            201 => 
            array (
                'id' => 3301850,
                'name' => 'Guapimirim',
                'state_id' => 33,
            ),
            202 => 
            array (
                'id' => 3301876,
                'name' => 'Iguaba Grande',
                'state_id' => 33,
            ),
            203 => 
            array (
                'id' => 3301900,
                'name' => 'Itaboraí',
                'state_id' => 33,
            ),
            204 => 
            array (
                'id' => 3302007,
                'name' => 'Itaguaí',
                'state_id' => 33,
            ),
            205 => 
            array (
                'id' => 3302056,
                'name' => 'Italva',
                'state_id' => 33,
            ),
            206 => 
            array (
                'id' => 3302106,
                'name' => 'Itaocara',
                'state_id' => 33,
            ),
            207 => 
            array (
                'id' => 3302205,
                'name' => 'Itaperuna',
                'state_id' => 33,
            ),
            208 => 
            array (
                'id' => 3302254,
                'name' => 'Itatiaia',
                'state_id' => 33,
            ),
            209 => 
            array (
                'id' => 3302270,
                'name' => 'Japeri',
                'state_id' => 33,
            ),
            210 => 
            array (
                'id' => 3302304,
                'name' => 'Laje do Muriaé',
                'state_id' => 33,
            ),
            211 => 
            array (
                'id' => 3302403,
                'name' => 'Macaé',
                'state_id' => 33,
            ),
            212 => 
            array (
                'id' => 3302452,
                'name' => 'Macuco',
                'state_id' => 33,
            ),
            213 => 
            array (
                'id' => 3302502,
                'name' => 'Magé',
                'state_id' => 33,
            ),
            214 => 
            array (
                'id' => 3302601,
                'name' => 'Mangaratiba',
                'state_id' => 33,
            ),
            215 => 
            array (
                'id' => 3302700,
                'name' => 'Maricá',
                'state_id' => 33,
            ),
            216 => 
            array (
                'id' => 3302809,
                'name' => 'Mendes',
                'state_id' => 33,
            ),
            217 => 
            array (
                'id' => 3302858,
                'name' => 'Mesquita',
                'state_id' => 33,
            ),
            218 => 
            array (
                'id' => 3302908,
                'name' => 'Miguel Pereira',
                'state_id' => 33,
            ),
            219 => 
            array (
                'id' => 3303005,
                'name' => 'Miracema',
                'state_id' => 33,
            ),
            220 => 
            array (
                'id' => 3303104,
                'name' => 'Natividade',
                'state_id' => 33,
            ),
            221 => 
            array (
                'id' => 3303203,
                'name' => 'Nilópolis',
                'state_id' => 33,
            ),
            222 => 
            array (
                'id' => 3303302,
                'name' => 'Niterói',
                'state_id' => 33,
            ),
            223 => 
            array (
                'id' => 3303401,
                'name' => 'Nova Friburgo',
                'state_id' => 33,
            ),
            224 => 
            array (
                'id' => 3303500,
                'name' => 'Nova Iguaçu',
                'state_id' => 33,
            ),
            225 => 
            array (
                'id' => 3303609,
                'name' => 'Paracambi',
                'state_id' => 33,
            ),
            226 => 
            array (
                'id' => 3303708,
                'name' => 'Paraíba do Sul',
                'state_id' => 33,
            ),
            227 => 
            array (
                'id' => 3303807,
                'name' => 'Paraty',
                'state_id' => 33,
            ),
            228 => 
            array (
                'id' => 3303856,
                'name' => 'Paty do Alferes',
                'state_id' => 33,
            ),
            229 => 
            array (
                'id' => 3303906,
                'name' => 'Petrópolis',
                'state_id' => 33,
            ),
            230 => 
            array (
                'id' => 3303955,
                'name' => 'Pinheiral',
                'state_id' => 33,
            ),
            231 => 
            array (
                'id' => 3304003,
                'name' => 'Piraí',
                'state_id' => 33,
            ),
            232 => 
            array (
                'id' => 3304102,
                'name' => 'Porciúncula',
                'state_id' => 33,
            ),
            233 => 
            array (
                'id' => 3304110,
                'name' => 'Porto Real',
                'state_id' => 33,
            ),
            234 => 
            array (
                'id' => 3304128,
                'name' => 'Quatis',
                'state_id' => 33,
            ),
            235 => 
            array (
                'id' => 3304144,
                'name' => 'Queimados',
                'state_id' => 33,
            ),
            236 => 
            array (
                'id' => 3304151,
                'name' => 'Quissamã',
                'state_id' => 33,
            ),
            237 => 
            array (
                'id' => 3304201,
                'name' => 'Resende',
                'state_id' => 33,
            ),
            238 => 
            array (
                'id' => 3304300,
                'name' => 'Rio Bonito',
                'state_id' => 33,
            ),
            239 => 
            array (
                'id' => 3304409,
                'name' => 'Rio Claro',
                'state_id' => 33,
            ),
            240 => 
            array (
                'id' => 3304508,
                'name' => 'Rio das Flores',
                'state_id' => 33,
            ),
            241 => 
            array (
                'id' => 3304524,
                'name' => 'Rio das Ostras',
                'state_id' => 33,
            ),
            242 => 
            array (
                'id' => 3304557,
                'name' => 'Rio de Janeiro',
                'state_id' => 33,
            ),
            243 => 
            array (
                'id' => 3304607,
                'name' => 'Santa Maria Madalena',
                'state_id' => 33,
            ),
            244 => 
            array (
                'id' => 3304706,
                'name' => 'Santo Antônio de Pádua',
                'state_id' => 33,
            ),
            245 => 
            array (
                'id' => 3304755,
                'name' => 'São Francisco de Itabapoana',
                'state_id' => 33,
            ),
            246 => 
            array (
                'id' => 3304805,
                'name' => 'São Fidélis',
                'state_id' => 33,
            ),
            247 => 
            array (
                'id' => 3304904,
                'name' => 'São Gonçalo',
                'state_id' => 33,
            ),
            248 => 
            array (
                'id' => 3305000,
                'name' => 'São João da Barra',
                'state_id' => 33,
            ),
            249 => 
            array (
                'id' => 3305109,
                'name' => 'São João de Meriti',
                'state_id' => 33,
            ),
            250 => 
            array (
                'id' => 3305133,
                'name' => 'São José de Ubá',
                'state_id' => 33,
            ),
            251 => 
            array (
                'id' => 3305158,
                'name' => 'São José do Vale do Rio Preto',
                'state_id' => 33,
            ),
            252 => 
            array (
                'id' => 3305208,
                'name' => 'São Pedro da Aldeia',
                'state_id' => 33,
            ),
            253 => 
            array (
                'id' => 3305307,
                'name' => 'São Sebastião do Alto',
                'state_id' => 33,
            ),
            254 => 
            array (
                'id' => 3305406,
                'name' => 'Sapucaia',
                'state_id' => 33,
            ),
            255 => 
            array (
                'id' => 3305505,
                'name' => 'Saquarema',
                'state_id' => 33,
            ),
            256 => 
            array (
                'id' => 3305554,
                'name' => 'Seropédica',
                'state_id' => 33,
            ),
            257 => 
            array (
                'id' => 3305604,
                'name' => 'Silva Jardim',
                'state_id' => 33,
            ),
            258 => 
            array (
                'id' => 3305703,
                'name' => 'Sumidouro',
                'state_id' => 33,
            ),
            259 => 
            array (
                'id' => 3305752,
                'name' => 'Tanguá',
                'state_id' => 33,
            ),
            260 => 
            array (
                'id' => 3305802,
                'name' => 'Teresópolis',
                'state_id' => 33,
            ),
            261 => 
            array (
                'id' => 3305901,
                'name' => 'Trajano de Moraes',
                'state_id' => 33,
            ),
            262 => 
            array (
                'id' => 3306008,
                'name' => 'Três Rios',
                'state_id' => 33,
            ),
            263 => 
            array (
                'id' => 3306107,
                'name' => 'Valença',
                'state_id' => 33,
            ),
            264 => 
            array (
                'id' => 3306156,
                'name' => 'Varre-Sai',
                'state_id' => 33,
            ),
            265 => 
            array (
                'id' => 3306206,
                'name' => 'Vassouras',
                'state_id' => 33,
            ),
            266 => 
            array (
                'id' => 3306305,
                'name' => 'Volta Redonda',
                'state_id' => 33,
            ),
            267 => 
            array (
                'id' => 3500105,
                'name' => 'Adamantina',
                'state_id' => 35,
            ),
            268 => 
            array (
                'id' => 3500204,
                'name' => 'Adolfo',
                'state_id' => 35,
            ),
            269 => 
            array (
                'id' => 3500303,
                'name' => 'Aguaí',
                'state_id' => 35,
            ),
            270 => 
            array (
                'id' => 3500402,
                'name' => 'Águas da Prata',
                'state_id' => 35,
            ),
            271 => 
            array (
                'id' => 3500501,
                'name' => 'Águas de Lindóia',
                'state_id' => 35,
            ),
            272 => 
            array (
                'id' => 3500550,
                'name' => 'Águas de Santa Bárbara',
                'state_id' => 35,
            ),
            273 => 
            array (
                'id' => 3500600,
                'name' => 'Águas de São Pedro',
                'state_id' => 35,
            ),
            274 => 
            array (
                'id' => 3500709,
                'name' => 'Agudos',
                'state_id' => 35,
            ),
            275 => 
            array (
                'id' => 3500758,
                'name' => 'Alambari',
                'state_id' => 35,
            ),
            276 => 
            array (
                'id' => 3500808,
                'name' => 'Alfredo Marcondes',
                'state_id' => 35,
            ),
            277 => 
            array (
                'id' => 3500907,
                'name' => 'Altair',
                'state_id' => 35,
            ),
            278 => 
            array (
                'id' => 3501004,
                'name' => 'Altinópolis',
                'state_id' => 35,
            ),
            279 => 
            array (
                'id' => 3501103,
                'name' => 'Alto Alegre',
                'state_id' => 35,
            ),
            280 => 
            array (
                'id' => 3501152,
                'name' => 'Alumínio',
                'state_id' => 35,
            ),
            281 => 
            array (
                'id' => 3501202,
                'name' => 'Álvares Florence',
                'state_id' => 35,
            ),
            282 => 
            array (
                'id' => 3501301,
                'name' => 'Álvares Machado',
                'state_id' => 35,
            ),
            283 => 
            array (
                'id' => 3501400,
                'name' => 'Álvaro de Carvalho',
                'state_id' => 35,
            ),
            284 => 
            array (
                'id' => 3501509,
                'name' => 'Alvinlândia',
                'state_id' => 35,
            ),
            285 => 
            array (
                'id' => 3501608,
                'name' => 'Americana',
                'state_id' => 35,
            ),
            286 => 
            array (
                'id' => 3501707,
                'name' => 'Américo Brasiliense',
                'state_id' => 35,
            ),
            287 => 
            array (
                'id' => 3501806,
                'name' => 'Américo de Campos',
                'state_id' => 35,
            ),
            288 => 
            array (
                'id' => 3501905,
                'name' => 'Amparo',
                'state_id' => 35,
            ),
            289 => 
            array (
                'id' => 3502002,
                'name' => 'Analândia',
                'state_id' => 35,
            ),
            290 => 
            array (
                'id' => 3502101,
                'name' => 'Andradina',
                'state_id' => 35,
            ),
            291 => 
            array (
                'id' => 3502200,
                'name' => 'Angatuba',
                'state_id' => 35,
            ),
            292 => 
            array (
                'id' => 3502309,
                'name' => 'Anhembi',
                'state_id' => 35,
            ),
            293 => 
            array (
                'id' => 3502408,
                'name' => 'Anhumas',
                'state_id' => 35,
            ),
            294 => 
            array (
                'id' => 3502507,
                'name' => 'Aparecida',
                'state_id' => 35,
            ),
            295 => 
            array (
                'id' => 3502606,
                'name' => 'Aparecida d\'Oeste',
                'state_id' => 35,
            ),
            296 => 
            array (
                'id' => 3502705,
                'name' => 'Apiaí',
                'state_id' => 35,
            ),
            297 => 
            array (
                'id' => 3502754,
                'name' => 'Araçariguama',
                'state_id' => 35,
            ),
            298 => 
            array (
                'id' => 3502804,
                'name' => 'Araçatuba',
                'state_id' => 35,
            ),
            299 => 
            array (
                'id' => 3502903,
                'name' => 'Araçoiaba da Serra',
                'state_id' => 35,
            ),
            300 => 
            array (
                'id' => 3503000,
                'name' => 'Aramina',
                'state_id' => 35,
            ),
            301 => 
            array (
                'id' => 3503109,
                'name' => 'Arandu',
                'state_id' => 35,
            ),
            302 => 
            array (
                'id' => 3503158,
                'name' => 'Arapeí',
                'state_id' => 35,
            ),
            303 => 
            array (
                'id' => 3503208,
                'name' => 'Araraquara',
                'state_id' => 35,
            ),
            304 => 
            array (
                'id' => 3503307,
                'name' => 'Araras',
                'state_id' => 35,
            ),
            305 => 
            array (
                'id' => 3503356,
                'name' => 'Arco-Íris',
                'state_id' => 35,
            ),
            306 => 
            array (
                'id' => 3503406,
                'name' => 'Arealva',
                'state_id' => 35,
            ),
            307 => 
            array (
                'id' => 3503505,
                'name' => 'Areias',
                'state_id' => 35,
            ),
            308 => 
            array (
                'id' => 3503604,
                'name' => 'Areiópolis',
                'state_id' => 35,
            ),
            309 => 
            array (
                'id' => 3503703,
                'name' => 'Ariranha',
                'state_id' => 35,
            ),
            310 => 
            array (
                'id' => 3503802,
                'name' => 'Artur Nogueira',
                'state_id' => 35,
            ),
            311 => 
            array (
                'id' => 3503901,
                'name' => 'Arujá',
                'state_id' => 35,
            ),
            312 => 
            array (
                'id' => 3503950,
                'name' => 'Aspásia',
                'state_id' => 35,
            ),
            313 => 
            array (
                'id' => 3504008,
                'name' => 'Assis',
                'state_id' => 35,
            ),
            314 => 
            array (
                'id' => 3504107,
                'name' => 'Atibaia',
                'state_id' => 35,
            ),
            315 => 
            array (
                'id' => 3504206,
                'name' => 'Auriflama',
                'state_id' => 35,
            ),
            316 => 
            array (
                'id' => 3504305,
                'name' => 'Avaí',
                'state_id' => 35,
            ),
            317 => 
            array (
                'id' => 3504404,
                'name' => 'Avanhandava',
                'state_id' => 35,
            ),
            318 => 
            array (
                'id' => 3504503,
                'name' => 'Avaré',
                'state_id' => 35,
            ),
            319 => 
            array (
                'id' => 3504602,
                'name' => 'Bady Bassitt',
                'state_id' => 35,
            ),
            320 => 
            array (
                'id' => 3504701,
                'name' => 'Balbinos',
                'state_id' => 35,
            ),
            321 => 
            array (
                'id' => 3504800,
                'name' => 'Bálsamo',
                'state_id' => 35,
            ),
            322 => 
            array (
                'id' => 3504909,
                'name' => 'Bananal',
                'state_id' => 35,
            ),
            323 => 
            array (
                'id' => 3505005,
                'name' => 'Barão de Antonina',
                'state_id' => 35,
            ),
            324 => 
            array (
                'id' => 3505104,
                'name' => 'Barbosa',
                'state_id' => 35,
            ),
            325 => 
            array (
                'id' => 3505203,
                'name' => 'Bariri',
                'state_id' => 35,
            ),
            326 => 
            array (
                'id' => 3505302,
                'name' => 'Barra Bonita',
                'state_id' => 35,
            ),
            327 => 
            array (
                'id' => 3505351,
                'name' => 'Barra do Chapéu',
                'state_id' => 35,
            ),
            328 => 
            array (
                'id' => 3505401,
                'name' => 'Barra do Turvo',
                'state_id' => 35,
            ),
            329 => 
            array (
                'id' => 3505500,
                'name' => 'Barretos',
                'state_id' => 35,
            ),
            330 => 
            array (
                'id' => 3505609,
                'name' => 'Barrinha',
                'state_id' => 35,
            ),
            331 => 
            array (
                'id' => 3505708,
                'name' => 'Barueri',
                'state_id' => 35,
            ),
            332 => 
            array (
                'id' => 3505807,
                'name' => 'Bastos',
                'state_id' => 35,
            ),
            333 => 
            array (
                'id' => 3505906,
                'name' => 'Batatais',
                'state_id' => 35,
            ),
            334 => 
            array (
                'id' => 3506003,
                'name' => 'Bauru',
                'state_id' => 35,
            ),
            335 => 
            array (
                'id' => 3506102,
                'name' => 'Bebedouro',
                'state_id' => 35,
            ),
            336 => 
            array (
                'id' => 3506201,
                'name' => 'Bento de Abreu',
                'state_id' => 35,
            ),
            337 => 
            array (
                'id' => 3506300,
                'name' => 'Bernardino de Campos',
                'state_id' => 35,
            ),
            338 => 
            array (
                'id' => 3506359,
                'name' => 'Bertioga',
                'state_id' => 35,
            ),
            339 => 
            array (
                'id' => 3506409,
                'name' => 'Bilac',
                'state_id' => 35,
            ),
            340 => 
            array (
                'id' => 3506508,
                'name' => 'Birigui',
                'state_id' => 35,
            ),
            341 => 
            array (
                'id' => 3506607,
                'name' => 'Biritiba Mirim',
                'state_id' => 35,
            ),
            342 => 
            array (
                'id' => 3506706,
                'name' => 'Boa Esperança do Sul',
                'state_id' => 35,
            ),
            343 => 
            array (
                'id' => 3506805,
                'name' => 'Bocaina',
                'state_id' => 35,
            ),
            344 => 
            array (
                'id' => 3506904,
                'name' => 'Bofete',
                'state_id' => 35,
            ),
            345 => 
            array (
                'id' => 3507001,
                'name' => 'Boituva',
                'state_id' => 35,
            ),
            346 => 
            array (
                'id' => 3507100,
                'name' => 'Bom Jesus dos Perdões',
                'state_id' => 35,
            ),
            347 => 
            array (
                'id' => 3507159,
                'name' => 'Bom Sucesso de Itararé',
                'state_id' => 35,
            ),
            348 => 
            array (
                'id' => 3507209,
                'name' => 'Borá',
                'state_id' => 35,
            ),
            349 => 
            array (
                'id' => 3507308,
                'name' => 'Boracéia',
                'state_id' => 35,
            ),
            350 => 
            array (
                'id' => 3507407,
                'name' => 'Borborema',
                'state_id' => 35,
            ),
            351 => 
            array (
                'id' => 3507456,
                'name' => 'Borebi',
                'state_id' => 35,
            ),
            352 => 
            array (
                'id' => 3507506,
                'name' => 'Botucatu',
                'state_id' => 35,
            ),
            353 => 
            array (
                'id' => 3507605,
                'name' => 'Bragança Paulista',
                'state_id' => 35,
            ),
            354 => 
            array (
                'id' => 3507704,
                'name' => 'Braúna',
                'state_id' => 35,
            ),
            355 => 
            array (
                'id' => 3507753,
                'name' => 'Brejo Alegre',
                'state_id' => 35,
            ),
            356 => 
            array (
                'id' => 3507803,
                'name' => 'Brodowski',
                'state_id' => 35,
            ),
            357 => 
            array (
                'id' => 3507902,
                'name' => 'Brotas',
                'state_id' => 35,
            ),
            358 => 
            array (
                'id' => 3508009,
                'name' => 'Buri',
                'state_id' => 35,
            ),
            359 => 
            array (
                'id' => 3508108,
                'name' => 'Buritama',
                'state_id' => 35,
            ),
            360 => 
            array (
                'id' => 3508207,
                'name' => 'Buritizal',
                'state_id' => 35,
            ),
            361 => 
            array (
                'id' => 3508306,
                'name' => 'Cabrália Paulista',
                'state_id' => 35,
            ),
            362 => 
            array (
                'id' => 3508405,
                'name' => 'Cabreúva',
                'state_id' => 35,
            ),
            363 => 
            array (
                'id' => 3508504,
                'name' => 'Caçapava',
                'state_id' => 35,
            ),
            364 => 
            array (
                'id' => 3508603,
                'name' => 'Cachoeira Paulista',
                'state_id' => 35,
            ),
            365 => 
            array (
                'id' => 3508702,
                'name' => 'Caconde',
                'state_id' => 35,
            ),
            366 => 
            array (
                'id' => 3508801,
                'name' => 'Cafelândia',
                'state_id' => 35,
            ),
            367 => 
            array (
                'id' => 3508900,
                'name' => 'Caiabu',
                'state_id' => 35,
            ),
            368 => 
            array (
                'id' => 3509007,
                'name' => 'Caieiras',
                'state_id' => 35,
            ),
            369 => 
            array (
                'id' => 3509106,
                'name' => 'Caiuá',
                'state_id' => 35,
            ),
            370 => 
            array (
                'id' => 3509205,
                'name' => 'Cajamar',
                'state_id' => 35,
            ),
            371 => 
            array (
                'id' => 3509254,
                'name' => 'Cajati',
                'state_id' => 35,
            ),
            372 => 
            array (
                'id' => 3509304,
                'name' => 'Cajobi',
                'state_id' => 35,
            ),
            373 => 
            array (
                'id' => 3509403,
                'name' => 'Cajuru',
                'state_id' => 35,
            ),
            374 => 
            array (
                'id' => 3509452,
                'name' => 'Campina do Monte Alegre',
                'state_id' => 35,
            ),
            375 => 
            array (
                'id' => 3509502,
                'name' => 'Campinas',
                'state_id' => 35,
            ),
            376 => 
            array (
                'id' => 3509601,
                'name' => 'Campo Limpo Paulista',
                'state_id' => 35,
            ),
            377 => 
            array (
                'id' => 3509700,
                'name' => 'Campos do Jordão',
                'state_id' => 35,
            ),
            378 => 
            array (
                'id' => 3509809,
                'name' => 'Campos Novos Paulista',
                'state_id' => 35,
            ),
            379 => 
            array (
                'id' => 3509908,
                'name' => 'Cananéia',
                'state_id' => 35,
            ),
            380 => 
            array (
                'id' => 3509957,
                'name' => 'Canas',
                'state_id' => 35,
            ),
            381 => 
            array (
                'id' => 3510005,
                'name' => 'Cândido Mota',
                'state_id' => 35,
            ),
            382 => 
            array (
                'id' => 3510104,
                'name' => 'Cândido Rodrigues',
                'state_id' => 35,
            ),
            383 => 
            array (
                'id' => 3510153,
                'name' => 'Canitar',
                'state_id' => 35,
            ),
            384 => 
            array (
                'id' => 3510203,
                'name' => 'Capão Bonito',
                'state_id' => 35,
            ),
            385 => 
            array (
                'id' => 3510302,
                'name' => 'Capela do Alto',
                'state_id' => 35,
            ),
            386 => 
            array (
                'id' => 3510401,
                'name' => 'Capivari',
                'state_id' => 35,
            ),
            387 => 
            array (
                'id' => 3510500,
                'name' => 'Caraguatatuba',
                'state_id' => 35,
            ),
            388 => 
            array (
                'id' => 3510609,
                'name' => 'Carapicuíba',
                'state_id' => 35,
            ),
            389 => 
            array (
                'id' => 3510708,
                'name' => 'Cardoso',
                'state_id' => 35,
            ),
            390 => 
            array (
                'id' => 3510807,
                'name' => 'Casa Branca',
                'state_id' => 35,
            ),
            391 => 
            array (
                'id' => 3510906,
                'name' => 'Cássia dos Coqueiros',
                'state_id' => 35,
            ),
            392 => 
            array (
                'id' => 3511003,
                'name' => 'Castilho',
                'state_id' => 35,
            ),
            393 => 
            array (
                'id' => 3511102,
                'name' => 'Catanduva',
                'state_id' => 35,
            ),
            394 => 
            array (
                'id' => 3511201,
                'name' => 'Catiguá',
                'state_id' => 35,
            ),
            395 => 
            array (
                'id' => 3511300,
                'name' => 'Cedral',
                'state_id' => 35,
            ),
            396 => 
            array (
                'id' => 3511409,
                'name' => 'Cerqueira César',
                'state_id' => 35,
            ),
            397 => 
            array (
                'id' => 3511508,
                'name' => 'Cerquilho',
                'state_id' => 35,
            ),
            398 => 
            array (
                'id' => 3511607,
                'name' => 'Cesário Lange',
                'state_id' => 35,
            ),
            399 => 
            array (
                'id' => 3511706,
                'name' => 'Charqueada',
                'state_id' => 35,
            ),
            400 => 
            array (
                'id' => 3511904,
                'name' => 'Clementina',
                'state_id' => 35,
            ),
            401 => 
            array (
                'id' => 3512001,
                'name' => 'Colina',
                'state_id' => 35,
            ),
            402 => 
            array (
                'id' => 3512100,
                'name' => 'Colômbia',
                'state_id' => 35,
            ),
            403 => 
            array (
                'id' => 3512209,
                'name' => 'Conchal',
                'state_id' => 35,
            ),
            404 => 
            array (
                'id' => 3512308,
                'name' => 'Conchas',
                'state_id' => 35,
            ),
            405 => 
            array (
                'id' => 3512407,
                'name' => 'Cordeirópolis',
                'state_id' => 35,
            ),
            406 => 
            array (
                'id' => 3512506,
                'name' => 'Coroados',
                'state_id' => 35,
            ),
            407 => 
            array (
                'id' => 3512605,
                'name' => 'Coronel Macedo',
                'state_id' => 35,
            ),
            408 => 
            array (
                'id' => 3512704,
                'name' => 'Corumbataí',
                'state_id' => 35,
            ),
            409 => 
            array (
                'id' => 3512803,
                'name' => 'Cosmópolis',
                'state_id' => 35,
            ),
            410 => 
            array (
                'id' => 3512902,
                'name' => 'Cosmorama',
                'state_id' => 35,
            ),
            411 => 
            array (
                'id' => 3513009,
                'name' => 'Cotia',
                'state_id' => 35,
            ),
            412 => 
            array (
                'id' => 3513108,
                'name' => 'Cravinhos',
                'state_id' => 35,
            ),
            413 => 
            array (
                'id' => 3513207,
                'name' => 'Cristais Paulista',
                'state_id' => 35,
            ),
            414 => 
            array (
                'id' => 3513306,
                'name' => 'Cruzália',
                'state_id' => 35,
            ),
            415 => 
            array (
                'id' => 3513405,
                'name' => 'Cruzeiro',
                'state_id' => 35,
            ),
            416 => 
            array (
                'id' => 3513504,
                'name' => 'Cubatão',
                'state_id' => 35,
            ),
            417 => 
            array (
                'id' => 3513603,
                'name' => 'Cunha',
                'state_id' => 35,
            ),
            418 => 
            array (
                'id' => 3513702,
                'name' => 'Descalvado',
                'state_id' => 35,
            ),
            419 => 
            array (
                'id' => 3513801,
                'name' => 'Diadema',
                'state_id' => 35,
            ),
            420 => 
            array (
                'id' => 3513850,
                'name' => 'Dirce Reis',
                'state_id' => 35,
            ),
            421 => 
            array (
                'id' => 3513900,
                'name' => 'Divinolândia',
                'state_id' => 35,
            ),
            422 => 
            array (
                'id' => 3514007,
                'name' => 'Dobrada',
                'state_id' => 35,
            ),
            423 => 
            array (
                'id' => 3514106,
                'name' => 'Dois Córregos',
                'state_id' => 35,
            ),
            424 => 
            array (
                'id' => 3514205,
                'name' => 'Dolcinópolis',
                'state_id' => 35,
            ),
            425 => 
            array (
                'id' => 3514304,
                'name' => 'Dourado',
                'state_id' => 35,
            ),
            426 => 
            array (
                'id' => 3514403,
                'name' => 'Dracena',
                'state_id' => 35,
            ),
            427 => 
            array (
                'id' => 3514502,
                'name' => 'Duartina',
                'state_id' => 35,
            ),
            428 => 
            array (
                'id' => 3514601,
                'name' => 'Dumont',
                'state_id' => 35,
            ),
            429 => 
            array (
                'id' => 3514700,
                'name' => 'Echaporã',
                'state_id' => 35,
            ),
            430 => 
            array (
                'id' => 3514809,
                'name' => 'Eldorado',
                'state_id' => 35,
            ),
            431 => 
            array (
                'id' => 3514908,
                'name' => 'Elias Fausto',
                'state_id' => 35,
            ),
            432 => 
            array (
                'id' => 3514924,
                'name' => 'Elisiário',
                'state_id' => 35,
            ),
            433 => 
            array (
                'id' => 3514957,
                'name' => 'Embaúba',
                'state_id' => 35,
            ),
            434 => 
            array (
                'id' => 3515004,
                'name' => 'Embu das Artes',
                'state_id' => 35,
            ),
            435 => 
            array (
                'id' => 3515103,
                'name' => 'Embu-Guaçu',
                'state_id' => 35,
            ),
            436 => 
            array (
                'id' => 3515129,
                'name' => 'Emilianópolis',
                'state_id' => 35,
            ),
            437 => 
            array (
                'id' => 3515152,
                'name' => 'Engenheiro Coelho',
                'state_id' => 35,
            ),
            438 => 
            array (
                'id' => 3515186,
                'name' => 'Espírito Santo do Pinhal',
                'state_id' => 35,
            ),
            439 => 
            array (
                'id' => 3515194,
                'name' => 'Espírito Santo do Turvo',
                'state_id' => 35,
            ),
            440 => 
            array (
                'id' => 3515202,
                'name' => 'Estrela d\'Oeste',
                'state_id' => 35,
            ),
            441 => 
            array (
                'id' => 3515301,
                'name' => 'Estrela do Norte',
                'state_id' => 35,
            ),
            442 => 
            array (
                'id' => 3515350,
                'name' => 'Euclides da Cunha Paulista',
                'state_id' => 35,
            ),
            443 => 
            array (
                'id' => 3515400,
                'name' => 'Fartura',
                'state_id' => 35,
            ),
            444 => 
            array (
                'id' => 3515509,
                'name' => 'Fernandópolis',
                'state_id' => 35,
            ),
            445 => 
            array (
                'id' => 3515608,
                'name' => 'Fernando Prestes',
                'state_id' => 35,
            ),
            446 => 
            array (
                'id' => 3515657,
                'name' => 'Fernão',
                'state_id' => 35,
            ),
            447 => 
            array (
                'id' => 3515707,
                'name' => 'Ferraz de Vasconcelos',
                'state_id' => 35,
            ),
            448 => 
            array (
                'id' => 3515806,
                'name' => 'Flora Rica',
                'state_id' => 35,
            ),
            449 => 
            array (
                'id' => 3515905,
                'name' => 'Floreal',
                'state_id' => 35,
            ),
            450 => 
            array (
                'id' => 3516002,
                'name' => 'Flórida Paulista',
                'state_id' => 35,
            ),
            451 => 
            array (
                'id' => 3516101,
                'name' => 'Florínea',
                'state_id' => 35,
            ),
            452 => 
            array (
                'id' => 3516200,
                'name' => 'Franca',
                'state_id' => 35,
            ),
            453 => 
            array (
                'id' => 3516309,
                'name' => 'Francisco Morato',
                'state_id' => 35,
            ),
            454 => 
            array (
                'id' => 3516408,
                'name' => 'Franco da Rocha',
                'state_id' => 35,
            ),
            455 => 
            array (
                'id' => 3516507,
                'name' => 'Gabriel Monteiro',
                'state_id' => 35,
            ),
            456 => 
            array (
                'id' => 3516606,
                'name' => 'Gália',
                'state_id' => 35,
            ),
            457 => 
            array (
                'id' => 3516705,
                'name' => 'Garça',
                'state_id' => 35,
            ),
            458 => 
            array (
                'id' => 3516804,
                'name' => 'Gastão Vidigal',
                'state_id' => 35,
            ),
            459 => 
            array (
                'id' => 3516853,
                'name' => 'Gavião Peixoto',
                'state_id' => 35,
            ),
            460 => 
            array (
                'id' => 3516903,
                'name' => 'General Salgado',
                'state_id' => 35,
            ),
            461 => 
            array (
                'id' => 3517000,
                'name' => 'Getulina',
                'state_id' => 35,
            ),
            462 => 
            array (
                'id' => 3517109,
                'name' => 'Glicério',
                'state_id' => 35,
            ),
            463 => 
            array (
                'id' => 3517208,
                'name' => 'Guaiçara',
                'state_id' => 35,
            ),
            464 => 
            array (
                'id' => 3517307,
                'name' => 'Guaimbê',
                'state_id' => 35,
            ),
            465 => 
            array (
                'id' => 3517406,
                'name' => 'Guaíra',
                'state_id' => 35,
            ),
            466 => 
            array (
                'id' => 3517505,
                'name' => 'Guapiaçu',
                'state_id' => 35,
            ),
            467 => 
            array (
                'id' => 3517604,
                'name' => 'Guapiara',
                'state_id' => 35,
            ),
            468 => 
            array (
                'id' => 3517703,
                'name' => 'Guará',
                'state_id' => 35,
            ),
            469 => 
            array (
                'id' => 3517802,
                'name' => 'Guaraçaí',
                'state_id' => 35,
            ),
            470 => 
            array (
                'id' => 3517901,
                'name' => 'Guaraci',
                'state_id' => 35,
            ),
            471 => 
            array (
                'id' => 3518008,
                'name' => 'Guarani d\'Oeste',
                'state_id' => 35,
            ),
            472 => 
            array (
                'id' => 3518107,
                'name' => 'Guarantã',
                'state_id' => 35,
            ),
            473 => 
            array (
                'id' => 3518206,
                'name' => 'Guararapes',
                'state_id' => 35,
            ),
            474 => 
            array (
                'id' => 3518305,
                'name' => 'Guararema',
                'state_id' => 35,
            ),
            475 => 
            array (
                'id' => 3518404,
                'name' => 'Guaratinguetá',
                'state_id' => 35,
            ),
            476 => 
            array (
                'id' => 3518503,
                'name' => 'Guareí',
                'state_id' => 35,
            ),
            477 => 
            array (
                'id' => 3518602,
                'name' => 'Guariba',
                'state_id' => 35,
            ),
            478 => 
            array (
                'id' => 3518701,
                'name' => 'Guarujá',
                'state_id' => 35,
            ),
            479 => 
            array (
                'id' => 3518800,
                'name' => 'Guarulhos',
                'state_id' => 35,
            ),
            480 => 
            array (
                'id' => 3518859,
                'name' => 'Guatapará',
                'state_id' => 35,
            ),
            481 => 
            array (
                'id' => 3518909,
                'name' => 'Guzolândia',
                'state_id' => 35,
            ),
            482 => 
            array (
                'id' => 3519006,
                'name' => 'Herculândia',
                'state_id' => 35,
            ),
            483 => 
            array (
                'id' => 3519055,
                'name' => 'Holambra',
                'state_id' => 35,
            ),
            484 => 
            array (
                'id' => 3519071,
                'name' => 'Hortolândia',
                'state_id' => 35,
            ),
            485 => 
            array (
                'id' => 3519105,
                'name' => 'Iacanga',
                'state_id' => 35,
            ),
            486 => 
            array (
                'id' => 3519204,
                'name' => 'Iacri',
                'state_id' => 35,
            ),
            487 => 
            array (
                'id' => 3519253,
                'name' => 'Iaras',
                'state_id' => 35,
            ),
            488 => 
            array (
                'id' => 3519303,
                'name' => 'Ibaté',
                'state_id' => 35,
            ),
            489 => 
            array (
                'id' => 3519402,
                'name' => 'Ibirá',
                'state_id' => 35,
            ),
            490 => 
            array (
                'id' => 3519501,
                'name' => 'Ibirarema',
                'state_id' => 35,
            ),
            491 => 
            array (
                'id' => 3519600,
                'name' => 'Ibitinga',
                'state_id' => 35,
            ),
            492 => 
            array (
                'id' => 3519709,
                'name' => 'Ibiúna',
                'state_id' => 35,
            ),
            493 => 
            array (
                'id' => 3519808,
                'name' => 'Icém',
                'state_id' => 35,
            ),
            494 => 
            array (
                'id' => 3519907,
                'name' => 'Iepê',
                'state_id' => 35,
            ),
            495 => 
            array (
                'id' => 3520004,
                'name' => 'Igaraçu do Tietê',
                'state_id' => 35,
            ),
            496 => 
            array (
                'id' => 3520103,
                'name' => 'Igarapava',
                'state_id' => 35,
            ),
            497 => 
            array (
                'id' => 3520202,
                'name' => 'Igaratá',
                'state_id' => 35,
            ),
            498 => 
            array (
                'id' => 3520301,
                'name' => 'Iguape',
                'state_id' => 35,
            ),
            499 => 
            array (
                'id' => 3520400,
                'name' => 'Ilhabela',
                'state_id' => 35,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 3520426,
                'name' => 'Ilha Comprida',
                'state_id' => 35,
            ),
            1 => 
            array (
                'id' => 3520442,
                'name' => 'Ilha Solteira',
                'state_id' => 35,
            ),
            2 => 
            array (
                'id' => 3520509,
                'name' => 'Indaiatuba',
                'state_id' => 35,
            ),
            3 => 
            array (
                'id' => 3520608,
                'name' => 'Indiana',
                'state_id' => 35,
            ),
            4 => 
            array (
                'id' => 3520707,
                'name' => 'Indiaporã',
                'state_id' => 35,
            ),
            5 => 
            array (
                'id' => 3520806,
                'name' => 'Inúbia Paulista',
                'state_id' => 35,
            ),
            6 => 
            array (
                'id' => 3520905,
                'name' => 'Ipaussu',
                'state_id' => 35,
            ),
            7 => 
            array (
                'id' => 3521002,
                'name' => 'Iperó',
                'state_id' => 35,
            ),
            8 => 
            array (
                'id' => 3521101,
                'name' => 'Ipeúna',
                'state_id' => 35,
            ),
            9 => 
            array (
                'id' => 3521150,
                'name' => 'Ipiguá',
                'state_id' => 35,
            ),
            10 => 
            array (
                'id' => 3521200,
                'name' => 'Iporanga',
                'state_id' => 35,
            ),
            11 => 
            array (
                'id' => 3521309,
                'name' => 'Ipuã',
                'state_id' => 35,
            ),
            12 => 
            array (
                'id' => 3521408,
                'name' => 'Iracemápolis',
                'state_id' => 35,
            ),
            13 => 
            array (
                'id' => 3521507,
                'name' => 'Irapuã',
                'state_id' => 35,
            ),
            14 => 
            array (
                'id' => 3521606,
                'name' => 'Irapuru',
                'state_id' => 35,
            ),
            15 => 
            array (
                'id' => 3521705,
                'name' => 'Itaberá',
                'state_id' => 35,
            ),
            16 => 
            array (
                'id' => 3521804,
                'name' => 'Itaí',
                'state_id' => 35,
            ),
            17 => 
            array (
                'id' => 3521903,
                'name' => 'Itajobi',
                'state_id' => 35,
            ),
            18 => 
            array (
                'id' => 3522000,
                'name' => 'Itaju',
                'state_id' => 35,
            ),
            19 => 
            array (
                'id' => 3522109,
                'name' => 'Itanhaém',
                'state_id' => 35,
            ),
            20 => 
            array (
                'id' => 3522158,
                'name' => 'Itaoca',
                'state_id' => 35,
            ),
            21 => 
            array (
                'id' => 3522208,
                'name' => 'Itapecerica da Serra',
                'state_id' => 35,
            ),
            22 => 
            array (
                'id' => 3522307,
                'name' => 'Itapetininga',
                'state_id' => 35,
            ),
            23 => 
            array (
                'id' => 3522406,
                'name' => 'Itapeva',
                'state_id' => 35,
            ),
            24 => 
            array (
                'id' => 3522505,
                'name' => 'Itapevi',
                'state_id' => 35,
            ),
            25 => 
            array (
                'id' => 3522604,
                'name' => 'Itapira',
                'state_id' => 35,
            ),
            26 => 
            array (
                'id' => 3522653,
                'name' => 'Itapirapuã Paulista',
                'state_id' => 35,
            ),
            27 => 
            array (
                'id' => 3522703,
                'name' => 'Itápolis',
                'state_id' => 35,
            ),
            28 => 
            array (
                'id' => 3522802,
                'name' => 'Itaporanga',
                'state_id' => 35,
            ),
            29 => 
            array (
                'id' => 3522901,
                'name' => 'Itapuí',
                'state_id' => 35,
            ),
            30 => 
            array (
                'id' => 3523008,
                'name' => 'Itapura',
                'state_id' => 35,
            ),
            31 => 
            array (
                'id' => 3523107,
                'name' => 'Itaquaquecetuba',
                'state_id' => 35,
            ),
            32 => 
            array (
                'id' => 3523206,
                'name' => 'Itararé',
                'state_id' => 35,
            ),
            33 => 
            array (
                'id' => 3523305,
                'name' => 'Itariri',
                'state_id' => 35,
            ),
            34 => 
            array (
                'id' => 3523404,
                'name' => 'Itatiba',
                'state_id' => 35,
            ),
            35 => 
            array (
                'id' => 3523503,
                'name' => 'Itatinga',
                'state_id' => 35,
            ),
            36 => 
            array (
                'id' => 3523602,
                'name' => 'Itirapina',
                'state_id' => 35,
            ),
            37 => 
            array (
                'id' => 3523701,
                'name' => 'Itirapuã',
                'state_id' => 35,
            ),
            38 => 
            array (
                'id' => 3523800,
                'name' => 'Itobi',
                'state_id' => 35,
            ),
            39 => 
            array (
                'id' => 3523909,
                'name' => 'Itu',
                'state_id' => 35,
            ),
            40 => 
            array (
                'id' => 3524006,
                'name' => 'Itupeva',
                'state_id' => 35,
            ),
            41 => 
            array (
                'id' => 3524105,
                'name' => 'Ituverava',
                'state_id' => 35,
            ),
            42 => 
            array (
                'id' => 3524204,
                'name' => 'Jaborandi',
                'state_id' => 35,
            ),
            43 => 
            array (
                'id' => 3524303,
                'name' => 'Jaboticabal',
                'state_id' => 35,
            ),
            44 => 
            array (
                'id' => 3524402,
                'name' => 'Jacareí',
                'state_id' => 35,
            ),
            45 => 
            array (
                'id' => 3524501,
                'name' => 'Jaci',
                'state_id' => 35,
            ),
            46 => 
            array (
                'id' => 3524600,
                'name' => 'Jacupiranga',
                'state_id' => 35,
            ),
            47 => 
            array (
                'id' => 3524709,
                'name' => 'Jaguariúna',
                'state_id' => 35,
            ),
            48 => 
            array (
                'id' => 3524808,
                'name' => 'Jales',
                'state_id' => 35,
            ),
            49 => 
            array (
                'id' => 3524907,
                'name' => 'Jambeiro',
                'state_id' => 35,
            ),
            50 => 
            array (
                'id' => 3525003,
                'name' => 'Jandira',
                'state_id' => 35,
            ),
            51 => 
            array (
                'id' => 3525102,
                'name' => 'Jardinópolis',
                'state_id' => 35,
            ),
            52 => 
            array (
                'id' => 3525201,
                'name' => 'Jarinu',
                'state_id' => 35,
            ),
            53 => 
            array (
                'id' => 3525300,
                'name' => 'Jaú',
                'state_id' => 35,
            ),
            54 => 
            array (
                'id' => 3525409,
                'name' => 'Jeriquara',
                'state_id' => 35,
            ),
            55 => 
            array (
                'id' => 3525508,
                'name' => 'Joanópolis',
                'state_id' => 35,
            ),
            56 => 
            array (
                'id' => 3525607,
                'name' => 'João Ramalho',
                'state_id' => 35,
            ),
            57 => 
            array (
                'id' => 3525706,
                'name' => 'José Bonifácio',
                'state_id' => 35,
            ),
            58 => 
            array (
                'id' => 3525805,
                'name' => 'Júlio Mesquita',
                'state_id' => 35,
            ),
            59 => 
            array (
                'id' => 3525854,
                'name' => 'Jumirim',
                'state_id' => 35,
            ),
            60 => 
            array (
                'id' => 3525904,
                'name' => 'Jundiaí',
                'state_id' => 35,
            ),
            61 => 
            array (
                'id' => 3526001,
                'name' => 'Junqueirópolis',
                'state_id' => 35,
            ),
            62 => 
            array (
                'id' => 3526100,
                'name' => 'Juquiá',
                'state_id' => 35,
            ),
            63 => 
            array (
                'id' => 3526209,
                'name' => 'Juquitiba',
                'state_id' => 35,
            ),
            64 => 
            array (
                'id' => 3526308,
                'name' => 'Lagoinha',
                'state_id' => 35,
            ),
            65 => 
            array (
                'id' => 3526407,
                'name' => 'Laranjal Paulista',
                'state_id' => 35,
            ),
            66 => 
            array (
                'id' => 3526506,
                'name' => 'Lavínia',
                'state_id' => 35,
            ),
            67 => 
            array (
                'id' => 3526605,
                'name' => 'Lavrinhas',
                'state_id' => 35,
            ),
            68 => 
            array (
                'id' => 3526704,
                'name' => 'Leme',
                'state_id' => 35,
            ),
            69 => 
            array (
                'id' => 3526803,
                'name' => 'Lençóis Paulista',
                'state_id' => 35,
            ),
            70 => 
            array (
                'id' => 3526902,
                'name' => 'Limeira',
                'state_id' => 35,
            ),
            71 => 
            array (
                'id' => 3527009,
                'name' => 'Lindóia',
                'state_id' => 35,
            ),
            72 => 
            array (
                'id' => 3527108,
                'name' => 'Lins',
                'state_id' => 35,
            ),
            73 => 
            array (
                'id' => 3527207,
                'name' => 'Lorena',
                'state_id' => 35,
            ),
            74 => 
            array (
                'id' => 3527256,
                'name' => 'Lourdes',
                'state_id' => 35,
            ),
            75 => 
            array (
                'id' => 3527306,
                'name' => 'Louveira',
                'state_id' => 35,
            ),
            76 => 
            array (
                'id' => 3527405,
                'name' => 'Lucélia',
                'state_id' => 35,
            ),
            77 => 
            array (
                'id' => 3527504,
                'name' => 'Lucianópolis',
                'state_id' => 35,
            ),
            78 => 
            array (
                'id' => 3527603,
                'name' => 'Luís Antônio',
                'state_id' => 35,
            ),
            79 => 
            array (
                'id' => 3527702,
                'name' => 'Luiziânia',
                'state_id' => 35,
            ),
            80 => 
            array (
                'id' => 3527801,
                'name' => 'Lupércio',
                'state_id' => 35,
            ),
            81 => 
            array (
                'id' => 3527900,
                'name' => 'Lutécia',
                'state_id' => 35,
            ),
            82 => 
            array (
                'id' => 3528007,
                'name' => 'Macatuba',
                'state_id' => 35,
            ),
            83 => 
            array (
                'id' => 3528106,
                'name' => 'Macaubal',
                'state_id' => 35,
            ),
            84 => 
            array (
                'id' => 3528205,
                'name' => 'Macedônia',
                'state_id' => 35,
            ),
            85 => 
            array (
                'id' => 3528304,
                'name' => 'Magda',
                'state_id' => 35,
            ),
            86 => 
            array (
                'id' => 3528403,
                'name' => 'Mairinque',
                'state_id' => 35,
            ),
            87 => 
            array (
                'id' => 3528502,
                'name' => 'Mairiporã',
                'state_id' => 35,
            ),
            88 => 
            array (
                'id' => 3528601,
                'name' => 'Manduri',
                'state_id' => 35,
            ),
            89 => 
            array (
                'id' => 3528700,
                'name' => 'Marabá Paulista',
                'state_id' => 35,
            ),
            90 => 
            array (
                'id' => 3528809,
                'name' => 'Maracaí',
                'state_id' => 35,
            ),
            91 => 
            array (
                'id' => 3528858,
                'name' => 'Marapoama',
                'state_id' => 35,
            ),
            92 => 
            array (
                'id' => 3528908,
                'name' => 'Mariápolis',
                'state_id' => 35,
            ),
            93 => 
            array (
                'id' => 3529005,
                'name' => 'Marília',
                'state_id' => 35,
            ),
            94 => 
            array (
                'id' => 3529104,
                'name' => 'Marinópolis',
                'state_id' => 35,
            ),
            95 => 
            array (
                'id' => 3529203,
                'name' => 'Martinópolis',
                'state_id' => 35,
            ),
            96 => 
            array (
                'id' => 3529302,
                'name' => 'Matão',
                'state_id' => 35,
            ),
            97 => 
            array (
                'id' => 3529401,
                'name' => 'Mauá',
                'state_id' => 35,
            ),
            98 => 
            array (
                'id' => 3529500,
                'name' => 'Mendonça',
                'state_id' => 35,
            ),
            99 => 
            array (
                'id' => 3529609,
                'name' => 'Meridiano',
                'state_id' => 35,
            ),
            100 => 
            array (
                'id' => 3529658,
                'name' => 'Mesópolis',
                'state_id' => 35,
            ),
            101 => 
            array (
                'id' => 3529708,
                'name' => 'Miguelópolis',
                'state_id' => 35,
            ),
            102 => 
            array (
                'id' => 3529807,
                'name' => 'Mineiros do Tietê',
                'state_id' => 35,
            ),
            103 => 
            array (
                'id' => 3529906,
                'name' => 'Miracatu',
                'state_id' => 35,
            ),
            104 => 
            array (
                'id' => 3530003,
                'name' => 'Mira Estrela',
                'state_id' => 35,
            ),
            105 => 
            array (
                'id' => 3530102,
                'name' => 'Mirandópolis',
                'state_id' => 35,
            ),
            106 => 
            array (
                'id' => 3530201,
                'name' => 'Mirante do Paranapanema',
                'state_id' => 35,
            ),
            107 => 
            array (
                'id' => 3530300,
                'name' => 'Mirassol',
                'state_id' => 35,
            ),
            108 => 
            array (
                'id' => 3530409,
                'name' => 'Mirassolândia',
                'state_id' => 35,
            ),
            109 => 
            array (
                'id' => 3530508,
                'name' => 'Mococa',
                'state_id' => 35,
            ),
            110 => 
            array (
                'id' => 3530607,
                'name' => 'Mogi das Cruzes',
                'state_id' => 35,
            ),
            111 => 
            array (
                'id' => 3530706,
                'name' => 'Mogi Guaçu',
                'state_id' => 35,
            ),
            112 => 
            array (
                'id' => 3530805,
                'name' => 'Mogi Mirim',
                'state_id' => 35,
            ),
            113 => 
            array (
                'id' => 3530904,
                'name' => 'Mombuca',
                'state_id' => 35,
            ),
            114 => 
            array (
                'id' => 3531001,
                'name' => 'Monções',
                'state_id' => 35,
            ),
            115 => 
            array (
                'id' => 3531100,
                'name' => 'Mongaguá',
                'state_id' => 35,
            ),
            116 => 
            array (
                'id' => 3531209,
                'name' => 'Monte Alegre do Sul',
                'state_id' => 35,
            ),
            117 => 
            array (
                'id' => 3531308,
                'name' => 'Monte Alto',
                'state_id' => 35,
            ),
            118 => 
            array (
                'id' => 3531407,
                'name' => 'Monte Aprazível',
                'state_id' => 35,
            ),
            119 => 
            array (
                'id' => 3531506,
                'name' => 'Monte Azul Paulista',
                'state_id' => 35,
            ),
            120 => 
            array (
                'id' => 3531605,
                'name' => 'Monte Castelo',
                'state_id' => 35,
            ),
            121 => 
            array (
                'id' => 3531704,
                'name' => 'Monteiro Lobato',
                'state_id' => 35,
            ),
            122 => 
            array (
                'id' => 3531803,
                'name' => 'Monte Mor',
                'state_id' => 35,
            ),
            123 => 
            array (
                'id' => 3531902,
                'name' => 'Morro Agudo',
                'state_id' => 35,
            ),
            124 => 
            array (
                'id' => 3532009,
                'name' => 'Morungaba',
                'state_id' => 35,
            ),
            125 => 
            array (
                'id' => 3532058,
                'name' => 'Motuca',
                'state_id' => 35,
            ),
            126 => 
            array (
                'id' => 3532108,
                'name' => 'Murutinga do Sul',
                'state_id' => 35,
            ),
            127 => 
            array (
                'id' => 3532157,
                'name' => 'Nantes',
                'state_id' => 35,
            ),
            128 => 
            array (
                'id' => 3532207,
                'name' => 'Narandiba',
                'state_id' => 35,
            ),
            129 => 
            array (
                'id' => 3532306,
                'name' => 'Natividade da Serra',
                'state_id' => 35,
            ),
            130 => 
            array (
                'id' => 3532405,
                'name' => 'Nazaré Paulista',
                'state_id' => 35,
            ),
            131 => 
            array (
                'id' => 3532504,
                'name' => 'Neves Paulista',
                'state_id' => 35,
            ),
            132 => 
            array (
                'id' => 3532603,
                'name' => 'Nhandeara',
                'state_id' => 35,
            ),
            133 => 
            array (
                'id' => 3532702,
                'name' => 'Nipoã',
                'state_id' => 35,
            ),
            134 => 
            array (
                'id' => 3532801,
                'name' => 'Nova Aliança',
                'state_id' => 35,
            ),
            135 => 
            array (
                'id' => 3532827,
                'name' => 'Nova Campina',
                'state_id' => 35,
            ),
            136 => 
            array (
                'id' => 3532843,
                'name' => 'Nova Canaã Paulista',
                'state_id' => 35,
            ),
            137 => 
            array (
                'id' => 3532868,
                'name' => 'Nova Castilho',
                'state_id' => 35,
            ),
            138 => 
            array (
                'id' => 3532900,
                'name' => 'Nova Europa',
                'state_id' => 35,
            ),
            139 => 
            array (
                'id' => 3533007,
                'name' => 'Nova Granada',
                'state_id' => 35,
            ),
            140 => 
            array (
                'id' => 3533106,
                'name' => 'Nova Guataporanga',
                'state_id' => 35,
            ),
            141 => 
            array (
                'id' => 3533205,
                'name' => 'Nova Independência',
                'state_id' => 35,
            ),
            142 => 
            array (
                'id' => 3533254,
                'name' => 'Novais',
                'state_id' => 35,
            ),
            143 => 
            array (
                'id' => 3533304,
                'name' => 'Nova Luzitânia',
                'state_id' => 35,
            ),
            144 => 
            array (
                'id' => 3533403,
                'name' => 'Nova Odessa',
                'state_id' => 35,
            ),
            145 => 
            array (
                'id' => 3533502,
                'name' => 'Novo Horizonte',
                'state_id' => 35,
            ),
            146 => 
            array (
                'id' => 3533601,
                'name' => 'Nuporanga',
                'state_id' => 35,
            ),
            147 => 
            array (
                'id' => 3533700,
                'name' => 'Ocauçu',
                'state_id' => 35,
            ),
            148 => 
            array (
                'id' => 3533809,
                'name' => 'Óleo',
                'state_id' => 35,
            ),
            149 => 
            array (
                'id' => 3533908,
                'name' => 'Olímpia',
                'state_id' => 35,
            ),
            150 => 
            array (
                'id' => 3534005,
                'name' => 'Onda Verde',
                'state_id' => 35,
            ),
            151 => 
            array (
                'id' => 3534104,
                'name' => 'Oriente',
                'state_id' => 35,
            ),
            152 => 
            array (
                'id' => 3534203,
                'name' => 'Orindiúva',
                'state_id' => 35,
            ),
            153 => 
            array (
                'id' => 3534302,
                'name' => 'Orlândia',
                'state_id' => 35,
            ),
            154 => 
            array (
                'id' => 3534401,
                'name' => 'Osasco',
                'state_id' => 35,
            ),
            155 => 
            array (
                'id' => 3534500,
                'name' => 'Oscar Bressane',
                'state_id' => 35,
            ),
            156 => 
            array (
                'id' => 3534609,
                'name' => 'Osvaldo Cruz',
                'state_id' => 35,
            ),
            157 => 
            array (
                'id' => 3534708,
                'name' => 'Ourinhos',
                'state_id' => 35,
            ),
            158 => 
            array (
                'id' => 3534757,
                'name' => 'Ouroeste',
                'state_id' => 35,
            ),
            159 => 
            array (
                'id' => 3534807,
                'name' => 'Ouro Verde',
                'state_id' => 35,
            ),
            160 => 
            array (
                'id' => 3534906,
                'name' => 'Pacaembu',
                'state_id' => 35,
            ),
            161 => 
            array (
                'id' => 3535002,
                'name' => 'Palestina',
                'state_id' => 35,
            ),
            162 => 
            array (
                'id' => 3535101,
                'name' => 'Palmares Paulista',
                'state_id' => 35,
            ),
            163 => 
            array (
                'id' => 3535200,
                'name' => 'Palmeira d\'Oeste',
                'state_id' => 35,
            ),
            164 => 
            array (
                'id' => 3535309,
                'name' => 'Palmital',
                'state_id' => 35,
            ),
            165 => 
            array (
                'id' => 3535408,
                'name' => 'Panorama',
                'state_id' => 35,
            ),
            166 => 
            array (
                'id' => 3535507,
                'name' => 'Paraguaçu Paulista',
                'state_id' => 35,
            ),
            167 => 
            array (
                'id' => 3535606,
                'name' => 'Paraibuna',
                'state_id' => 35,
            ),
            168 => 
            array (
                'id' => 3535705,
                'name' => 'Paraíso',
                'state_id' => 35,
            ),
            169 => 
            array (
                'id' => 3535804,
                'name' => 'Paranapanema',
                'state_id' => 35,
            ),
            170 => 
            array (
                'id' => 3535903,
                'name' => 'Paranapuã',
                'state_id' => 35,
            ),
            171 => 
            array (
                'id' => 3536000,
                'name' => 'Parapuã',
                'state_id' => 35,
            ),
            172 => 
            array (
                'id' => 3536109,
                'name' => 'Pardinho',
                'state_id' => 35,
            ),
            173 => 
            array (
                'id' => 3536208,
                'name' => 'Pariquera-Açu',
                'state_id' => 35,
            ),
            174 => 
            array (
                'id' => 3536257,
                'name' => 'Parisi',
                'state_id' => 35,
            ),
            175 => 
            array (
                'id' => 3536307,
                'name' => 'Patrocínio Paulista',
                'state_id' => 35,
            ),
            176 => 
            array (
                'id' => 3536406,
                'name' => 'Paulicéia',
                'state_id' => 35,
            ),
            177 => 
            array (
                'id' => 3536505,
                'name' => 'Paulínia',
                'state_id' => 35,
            ),
            178 => 
            array (
                'id' => 3536570,
                'name' => 'Paulistânia',
                'state_id' => 35,
            ),
            179 => 
            array (
                'id' => 3536604,
                'name' => 'Paulo de Faria',
                'state_id' => 35,
            ),
            180 => 
            array (
                'id' => 3536703,
                'name' => 'Pederneiras',
                'state_id' => 35,
            ),
            181 => 
            array (
                'id' => 3536802,
                'name' => 'Pedra Bela',
                'state_id' => 35,
            ),
            182 => 
            array (
                'id' => 3536901,
                'name' => 'Pedranópolis',
                'state_id' => 35,
            ),
            183 => 
            array (
                'id' => 3537008,
                'name' => 'Pedregulho',
                'state_id' => 35,
            ),
            184 => 
            array (
                'id' => 3537107,
                'name' => 'Pedreira',
                'state_id' => 35,
            ),
            185 => 
            array (
                'id' => 3537156,
                'name' => 'Pedrinhas Paulista',
                'state_id' => 35,
            ),
            186 => 
            array (
                'id' => 3537206,
                'name' => 'Pedro de Toledo',
                'state_id' => 35,
            ),
            187 => 
            array (
                'id' => 3537305,
                'name' => 'Penápolis',
                'state_id' => 35,
            ),
            188 => 
            array (
                'id' => 3537404,
                'name' => 'Pereira Barreto',
                'state_id' => 35,
            ),
            189 => 
            array (
                'id' => 3537503,
                'name' => 'Pereiras',
                'state_id' => 35,
            ),
            190 => 
            array (
                'id' => 3537602,
                'name' => 'Peruíbe',
                'state_id' => 35,
            ),
            191 => 
            array (
                'id' => 3537701,
                'name' => 'Piacatu',
                'state_id' => 35,
            ),
            192 => 
            array (
                'id' => 3537800,
                'name' => 'Piedade',
                'state_id' => 35,
            ),
            193 => 
            array (
                'id' => 3537909,
                'name' => 'Pilar do Sul',
                'state_id' => 35,
            ),
            194 => 
            array (
                'id' => 3538006,
                'name' => 'Pindamonhangaba',
                'state_id' => 35,
            ),
            195 => 
            array (
                'id' => 3538105,
                'name' => 'Pindorama',
                'state_id' => 35,
            ),
            196 => 
            array (
                'id' => 3538204,
                'name' => 'Pinhalzinho',
                'state_id' => 35,
            ),
            197 => 
            array (
                'id' => 3538303,
                'name' => 'Piquerobi',
                'state_id' => 35,
            ),
            198 => 
            array (
                'id' => 3538501,
                'name' => 'Piquete',
                'state_id' => 35,
            ),
            199 => 
            array (
                'id' => 3538600,
                'name' => 'Piracaia',
                'state_id' => 35,
            ),
            200 => 
            array (
                'id' => 3538709,
                'name' => 'Piracicaba',
                'state_id' => 35,
            ),
            201 => 
            array (
                'id' => 3538808,
                'name' => 'Piraju',
                'state_id' => 35,
            ),
            202 => 
            array (
                'id' => 3538907,
                'name' => 'Pirajuí',
                'state_id' => 35,
            ),
            203 => 
            array (
                'id' => 3539004,
                'name' => 'Pirangi',
                'state_id' => 35,
            ),
            204 => 
            array (
                'id' => 3539103,
                'name' => 'Pirapora do Bom Jesus',
                'state_id' => 35,
            ),
            205 => 
            array (
                'id' => 3539202,
                'name' => 'Pirapozinho',
                'state_id' => 35,
            ),
            206 => 
            array (
                'id' => 3539301,
                'name' => 'Pirassununga',
                'state_id' => 35,
            ),
            207 => 
            array (
                'id' => 3539400,
                'name' => 'Piratininga',
                'state_id' => 35,
            ),
            208 => 
            array (
                'id' => 3539509,
                'name' => 'Pitangueiras',
                'state_id' => 35,
            ),
            209 => 
            array (
                'id' => 3539608,
                'name' => 'Planalto',
                'state_id' => 35,
            ),
            210 => 
            array (
                'id' => 3539707,
                'name' => 'Platina',
                'state_id' => 35,
            ),
            211 => 
            array (
                'id' => 3539806,
                'name' => 'Poá',
                'state_id' => 35,
            ),
            212 => 
            array (
                'id' => 3539905,
                'name' => 'Poloni',
                'state_id' => 35,
            ),
            213 => 
            array (
                'id' => 3540002,
                'name' => 'Pompéia',
                'state_id' => 35,
            ),
            214 => 
            array (
                'id' => 3540101,
                'name' => 'Pongaí',
                'state_id' => 35,
            ),
            215 => 
            array (
                'id' => 3540200,
                'name' => 'Pontal',
                'state_id' => 35,
            ),
            216 => 
            array (
                'id' => 3540259,
                'name' => 'Pontalinda',
                'state_id' => 35,
            ),
            217 => 
            array (
                'id' => 3540309,
                'name' => 'Pontes Gestal',
                'state_id' => 35,
            ),
            218 => 
            array (
                'id' => 3540408,
                'name' => 'Populina',
                'state_id' => 35,
            ),
            219 => 
            array (
                'id' => 3540507,
                'name' => 'Porangaba',
                'state_id' => 35,
            ),
            220 => 
            array (
                'id' => 3540606,
                'name' => 'Porto Feliz',
                'state_id' => 35,
            ),
            221 => 
            array (
                'id' => 3540705,
                'name' => 'Porto Ferreira',
                'state_id' => 35,
            ),
            222 => 
            array (
                'id' => 3540754,
                'name' => 'Potim',
                'state_id' => 35,
            ),
            223 => 
            array (
                'id' => 3540804,
                'name' => 'Potirendaba',
                'state_id' => 35,
            ),
            224 => 
            array (
                'id' => 3540853,
                'name' => 'Pracinha',
                'state_id' => 35,
            ),
            225 => 
            array (
                'id' => 3540903,
                'name' => 'Pradópolis',
                'state_id' => 35,
            ),
            226 => 
            array (
                'id' => 3541000,
                'name' => 'Praia Grande',
                'state_id' => 35,
            ),
            227 => 
            array (
                'id' => 3541059,
                'name' => 'Pratânia',
                'state_id' => 35,
            ),
            228 => 
            array (
                'id' => 3541109,
                'name' => 'Presidente Alves',
                'state_id' => 35,
            ),
            229 => 
            array (
                'id' => 3541208,
                'name' => 'Presidente Bernardes',
                'state_id' => 35,
            ),
            230 => 
            array (
                'id' => 3541307,
                'name' => 'Presidente Epitácio',
                'state_id' => 35,
            ),
            231 => 
            array (
                'id' => 3541406,
                'name' => 'Presidente Prudente',
                'state_id' => 35,
            ),
            232 => 
            array (
                'id' => 3541505,
                'name' => 'Presidente Venceslau',
                'state_id' => 35,
            ),
            233 => 
            array (
                'id' => 3541604,
                'name' => 'Promissão',
                'state_id' => 35,
            ),
            234 => 
            array (
                'id' => 3541653,
                'name' => 'Quadra',
                'state_id' => 35,
            ),
            235 => 
            array (
                'id' => 3541703,
                'name' => 'Quatá',
                'state_id' => 35,
            ),
            236 => 
            array (
                'id' => 3541802,
                'name' => 'Queiroz',
                'state_id' => 35,
            ),
            237 => 
            array (
                'id' => 3541901,
                'name' => 'Queluz',
                'state_id' => 35,
            ),
            238 => 
            array (
                'id' => 3542008,
                'name' => 'Quintana',
                'state_id' => 35,
            ),
            239 => 
            array (
                'id' => 3542107,
                'name' => 'Rafard',
                'state_id' => 35,
            ),
            240 => 
            array (
                'id' => 3542206,
                'name' => 'Rancharia',
                'state_id' => 35,
            ),
            241 => 
            array (
                'id' => 3542305,
                'name' => 'Redenção da Serra',
                'state_id' => 35,
            ),
            242 => 
            array (
                'id' => 3542404,
                'name' => 'Regente Feijó',
                'state_id' => 35,
            ),
            243 => 
            array (
                'id' => 3542503,
                'name' => 'Reginópolis',
                'state_id' => 35,
            ),
            244 => 
            array (
                'id' => 3542602,
                'name' => 'Registro',
                'state_id' => 35,
            ),
            245 => 
            array (
                'id' => 3542701,
                'name' => 'Restinga',
                'state_id' => 35,
            ),
            246 => 
            array (
                'id' => 3542800,
                'name' => 'Ribeira',
                'state_id' => 35,
            ),
            247 => 
            array (
                'id' => 3542909,
                'name' => 'Ribeirão Bonito',
                'state_id' => 35,
            ),
            248 => 
            array (
                'id' => 3543006,
                'name' => 'Ribeirão Branco',
                'state_id' => 35,
            ),
            249 => 
            array (
                'id' => 3543105,
                'name' => 'Ribeirão Corrente',
                'state_id' => 35,
            ),
            250 => 
            array (
                'id' => 3543204,
                'name' => 'Ribeirão do Sul',
                'state_id' => 35,
            ),
            251 => 
            array (
                'id' => 3543238,
                'name' => 'Ribeirão dos Índios',
                'state_id' => 35,
            ),
            252 => 
            array (
                'id' => 3543253,
                'name' => 'Ribeirão Grande',
                'state_id' => 35,
            ),
            253 => 
            array (
                'id' => 3543303,
                'name' => 'Ribeirão Pires',
                'state_id' => 35,
            ),
            254 => 
            array (
                'id' => 3543402,
                'name' => 'Ribeirão Preto',
                'state_id' => 35,
            ),
            255 => 
            array (
                'id' => 3543501,
                'name' => 'Riversul',
                'state_id' => 35,
            ),
            256 => 
            array (
                'id' => 3543600,
                'name' => 'Rifaina',
                'state_id' => 35,
            ),
            257 => 
            array (
                'id' => 3543709,
                'name' => 'Rincão',
                'state_id' => 35,
            ),
            258 => 
            array (
                'id' => 3543808,
                'name' => 'Rinópolis',
                'state_id' => 35,
            ),
            259 => 
            array (
                'id' => 3543907,
                'name' => 'Rio Claro',
                'state_id' => 35,
            ),
            260 => 
            array (
                'id' => 3544004,
                'name' => 'Rio das Pedras',
                'state_id' => 35,
            ),
            261 => 
            array (
                'id' => 3544103,
                'name' => 'Rio Grande da Serra',
                'state_id' => 35,
            ),
            262 => 
            array (
                'id' => 3544202,
                'name' => 'Riolândia',
                'state_id' => 35,
            ),
            263 => 
            array (
                'id' => 3544251,
                'name' => 'Rosana',
                'state_id' => 35,
            ),
            264 => 
            array (
                'id' => 3544301,
                'name' => 'Roseira',
                'state_id' => 35,
            ),
            265 => 
            array (
                'id' => 3544400,
                'name' => 'Rubiácea',
                'state_id' => 35,
            ),
            266 => 
            array (
                'id' => 3544509,
                'name' => 'Rubinéia',
                'state_id' => 35,
            ),
            267 => 
            array (
                'id' => 3544608,
                'name' => 'Sabino',
                'state_id' => 35,
            ),
            268 => 
            array (
                'id' => 3544707,
                'name' => 'Sagres',
                'state_id' => 35,
            ),
            269 => 
            array (
                'id' => 3544806,
                'name' => 'Sales',
                'state_id' => 35,
            ),
            270 => 
            array (
                'id' => 3544905,
                'name' => 'Sales Oliveira',
                'state_id' => 35,
            ),
            271 => 
            array (
                'id' => 3545001,
                'name' => 'Salesópolis',
                'state_id' => 35,
            ),
            272 => 
            array (
                'id' => 3545100,
                'name' => 'Salmourão',
                'state_id' => 35,
            ),
            273 => 
            array (
                'id' => 3545159,
                'name' => 'Saltinho',
                'state_id' => 35,
            ),
            274 => 
            array (
                'id' => 3545209,
                'name' => 'Salto',
                'state_id' => 35,
            ),
            275 => 
            array (
                'id' => 3545308,
                'name' => 'Salto de Pirapora',
                'state_id' => 35,
            ),
            276 => 
            array (
                'id' => 3545407,
                'name' => 'Salto Grande',
                'state_id' => 35,
            ),
            277 => 
            array (
                'id' => 3545506,
                'name' => 'Sandovalina',
                'state_id' => 35,
            ),
            278 => 
            array (
                'id' => 3545605,
                'name' => 'Santa Adélia',
                'state_id' => 35,
            ),
            279 => 
            array (
                'id' => 3545704,
                'name' => 'Santa Albertina',
                'state_id' => 35,
            ),
            280 => 
            array (
                'id' => 3545803,
                'name' => 'Santa Bárbara d\'Oeste',
                'state_id' => 35,
            ),
            281 => 
            array (
                'id' => 3546009,
                'name' => 'Santa Branca',
                'state_id' => 35,
            ),
            282 => 
            array (
                'id' => 3546108,
                'name' => 'Santa Clara d\'Oeste',
                'state_id' => 35,
            ),
            283 => 
            array (
                'id' => 3546207,
                'name' => 'Santa Cruz da Conceição',
                'state_id' => 35,
            ),
            284 => 
            array (
                'id' => 3546256,
                'name' => 'Santa Cruz da Esperança',
                'state_id' => 35,
            ),
            285 => 
            array (
                'id' => 3546306,
                'name' => 'Santa Cruz das Palmeiras',
                'state_id' => 35,
            ),
            286 => 
            array (
                'id' => 3546405,
                'name' => 'Santa Cruz do Rio Pardo',
                'state_id' => 35,
            ),
            287 => 
            array (
                'id' => 3546504,
                'name' => 'Santa Ernestina',
                'state_id' => 35,
            ),
            288 => 
            array (
                'id' => 3546603,
                'name' => 'Santa Fé do Sul',
                'state_id' => 35,
            ),
            289 => 
            array (
                'id' => 3546702,
                'name' => 'Santa Gertrudes',
                'state_id' => 35,
            ),
            290 => 
            array (
                'id' => 3546801,
                'name' => 'Santa Isabel',
                'state_id' => 35,
            ),
            291 => 
            array (
                'id' => 3546900,
                'name' => 'Santa Lúcia',
                'state_id' => 35,
            ),
            292 => 
            array (
                'id' => 3547007,
                'name' => 'Santa Maria da Serra',
                'state_id' => 35,
            ),
            293 => 
            array (
                'id' => 3547106,
                'name' => 'Santa Mercedes',
                'state_id' => 35,
            ),
            294 => 
            array (
                'id' => 3547205,
                'name' => 'Santana da Ponte Pensa',
                'state_id' => 35,
            ),
            295 => 
            array (
                'id' => 3547304,
                'name' => 'Santana de Parnaíba',
                'state_id' => 35,
            ),
            296 => 
            array (
                'id' => 3547403,
                'name' => 'Santa Rita d\'Oeste',
                'state_id' => 35,
            ),
            297 => 
            array (
                'id' => 3547502,
                'name' => 'Santa Rita do Passa Quatro',
                'state_id' => 35,
            ),
            298 => 
            array (
                'id' => 3547601,
                'name' => 'Santa Rosa de Viterbo',
                'state_id' => 35,
            ),
            299 => 
            array (
                'id' => 3547650,
                'name' => 'Santa Salete',
                'state_id' => 35,
            ),
            300 => 
            array (
                'id' => 3547700,
                'name' => 'Santo Anastácio',
                'state_id' => 35,
            ),
            301 => 
            array (
                'id' => 3547809,
                'name' => 'Santo André',
                'state_id' => 35,
            ),
            302 => 
            array (
                'id' => 3547908,
                'name' => 'Santo Antônio da Alegria',
                'state_id' => 35,
            ),
            303 => 
            array (
                'id' => 3548005,
                'name' => 'Santo Antônio de Posse',
                'state_id' => 35,
            ),
            304 => 
            array (
                'id' => 3548054,
                'name' => 'Santo Antônio do Aracanguá',
                'state_id' => 35,
            ),
            305 => 
            array (
                'id' => 3548104,
                'name' => 'Santo Antônio do Jardim',
                'state_id' => 35,
            ),
            306 => 
            array (
                'id' => 3548203,
                'name' => 'Santo Antônio do Pinhal',
                'state_id' => 35,
            ),
            307 => 
            array (
                'id' => 3548302,
                'name' => 'Santo Expedito',
                'state_id' => 35,
            ),
            308 => 
            array (
                'id' => 3548401,
                'name' => 'Santópolis do Aguapeí',
                'state_id' => 35,
            ),
            309 => 
            array (
                'id' => 3548500,
                'name' => 'Santos',
                'state_id' => 35,
            ),
            310 => 
            array (
                'id' => 3548609,
                'name' => 'São Bento do Sapucaí',
                'state_id' => 35,
            ),
            311 => 
            array (
                'id' => 3548708,
                'name' => 'São Bernardo do Campo',
                'state_id' => 35,
            ),
            312 => 
            array (
                'id' => 3548807,
                'name' => 'São Caetano do Sul',
                'state_id' => 35,
            ),
            313 => 
            array (
                'id' => 3548906,
                'name' => 'São Carlos',
                'state_id' => 35,
            ),
            314 => 
            array (
                'id' => 3549003,
                'name' => 'São Francisco',
                'state_id' => 35,
            ),
            315 => 
            array (
                'id' => 3549102,
                'name' => 'São João da Boa Vista',
                'state_id' => 35,
            ),
            316 => 
            array (
                'id' => 3549201,
                'name' => 'São João das Duas Pontes',
                'state_id' => 35,
            ),
            317 => 
            array (
                'id' => 3549250,
                'name' => 'São João de Iracema',
                'state_id' => 35,
            ),
            318 => 
            array (
                'id' => 3549300,
                'name' => 'São João do Pau d\'Alho',
                'state_id' => 35,
            ),
            319 => 
            array (
                'id' => 3549409,
                'name' => 'São Joaquim da Barra',
                'state_id' => 35,
            ),
            320 => 
            array (
                'id' => 3549508,
                'name' => 'São José da Bela Vista',
                'state_id' => 35,
            ),
            321 => 
            array (
                'id' => 3549607,
                'name' => 'São José do Barreiro',
                'state_id' => 35,
            ),
            322 => 
            array (
                'id' => 3549706,
                'name' => 'São José do Rio Pardo',
                'state_id' => 35,
            ),
            323 => 
            array (
                'id' => 3549805,
                'name' => 'São José do Rio Preto',
                'state_id' => 35,
            ),
            324 => 
            array (
                'id' => 3549904,
                'name' => 'São José dos Campos',
                'state_id' => 35,
            ),
            325 => 
            array (
                'id' => 3549953,
                'name' => 'São Lourenço da Serra',
                'state_id' => 35,
            ),
            326 => 
            array (
                'id' => 3550001,
                'name' => 'São Luiz do Paraitinga',
                'state_id' => 35,
            ),
            327 => 
            array (
                'id' => 3550100,
                'name' => 'São Manuel',
                'state_id' => 35,
            ),
            328 => 
            array (
                'id' => 3550209,
                'name' => 'São Miguel Arcanjo',
                'state_id' => 35,
            ),
            329 => 
            array (
                'id' => 3550308,
                'name' => 'São Paulo',
                'state_id' => 35,
            ),
            330 => 
            array (
                'id' => 3550407,
                'name' => 'São Pedro',
                'state_id' => 35,
            ),
            331 => 
            array (
                'id' => 3550506,
                'name' => 'São Pedro do Turvo',
                'state_id' => 35,
            ),
            332 => 
            array (
                'id' => 3550605,
                'name' => 'São Roque',
                'state_id' => 35,
            ),
            333 => 
            array (
                'id' => 3550704,
                'name' => 'São Sebastião',
                'state_id' => 35,
            ),
            334 => 
            array (
                'id' => 3550803,
                'name' => 'São Sebastião da Grama',
                'state_id' => 35,
            ),
            335 => 
            array (
                'id' => 3550902,
                'name' => 'São Simão',
                'state_id' => 35,
            ),
            336 => 
            array (
                'id' => 3551009,
                'name' => 'São Vicente',
                'state_id' => 35,
            ),
            337 => 
            array (
                'id' => 3551108,
                'name' => 'Sarapuí',
                'state_id' => 35,
            ),
            338 => 
            array (
                'id' => 3551207,
                'name' => 'Sarutaiá',
                'state_id' => 35,
            ),
            339 => 
            array (
                'id' => 3551306,
                'name' => 'Sebastianópolis do Sul',
                'state_id' => 35,
            ),
            340 => 
            array (
                'id' => 3551405,
                'name' => 'Serra Azul',
                'state_id' => 35,
            ),
            341 => 
            array (
                'id' => 3551504,
                'name' => 'Serrana',
                'state_id' => 35,
            ),
            342 => 
            array (
                'id' => 3551603,
                'name' => 'Serra Negra',
                'state_id' => 35,
            ),
            343 => 
            array (
                'id' => 3551702,
                'name' => 'Sertãozinho',
                'state_id' => 35,
            ),
            344 => 
            array (
                'id' => 3551801,
                'name' => 'Sete Barras',
                'state_id' => 35,
            ),
            345 => 
            array (
                'id' => 3551900,
                'name' => 'Severínia',
                'state_id' => 35,
            ),
            346 => 
            array (
                'id' => 3552007,
                'name' => 'Silveiras',
                'state_id' => 35,
            ),
            347 => 
            array (
                'id' => 3552106,
                'name' => 'Socorro',
                'state_id' => 35,
            ),
            348 => 
            array (
                'id' => 3552205,
                'name' => 'Sorocaba',
                'state_id' => 35,
            ),
            349 => 
            array (
                'id' => 3552304,
                'name' => 'Sud Mennucci',
                'state_id' => 35,
            ),
            350 => 
            array (
                'id' => 3552403,
                'name' => 'Sumaré',
                'state_id' => 35,
            ),
            351 => 
            array (
                'id' => 3552502,
                'name' => 'Suzano',
                'state_id' => 35,
            ),
            352 => 
            array (
                'id' => 3552551,
                'name' => 'Suzanápolis',
                'state_id' => 35,
            ),
            353 => 
            array (
                'id' => 3552601,
                'name' => 'Tabapuã',
                'state_id' => 35,
            ),
            354 => 
            array (
                'id' => 3552700,
                'name' => 'Tabatinga',
                'state_id' => 35,
            ),
            355 => 
            array (
                'id' => 3552809,
                'name' => 'Taboão da Serra',
                'state_id' => 35,
            ),
            356 => 
            array (
                'id' => 3552908,
                'name' => 'Taciba',
                'state_id' => 35,
            ),
            357 => 
            array (
                'id' => 3553005,
                'name' => 'Taguaí',
                'state_id' => 35,
            ),
            358 => 
            array (
                'id' => 3553104,
                'name' => 'Taiaçu',
                'state_id' => 35,
            ),
            359 => 
            array (
                'id' => 3553203,
                'name' => 'Taiúva',
                'state_id' => 35,
            ),
            360 => 
            array (
                'id' => 3553302,
                'name' => 'Tambaú',
                'state_id' => 35,
            ),
            361 => 
            array (
                'id' => 3553401,
                'name' => 'Tanabi',
                'state_id' => 35,
            ),
            362 => 
            array (
                'id' => 3553500,
                'name' => 'Tapiraí',
                'state_id' => 35,
            ),
            363 => 
            array (
                'id' => 3553609,
                'name' => 'Tapiratiba',
                'state_id' => 35,
            ),
            364 => 
            array (
                'id' => 3553658,
                'name' => 'Taquaral',
                'state_id' => 35,
            ),
            365 => 
            array (
                'id' => 3553708,
                'name' => 'Taquaritinga',
                'state_id' => 35,
            ),
            366 => 
            array (
                'id' => 3553807,
                'name' => 'Taquarituba',
                'state_id' => 35,
            ),
            367 => 
            array (
                'id' => 3553856,
                'name' => 'Taquarivaí',
                'state_id' => 35,
            ),
            368 => 
            array (
                'id' => 3553906,
                'name' => 'Tarabai',
                'state_id' => 35,
            ),
            369 => 
            array (
                'id' => 3553955,
                'name' => 'Tarumã',
                'state_id' => 35,
            ),
            370 => 
            array (
                'id' => 3554003,
                'name' => 'Tatuí',
                'state_id' => 35,
            ),
            371 => 
            array (
                'id' => 3554102,
                'name' => 'Taubaté',
                'state_id' => 35,
            ),
            372 => 
            array (
                'id' => 3554201,
                'name' => 'Tejupá',
                'state_id' => 35,
            ),
            373 => 
            array (
                'id' => 3554300,
                'name' => 'Teodoro Sampaio',
                'state_id' => 35,
            ),
            374 => 
            array (
                'id' => 3554409,
                'name' => 'Terra Roxa',
                'state_id' => 35,
            ),
            375 => 
            array (
                'id' => 3554508,
                'name' => 'Tietê',
                'state_id' => 35,
            ),
            376 => 
            array (
                'id' => 3554607,
                'name' => 'Timburi',
                'state_id' => 35,
            ),
            377 => 
            array (
                'id' => 3554656,
                'name' => 'Torre de Pedra',
                'state_id' => 35,
            ),
            378 => 
            array (
                'id' => 3554706,
                'name' => 'Torrinha',
                'state_id' => 35,
            ),
            379 => 
            array (
                'id' => 3554755,
                'name' => 'Trabiju',
                'state_id' => 35,
            ),
            380 => 
            array (
                'id' => 3554805,
                'name' => 'Tremembé',
                'state_id' => 35,
            ),
            381 => 
            array (
                'id' => 3554904,
                'name' => 'Três Fronteiras',
                'state_id' => 35,
            ),
            382 => 
            array (
                'id' => 3554953,
                'name' => 'Tuiuti',
                'state_id' => 35,
            ),
            383 => 
            array (
                'id' => 3555000,
                'name' => 'Tupã',
                'state_id' => 35,
            ),
            384 => 
            array (
                'id' => 3555109,
                'name' => 'Tupi Paulista',
                'state_id' => 35,
            ),
            385 => 
            array (
                'id' => 3555208,
                'name' => 'Turiúba',
                'state_id' => 35,
            ),
            386 => 
            array (
                'id' => 3555307,
                'name' => 'Turmalina',
                'state_id' => 35,
            ),
            387 => 
            array (
                'id' => 3555356,
                'name' => 'Ubarana',
                'state_id' => 35,
            ),
            388 => 
            array (
                'id' => 3555406,
                'name' => 'Ubatuba',
                'state_id' => 35,
            ),
            389 => 
            array (
                'id' => 3555505,
                'name' => 'Ubirajara',
                'state_id' => 35,
            ),
            390 => 
            array (
                'id' => 3555604,
                'name' => 'Uchoa',
                'state_id' => 35,
            ),
            391 => 
            array (
                'id' => 3555703,
                'name' => 'União Paulista',
                'state_id' => 35,
            ),
            392 => 
            array (
                'id' => 3555802,
                'name' => 'Urânia',
                'state_id' => 35,
            ),
            393 => 
            array (
                'id' => 3555901,
                'name' => 'Uru',
                'state_id' => 35,
            ),
            394 => 
            array (
                'id' => 3556008,
                'name' => 'Urupês',
                'state_id' => 35,
            ),
            395 => 
            array (
                'id' => 3556107,
                'name' => 'Valentim Gentil',
                'state_id' => 35,
            ),
            396 => 
            array (
                'id' => 3556206,
                'name' => 'Valinhos',
                'state_id' => 35,
            ),
            397 => 
            array (
                'id' => 3556305,
                'name' => 'Valparaíso',
                'state_id' => 35,
            ),
            398 => 
            array (
                'id' => 3556354,
                'name' => 'Vargem',
                'state_id' => 35,
            ),
            399 => 
            array (
                'id' => 3556404,
                'name' => 'Vargem Grande do Sul',
                'state_id' => 35,
            ),
            400 => 
            array (
                'id' => 3556453,
                'name' => 'Vargem Grande Paulista',
                'state_id' => 35,
            ),
            401 => 
            array (
                'id' => 3556503,
                'name' => 'Várzea Paulista',
                'state_id' => 35,
            ),
            402 => 
            array (
                'id' => 3556602,
                'name' => 'Vera Cruz',
                'state_id' => 35,
            ),
            403 => 
            array (
                'id' => 3556701,
                'name' => 'Vinhedo',
                'state_id' => 35,
            ),
            404 => 
            array (
                'id' => 3556800,
                'name' => 'Viradouro',
                'state_id' => 35,
            ),
            405 => 
            array (
                'id' => 3556909,
                'name' => 'Vista Alegre do Alto',
                'state_id' => 35,
            ),
            406 => 
            array (
                'id' => 3556958,
                'name' => 'Vitória Brasil',
                'state_id' => 35,
            ),
            407 => 
            array (
                'id' => 3557006,
                'name' => 'Votorantim',
                'state_id' => 35,
            ),
            408 => 
            array (
                'id' => 3557105,
                'name' => 'Votuporanga',
                'state_id' => 35,
            ),
            409 => 
            array (
                'id' => 3557154,
                'name' => 'Zacarias',
                'state_id' => 35,
            ),
            410 => 
            array (
                'id' => 3557204,
                'name' => 'Chavantes',
                'state_id' => 35,
            ),
            411 => 
            array (
                'id' => 3557303,
                'name' => 'Estiva Gerbi',
                'state_id' => 35,
            ),
            412 => 
            array (
                'id' => 4100103,
                'name' => 'Abatiá',
                'state_id' => 41,
            ),
            413 => 
            array (
                'id' => 4100202,
                'name' => 'Adrianópolis',
                'state_id' => 41,
            ),
            414 => 
            array (
                'id' => 4100301,
                'name' => 'Agudos do Sul',
                'state_id' => 41,
            ),
            415 => 
            array (
                'id' => 4100400,
                'name' => 'Almirante Tamandaré',
                'state_id' => 41,
            ),
            416 => 
            array (
                'id' => 4100459,
                'name' => 'Altamira do Paraná',
                'state_id' => 41,
            ),
            417 => 
            array (
                'id' => 4100509,
                'name' => 'Altônia',
                'state_id' => 41,
            ),
            418 => 
            array (
                'id' => 4100608,
                'name' => 'Alto Paraná',
                'state_id' => 41,
            ),
            419 => 
            array (
                'id' => 4100707,
                'name' => 'Alto Piquiri',
                'state_id' => 41,
            ),
            420 => 
            array (
                'id' => 4100806,
                'name' => 'Alvorada do Sul',
                'state_id' => 41,
            ),
            421 => 
            array (
                'id' => 4100905,
                'name' => 'Amaporã',
                'state_id' => 41,
            ),
            422 => 
            array (
                'id' => 4101002,
                'name' => 'Ampére',
                'state_id' => 41,
            ),
            423 => 
            array (
                'id' => 4101051,
                'name' => 'Anahy',
                'state_id' => 41,
            ),
            424 => 
            array (
                'id' => 4101101,
                'name' => 'Andirá',
                'state_id' => 41,
            ),
            425 => 
            array (
                'id' => 4101150,
                'name' => 'Ângulo',
                'state_id' => 41,
            ),
            426 => 
            array (
                'id' => 4101200,
                'name' => 'Antonina',
                'state_id' => 41,
            ),
            427 => 
            array (
                'id' => 4101309,
                'name' => 'Antônio Olinto',
                'state_id' => 41,
            ),
            428 => 
            array (
                'id' => 4101408,
                'name' => 'Apucarana',
                'state_id' => 41,
            ),
            429 => 
            array (
                'id' => 4101507,
                'name' => 'Arapongas',
                'state_id' => 41,
            ),
            430 => 
            array (
                'id' => 4101606,
                'name' => 'Arapoti',
                'state_id' => 41,
            ),
            431 => 
            array (
                'id' => 4101655,
                'name' => 'Arapuã',
                'state_id' => 41,
            ),
            432 => 
            array (
                'id' => 4101705,
                'name' => 'Araruna',
                'state_id' => 41,
            ),
            433 => 
            array (
                'id' => 4101804,
                'name' => 'Araucária',
                'state_id' => 41,
            ),
            434 => 
            array (
                'id' => 4101853,
                'name' => 'Ariranha do Ivaí',
                'state_id' => 41,
            ),
            435 => 
            array (
                'id' => 4101903,
                'name' => 'Assaí',
                'state_id' => 41,
            ),
            436 => 
            array (
                'id' => 4102000,
                'name' => 'Assis Chateaubriand',
                'state_id' => 41,
            ),
            437 => 
            array (
                'id' => 4102109,
                'name' => 'Astorga',
                'state_id' => 41,
            ),
            438 => 
            array (
                'id' => 4102208,
                'name' => 'Atalaia',
                'state_id' => 41,
            ),
            439 => 
            array (
                'id' => 4102307,
                'name' => 'Balsa Nova',
                'state_id' => 41,
            ),
            440 => 
            array (
                'id' => 4102406,
                'name' => 'Bandeirantes',
                'state_id' => 41,
            ),
            441 => 
            array (
                'id' => 4102505,
                'name' => 'Barbosa Ferraz',
                'state_id' => 41,
            ),
            442 => 
            array (
                'id' => 4102604,
                'name' => 'Barracão',
                'state_id' => 41,
            ),
            443 => 
            array (
                'id' => 4102703,
                'name' => 'Barra do Jacaré',
                'state_id' => 41,
            ),
            444 => 
            array (
                'id' => 4102752,
                'name' => 'Bela Vista da Caroba',
                'state_id' => 41,
            ),
            445 => 
            array (
                'id' => 4102802,
                'name' => 'Bela Vista do Paraíso',
                'state_id' => 41,
            ),
            446 => 
            array (
                'id' => 4102901,
                'name' => 'Bituruna',
                'state_id' => 41,
            ),
            447 => 
            array (
                'id' => 4103008,
                'name' => 'Boa Esperança',
                'state_id' => 41,
            ),
            448 => 
            array (
                'id' => 4103024,
                'name' => 'Boa Esperança do Iguaçu',
                'state_id' => 41,
            ),
            449 => 
            array (
                'id' => 4103040,
                'name' => 'Boa Ventura de São Roque',
                'state_id' => 41,
            ),
            450 => 
            array (
                'id' => 4103057,
                'name' => 'Boa Vista da Aparecida',
                'state_id' => 41,
            ),
            451 => 
            array (
                'id' => 4103107,
                'name' => 'Bocaiúva do Sul',
                'state_id' => 41,
            ),
            452 => 
            array (
                'id' => 4103156,
                'name' => 'Bom Jesus do Sul',
                'state_id' => 41,
            ),
            453 => 
            array (
                'id' => 4103206,
                'name' => 'Bom Sucesso',
                'state_id' => 41,
            ),
            454 => 
            array (
                'id' => 4103222,
                'name' => 'Bom Sucesso do Sul',
                'state_id' => 41,
            ),
            455 => 
            array (
                'id' => 4103305,
                'name' => 'Borrazópolis',
                'state_id' => 41,
            ),
            456 => 
            array (
                'id' => 4103354,
                'name' => 'Braganey',
                'state_id' => 41,
            ),
            457 => 
            array (
                'id' => 4103370,
                'name' => 'Brasilândia do Sul',
                'state_id' => 41,
            ),
            458 => 
            array (
                'id' => 4103404,
                'name' => 'Cafeara',
                'state_id' => 41,
            ),
            459 => 
            array (
                'id' => 4103453,
                'name' => 'Cafelândia',
                'state_id' => 41,
            ),
            460 => 
            array (
                'id' => 4103479,
                'name' => 'Cafezal do Sul',
                'state_id' => 41,
            ),
            461 => 
            array (
                'id' => 4103503,
                'name' => 'Califórnia',
                'state_id' => 41,
            ),
            462 => 
            array (
                'id' => 4103602,
                'name' => 'Cambará',
                'state_id' => 41,
            ),
            463 => 
            array (
                'id' => 4103701,
                'name' => 'Cambé',
                'state_id' => 41,
            ),
            464 => 
            array (
                'id' => 4103800,
                'name' => 'Cambira',
                'state_id' => 41,
            ),
            465 => 
            array (
                'id' => 4103909,
                'name' => 'Campina da Lagoa',
                'state_id' => 41,
            ),
            466 => 
            array (
                'id' => 4103958,
                'name' => 'Campina do Simão',
                'state_id' => 41,
            ),
            467 => 
            array (
                'id' => 4104006,
                'name' => 'Campina Grande do Sul',
                'state_id' => 41,
            ),
            468 => 
            array (
                'id' => 4104055,
                'name' => 'Campo Bonito',
                'state_id' => 41,
            ),
            469 => 
            array (
                'id' => 4104105,
                'name' => 'Campo do Tenente',
                'state_id' => 41,
            ),
            470 => 
            array (
                'id' => 4104204,
                'name' => 'Campo Largo',
                'state_id' => 41,
            ),
            471 => 
            array (
                'id' => 4104253,
                'name' => 'Campo Magro',
                'state_id' => 41,
            ),
            472 => 
            array (
                'id' => 4104303,
                'name' => 'Campo Mourão',
                'state_id' => 41,
            ),
            473 => 
            array (
                'id' => 4104402,
                'name' => 'Cândido de Abreu',
                'state_id' => 41,
            ),
            474 => 
            array (
                'id' => 4104428,
                'name' => 'Candói',
                'state_id' => 41,
            ),
            475 => 
            array (
                'id' => 4104451,
                'name' => 'Cantagalo',
                'state_id' => 41,
            ),
            476 => 
            array (
                'id' => 4104501,
                'name' => 'Capanema',
                'state_id' => 41,
            ),
            477 => 
            array (
                'id' => 4104600,
                'name' => 'Capitão Leônidas Marques',
                'state_id' => 41,
            ),
            478 => 
            array (
                'id' => 4104659,
                'name' => 'Carambeí',
                'state_id' => 41,
            ),
            479 => 
            array (
                'id' => 4104709,
                'name' => 'Carlópolis',
                'state_id' => 41,
            ),
            480 => 
            array (
                'id' => 4104808,
                'name' => 'Cascavel',
                'state_id' => 41,
            ),
            481 => 
            array (
                'id' => 4104907,
                'name' => 'Castro',
                'state_id' => 41,
            ),
            482 => 
            array (
                'id' => 4105003,
                'name' => 'Catanduvas',
                'state_id' => 41,
            ),
            483 => 
            array (
                'id' => 4105102,
                'name' => 'Centenário do Sul',
                'state_id' => 41,
            ),
            484 => 
            array (
                'id' => 4105201,
                'name' => 'Cerro Azul',
                'state_id' => 41,
            ),
            485 => 
            array (
                'id' => 4105300,
                'name' => 'Céu Azul',
                'state_id' => 41,
            ),
            486 => 
            array (
                'id' => 4105409,
                'name' => 'Chopinzinho',
                'state_id' => 41,
            ),
            487 => 
            array (
                'id' => 4105508,
                'name' => 'Cianorte',
                'state_id' => 41,
            ),
            488 => 
            array (
                'id' => 4105607,
                'name' => 'Cidade Gaúcha',
                'state_id' => 41,
            ),
            489 => 
            array (
                'id' => 4105706,
                'name' => 'Clevelândia',
                'state_id' => 41,
            ),
            490 => 
            array (
                'id' => 4105805,
                'name' => 'Colombo',
                'state_id' => 41,
            ),
            491 => 
            array (
                'id' => 4105904,
                'name' => 'Colorado',
                'state_id' => 41,
            ),
            492 => 
            array (
                'id' => 4106001,
                'name' => 'Congonhinhas',
                'state_id' => 41,
            ),
            493 => 
            array (
                'id' => 4106100,
                'name' => 'Conselheiro Mairinck',
                'state_id' => 41,
            ),
            494 => 
            array (
                'id' => 4106209,
                'name' => 'Contenda',
                'state_id' => 41,
            ),
            495 => 
            array (
                'id' => 4106308,
                'name' => 'Corbélia',
                'state_id' => 41,
            ),
            496 => 
            array (
                'id' => 4106407,
                'name' => 'Cornélio Procópio',
                'state_id' => 41,
            ),
            497 => 
            array (
                'id' => 4106456,
                'name' => 'Coronel Domingos Soares',
                'state_id' => 41,
            ),
            498 => 
            array (
                'id' => 4106506,
                'name' => 'Coronel Vivida',
                'state_id' => 41,
            ),
            499 => 
            array (
                'id' => 4106555,
                'name' => 'Corumbataí do Sul',
                'state_id' => 41,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 4106571,
                'name' => 'Cruzeiro do Iguaçu',
                'state_id' => 41,
            ),
            1 => 
            array (
                'id' => 4106605,
                'name' => 'Cruzeiro do Oeste',
                'state_id' => 41,
            ),
            2 => 
            array (
                'id' => 4106704,
                'name' => 'Cruzeiro do Sul',
                'state_id' => 41,
            ),
            3 => 
            array (
                'id' => 4106803,
                'name' => 'Cruz Machado',
                'state_id' => 41,
            ),
            4 => 
            array (
                'id' => 4106852,
                'name' => 'Cruzmaltina',
                'state_id' => 41,
            ),
            5 => 
            array (
                'id' => 4106902,
                'name' => 'Curitiba',
                'state_id' => 41,
            ),
            6 => 
            array (
                'id' => 4107009,
                'name' => 'Curiúva',
                'state_id' => 41,
            ),
            7 => 
            array (
                'id' => 4107108,
                'name' => 'Diamante do Norte',
                'state_id' => 41,
            ),
            8 => 
            array (
                'id' => 4107124,
                'name' => 'Diamante do Sul',
                'state_id' => 41,
            ),
            9 => 
            array (
                'id' => 4107157,
                'name' => 'Diamante D\'Oeste',
                'state_id' => 41,
            ),
            10 => 
            array (
                'id' => 4107207,
                'name' => 'Dois Vizinhos',
                'state_id' => 41,
            ),
            11 => 
            array (
                'id' => 4107256,
                'name' => 'Douradina',
                'state_id' => 41,
            ),
            12 => 
            array (
                'id' => 4107306,
                'name' => 'Doutor Camargo',
                'state_id' => 41,
            ),
            13 => 
            array (
                'id' => 4107405,
                'name' => 'Enéas Marques',
                'state_id' => 41,
            ),
            14 => 
            array (
                'id' => 4107504,
                'name' => 'Engenheiro Beltrão',
                'state_id' => 41,
            ),
            15 => 
            array (
                'id' => 4107520,
                'name' => 'Esperança Nova',
                'state_id' => 41,
            ),
            16 => 
            array (
                'id' => 4107538,
                'name' => 'Entre Rios do Oeste',
                'state_id' => 41,
            ),
            17 => 
            array (
                'id' => 4107546,
                'name' => 'Espigão Alto do Iguaçu',
                'state_id' => 41,
            ),
            18 => 
            array (
                'id' => 4107553,
                'name' => 'Farol',
                'state_id' => 41,
            ),
            19 => 
            array (
                'id' => 4107603,
                'name' => 'Faxinal',
                'state_id' => 41,
            ),
            20 => 
            array (
                'id' => 4107652,
                'name' => 'Fazenda Rio Grande',
                'state_id' => 41,
            ),
            21 => 
            array (
                'id' => 4107702,
                'name' => 'Fênix',
                'state_id' => 41,
            ),
            22 => 
            array (
                'id' => 4107736,
                'name' => 'Fernandes Pinheiro',
                'state_id' => 41,
            ),
            23 => 
            array (
                'id' => 4107751,
                'name' => 'Figueira',
                'state_id' => 41,
            ),
            24 => 
            array (
                'id' => 4107801,
                'name' => 'Floraí',
                'state_id' => 41,
            ),
            25 => 
            array (
                'id' => 4107850,
                'name' => 'Flor da Serra do Sul',
                'state_id' => 41,
            ),
            26 => 
            array (
                'id' => 4107900,
                'name' => 'Floresta',
                'state_id' => 41,
            ),
            27 => 
            array (
                'id' => 4108007,
                'name' => 'Florestópolis',
                'state_id' => 41,
            ),
            28 => 
            array (
                'id' => 4108106,
                'name' => 'Flórida',
                'state_id' => 41,
            ),
            29 => 
            array (
                'id' => 4108205,
                'name' => 'Formosa do Oeste',
                'state_id' => 41,
            ),
            30 => 
            array (
                'id' => 4108304,
                'name' => 'Foz do Iguaçu',
                'state_id' => 41,
            ),
            31 => 
            array (
                'id' => 4108320,
                'name' => 'Francisco Alves',
                'state_id' => 41,
            ),
            32 => 
            array (
                'id' => 4108403,
                'name' => 'Francisco Beltrão',
                'state_id' => 41,
            ),
            33 => 
            array (
                'id' => 4108452,
                'name' => 'Foz do Jordão',
                'state_id' => 41,
            ),
            34 => 
            array (
                'id' => 4108502,
                'name' => 'General Carneiro',
                'state_id' => 41,
            ),
            35 => 
            array (
                'id' => 4108551,
                'name' => 'Godoy Moreira',
                'state_id' => 41,
            ),
            36 => 
            array (
                'id' => 4108601,
                'name' => 'Goioerê',
                'state_id' => 41,
            ),
            37 => 
            array (
                'id' => 4108650,
                'name' => 'Goioxim',
                'state_id' => 41,
            ),
            38 => 
            array (
                'id' => 4108700,
                'name' => 'Grandes Rios',
                'state_id' => 41,
            ),
            39 => 
            array (
                'id' => 4108809,
                'name' => 'Guaíra',
                'state_id' => 41,
            ),
            40 => 
            array (
                'id' => 4108908,
                'name' => 'Guairaçá',
                'state_id' => 41,
            ),
            41 => 
            array (
                'id' => 4108957,
                'name' => 'Guamiranga',
                'state_id' => 41,
            ),
            42 => 
            array (
                'id' => 4109005,
                'name' => 'Guapirama',
                'state_id' => 41,
            ),
            43 => 
            array (
                'id' => 4109104,
                'name' => 'Guaporema',
                'state_id' => 41,
            ),
            44 => 
            array (
                'id' => 4109203,
                'name' => 'Guaraci',
                'state_id' => 41,
            ),
            45 => 
            array (
                'id' => 4109302,
                'name' => 'Guaraniaçu',
                'state_id' => 41,
            ),
            46 => 
            array (
                'id' => 4109401,
                'name' => 'Guarapuava',
                'state_id' => 41,
            ),
            47 => 
            array (
                'id' => 4109500,
                'name' => 'Guaraqueçaba',
                'state_id' => 41,
            ),
            48 => 
            array (
                'id' => 4109609,
                'name' => 'Guaratuba',
                'state_id' => 41,
            ),
            49 => 
            array (
                'id' => 4109658,
                'name' => 'Honório Serpa',
                'state_id' => 41,
            ),
            50 => 
            array (
                'id' => 4109708,
                'name' => 'Ibaiti',
                'state_id' => 41,
            ),
            51 => 
            array (
                'id' => 4109757,
                'name' => 'Ibema',
                'state_id' => 41,
            ),
            52 => 
            array (
                'id' => 4109807,
                'name' => 'Ibiporã',
                'state_id' => 41,
            ),
            53 => 
            array (
                'id' => 4109906,
                'name' => 'Icaraíma',
                'state_id' => 41,
            ),
            54 => 
            array (
                'id' => 4110003,
                'name' => 'Iguaraçu',
                'state_id' => 41,
            ),
            55 => 
            array (
                'id' => 4110052,
                'name' => 'Iguatu',
                'state_id' => 41,
            ),
            56 => 
            array (
                'id' => 4110078,
                'name' => 'Imbaú',
                'state_id' => 41,
            ),
            57 => 
            array (
                'id' => 4110102,
                'name' => 'Imbituva',
                'state_id' => 41,
            ),
            58 => 
            array (
                'id' => 4110201,
                'name' => 'Inácio Martins',
                'state_id' => 41,
            ),
            59 => 
            array (
                'id' => 4110300,
                'name' => 'Inajá',
                'state_id' => 41,
            ),
            60 => 
            array (
                'id' => 4110409,
                'name' => 'Indianópolis',
                'state_id' => 41,
            ),
            61 => 
            array (
                'id' => 4110508,
                'name' => 'Ipiranga',
                'state_id' => 41,
            ),
            62 => 
            array (
                'id' => 4110607,
                'name' => 'Iporã',
                'state_id' => 41,
            ),
            63 => 
            array (
                'id' => 4110656,
                'name' => 'Iracema do Oeste',
                'state_id' => 41,
            ),
            64 => 
            array (
                'id' => 4110706,
                'name' => 'Irati',
                'state_id' => 41,
            ),
            65 => 
            array (
                'id' => 4110805,
                'name' => 'Iretama',
                'state_id' => 41,
            ),
            66 => 
            array (
                'id' => 4110904,
                'name' => 'Itaguajé',
                'state_id' => 41,
            ),
            67 => 
            array (
                'id' => 4110953,
                'name' => 'Itaipulândia',
                'state_id' => 41,
            ),
            68 => 
            array (
                'id' => 4111001,
                'name' => 'Itambaracá',
                'state_id' => 41,
            ),
            69 => 
            array (
                'id' => 4111100,
                'name' => 'Itambé',
                'state_id' => 41,
            ),
            70 => 
            array (
                'id' => 4111209,
                'name' => 'Itapejara d\'Oeste',
                'state_id' => 41,
            ),
            71 => 
            array (
                'id' => 4111258,
                'name' => 'Itaperuçu',
                'state_id' => 41,
            ),
            72 => 
            array (
                'id' => 4111308,
                'name' => 'Itaúna do Sul',
                'state_id' => 41,
            ),
            73 => 
            array (
                'id' => 4111407,
                'name' => 'Ivaí',
                'state_id' => 41,
            ),
            74 => 
            array (
                'id' => 4111506,
                'name' => 'Ivaiporã',
                'state_id' => 41,
            ),
            75 => 
            array (
                'id' => 4111555,
                'name' => 'Ivaté',
                'state_id' => 41,
            ),
            76 => 
            array (
                'id' => 4111605,
                'name' => 'Ivatuba',
                'state_id' => 41,
            ),
            77 => 
            array (
                'id' => 4111704,
                'name' => 'Jaboti',
                'state_id' => 41,
            ),
            78 => 
            array (
                'id' => 4111803,
                'name' => 'Jacarezinho',
                'state_id' => 41,
            ),
            79 => 
            array (
                'id' => 4111902,
                'name' => 'Jaguapitã',
                'state_id' => 41,
            ),
            80 => 
            array (
                'id' => 4112009,
                'name' => 'Jaguariaíva',
                'state_id' => 41,
            ),
            81 => 
            array (
                'id' => 4112108,
                'name' => 'Jandaia do Sul',
                'state_id' => 41,
            ),
            82 => 
            array (
                'id' => 4112207,
                'name' => 'Janiópolis',
                'state_id' => 41,
            ),
            83 => 
            array (
                'id' => 4112306,
                'name' => 'Japira',
                'state_id' => 41,
            ),
            84 => 
            array (
                'id' => 4112405,
                'name' => 'Japurá',
                'state_id' => 41,
            ),
            85 => 
            array (
                'id' => 4112504,
                'name' => 'Jardim Alegre',
                'state_id' => 41,
            ),
            86 => 
            array (
                'id' => 4112603,
                'name' => 'Jardim Olinda',
                'state_id' => 41,
            ),
            87 => 
            array (
                'id' => 4112702,
                'name' => 'Jataizinho',
                'state_id' => 41,
            ),
            88 => 
            array (
                'id' => 4112751,
                'name' => 'Jesuítas',
                'state_id' => 41,
            ),
            89 => 
            array (
                'id' => 4112801,
                'name' => 'Joaquim Távora',
                'state_id' => 41,
            ),
            90 => 
            array (
                'id' => 4112900,
                'name' => 'Jundiaí do Sul',
                'state_id' => 41,
            ),
            91 => 
            array (
                'id' => 4112959,
                'name' => 'Juranda',
                'state_id' => 41,
            ),
            92 => 
            array (
                'id' => 4113007,
                'name' => 'Jussara',
                'state_id' => 41,
            ),
            93 => 
            array (
                'id' => 4113106,
                'name' => 'Kaloré',
                'state_id' => 41,
            ),
            94 => 
            array (
                'id' => 4113205,
                'name' => 'Lapa',
                'state_id' => 41,
            ),
            95 => 
            array (
                'id' => 4113254,
                'name' => 'Laranjal',
                'state_id' => 41,
            ),
            96 => 
            array (
                'id' => 4113304,
                'name' => 'Laranjeiras do Sul',
                'state_id' => 41,
            ),
            97 => 
            array (
                'id' => 4113403,
                'name' => 'Leópolis',
                'state_id' => 41,
            ),
            98 => 
            array (
                'id' => 4113429,
                'name' => 'Lidianópolis',
                'state_id' => 41,
            ),
            99 => 
            array (
                'id' => 4113452,
                'name' => 'Lindoeste',
                'state_id' => 41,
            ),
            100 => 
            array (
                'id' => 4113502,
                'name' => 'Loanda',
                'state_id' => 41,
            ),
            101 => 
            array (
                'id' => 4113601,
                'name' => 'Lobato',
                'state_id' => 41,
            ),
            102 => 
            array (
                'id' => 4113700,
                'name' => 'Londrina',
                'state_id' => 41,
            ),
            103 => 
            array (
                'id' => 4113734,
                'name' => 'Luiziana',
                'state_id' => 41,
            ),
            104 => 
            array (
                'id' => 4113759,
                'name' => 'Lunardelli',
                'state_id' => 41,
            ),
            105 => 
            array (
                'id' => 4113809,
                'name' => 'Lupionópolis',
                'state_id' => 41,
            ),
            106 => 
            array (
                'id' => 4113908,
                'name' => 'Mallet',
                'state_id' => 41,
            ),
            107 => 
            array (
                'id' => 4114005,
                'name' => 'Mamborê',
                'state_id' => 41,
            ),
            108 => 
            array (
                'id' => 4114104,
                'name' => 'Mandaguaçu',
                'state_id' => 41,
            ),
            109 => 
            array (
                'id' => 4114203,
                'name' => 'Mandaguari',
                'state_id' => 41,
            ),
            110 => 
            array (
                'id' => 4114302,
                'name' => 'Mandirituba',
                'state_id' => 41,
            ),
            111 => 
            array (
                'id' => 4114351,
                'name' => 'Manfrinópolis',
                'state_id' => 41,
            ),
            112 => 
            array (
                'id' => 4114401,
                'name' => 'Mangueirinha',
                'state_id' => 41,
            ),
            113 => 
            array (
                'id' => 4114500,
                'name' => 'Manoel Ribas',
                'state_id' => 41,
            ),
            114 => 
            array (
                'id' => 4114609,
                'name' => 'Marechal Cândido Rondon',
                'state_id' => 41,
            ),
            115 => 
            array (
                'id' => 4114708,
                'name' => 'Maria Helena',
                'state_id' => 41,
            ),
            116 => 
            array (
                'id' => 4114807,
                'name' => 'Marialva',
                'state_id' => 41,
            ),
            117 => 
            array (
                'id' => 4114906,
                'name' => 'Marilândia do Sul',
                'state_id' => 41,
            ),
            118 => 
            array (
                'id' => 4115002,
                'name' => 'Marilena',
                'state_id' => 41,
            ),
            119 => 
            array (
                'id' => 4115101,
                'name' => 'Mariluz',
                'state_id' => 41,
            ),
            120 => 
            array (
                'id' => 4115200,
                'name' => 'Maringá',
                'state_id' => 41,
            ),
            121 => 
            array (
                'id' => 4115309,
                'name' => 'Mariópolis',
                'state_id' => 41,
            ),
            122 => 
            array (
                'id' => 4115358,
                'name' => 'Maripá',
                'state_id' => 41,
            ),
            123 => 
            array (
                'id' => 4115408,
                'name' => 'Marmeleiro',
                'state_id' => 41,
            ),
            124 => 
            array (
                'id' => 4115457,
                'name' => 'Marquinho',
                'state_id' => 41,
            ),
            125 => 
            array (
                'id' => 4115507,
                'name' => 'Marumbi',
                'state_id' => 41,
            ),
            126 => 
            array (
                'id' => 4115606,
                'name' => 'Matelândia',
                'state_id' => 41,
            ),
            127 => 
            array (
                'id' => 4115705,
                'name' => 'Matinhos',
                'state_id' => 41,
            ),
            128 => 
            array (
                'id' => 4115739,
                'name' => 'Mato Rico',
                'state_id' => 41,
            ),
            129 => 
            array (
                'id' => 4115754,
                'name' => 'Mauá da Serra',
                'state_id' => 41,
            ),
            130 => 
            array (
                'id' => 4115804,
                'name' => 'Medianeira',
                'state_id' => 41,
            ),
            131 => 
            array (
                'id' => 4115853,
                'name' => 'Mercedes',
                'state_id' => 41,
            ),
            132 => 
            array (
                'id' => 4115903,
                'name' => 'Mirador',
                'state_id' => 41,
            ),
            133 => 
            array (
                'id' => 4116000,
                'name' => 'Miraselva',
                'state_id' => 41,
            ),
            134 => 
            array (
                'id' => 4116059,
                'name' => 'Missal',
                'state_id' => 41,
            ),
            135 => 
            array (
                'id' => 4116109,
                'name' => 'Moreira Sales',
                'state_id' => 41,
            ),
            136 => 
            array (
                'id' => 4116208,
                'name' => 'Morretes',
                'state_id' => 41,
            ),
            137 => 
            array (
                'id' => 4116307,
                'name' => 'Munhoz de Melo',
                'state_id' => 41,
            ),
            138 => 
            array (
                'id' => 4116406,
                'name' => 'Nossa Senhora das Graças',
                'state_id' => 41,
            ),
            139 => 
            array (
                'id' => 4116505,
                'name' => 'Nova Aliança do Ivaí',
                'state_id' => 41,
            ),
            140 => 
            array (
                'id' => 4116604,
                'name' => 'Nova América da Colina',
                'state_id' => 41,
            ),
            141 => 
            array (
                'id' => 4116703,
                'name' => 'Nova Aurora',
                'state_id' => 41,
            ),
            142 => 
            array (
                'id' => 4116802,
                'name' => 'Nova Cantu',
                'state_id' => 41,
            ),
            143 => 
            array (
                'id' => 4116901,
                'name' => 'Nova Esperança',
                'state_id' => 41,
            ),
            144 => 
            array (
                'id' => 4116950,
                'name' => 'Nova Esperança do Sudoeste',
                'state_id' => 41,
            ),
            145 => 
            array (
                'id' => 4117008,
                'name' => 'Nova Fátima',
                'state_id' => 41,
            ),
            146 => 
            array (
                'id' => 4117057,
                'name' => 'Nova Laranjeiras',
                'state_id' => 41,
            ),
            147 => 
            array (
                'id' => 4117107,
                'name' => 'Nova Londrina',
                'state_id' => 41,
            ),
            148 => 
            array (
                'id' => 4117206,
                'name' => 'Nova Olímpia',
                'state_id' => 41,
            ),
            149 => 
            array (
                'id' => 4117214,
                'name' => 'Nova Santa Bárbara',
                'state_id' => 41,
            ),
            150 => 
            array (
                'id' => 4117222,
                'name' => 'Nova Santa Rosa',
                'state_id' => 41,
            ),
            151 => 
            array (
                'id' => 4117255,
                'name' => 'Nova Prata do Iguaçu',
                'state_id' => 41,
            ),
            152 => 
            array (
                'id' => 4117271,
                'name' => 'Nova Tebas',
                'state_id' => 41,
            ),
            153 => 
            array (
                'id' => 4117297,
                'name' => 'Novo Itacolomi',
                'state_id' => 41,
            ),
            154 => 
            array (
                'id' => 4117305,
                'name' => 'Ortigueira',
                'state_id' => 41,
            ),
            155 => 
            array (
                'id' => 4117404,
                'name' => 'Ourizona',
                'state_id' => 41,
            ),
            156 => 
            array (
                'id' => 4117453,
                'name' => 'Ouro Verde do Oeste',
                'state_id' => 41,
            ),
            157 => 
            array (
                'id' => 4117503,
                'name' => 'Paiçandu',
                'state_id' => 41,
            ),
            158 => 
            array (
                'id' => 4117602,
                'name' => 'Palmas',
                'state_id' => 41,
            ),
            159 => 
            array (
                'id' => 4117701,
                'name' => 'Palmeira',
                'state_id' => 41,
            ),
            160 => 
            array (
                'id' => 4117800,
                'name' => 'Palmital',
                'state_id' => 41,
            ),
            161 => 
            array (
                'id' => 4117909,
                'name' => 'Palotina',
                'state_id' => 41,
            ),
            162 => 
            array (
                'id' => 4118006,
                'name' => 'Paraíso do Norte',
                'state_id' => 41,
            ),
            163 => 
            array (
                'id' => 4118105,
                'name' => 'Paranacity',
                'state_id' => 41,
            ),
            164 => 
            array (
                'id' => 4118204,
                'name' => 'Paranaguá',
                'state_id' => 41,
            ),
            165 => 
            array (
                'id' => 4118303,
                'name' => 'Paranapoema',
                'state_id' => 41,
            ),
            166 => 
            array (
                'id' => 4118402,
                'name' => 'Paranavaí',
                'state_id' => 41,
            ),
            167 => 
            array (
                'id' => 4118451,
                'name' => 'Pato Bragado',
                'state_id' => 41,
            ),
            168 => 
            array (
                'id' => 4118501,
                'name' => 'Pato Branco',
                'state_id' => 41,
            ),
            169 => 
            array (
                'id' => 4118600,
                'name' => 'Paula Freitas',
                'state_id' => 41,
            ),
            170 => 
            array (
                'id' => 4118709,
                'name' => 'Paulo Frontin',
                'state_id' => 41,
            ),
            171 => 
            array (
                'id' => 4118808,
                'name' => 'Peabiru',
                'state_id' => 41,
            ),
            172 => 
            array (
                'id' => 4118857,
                'name' => 'Perobal',
                'state_id' => 41,
            ),
            173 => 
            array (
                'id' => 4118907,
                'name' => 'Pérola',
                'state_id' => 41,
            ),
            174 => 
            array (
                'id' => 4119004,
                'name' => 'Pérola d\'Oeste',
                'state_id' => 41,
            ),
            175 => 
            array (
                'id' => 4119103,
                'name' => 'Piên',
                'state_id' => 41,
            ),
            176 => 
            array (
                'id' => 4119152,
                'name' => 'Pinhais',
                'state_id' => 41,
            ),
            177 => 
            array (
                'id' => 4119202,
                'name' => 'Pinhalão',
                'state_id' => 41,
            ),
            178 => 
            array (
                'id' => 4119251,
                'name' => 'Pinhal de São Bento',
                'state_id' => 41,
            ),
            179 => 
            array (
                'id' => 4119301,
                'name' => 'Pinhão',
                'state_id' => 41,
            ),
            180 => 
            array (
                'id' => 4119400,
                'name' => 'Piraí do Sul',
                'state_id' => 41,
            ),
            181 => 
            array (
                'id' => 4119509,
                'name' => 'Piraquara',
                'state_id' => 41,
            ),
            182 => 
            array (
                'id' => 4119608,
                'name' => 'Pitanga',
                'state_id' => 41,
            ),
            183 => 
            array (
                'id' => 4119657,
                'name' => 'Pitangueiras',
                'state_id' => 41,
            ),
            184 => 
            array (
                'id' => 4119707,
                'name' => 'Planaltina do Paraná',
                'state_id' => 41,
            ),
            185 => 
            array (
                'id' => 4119806,
                'name' => 'Planalto',
                'state_id' => 41,
            ),
            186 => 
            array (
                'id' => 4119905,
                'name' => 'Ponta Grossa',
                'state_id' => 41,
            ),
            187 => 
            array (
                'id' => 4119954,
                'name' => 'Pontal do Paraná',
                'state_id' => 41,
            ),
            188 => 
            array (
                'id' => 4120002,
                'name' => 'Porecatu',
                'state_id' => 41,
            ),
            189 => 
            array (
                'id' => 4120101,
                'name' => 'Porto Amazonas',
                'state_id' => 41,
            ),
            190 => 
            array (
                'id' => 4120150,
                'name' => 'Porto Barreiro',
                'state_id' => 41,
            ),
            191 => 
            array (
                'id' => 4120200,
                'name' => 'Porto Rico',
                'state_id' => 41,
            ),
            192 => 
            array (
                'id' => 4120309,
                'name' => 'Porto Vitória',
                'state_id' => 41,
            ),
            193 => 
            array (
                'id' => 4120333,
                'name' => 'Prado Ferreira',
                'state_id' => 41,
            ),
            194 => 
            array (
                'id' => 4120358,
                'name' => 'Pranchita',
                'state_id' => 41,
            ),
            195 => 
            array (
                'id' => 4120408,
                'name' => 'Presidente Castelo Branco',
                'state_id' => 41,
            ),
            196 => 
            array (
                'id' => 4120507,
                'name' => 'Primeiro de Maio',
                'state_id' => 41,
            ),
            197 => 
            array (
                'id' => 4120606,
                'name' => 'Prudentópolis',
                'state_id' => 41,
            ),
            198 => 
            array (
                'id' => 4120655,
                'name' => 'Quarto Centenário',
                'state_id' => 41,
            ),
            199 => 
            array (
                'id' => 4120705,
                'name' => 'Quatiguá',
                'state_id' => 41,
            ),
            200 => 
            array (
                'id' => 4120804,
                'name' => 'Quatro Barras',
                'state_id' => 41,
            ),
            201 => 
            array (
                'id' => 4120853,
                'name' => 'Quatro Pontes',
                'state_id' => 41,
            ),
            202 => 
            array (
                'id' => 4120903,
                'name' => 'Quedas do Iguaçu',
                'state_id' => 41,
            ),
            203 => 
            array (
                'id' => 4121000,
                'name' => 'Querência do Norte',
                'state_id' => 41,
            ),
            204 => 
            array (
                'id' => 4121109,
                'name' => 'Quinta do Sol',
                'state_id' => 41,
            ),
            205 => 
            array (
                'id' => 4121208,
                'name' => 'Quitandinha',
                'state_id' => 41,
            ),
            206 => 
            array (
                'id' => 4121257,
                'name' => 'Ramilândia',
                'state_id' => 41,
            ),
            207 => 
            array (
                'id' => 4121307,
                'name' => 'Rancho Alegre',
                'state_id' => 41,
            ),
            208 => 
            array (
                'id' => 4121356,
                'name' => 'Rancho Alegre D\'Oeste',
                'state_id' => 41,
            ),
            209 => 
            array (
                'id' => 4121406,
                'name' => 'Realeza',
                'state_id' => 41,
            ),
            210 => 
            array (
                'id' => 4121505,
                'name' => 'Rebouças',
                'state_id' => 41,
            ),
            211 => 
            array (
                'id' => 4121604,
                'name' => 'Renascença',
                'state_id' => 41,
            ),
            212 => 
            array (
                'id' => 4121703,
                'name' => 'Reserva',
                'state_id' => 41,
            ),
            213 => 
            array (
                'id' => 4121752,
                'name' => 'Reserva do Iguaçu',
                'state_id' => 41,
            ),
            214 => 
            array (
                'id' => 4121802,
                'name' => 'Ribeirão Claro',
                'state_id' => 41,
            ),
            215 => 
            array (
                'id' => 4121901,
                'name' => 'Ribeirão do Pinhal',
                'state_id' => 41,
            ),
            216 => 
            array (
                'id' => 4122008,
                'name' => 'Rio Azul',
                'state_id' => 41,
            ),
            217 => 
            array (
                'id' => 4122107,
                'name' => 'Rio Bom',
                'state_id' => 41,
            ),
            218 => 
            array (
                'id' => 4122156,
                'name' => 'Rio Bonito do Iguaçu',
                'state_id' => 41,
            ),
            219 => 
            array (
                'id' => 4122172,
                'name' => 'Rio Branco do Ivaí',
                'state_id' => 41,
            ),
            220 => 
            array (
                'id' => 4122206,
                'name' => 'Rio Branco do Sul',
                'state_id' => 41,
            ),
            221 => 
            array (
                'id' => 4122305,
                'name' => 'Rio Negro',
                'state_id' => 41,
            ),
            222 => 
            array (
                'id' => 4122404,
                'name' => 'Rolândia',
                'state_id' => 41,
            ),
            223 => 
            array (
                'id' => 4122503,
                'name' => 'Roncador',
                'state_id' => 41,
            ),
            224 => 
            array (
                'id' => 4122602,
                'name' => 'Rondon',
                'state_id' => 41,
            ),
            225 => 
            array (
                'id' => 4122651,
                'name' => 'Rosário do Ivaí',
                'state_id' => 41,
            ),
            226 => 
            array (
                'id' => 4122701,
                'name' => 'Sabáudia',
                'state_id' => 41,
            ),
            227 => 
            array (
                'id' => 4122800,
                'name' => 'Salgado Filho',
                'state_id' => 41,
            ),
            228 => 
            array (
                'id' => 4122909,
                'name' => 'Salto do Itararé',
                'state_id' => 41,
            ),
            229 => 
            array (
                'id' => 4123006,
                'name' => 'Salto do Lontra',
                'state_id' => 41,
            ),
            230 => 
            array (
                'id' => 4123105,
                'name' => 'Santa Amélia',
                'state_id' => 41,
            ),
            231 => 
            array (
                'id' => 4123204,
                'name' => 'Santa Cecília do Pavão',
                'state_id' => 41,
            ),
            232 => 
            array (
                'id' => 4123303,
                'name' => 'Santa Cruz de Monte Castelo',
                'state_id' => 41,
            ),
            233 => 
            array (
                'id' => 4123402,
                'name' => 'Santa Fé',
                'state_id' => 41,
            ),
            234 => 
            array (
                'id' => 4123501,
                'name' => 'Santa Helena',
                'state_id' => 41,
            ),
            235 => 
            array (
                'id' => 4123600,
                'name' => 'Santa Inês',
                'state_id' => 41,
            ),
            236 => 
            array (
                'id' => 4123709,
                'name' => 'Santa Isabel do Ivaí',
                'state_id' => 41,
            ),
            237 => 
            array (
                'id' => 4123808,
                'name' => 'Santa Izabel do Oeste',
                'state_id' => 41,
            ),
            238 => 
            array (
                'id' => 4123824,
                'name' => 'Santa Lúcia',
                'state_id' => 41,
            ),
            239 => 
            array (
                'id' => 4123857,
                'name' => 'Santa Maria do Oeste',
                'state_id' => 41,
            ),
            240 => 
            array (
                'id' => 4123907,
                'name' => 'Santa Mariana',
                'state_id' => 41,
            ),
            241 => 
            array (
                'id' => 4123956,
                'name' => 'Santa Mônica',
                'state_id' => 41,
            ),
            242 => 
            array (
                'id' => 4124004,
                'name' => 'Santana do Itararé',
                'state_id' => 41,
            ),
            243 => 
            array (
                'id' => 4124020,
                'name' => 'Santa Tereza do Oeste',
                'state_id' => 41,
            ),
            244 => 
            array (
                'id' => 4124053,
                'name' => 'Santa Terezinha de Itaipu',
                'state_id' => 41,
            ),
            245 => 
            array (
                'id' => 4124103,
                'name' => 'Santo Antônio da Platina',
                'state_id' => 41,
            ),
            246 => 
            array (
                'id' => 4124202,
                'name' => 'Santo Antônio do Caiuá',
                'state_id' => 41,
            ),
            247 => 
            array (
                'id' => 4124301,
                'name' => 'Santo Antônio do Paraíso',
                'state_id' => 41,
            ),
            248 => 
            array (
                'id' => 4124400,
                'name' => 'Santo Antônio do Sudoeste',
                'state_id' => 41,
            ),
            249 => 
            array (
                'id' => 4124509,
                'name' => 'Santo Inácio',
                'state_id' => 41,
            ),
            250 => 
            array (
                'id' => 4124608,
                'name' => 'São Carlos do Ivaí',
                'state_id' => 41,
            ),
            251 => 
            array (
                'id' => 4124707,
                'name' => 'São Jerônimo da Serra',
                'state_id' => 41,
            ),
            252 => 
            array (
                'id' => 4124806,
                'name' => 'São João',
                'state_id' => 41,
            ),
            253 => 
            array (
                'id' => 4124905,
                'name' => 'São João do Caiuá',
                'state_id' => 41,
            ),
            254 => 
            array (
                'id' => 4125001,
                'name' => 'São João do Ivaí',
                'state_id' => 41,
            ),
            255 => 
            array (
                'id' => 4125100,
                'name' => 'São João do Triunfo',
                'state_id' => 41,
            ),
            256 => 
            array (
                'id' => 4125209,
                'name' => 'São Jorge d\'Oeste',
                'state_id' => 41,
            ),
            257 => 
            array (
                'id' => 4125308,
                'name' => 'São Jorge do Ivaí',
                'state_id' => 41,
            ),
            258 => 
            array (
                'id' => 4125357,
                'name' => 'São Jorge do Patrocínio',
                'state_id' => 41,
            ),
            259 => 
            array (
                'id' => 4125407,
                'name' => 'São José da Boa Vista',
                'state_id' => 41,
            ),
            260 => 
            array (
                'id' => 4125456,
                'name' => 'São José das Palmeiras',
                'state_id' => 41,
            ),
            261 => 
            array (
                'id' => 4125506,
                'name' => 'São José dos Pinhais',
                'state_id' => 41,
            ),
            262 => 
            array (
                'id' => 4125555,
                'name' => 'São Manoel do Paraná',
                'state_id' => 41,
            ),
            263 => 
            array (
                'id' => 4125605,
                'name' => 'São Mateus do Sul',
                'state_id' => 41,
            ),
            264 => 
            array (
                'id' => 4125704,
                'name' => 'São Miguel do Iguaçu',
                'state_id' => 41,
            ),
            265 => 
            array (
                'id' => 4125753,
                'name' => 'São Pedro do Iguaçu',
                'state_id' => 41,
            ),
            266 => 
            array (
                'id' => 4125803,
                'name' => 'São Pedro do Ivaí',
                'state_id' => 41,
            ),
            267 => 
            array (
                'id' => 4125902,
                'name' => 'São Pedro do Paraná',
                'state_id' => 41,
            ),
            268 => 
            array (
                'id' => 4126009,
                'name' => 'São Sebastião da Amoreira',
                'state_id' => 41,
            ),
            269 => 
            array (
                'id' => 4126108,
                'name' => 'São Tomé',
                'state_id' => 41,
            ),
            270 => 
            array (
                'id' => 4126207,
                'name' => 'Sapopema',
                'state_id' => 41,
            ),
            271 => 
            array (
                'id' => 4126256,
                'name' => 'Sarandi',
                'state_id' => 41,
            ),
            272 => 
            array (
                'id' => 4126272,
                'name' => 'Saudade do Iguaçu',
                'state_id' => 41,
            ),
            273 => 
            array (
                'id' => 4126306,
                'name' => 'Sengés',
                'state_id' => 41,
            ),
            274 => 
            array (
                'id' => 4126355,
                'name' => 'Serranópolis do Iguaçu',
                'state_id' => 41,
            ),
            275 => 
            array (
                'id' => 4126405,
                'name' => 'Sertaneja',
                'state_id' => 41,
            ),
            276 => 
            array (
                'id' => 4126504,
                'name' => 'Sertanópolis',
                'state_id' => 41,
            ),
            277 => 
            array (
                'id' => 4126603,
                'name' => 'Siqueira Campos',
                'state_id' => 41,
            ),
            278 => 
            array (
                'id' => 4126652,
                'name' => 'Sulina',
                'state_id' => 41,
            ),
            279 => 
            array (
                'id' => 4126678,
                'name' => 'Tamarana',
                'state_id' => 41,
            ),
            280 => 
            array (
                'id' => 4126702,
                'name' => 'Tamboara',
                'state_id' => 41,
            ),
            281 => 
            array (
                'id' => 4126801,
                'name' => 'Tapejara',
                'state_id' => 41,
            ),
            282 => 
            array (
                'id' => 4126900,
                'name' => 'Tapira',
                'state_id' => 41,
            ),
            283 => 
            array (
                'id' => 4127007,
                'name' => 'Teixeira Soares',
                'state_id' => 41,
            ),
            284 => 
            array (
                'id' => 4127106,
                'name' => 'Telêmaco Borba',
                'state_id' => 41,
            ),
            285 => 
            array (
                'id' => 4127205,
                'name' => 'Terra Boa',
                'state_id' => 41,
            ),
            286 => 
            array (
                'id' => 4127304,
                'name' => 'Terra Rica',
                'state_id' => 41,
            ),
            287 => 
            array (
                'id' => 4127403,
                'name' => 'Terra Roxa',
                'state_id' => 41,
            ),
            288 => 
            array (
                'id' => 4127502,
                'name' => 'Tibagi',
                'state_id' => 41,
            ),
            289 => 
            array (
                'id' => 4127601,
                'name' => 'Tijucas do Sul',
                'state_id' => 41,
            ),
            290 => 
            array (
                'id' => 4127700,
                'name' => 'Toledo',
                'state_id' => 41,
            ),
            291 => 
            array (
                'id' => 4127809,
                'name' => 'Tomazina',
                'state_id' => 41,
            ),
            292 => 
            array (
                'id' => 4127858,
                'name' => 'Três Barras do Paraná',
                'state_id' => 41,
            ),
            293 => 
            array (
                'id' => 4127882,
                'name' => 'Tunas do Paraná',
                'state_id' => 41,
            ),
            294 => 
            array (
                'id' => 4127908,
                'name' => 'Tuneiras do Oeste',
                'state_id' => 41,
            ),
            295 => 
            array (
                'id' => 4127957,
                'name' => 'Tupãssi',
                'state_id' => 41,
            ),
            296 => 
            array (
                'id' => 4127965,
                'name' => 'Turvo',
                'state_id' => 41,
            ),
            297 => 
            array (
                'id' => 4128005,
                'name' => 'Ubiratã',
                'state_id' => 41,
            ),
            298 => 
            array (
                'id' => 4128104,
                'name' => 'Umuarama',
                'state_id' => 41,
            ),
            299 => 
            array (
                'id' => 4128203,
                'name' => 'União da Vitória',
                'state_id' => 41,
            ),
            300 => 
            array (
                'id' => 4128302,
                'name' => 'Uniflor',
                'state_id' => 41,
            ),
            301 => 
            array (
                'id' => 4128401,
                'name' => 'Uraí',
                'state_id' => 41,
            ),
            302 => 
            array (
                'id' => 4128500,
                'name' => 'Wenceslau Braz',
                'state_id' => 41,
            ),
            303 => 
            array (
                'id' => 4128534,
                'name' => 'Ventania',
                'state_id' => 41,
            ),
            304 => 
            array (
                'id' => 4128559,
                'name' => 'Vera Cruz do Oeste',
                'state_id' => 41,
            ),
            305 => 
            array (
                'id' => 4128609,
                'name' => 'Verê',
                'state_id' => 41,
            ),
            306 => 
            array (
                'id' => 4128625,
                'name' => 'Alto Paraíso',
                'state_id' => 41,
            ),
            307 => 
            array (
                'id' => 4128633,
                'name' => 'Doutor Ulysses',
                'state_id' => 41,
            ),
            308 => 
            array (
                'id' => 4128658,
                'name' => 'Virmond',
                'state_id' => 41,
            ),
            309 => 
            array (
                'id' => 4128708,
                'name' => 'Vitorino',
                'state_id' => 41,
            ),
            310 => 
            array (
                'id' => 4128807,
                'name' => 'Xambrê',
                'state_id' => 41,
            ),
            311 => 
            array (
                'id' => 4200051,
                'name' => 'Abdon Batista',
                'state_id' => 42,
            ),
            312 => 
            array (
                'id' => 4200101,
                'name' => 'Abelardo Luz',
                'state_id' => 42,
            ),
            313 => 
            array (
                'id' => 4200200,
                'name' => 'Agrolândia',
                'state_id' => 42,
            ),
            314 => 
            array (
                'id' => 4200309,
                'name' => 'Agronômica',
                'state_id' => 42,
            ),
            315 => 
            array (
                'id' => 4200408,
                'name' => 'Água Doce',
                'state_id' => 42,
            ),
            316 => 
            array (
                'id' => 4200507,
                'name' => 'Águas de Chapecó',
                'state_id' => 42,
            ),
            317 => 
            array (
                'id' => 4200556,
                'name' => 'Águas Frias',
                'state_id' => 42,
            ),
            318 => 
            array (
                'id' => 4200606,
                'name' => 'Águas Mornas',
                'state_id' => 42,
            ),
            319 => 
            array (
                'id' => 4200705,
                'name' => 'Alfredo Wagner',
                'state_id' => 42,
            ),
            320 => 
            array (
                'id' => 4200754,
                'name' => 'Alto Bela Vista',
                'state_id' => 42,
            ),
            321 => 
            array (
                'id' => 4200804,
                'name' => 'Anchieta',
                'state_id' => 42,
            ),
            322 => 
            array (
                'id' => 4200903,
                'name' => 'Angelina',
                'state_id' => 42,
            ),
            323 => 
            array (
                'id' => 4201000,
                'name' => 'Anita Garibaldi',
                'state_id' => 42,
            ),
            324 => 
            array (
                'id' => 4201109,
                'name' => 'Anitápolis',
                'state_id' => 42,
            ),
            325 => 
            array (
                'id' => 4201208,
                'name' => 'Antônio Carlos',
                'state_id' => 42,
            ),
            326 => 
            array (
                'id' => 4201257,
                'name' => 'Apiúna',
                'state_id' => 42,
            ),
            327 => 
            array (
                'id' => 4201273,
                'name' => 'Arabutã',
                'state_id' => 42,
            ),
            328 => 
            array (
                'id' => 4201307,
                'name' => 'Araquari',
                'state_id' => 42,
            ),
            329 => 
            array (
                'id' => 4201406,
                'name' => 'Araranguá',
                'state_id' => 42,
            ),
            330 => 
            array (
                'id' => 4201505,
                'name' => 'Armazém',
                'state_id' => 42,
            ),
            331 => 
            array (
                'id' => 4201604,
                'name' => 'Arroio Trinta',
                'state_id' => 42,
            ),
            332 => 
            array (
                'id' => 4201653,
                'name' => 'Arvoredo',
                'state_id' => 42,
            ),
            333 => 
            array (
                'id' => 4201703,
                'name' => 'Ascurra',
                'state_id' => 42,
            ),
            334 => 
            array (
                'id' => 4201802,
                'name' => 'Atalanta',
                'state_id' => 42,
            ),
            335 => 
            array (
                'id' => 4201901,
                'name' => 'Aurora',
                'state_id' => 42,
            ),
            336 => 
            array (
                'id' => 4201950,
                'name' => 'Balneário Arroio do Silva',
                'state_id' => 42,
            ),
            337 => 
            array (
                'id' => 4202008,
                'name' => 'Balneário Camboriú',
                'state_id' => 42,
            ),
            338 => 
            array (
                'id' => 4202057,
                'name' => 'Balneário Barra do Sul',
                'state_id' => 42,
            ),
            339 => 
            array (
                'id' => 4202073,
                'name' => 'Balneário Gaivota',
                'state_id' => 42,
            ),
            340 => 
            array (
                'id' => 4202081,
                'name' => 'Bandeirante',
                'state_id' => 42,
            ),
            341 => 
            array (
                'id' => 4202099,
                'name' => 'Barra Bonita',
                'state_id' => 42,
            ),
            342 => 
            array (
                'id' => 4202107,
                'name' => 'Barra Velha',
                'state_id' => 42,
            ),
            343 => 
            array (
                'id' => 4202131,
                'name' => 'Bela Vista do Toldo',
                'state_id' => 42,
            ),
            344 => 
            array (
                'id' => 4202156,
                'name' => 'Belmonte',
                'state_id' => 42,
            ),
            345 => 
            array (
                'id' => 4202206,
                'name' => 'Benedito Novo',
                'state_id' => 42,
            ),
            346 => 
            array (
                'id' => 4202305,
                'name' => 'Biguaçu',
                'state_id' => 42,
            ),
            347 => 
            array (
                'id' => 4202404,
                'name' => 'Blumenau',
                'state_id' => 42,
            ),
            348 => 
            array (
                'id' => 4202438,
                'name' => 'Bocaina do Sul',
                'state_id' => 42,
            ),
            349 => 
            array (
                'id' => 4202453,
                'name' => 'Bombinhas',
                'state_id' => 42,
            ),
            350 => 
            array (
                'id' => 4202503,
                'name' => 'Bom Jardim da Serra',
                'state_id' => 42,
            ),
            351 => 
            array (
                'id' => 4202537,
                'name' => 'Bom Jesus',
                'state_id' => 42,
            ),
            352 => 
            array (
                'id' => 4202578,
                'name' => 'Bom Jesus do Oeste',
                'state_id' => 42,
            ),
            353 => 
            array (
                'id' => 4202602,
                'name' => 'Bom Retiro',
                'state_id' => 42,
            ),
            354 => 
            array (
                'id' => 4202701,
                'name' => 'Botuverá',
                'state_id' => 42,
            ),
            355 => 
            array (
                'id' => 4202800,
                'name' => 'Braço do Norte',
                'state_id' => 42,
            ),
            356 => 
            array (
                'id' => 4202859,
                'name' => 'Braço do Trombudo',
                'state_id' => 42,
            ),
            357 => 
            array (
                'id' => 4202875,
                'name' => 'Brunópolis',
                'state_id' => 42,
            ),
            358 => 
            array (
                'id' => 4202909,
                'name' => 'Brusque',
                'state_id' => 42,
            ),
            359 => 
            array (
                'id' => 4203006,
                'name' => 'Caçador',
                'state_id' => 42,
            ),
            360 => 
            array (
                'id' => 4203105,
                'name' => 'Caibi',
                'state_id' => 42,
            ),
            361 => 
            array (
                'id' => 4203154,
                'name' => 'Calmon',
                'state_id' => 42,
            ),
            362 => 
            array (
                'id' => 4203204,
                'name' => 'Camboriú',
                'state_id' => 42,
            ),
            363 => 
            array (
                'id' => 4203253,
                'name' => 'Capão Alto',
                'state_id' => 42,
            ),
            364 => 
            array (
                'id' => 4203303,
                'name' => 'Campo Alegre',
                'state_id' => 42,
            ),
            365 => 
            array (
                'id' => 4203402,
                'name' => 'Campo Belo do Sul',
                'state_id' => 42,
            ),
            366 => 
            array (
                'id' => 4203501,
                'name' => 'Campo Erê',
                'state_id' => 42,
            ),
            367 => 
            array (
                'id' => 4203600,
                'name' => 'Campos Novos',
                'state_id' => 42,
            ),
            368 => 
            array (
                'id' => 4203709,
                'name' => 'Canelinha',
                'state_id' => 42,
            ),
            369 => 
            array (
                'id' => 4203808,
                'name' => 'Canoinhas',
                'state_id' => 42,
            ),
            370 => 
            array (
                'id' => 4203907,
                'name' => 'Capinzal',
                'state_id' => 42,
            ),
            371 => 
            array (
                'id' => 4203956,
                'name' => 'Capivari de Baixo',
                'state_id' => 42,
            ),
            372 => 
            array (
                'id' => 4204004,
                'name' => 'Catanduvas',
                'state_id' => 42,
            ),
            373 => 
            array (
                'id' => 4204103,
                'name' => 'Caxambu do Sul',
                'state_id' => 42,
            ),
            374 => 
            array (
                'id' => 4204152,
                'name' => 'Celso Ramos',
                'state_id' => 42,
            ),
            375 => 
            array (
                'id' => 4204178,
                'name' => 'Cerro Negro',
                'state_id' => 42,
            ),
            376 => 
            array (
                'id' => 4204194,
                'name' => 'Chapadão do Lageado',
                'state_id' => 42,
            ),
            377 => 
            array (
                'id' => 4204202,
                'name' => 'Chapecó',
                'state_id' => 42,
            ),
            378 => 
            array (
                'id' => 4204251,
                'name' => 'Cocal do Sul',
                'state_id' => 42,
            ),
            379 => 
            array (
                'id' => 4204301,
                'name' => 'Concórdia',
                'state_id' => 42,
            ),
            380 => 
            array (
                'id' => 4204350,
                'name' => 'Cordilheira Alta',
                'state_id' => 42,
            ),
            381 => 
            array (
                'id' => 4204400,
                'name' => 'Coronel Freitas',
                'state_id' => 42,
            ),
            382 => 
            array (
                'id' => 4204459,
                'name' => 'Coronel Martins',
                'state_id' => 42,
            ),
            383 => 
            array (
                'id' => 4204509,
                'name' => 'Corupá',
                'state_id' => 42,
            ),
            384 => 
            array (
                'id' => 4204558,
                'name' => 'Correia Pinto',
                'state_id' => 42,
            ),
            385 => 
            array (
                'id' => 4204608,
                'name' => 'Criciúma',
                'state_id' => 42,
            ),
            386 => 
            array (
                'id' => 4204707,
                'name' => 'Cunha Porã',
                'state_id' => 42,
            ),
            387 => 
            array (
                'id' => 4204756,
                'name' => 'Cunhataí',
                'state_id' => 42,
            ),
            388 => 
            array (
                'id' => 4204806,
                'name' => 'Curitibanos',
                'state_id' => 42,
            ),
            389 => 
            array (
                'id' => 4204905,
                'name' => 'Descanso',
                'state_id' => 42,
            ),
            390 => 
            array (
                'id' => 4205001,
                'name' => 'Dionísio Cerqueira',
                'state_id' => 42,
            ),
            391 => 
            array (
                'id' => 4205100,
                'name' => 'Dona Emma',
                'state_id' => 42,
            ),
            392 => 
            array (
                'id' => 4205159,
                'name' => 'Doutor Pedrinho',
                'state_id' => 42,
            ),
            393 => 
            array (
                'id' => 4205175,
                'name' => 'Entre Rios',
                'state_id' => 42,
            ),
            394 => 
            array (
                'id' => 4205191,
                'name' => 'Ermo',
                'state_id' => 42,
            ),
            395 => 
            array (
                'id' => 4205209,
                'name' => 'Erval Velho',
                'state_id' => 42,
            ),
            396 => 
            array (
                'id' => 4205308,
                'name' => 'Faxinal dos Guedes',
                'state_id' => 42,
            ),
            397 => 
            array (
                'id' => 4205357,
                'name' => 'Flor do Sertão',
                'state_id' => 42,
            ),
            398 => 
            array (
                'id' => 4205407,
                'name' => 'Florianópolis',
                'state_id' => 42,
            ),
            399 => 
            array (
                'id' => 4205431,
                'name' => 'Formosa do Sul',
                'state_id' => 42,
            ),
            400 => 
            array (
                'id' => 4205456,
                'name' => 'Forquilhinha',
                'state_id' => 42,
            ),
            401 => 
            array (
                'id' => 4205506,
                'name' => 'Fraiburgo',
                'state_id' => 42,
            ),
            402 => 
            array (
                'id' => 4205555,
                'name' => 'Frei Rogério',
                'state_id' => 42,
            ),
            403 => 
            array (
                'id' => 4205605,
                'name' => 'Galvão',
                'state_id' => 42,
            ),
            404 => 
            array (
                'id' => 4205704,
                'name' => 'Garopaba',
                'state_id' => 42,
            ),
            405 => 
            array (
                'id' => 4205803,
                'name' => 'Garuva',
                'state_id' => 42,
            ),
            406 => 
            array (
                'id' => 4205902,
                'name' => 'Gaspar',
                'state_id' => 42,
            ),
            407 => 
            array (
                'id' => 4206009,
                'name' => 'Governador Celso Ramos',
                'state_id' => 42,
            ),
            408 => 
            array (
                'id' => 4206108,
                'name' => 'Grão-Pará',
                'state_id' => 42,
            ),
            409 => 
            array (
                'id' => 4206207,
                'name' => 'Gravatal',
                'state_id' => 42,
            ),
            410 => 
            array (
                'id' => 4206306,
                'name' => 'Guabiruba',
                'state_id' => 42,
            ),
            411 => 
            array (
                'id' => 4206405,
                'name' => 'Guaraciaba',
                'state_id' => 42,
            ),
            412 => 
            array (
                'id' => 4206504,
                'name' => 'Guaramirim',
                'state_id' => 42,
            ),
            413 => 
            array (
                'id' => 4206603,
                'name' => 'Guarujá do Sul',
                'state_id' => 42,
            ),
            414 => 
            array (
                'id' => 4206652,
                'name' => 'Guatambú',
                'state_id' => 42,
            ),
            415 => 
            array (
                'id' => 4206702,
                'name' => 'Herval d\'Oeste',
                'state_id' => 42,
            ),
            416 => 
            array (
                'id' => 4206751,
                'name' => 'Ibiam',
                'state_id' => 42,
            ),
            417 => 
            array (
                'id' => 4206801,
                'name' => 'Ibicaré',
                'state_id' => 42,
            ),
            418 => 
            array (
                'id' => 4206900,
                'name' => 'Ibirama',
                'state_id' => 42,
            ),
            419 => 
            array (
                'id' => 4207007,
                'name' => 'Içara',
                'state_id' => 42,
            ),
            420 => 
            array (
                'id' => 4207106,
                'name' => 'Ilhota',
                'state_id' => 42,
            ),
            421 => 
            array (
                'id' => 4207205,
                'name' => 'Imaruí',
                'state_id' => 42,
            ),
            422 => 
            array (
                'id' => 4207304,
                'name' => 'Imbituba',
                'state_id' => 42,
            ),
            423 => 
            array (
                'id' => 4207403,
                'name' => 'Imbuia',
                'state_id' => 42,
            ),
            424 => 
            array (
                'id' => 4207502,
                'name' => 'Indaial',
                'state_id' => 42,
            ),
            425 => 
            array (
                'id' => 4207577,
                'name' => 'Iomerê',
                'state_id' => 42,
            ),
            426 => 
            array (
                'id' => 4207601,
                'name' => 'Ipira',
                'state_id' => 42,
            ),
            427 => 
            array (
                'id' => 4207650,
                'name' => 'Iporã do Oeste',
                'state_id' => 42,
            ),
            428 => 
            array (
                'id' => 4207684,
                'name' => 'Ipuaçu',
                'state_id' => 42,
            ),
            429 => 
            array (
                'id' => 4207700,
                'name' => 'Ipumirim',
                'state_id' => 42,
            ),
            430 => 
            array (
                'id' => 4207759,
                'name' => 'Iraceminha',
                'state_id' => 42,
            ),
            431 => 
            array (
                'id' => 4207809,
                'name' => 'Irani',
                'state_id' => 42,
            ),
            432 => 
            array (
                'id' => 4207858,
                'name' => 'Irati',
                'state_id' => 42,
            ),
            433 => 
            array (
                'id' => 4207908,
                'name' => 'Irineópolis',
                'state_id' => 42,
            ),
            434 => 
            array (
                'id' => 4208005,
                'name' => 'Itá',
                'state_id' => 42,
            ),
            435 => 
            array (
                'id' => 4208104,
                'name' => 'Itaiópolis',
                'state_id' => 42,
            ),
            436 => 
            array (
                'id' => 4208203,
                'name' => 'Itajaí',
                'state_id' => 42,
            ),
            437 => 
            array (
                'id' => 4208302,
                'name' => 'Itapema',
                'state_id' => 42,
            ),
            438 => 
            array (
                'id' => 4208401,
                'name' => 'Itapiranga',
                'state_id' => 42,
            ),
            439 => 
            array (
                'id' => 4208450,
                'name' => 'Itapoá',
                'state_id' => 42,
            ),
            440 => 
            array (
                'id' => 4208500,
                'name' => 'Ituporanga',
                'state_id' => 42,
            ),
            441 => 
            array (
                'id' => 4208609,
                'name' => 'Jaborá',
                'state_id' => 42,
            ),
            442 => 
            array (
                'id' => 4208708,
                'name' => 'Jacinto Machado',
                'state_id' => 42,
            ),
            443 => 
            array (
                'id' => 4208807,
                'name' => 'Jaguaruna',
                'state_id' => 42,
            ),
            444 => 
            array (
                'id' => 4208906,
                'name' => 'Jaraguá do Sul',
                'state_id' => 42,
            ),
            445 => 
            array (
                'id' => 4208955,
                'name' => 'Jardinópolis',
                'state_id' => 42,
            ),
            446 => 
            array (
                'id' => 4209003,
                'name' => 'Joaçaba',
                'state_id' => 42,
            ),
            447 => 
            array (
                'id' => 4209102,
                'name' => 'Joinville',
                'state_id' => 42,
            ),
            448 => 
            array (
                'id' => 4209151,
                'name' => 'José Boiteux',
                'state_id' => 42,
            ),
            449 => 
            array (
                'id' => 4209177,
                'name' => 'Jupiá',
                'state_id' => 42,
            ),
            450 => 
            array (
                'id' => 4209201,
                'name' => 'Lacerdópolis',
                'state_id' => 42,
            ),
            451 => 
            array (
                'id' => 4209300,
                'name' => 'Lages',
                'state_id' => 42,
            ),
            452 => 
            array (
                'id' => 4209409,
                'name' => 'Laguna',
                'state_id' => 42,
            ),
            453 => 
            array (
                'id' => 4209458,
                'name' => 'Lajeado Grande',
                'state_id' => 42,
            ),
            454 => 
            array (
                'id' => 4209508,
                'name' => 'Laurentino',
                'state_id' => 42,
            ),
            455 => 
            array (
                'id' => 4209607,
                'name' => 'Lauro Müller',
                'state_id' => 42,
            ),
            456 => 
            array (
                'id' => 4209706,
                'name' => 'Lebon Régis',
                'state_id' => 42,
            ),
            457 => 
            array (
                'id' => 4209805,
                'name' => 'Leoberto Leal',
                'state_id' => 42,
            ),
            458 => 
            array (
                'id' => 4209854,
                'name' => 'Lindóia do Sul',
                'state_id' => 42,
            ),
            459 => 
            array (
                'id' => 4209904,
                'name' => 'Lontras',
                'state_id' => 42,
            ),
            460 => 
            array (
                'id' => 4210001,
                'name' => 'Luiz Alves',
                'state_id' => 42,
            ),
            461 => 
            array (
                'id' => 4210035,
                'name' => 'Luzerna',
                'state_id' => 42,
            ),
            462 => 
            array (
                'id' => 4210050,
                'name' => 'Macieira',
                'state_id' => 42,
            ),
            463 => 
            array (
                'id' => 4210100,
                'name' => 'Mafra',
                'state_id' => 42,
            ),
            464 => 
            array (
                'id' => 4210209,
                'name' => 'Major Gercino',
                'state_id' => 42,
            ),
            465 => 
            array (
                'id' => 4210308,
                'name' => 'Major Vieira',
                'state_id' => 42,
            ),
            466 => 
            array (
                'id' => 4210407,
                'name' => 'Maracajá',
                'state_id' => 42,
            ),
            467 => 
            array (
                'id' => 4210506,
                'name' => 'Maravilha',
                'state_id' => 42,
            ),
            468 => 
            array (
                'id' => 4210555,
                'name' => 'Marema',
                'state_id' => 42,
            ),
            469 => 
            array (
                'id' => 4210605,
                'name' => 'Massaranduba',
                'state_id' => 42,
            ),
            470 => 
            array (
                'id' => 4210704,
                'name' => 'Matos Costa',
                'state_id' => 42,
            ),
            471 => 
            array (
                'id' => 4210803,
                'name' => 'Meleiro',
                'state_id' => 42,
            ),
            472 => 
            array (
                'id' => 4210852,
                'name' => 'Mirim Doce',
                'state_id' => 42,
            ),
            473 => 
            array (
                'id' => 4210902,
                'name' => 'Modelo',
                'state_id' => 42,
            ),
            474 => 
            array (
                'id' => 4211009,
                'name' => 'Mondaí',
                'state_id' => 42,
            ),
            475 => 
            array (
                'id' => 4211058,
                'name' => 'Monte Carlo',
                'state_id' => 42,
            ),
            476 => 
            array (
                'id' => 4211108,
                'name' => 'Monte Castelo',
                'state_id' => 42,
            ),
            477 => 
            array (
                'id' => 4211207,
                'name' => 'Morro da Fumaça',
                'state_id' => 42,
            ),
            478 => 
            array (
                'id' => 4211256,
                'name' => 'Morro Grande',
                'state_id' => 42,
            ),
            479 => 
            array (
                'id' => 4211306,
                'name' => 'Navegantes',
                'state_id' => 42,
            ),
            480 => 
            array (
                'id' => 4211405,
                'name' => 'Nova Erechim',
                'state_id' => 42,
            ),
            481 => 
            array (
                'id' => 4211454,
                'name' => 'Nova Itaberaba',
                'state_id' => 42,
            ),
            482 => 
            array (
                'id' => 4211504,
                'name' => 'Nova Trento',
                'state_id' => 42,
            ),
            483 => 
            array (
                'id' => 4211603,
                'name' => 'Nova Veneza',
                'state_id' => 42,
            ),
            484 => 
            array (
                'id' => 4211652,
                'name' => 'Novo Horizonte',
                'state_id' => 42,
            ),
            485 => 
            array (
                'id' => 4211702,
                'name' => 'Orleans',
                'state_id' => 42,
            ),
            486 => 
            array (
                'id' => 4211751,
                'name' => 'Otacílio Costa',
                'state_id' => 42,
            ),
            487 => 
            array (
                'id' => 4211801,
                'name' => 'Ouro',
                'state_id' => 42,
            ),
            488 => 
            array (
                'id' => 4211850,
                'name' => 'Ouro Verde',
                'state_id' => 42,
            ),
            489 => 
            array (
                'id' => 4211876,
                'name' => 'Paial',
                'state_id' => 42,
            ),
            490 => 
            array (
                'id' => 4211892,
                'name' => 'Painel',
                'state_id' => 42,
            ),
            491 => 
            array (
                'id' => 4211900,
                'name' => 'Palhoça',
                'state_id' => 42,
            ),
            492 => 
            array (
                'id' => 4212007,
                'name' => 'Palma Sola',
                'state_id' => 42,
            ),
            493 => 
            array (
                'id' => 4212056,
                'name' => 'Palmeira',
                'state_id' => 42,
            ),
            494 => 
            array (
                'id' => 4212106,
                'name' => 'Palmitos',
                'state_id' => 42,
            ),
            495 => 
            array (
                'id' => 4212205,
                'name' => 'Papanduva',
                'state_id' => 42,
            ),
            496 => 
            array (
                'id' => 4212239,
                'name' => 'Paraíso',
                'state_id' => 42,
            ),
            497 => 
            array (
                'id' => 4212254,
                'name' => 'Passo de Torres',
                'state_id' => 42,
            ),
            498 => 
            array (
                'id' => 4212270,
                'name' => 'Passos Maia',
                'state_id' => 42,
            ),
            499 => 
            array (
                'id' => 4212304,
                'name' => 'Paulo Lopes',
                'state_id' => 42,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 4212403,
                'name' => 'Pedras Grandes',
                'state_id' => 42,
            ),
            1 => 
            array (
                'id' => 4212502,
                'name' => 'Penha',
                'state_id' => 42,
            ),
            2 => 
            array (
                'id' => 4212601,
                'name' => 'Peritiba',
                'state_id' => 42,
            ),
            3 => 
            array (
                'id' => 4212650,
                'name' => 'Pescaria Brava',
                'state_id' => 42,
            ),
            4 => 
            array (
                'id' => 4212700,
                'name' => 'Petrolândia',
                'state_id' => 42,
            ),
            5 => 
            array (
                'id' => 4212809,
                'name' => 'Balneário Piçarras',
                'state_id' => 42,
            ),
            6 => 
            array (
                'id' => 4212908,
                'name' => 'Pinhalzinho',
                'state_id' => 42,
            ),
            7 => 
            array (
                'id' => 4213005,
                'name' => 'Pinheiro Preto',
                'state_id' => 42,
            ),
            8 => 
            array (
                'id' => 4213104,
                'name' => 'Piratuba',
                'state_id' => 42,
            ),
            9 => 
            array (
                'id' => 4213153,
                'name' => 'Planalto Alegre',
                'state_id' => 42,
            ),
            10 => 
            array (
                'id' => 4213203,
                'name' => 'Pomerode',
                'state_id' => 42,
            ),
            11 => 
            array (
                'id' => 4213302,
                'name' => 'Ponte Alta',
                'state_id' => 42,
            ),
            12 => 
            array (
                'id' => 4213351,
                'name' => 'Ponte Alta do Norte',
                'state_id' => 42,
            ),
            13 => 
            array (
                'id' => 4213401,
                'name' => 'Ponte Serrada',
                'state_id' => 42,
            ),
            14 => 
            array (
                'id' => 4213500,
                'name' => 'Porto Belo',
                'state_id' => 42,
            ),
            15 => 
            array (
                'id' => 4213609,
                'name' => 'Porto União',
                'state_id' => 42,
            ),
            16 => 
            array (
                'id' => 4213708,
                'name' => 'Pouso Redondo',
                'state_id' => 42,
            ),
            17 => 
            array (
                'id' => 4213807,
                'name' => 'Praia Grande',
                'state_id' => 42,
            ),
            18 => 
            array (
                'id' => 4213906,
                'name' => 'Presidente Castello Branco',
                'state_id' => 42,
            ),
            19 => 
            array (
                'id' => 4214003,
                'name' => 'Presidente Getúlio',
                'state_id' => 42,
            ),
            20 => 
            array (
                'id' => 4214102,
                'name' => 'Presidente Nereu',
                'state_id' => 42,
            ),
            21 => 
            array (
                'id' => 4214151,
                'name' => 'Princesa',
                'state_id' => 42,
            ),
            22 => 
            array (
                'id' => 4214201,
                'name' => 'Quilombo',
                'state_id' => 42,
            ),
            23 => 
            array (
                'id' => 4214300,
                'name' => 'Rancho Queimado',
                'state_id' => 42,
            ),
            24 => 
            array (
                'id' => 4214409,
                'name' => 'Rio das Antas',
                'state_id' => 42,
            ),
            25 => 
            array (
                'id' => 4214508,
                'name' => 'Rio do Campo',
                'state_id' => 42,
            ),
            26 => 
            array (
                'id' => 4214607,
                'name' => 'Rio do Oeste',
                'state_id' => 42,
            ),
            27 => 
            array (
                'id' => 4214706,
                'name' => 'Rio dos Cedros',
                'state_id' => 42,
            ),
            28 => 
            array (
                'id' => 4214805,
                'name' => 'Rio do Sul',
                'state_id' => 42,
            ),
            29 => 
            array (
                'id' => 4214904,
                'name' => 'Rio Fortuna',
                'state_id' => 42,
            ),
            30 => 
            array (
                'id' => 4215000,
                'name' => 'Rio Negrinho',
                'state_id' => 42,
            ),
            31 => 
            array (
                'id' => 4215059,
                'name' => 'Rio Rufino',
                'state_id' => 42,
            ),
            32 => 
            array (
                'id' => 4215075,
                'name' => 'Riqueza',
                'state_id' => 42,
            ),
            33 => 
            array (
                'id' => 4215109,
                'name' => 'Rodeio',
                'state_id' => 42,
            ),
            34 => 
            array (
                'id' => 4215208,
                'name' => 'Romelândia',
                'state_id' => 42,
            ),
            35 => 
            array (
                'id' => 4215307,
                'name' => 'Salete',
                'state_id' => 42,
            ),
            36 => 
            array (
                'id' => 4215356,
                'name' => 'Saltinho',
                'state_id' => 42,
            ),
            37 => 
            array (
                'id' => 4215406,
                'name' => 'Salto Veloso',
                'state_id' => 42,
            ),
            38 => 
            array (
                'id' => 4215455,
                'name' => 'Sangão',
                'state_id' => 42,
            ),
            39 => 
            array (
                'id' => 4215505,
                'name' => 'Santa Cecília',
                'state_id' => 42,
            ),
            40 => 
            array (
                'id' => 4215554,
                'name' => 'Santa Helena',
                'state_id' => 42,
            ),
            41 => 
            array (
                'id' => 4215604,
                'name' => 'Santa Rosa de Lima',
                'state_id' => 42,
            ),
            42 => 
            array (
                'id' => 4215653,
                'name' => 'Santa Rosa do Sul',
                'state_id' => 42,
            ),
            43 => 
            array (
                'id' => 4215679,
                'name' => 'Santa Terezinha',
                'state_id' => 42,
            ),
            44 => 
            array (
                'id' => 4215687,
                'name' => 'Santa Terezinha do Progresso',
                'state_id' => 42,
            ),
            45 => 
            array (
                'id' => 4215695,
                'name' => 'Santiago do Sul',
                'state_id' => 42,
            ),
            46 => 
            array (
                'id' => 4215703,
                'name' => 'Santo Amaro da Imperatriz',
                'state_id' => 42,
            ),
            47 => 
            array (
                'id' => 4215752,
                'name' => 'São Bernardino',
                'state_id' => 42,
            ),
            48 => 
            array (
                'id' => 4215802,
                'name' => 'São Bento do Sul',
                'state_id' => 42,
            ),
            49 => 
            array (
                'id' => 4215901,
                'name' => 'São Bonifácio',
                'state_id' => 42,
            ),
            50 => 
            array (
                'id' => 4216008,
                'name' => 'São Carlos',
                'state_id' => 42,
            ),
            51 => 
            array (
                'id' => 4216057,
                'name' => 'São Cristóvão do Sul',
                'state_id' => 42,
            ),
            52 => 
            array (
                'id' => 4216107,
                'name' => 'São Domingos',
                'state_id' => 42,
            ),
            53 => 
            array (
                'id' => 4216206,
                'name' => 'São Francisco do Sul',
                'state_id' => 42,
            ),
            54 => 
            array (
                'id' => 4216255,
                'name' => 'São João do Oeste',
                'state_id' => 42,
            ),
            55 => 
            array (
                'id' => 4216305,
                'name' => 'São João Batista',
                'state_id' => 42,
            ),
            56 => 
            array (
                'id' => 4216354,
                'name' => 'São João do Itaperiú',
                'state_id' => 42,
            ),
            57 => 
            array (
                'id' => 4216404,
                'name' => 'São João do Sul',
                'state_id' => 42,
            ),
            58 => 
            array (
                'id' => 4216503,
                'name' => 'São Joaquim',
                'state_id' => 42,
            ),
            59 => 
            array (
                'id' => 4216602,
                'name' => 'São José',
                'state_id' => 42,
            ),
            60 => 
            array (
                'id' => 4216701,
                'name' => 'São José do Cedro',
                'state_id' => 42,
            ),
            61 => 
            array (
                'id' => 4216800,
                'name' => 'São José do Cerrito',
                'state_id' => 42,
            ),
            62 => 
            array (
                'id' => 4216909,
                'name' => 'São Lourenço do Oeste',
                'state_id' => 42,
            ),
            63 => 
            array (
                'id' => 4217006,
                'name' => 'São Ludgero',
                'state_id' => 42,
            ),
            64 => 
            array (
                'id' => 4217105,
                'name' => 'São Martinho',
                'state_id' => 42,
            ),
            65 => 
            array (
                'id' => 4217154,
                'name' => 'São Miguel da Boa Vista',
                'state_id' => 42,
            ),
            66 => 
            array (
                'id' => 4217204,
                'name' => 'São Miguel do Oeste',
                'state_id' => 42,
            ),
            67 => 
            array (
                'id' => 4217253,
                'name' => 'São Pedro de Alcântara',
                'state_id' => 42,
            ),
            68 => 
            array (
                'id' => 4217303,
                'name' => 'Saudades',
                'state_id' => 42,
            ),
            69 => 
            array (
                'id' => 4217402,
                'name' => 'Schroeder',
                'state_id' => 42,
            ),
            70 => 
            array (
                'id' => 4217501,
                'name' => 'Seara',
                'state_id' => 42,
            ),
            71 => 
            array (
                'id' => 4217550,
                'name' => 'Serra Alta',
                'state_id' => 42,
            ),
            72 => 
            array (
                'id' => 4217600,
                'name' => 'Siderópolis',
                'state_id' => 42,
            ),
            73 => 
            array (
                'id' => 4217709,
                'name' => 'Sombrio',
                'state_id' => 42,
            ),
            74 => 
            array (
                'id' => 4217758,
                'name' => 'Sul Brasil',
                'state_id' => 42,
            ),
            75 => 
            array (
                'id' => 4217808,
                'name' => 'Taió',
                'state_id' => 42,
            ),
            76 => 
            array (
                'id' => 4217907,
                'name' => 'Tangará',
                'state_id' => 42,
            ),
            77 => 
            array (
                'id' => 4217956,
                'name' => 'Tigrinhos',
                'state_id' => 42,
            ),
            78 => 
            array (
                'id' => 4218004,
                'name' => 'Tijucas',
                'state_id' => 42,
            ),
            79 => 
            array (
                'id' => 4218103,
                'name' => 'Timbé do Sul',
                'state_id' => 42,
            ),
            80 => 
            array (
                'id' => 4218202,
                'name' => 'Timbó',
                'state_id' => 42,
            ),
            81 => 
            array (
                'id' => 4218251,
                'name' => 'Timbó Grande',
                'state_id' => 42,
            ),
            82 => 
            array (
                'id' => 4218301,
                'name' => 'Três Barras',
                'state_id' => 42,
            ),
            83 => 
            array (
                'id' => 4218350,
                'name' => 'Treviso',
                'state_id' => 42,
            ),
            84 => 
            array (
                'id' => 4218400,
                'name' => 'Treze de Maio',
                'state_id' => 42,
            ),
            85 => 
            array (
                'id' => 4218509,
                'name' => 'Treze Tílias',
                'state_id' => 42,
            ),
            86 => 
            array (
                'id' => 4218608,
                'name' => 'Trombudo Central',
                'state_id' => 42,
            ),
            87 => 
            array (
                'id' => 4218707,
                'name' => 'Tubarão',
                'state_id' => 42,
            ),
            88 => 
            array (
                'id' => 4218756,
                'name' => 'Tunápolis',
                'state_id' => 42,
            ),
            89 => 
            array (
                'id' => 4218806,
                'name' => 'Turvo',
                'state_id' => 42,
            ),
            90 => 
            array (
                'id' => 4218855,
                'name' => 'União do Oeste',
                'state_id' => 42,
            ),
            91 => 
            array (
                'id' => 4218905,
                'name' => 'Urubici',
                'state_id' => 42,
            ),
            92 => 
            array (
                'id' => 4218954,
                'name' => 'Urupema',
                'state_id' => 42,
            ),
            93 => 
            array (
                'id' => 4219002,
                'name' => 'Urussanga',
                'state_id' => 42,
            ),
            94 => 
            array (
                'id' => 4219101,
                'name' => 'Vargeão',
                'state_id' => 42,
            ),
            95 => 
            array (
                'id' => 4219150,
                'name' => 'Vargem',
                'state_id' => 42,
            ),
            96 => 
            array (
                'id' => 4219176,
                'name' => 'Vargem Bonita',
                'state_id' => 42,
            ),
            97 => 
            array (
                'id' => 4219200,
                'name' => 'Vidal Ramos',
                'state_id' => 42,
            ),
            98 => 
            array (
                'id' => 4219309,
                'name' => 'Videira',
                'state_id' => 42,
            ),
            99 => 
            array (
                'id' => 4219358,
                'name' => 'Vitor Meireles',
                'state_id' => 42,
            ),
            100 => 
            array (
                'id' => 4219408,
                'name' => 'Witmarsum',
                'state_id' => 42,
            ),
            101 => 
            array (
                'id' => 4219507,
                'name' => 'Xanxerê',
                'state_id' => 42,
            ),
            102 => 
            array (
                'id' => 4219606,
                'name' => 'Xavantina',
                'state_id' => 42,
            ),
            103 => 
            array (
                'id' => 4219705,
                'name' => 'Xaxim',
                'state_id' => 42,
            ),
            104 => 
            array (
                'id' => 4219853,
                'name' => 'Zortéa',
                'state_id' => 42,
            ),
            105 => 
            array (
                'id' => 4220000,
                'name' => 'Balneário Rincão',
                'state_id' => 42,
            ),
            106 => 
            array (
                'id' => 4300034,
                'name' => 'Aceguá',
                'state_id' => 43,
            ),
            107 => 
            array (
                'id' => 4300059,
                'name' => 'Água Santa',
                'state_id' => 43,
            ),
            108 => 
            array (
                'id' => 4300109,
                'name' => 'Agudo',
                'state_id' => 43,
            ),
            109 => 
            array (
                'id' => 4300208,
                'name' => 'Ajuricaba',
                'state_id' => 43,
            ),
            110 => 
            array (
                'id' => 4300307,
                'name' => 'Alecrim',
                'state_id' => 43,
            ),
            111 => 
            array (
                'id' => 4300406,
                'name' => 'Alegrete',
                'state_id' => 43,
            ),
            112 => 
            array (
                'id' => 4300455,
                'name' => 'Alegria',
                'state_id' => 43,
            ),
            113 => 
            array (
                'id' => 4300471,
                'name' => 'Almirante Tamandaré do Sul',
                'state_id' => 43,
            ),
            114 => 
            array (
                'id' => 4300505,
                'name' => 'Alpestre',
                'state_id' => 43,
            ),
            115 => 
            array (
                'id' => 4300554,
                'name' => 'Alto Alegre',
                'state_id' => 43,
            ),
            116 => 
            array (
                'id' => 4300570,
                'name' => 'Alto Feliz',
                'state_id' => 43,
            ),
            117 => 
            array (
                'id' => 4300604,
                'name' => 'Alvorada',
                'state_id' => 43,
            ),
            118 => 
            array (
                'id' => 4300638,
                'name' => 'Amaral Ferrador',
                'state_id' => 43,
            ),
            119 => 
            array (
                'id' => 4300646,
                'name' => 'Ametista do Sul',
                'state_id' => 43,
            ),
            120 => 
            array (
                'id' => 4300661,
                'name' => 'André da Rocha',
                'state_id' => 43,
            ),
            121 => 
            array (
                'id' => 4300703,
                'name' => 'Anta Gorda',
                'state_id' => 43,
            ),
            122 => 
            array (
                'id' => 4300802,
                'name' => 'Antônio Prado',
                'state_id' => 43,
            ),
            123 => 
            array (
                'id' => 4300851,
                'name' => 'Arambaré',
                'state_id' => 43,
            ),
            124 => 
            array (
                'id' => 4300877,
                'name' => 'Araricá',
                'state_id' => 43,
            ),
            125 => 
            array (
                'id' => 4300901,
                'name' => 'Aratiba',
                'state_id' => 43,
            ),
            126 => 
            array (
                'id' => 4301008,
                'name' => 'Arroio do Meio',
                'state_id' => 43,
            ),
            127 => 
            array (
                'id' => 4301057,
                'name' => 'Arroio do Sal',
                'state_id' => 43,
            ),
            128 => 
            array (
                'id' => 4301073,
                'name' => 'Arroio do Padre',
                'state_id' => 43,
            ),
            129 => 
            array (
                'id' => 4301107,
                'name' => 'Arroio dos Ratos',
                'state_id' => 43,
            ),
            130 => 
            array (
                'id' => 4301206,
                'name' => 'Arroio do Tigre',
                'state_id' => 43,
            ),
            131 => 
            array (
                'id' => 4301305,
                'name' => 'Arroio Grande',
                'state_id' => 43,
            ),
            132 => 
            array (
                'id' => 4301404,
                'name' => 'Arvorezinha',
                'state_id' => 43,
            ),
            133 => 
            array (
                'id' => 4301503,
                'name' => 'Augusto Pestana',
                'state_id' => 43,
            ),
            134 => 
            array (
                'id' => 4301552,
                'name' => 'Áurea',
                'state_id' => 43,
            ),
            135 => 
            array (
                'id' => 4301602,
                'name' => 'Bagé',
                'state_id' => 43,
            ),
            136 => 
            array (
                'id' => 4301636,
                'name' => 'Balneário Pinhal',
                'state_id' => 43,
            ),
            137 => 
            array (
                'id' => 4301651,
                'name' => 'Barão',
                'state_id' => 43,
            ),
            138 => 
            array (
                'id' => 4301701,
                'name' => 'Barão de Cotegipe',
                'state_id' => 43,
            ),
            139 => 
            array (
                'id' => 4301750,
                'name' => 'Barão do Triunfo',
                'state_id' => 43,
            ),
            140 => 
            array (
                'id' => 4301800,
                'name' => 'Barracão',
                'state_id' => 43,
            ),
            141 => 
            array (
                'id' => 4301859,
                'name' => 'Barra do Guarita',
                'state_id' => 43,
            ),
            142 => 
            array (
                'id' => 4301875,
                'name' => 'Barra do Quaraí',
                'state_id' => 43,
            ),
            143 => 
            array (
                'id' => 4301909,
                'name' => 'Barra do Ribeiro',
                'state_id' => 43,
            ),
            144 => 
            array (
                'id' => 4301925,
                'name' => 'Barra do Rio Azul',
                'state_id' => 43,
            ),
            145 => 
            array (
                'id' => 4301958,
                'name' => 'Barra Funda',
                'state_id' => 43,
            ),
            146 => 
            array (
                'id' => 4302006,
                'name' => 'Barros Cassal',
                'state_id' => 43,
            ),
            147 => 
            array (
                'id' => 4302055,
                'name' => 'Benjamin Constant do Sul',
                'state_id' => 43,
            ),
            148 => 
            array (
                'id' => 4302105,
                'name' => 'Bento Gonçalves',
                'state_id' => 43,
            ),
            149 => 
            array (
                'id' => 4302154,
                'name' => 'Boa Vista das Missões',
                'state_id' => 43,
            ),
            150 => 
            array (
                'id' => 4302204,
                'name' => 'Boa Vista do Buricá',
                'state_id' => 43,
            ),
            151 => 
            array (
                'id' => 4302220,
                'name' => 'Boa Vista do Cadeado',
                'state_id' => 43,
            ),
            152 => 
            array (
                'id' => 4302238,
                'name' => 'Boa Vista do Incra',
                'state_id' => 43,
            ),
            153 => 
            array (
                'id' => 4302253,
                'name' => 'Boa Vista do Sul',
                'state_id' => 43,
            ),
            154 => 
            array (
                'id' => 4302303,
                'name' => 'Bom Jesus',
                'state_id' => 43,
            ),
            155 => 
            array (
                'id' => 4302352,
                'name' => 'Bom Princípio',
                'state_id' => 43,
            ),
            156 => 
            array (
                'id' => 4302378,
                'name' => 'Bom Progresso',
                'state_id' => 43,
            ),
            157 => 
            array (
                'id' => 4302402,
                'name' => 'Bom Retiro do Sul',
                'state_id' => 43,
            ),
            158 => 
            array (
                'id' => 4302451,
                'name' => 'Boqueirão do Leão',
                'state_id' => 43,
            ),
            159 => 
            array (
                'id' => 4302501,
                'name' => 'Bossoroca',
                'state_id' => 43,
            ),
            160 => 
            array (
                'id' => 4302584,
                'name' => 'Bozano',
                'state_id' => 43,
            ),
            161 => 
            array (
                'id' => 4302600,
                'name' => 'Braga',
                'state_id' => 43,
            ),
            162 => 
            array (
                'id' => 4302659,
                'name' => 'Brochier',
                'state_id' => 43,
            ),
            163 => 
            array (
                'id' => 4302709,
                'name' => 'Butiá',
                'state_id' => 43,
            ),
            164 => 
            array (
                'id' => 4302808,
                'name' => 'Caçapava do Sul',
                'state_id' => 43,
            ),
            165 => 
            array (
                'id' => 4302907,
                'name' => 'Cacequi',
                'state_id' => 43,
            ),
            166 => 
            array (
                'id' => 4303004,
                'name' => 'Cachoeira do Sul',
                'state_id' => 43,
            ),
            167 => 
            array (
                'id' => 4303103,
                'name' => 'Cachoeirinha',
                'state_id' => 43,
            ),
            168 => 
            array (
                'id' => 4303202,
                'name' => 'Cacique Doble',
                'state_id' => 43,
            ),
            169 => 
            array (
                'id' => 4303301,
                'name' => 'Caibaté',
                'state_id' => 43,
            ),
            170 => 
            array (
                'id' => 4303400,
                'name' => 'Caiçara',
                'state_id' => 43,
            ),
            171 => 
            array (
                'id' => 4303509,
                'name' => 'Camaquã',
                'state_id' => 43,
            ),
            172 => 
            array (
                'id' => 4303558,
                'name' => 'Camargo',
                'state_id' => 43,
            ),
            173 => 
            array (
                'id' => 4303608,
                'name' => 'Cambará do Sul',
                'state_id' => 43,
            ),
            174 => 
            array (
                'id' => 4303673,
                'name' => 'Campestre da Serra',
                'state_id' => 43,
            ),
            175 => 
            array (
                'id' => 4303707,
                'name' => 'Campina das Missões',
                'state_id' => 43,
            ),
            176 => 
            array (
                'id' => 4303806,
                'name' => 'Campinas do Sul',
                'state_id' => 43,
            ),
            177 => 
            array (
                'id' => 4303905,
                'name' => 'Campo Bom',
                'state_id' => 43,
            ),
            178 => 
            array (
                'id' => 4304002,
                'name' => 'Campo Novo',
                'state_id' => 43,
            ),
            179 => 
            array (
                'id' => 4304101,
                'name' => 'Campos Borges',
                'state_id' => 43,
            ),
            180 => 
            array (
                'id' => 4304200,
                'name' => 'Candelária',
                'state_id' => 43,
            ),
            181 => 
            array (
                'id' => 4304309,
                'name' => 'Cândido Godói',
                'state_id' => 43,
            ),
            182 => 
            array (
                'id' => 4304358,
                'name' => 'Candiota',
                'state_id' => 43,
            ),
            183 => 
            array (
                'id' => 4304408,
                'name' => 'Canela',
                'state_id' => 43,
            ),
            184 => 
            array (
                'id' => 4304507,
                'name' => 'Canguçu',
                'state_id' => 43,
            ),
            185 => 
            array (
                'id' => 4304606,
                'name' => 'Canoas',
                'state_id' => 43,
            ),
            186 => 
            array (
                'id' => 4304614,
                'name' => 'Canudos do Vale',
                'state_id' => 43,
            ),
            187 => 
            array (
                'id' => 4304622,
                'name' => 'Capão Bonito do Sul',
                'state_id' => 43,
            ),
            188 => 
            array (
                'id' => 4304630,
                'name' => 'Capão da Canoa',
                'state_id' => 43,
            ),
            189 => 
            array (
                'id' => 4304655,
                'name' => 'Capão do Cipó',
                'state_id' => 43,
            ),
            190 => 
            array (
                'id' => 4304663,
                'name' => 'Capão do Leão',
                'state_id' => 43,
            ),
            191 => 
            array (
                'id' => 4304671,
                'name' => 'Capivari do Sul',
                'state_id' => 43,
            ),
            192 => 
            array (
                'id' => 4304689,
                'name' => 'Capela de Santana',
                'state_id' => 43,
            ),
            193 => 
            array (
                'id' => 4304697,
                'name' => 'Capitão',
                'state_id' => 43,
            ),
            194 => 
            array (
                'id' => 4304705,
                'name' => 'Carazinho',
                'state_id' => 43,
            ),
            195 => 
            array (
                'id' => 4304713,
                'name' => 'Caraá',
                'state_id' => 43,
            ),
            196 => 
            array (
                'id' => 4304804,
                'name' => 'Carlos Barbosa',
                'state_id' => 43,
            ),
            197 => 
            array (
                'id' => 4304853,
                'name' => 'Carlos Gomes',
                'state_id' => 43,
            ),
            198 => 
            array (
                'id' => 4304903,
                'name' => 'Casca',
                'state_id' => 43,
            ),
            199 => 
            array (
                'id' => 4304952,
                'name' => 'Caseiros',
                'state_id' => 43,
            ),
            200 => 
            array (
                'id' => 4305009,
                'name' => 'Catuípe',
                'state_id' => 43,
            ),
            201 => 
            array (
                'id' => 4305108,
                'name' => 'Caxias do Sul',
                'state_id' => 43,
            ),
            202 => 
            array (
                'id' => 4305116,
                'name' => 'Centenário',
                'state_id' => 43,
            ),
            203 => 
            array (
                'id' => 4305124,
                'name' => 'Cerrito',
                'state_id' => 43,
            ),
            204 => 
            array (
                'id' => 4305132,
                'name' => 'Cerro Branco',
                'state_id' => 43,
            ),
            205 => 
            array (
                'id' => 4305157,
                'name' => 'Cerro Grande',
                'state_id' => 43,
            ),
            206 => 
            array (
                'id' => 4305173,
                'name' => 'Cerro Grande do Sul',
                'state_id' => 43,
            ),
            207 => 
            array (
                'id' => 4305207,
                'name' => 'Cerro Largo',
                'state_id' => 43,
            ),
            208 => 
            array (
                'id' => 4305306,
                'name' => 'Chapada',
                'state_id' => 43,
            ),
            209 => 
            array (
                'id' => 4305355,
                'name' => 'Charqueadas',
                'state_id' => 43,
            ),
            210 => 
            array (
                'id' => 4305371,
                'name' => 'Charrua',
                'state_id' => 43,
            ),
            211 => 
            array (
                'id' => 4305405,
                'name' => 'Chiapetta',
                'state_id' => 43,
            ),
            212 => 
            array (
                'id' => 4305439,
                'name' => 'Chuí',
                'state_id' => 43,
            ),
            213 => 
            array (
                'id' => 4305447,
                'name' => 'Chuvisca',
                'state_id' => 43,
            ),
            214 => 
            array (
                'id' => 4305454,
                'name' => 'Cidreira',
                'state_id' => 43,
            ),
            215 => 
            array (
                'id' => 4305504,
                'name' => 'Ciríaco',
                'state_id' => 43,
            ),
            216 => 
            array (
                'id' => 4305587,
                'name' => 'Colinas',
                'state_id' => 43,
            ),
            217 => 
            array (
                'id' => 4305603,
                'name' => 'Colorado',
                'state_id' => 43,
            ),
            218 => 
            array (
                'id' => 4305702,
                'name' => 'Condor',
                'state_id' => 43,
            ),
            219 => 
            array (
                'id' => 4305801,
                'name' => 'Constantina',
                'state_id' => 43,
            ),
            220 => 
            array (
                'id' => 4305835,
                'name' => 'Coqueiro Baixo',
                'state_id' => 43,
            ),
            221 => 
            array (
                'id' => 4305850,
                'name' => 'Coqueiros do Sul',
                'state_id' => 43,
            ),
            222 => 
            array (
                'id' => 4305871,
                'name' => 'Coronel Barros',
                'state_id' => 43,
            ),
            223 => 
            array (
                'id' => 4305900,
                'name' => 'Coronel Bicaco',
                'state_id' => 43,
            ),
            224 => 
            array (
                'id' => 4305934,
                'name' => 'Coronel Pilar',
                'state_id' => 43,
            ),
            225 => 
            array (
                'id' => 4305959,
                'name' => 'Cotiporã',
                'state_id' => 43,
            ),
            226 => 
            array (
                'id' => 4305975,
                'name' => 'Coxilha',
                'state_id' => 43,
            ),
            227 => 
            array (
                'id' => 4306007,
                'name' => 'Crissiumal',
                'state_id' => 43,
            ),
            228 => 
            array (
                'id' => 4306056,
                'name' => 'Cristal',
                'state_id' => 43,
            ),
            229 => 
            array (
                'id' => 4306072,
                'name' => 'Cristal do Sul',
                'state_id' => 43,
            ),
            230 => 
            array (
                'id' => 4306106,
                'name' => 'Cruz Alta',
                'state_id' => 43,
            ),
            231 => 
            array (
                'id' => 4306130,
                'name' => 'Cruzaltense',
                'state_id' => 43,
            ),
            232 => 
            array (
                'id' => 4306205,
                'name' => 'Cruzeiro do Sul',
                'state_id' => 43,
            ),
            233 => 
            array (
                'id' => 4306304,
                'name' => 'David Canabarro',
                'state_id' => 43,
            ),
            234 => 
            array (
                'id' => 4306320,
                'name' => 'Derrubadas',
                'state_id' => 43,
            ),
            235 => 
            array (
                'id' => 4306353,
                'name' => 'Dezesseis de Novembro',
                'state_id' => 43,
            ),
            236 => 
            array (
                'id' => 4306379,
                'name' => 'Dilermando de Aguiar',
                'state_id' => 43,
            ),
            237 => 
            array (
                'id' => 4306403,
                'name' => 'Dois Irmãos',
                'state_id' => 43,
            ),
            238 => 
            array (
                'id' => 4306429,
                'name' => 'Dois Irmãos das Missões',
                'state_id' => 43,
            ),
            239 => 
            array (
                'id' => 4306452,
                'name' => 'Dois Lajeados',
                'state_id' => 43,
            ),
            240 => 
            array (
                'id' => 4306502,
                'name' => 'Dom Feliciano',
                'state_id' => 43,
            ),
            241 => 
            array (
                'id' => 4306551,
                'name' => 'Dom Pedro de Alcântara',
                'state_id' => 43,
            ),
            242 => 
            array (
                'id' => 4306601,
                'name' => 'Dom Pedrito',
                'state_id' => 43,
            ),
            243 => 
            array (
                'id' => 4306700,
                'name' => 'Dona Francisca',
                'state_id' => 43,
            ),
            244 => 
            array (
                'id' => 4306734,
                'name' => 'Doutor Maurício Cardoso',
                'state_id' => 43,
            ),
            245 => 
            array (
                'id' => 4306759,
                'name' => 'Doutor Ricardo',
                'state_id' => 43,
            ),
            246 => 
            array (
                'id' => 4306767,
                'name' => 'Eldorado do Sul',
                'state_id' => 43,
            ),
            247 => 
            array (
                'id' => 4306809,
                'name' => 'Encantado',
                'state_id' => 43,
            ),
            248 => 
            array (
                'id' => 4306908,
                'name' => 'Encruzilhada do Sul',
                'state_id' => 43,
            ),
            249 => 
            array (
                'id' => 4306924,
                'name' => 'Engenho Velho',
                'state_id' => 43,
            ),
            250 => 
            array (
                'id' => 4306932,
                'name' => 'Entre-Ijuís',
                'state_id' => 43,
            ),
            251 => 
            array (
                'id' => 4306957,
                'name' => 'Entre Rios do Sul',
                'state_id' => 43,
            ),
            252 => 
            array (
                'id' => 4306973,
                'name' => 'Erebango',
                'state_id' => 43,
            ),
            253 => 
            array (
                'id' => 4307005,
                'name' => 'Erechim',
                'state_id' => 43,
            ),
            254 => 
            array (
                'id' => 4307054,
                'name' => 'Ernestina',
                'state_id' => 43,
            ),
            255 => 
            array (
                'id' => 4307104,
                'name' => 'Herval',
                'state_id' => 43,
            ),
            256 => 
            array (
                'id' => 4307203,
                'name' => 'Erval Grande',
                'state_id' => 43,
            ),
            257 => 
            array (
                'id' => 4307302,
                'name' => 'Erval Seco',
                'state_id' => 43,
            ),
            258 => 
            array (
                'id' => 4307401,
                'name' => 'Esmeralda',
                'state_id' => 43,
            ),
            259 => 
            array (
                'id' => 4307450,
                'name' => 'Esperança do Sul',
                'state_id' => 43,
            ),
            260 => 
            array (
                'id' => 4307500,
                'name' => 'Espumoso',
                'state_id' => 43,
            ),
            261 => 
            array (
                'id' => 4307559,
                'name' => 'Estação',
                'state_id' => 43,
            ),
            262 => 
            array (
                'id' => 4307609,
                'name' => 'Estância Velha',
                'state_id' => 43,
            ),
            263 => 
            array (
                'id' => 4307708,
                'name' => 'Esteio',
                'state_id' => 43,
            ),
            264 => 
            array (
                'id' => 4307807,
                'name' => 'Estrela',
                'state_id' => 43,
            ),
            265 => 
            array (
                'id' => 4307815,
                'name' => 'Estrela Velha',
                'state_id' => 43,
            ),
            266 => 
            array (
                'id' => 4307831,
                'name' => 'Eugênio de Castro',
                'state_id' => 43,
            ),
            267 => 
            array (
                'id' => 4307864,
                'name' => 'Fagundes Varela',
                'state_id' => 43,
            ),
            268 => 
            array (
                'id' => 4307906,
                'name' => 'Farroupilha',
                'state_id' => 43,
            ),
            269 => 
            array (
                'id' => 4308003,
                'name' => 'Faxinal do Soturno',
                'state_id' => 43,
            ),
            270 => 
            array (
                'id' => 4308052,
                'name' => 'Faxinalzinho',
                'state_id' => 43,
            ),
            271 => 
            array (
                'id' => 4308078,
                'name' => 'Fazenda Vilanova',
                'state_id' => 43,
            ),
            272 => 
            array (
                'id' => 4308102,
                'name' => 'Feliz',
                'state_id' => 43,
            ),
            273 => 
            array (
                'id' => 4308201,
                'name' => 'Flores da Cunha',
                'state_id' => 43,
            ),
            274 => 
            array (
                'id' => 4308250,
                'name' => 'Floriano Peixoto',
                'state_id' => 43,
            ),
            275 => 
            array (
                'id' => 4308300,
                'name' => 'Fontoura Xavier',
                'state_id' => 43,
            ),
            276 => 
            array (
                'id' => 4308409,
                'name' => 'Formigueiro',
                'state_id' => 43,
            ),
            277 => 
            array (
                'id' => 4308433,
                'name' => 'Forquetinha',
                'state_id' => 43,
            ),
            278 => 
            array (
                'id' => 4308458,
                'name' => 'Fortaleza dos Valos',
                'state_id' => 43,
            ),
            279 => 
            array (
                'id' => 4308508,
                'name' => 'Frederico Westphalen',
                'state_id' => 43,
            ),
            280 => 
            array (
                'id' => 4308607,
                'name' => 'Garibaldi',
                'state_id' => 43,
            ),
            281 => 
            array (
                'id' => 4308656,
                'name' => 'Garruchos',
                'state_id' => 43,
            ),
            282 => 
            array (
                'id' => 4308706,
                'name' => 'Gaurama',
                'state_id' => 43,
            ),
            283 => 
            array (
                'id' => 4308805,
                'name' => 'General Câmara',
                'state_id' => 43,
            ),
            284 => 
            array (
                'id' => 4308854,
                'name' => 'Gentil',
                'state_id' => 43,
            ),
            285 => 
            array (
                'id' => 4308904,
                'name' => 'Getúlio Vargas',
                'state_id' => 43,
            ),
            286 => 
            array (
                'id' => 4309001,
                'name' => 'Giruá',
                'state_id' => 43,
            ),
            287 => 
            array (
                'id' => 4309050,
                'name' => 'Glorinha',
                'state_id' => 43,
            ),
            288 => 
            array (
                'id' => 4309100,
                'name' => 'Gramado',
                'state_id' => 43,
            ),
            289 => 
            array (
                'id' => 4309126,
                'name' => 'Gramado dos Loureiros',
                'state_id' => 43,
            ),
            290 => 
            array (
                'id' => 4309159,
                'name' => 'Gramado Xavier',
                'state_id' => 43,
            ),
            291 => 
            array (
                'id' => 4309209,
                'name' => 'Gravataí',
                'state_id' => 43,
            ),
            292 => 
            array (
                'id' => 4309258,
                'name' => 'Guabiju',
                'state_id' => 43,
            ),
            293 => 
            array (
                'id' => 4309308,
                'name' => 'Guaíba',
                'state_id' => 43,
            ),
            294 => 
            array (
                'id' => 4309407,
                'name' => 'Guaporé',
                'state_id' => 43,
            ),
            295 => 
            array (
                'id' => 4309506,
                'name' => 'Guarani das Missões',
                'state_id' => 43,
            ),
            296 => 
            array (
                'id' => 4309555,
                'name' => 'Harmonia',
                'state_id' => 43,
            ),
            297 => 
            array (
                'id' => 4309571,
                'name' => 'Herveiras',
                'state_id' => 43,
            ),
            298 => 
            array (
                'id' => 4309605,
                'name' => 'Horizontina',
                'state_id' => 43,
            ),
            299 => 
            array (
                'id' => 4309654,
                'name' => 'Hulha Negra',
                'state_id' => 43,
            ),
            300 => 
            array (
                'id' => 4309704,
                'name' => 'Humaitá',
                'state_id' => 43,
            ),
            301 => 
            array (
                'id' => 4309753,
                'name' => 'Ibarama',
                'state_id' => 43,
            ),
            302 => 
            array (
                'id' => 4309803,
                'name' => 'Ibiaçá',
                'state_id' => 43,
            ),
            303 => 
            array (
                'id' => 4309902,
                'name' => 'Ibiraiaras',
                'state_id' => 43,
            ),
            304 => 
            array (
                'id' => 4309951,
                'name' => 'Ibirapuitã',
                'state_id' => 43,
            ),
            305 => 
            array (
                'id' => 4310009,
                'name' => 'Ibirubá',
                'state_id' => 43,
            ),
            306 => 
            array (
                'id' => 4310108,
                'name' => 'Igrejinha',
                'state_id' => 43,
            ),
            307 => 
            array (
                'id' => 4310207,
                'name' => 'Ijuí',
                'state_id' => 43,
            ),
            308 => 
            array (
                'id' => 4310306,
                'name' => 'Ilópolis',
                'state_id' => 43,
            ),
            309 => 
            array (
                'id' => 4310330,
                'name' => 'Imbé',
                'state_id' => 43,
            ),
            310 => 
            array (
                'id' => 4310363,
                'name' => 'Imigrante',
                'state_id' => 43,
            ),
            311 => 
            array (
                'id' => 4310405,
                'name' => 'Independência',
                'state_id' => 43,
            ),
            312 => 
            array (
                'id' => 4310413,
                'name' => 'Inhacorá',
                'state_id' => 43,
            ),
            313 => 
            array (
                'id' => 4310439,
                'name' => 'Ipê',
                'state_id' => 43,
            ),
            314 => 
            array (
                'id' => 4310462,
                'name' => 'Ipiranga do Sul',
                'state_id' => 43,
            ),
            315 => 
            array (
                'id' => 4310504,
                'name' => 'Iraí',
                'state_id' => 43,
            ),
            316 => 
            array (
                'id' => 4310538,
                'name' => 'Itaara',
                'state_id' => 43,
            ),
            317 => 
            array (
                'id' => 4310553,
                'name' => 'Itacurubi',
                'state_id' => 43,
            ),
            318 => 
            array (
                'id' => 4310579,
                'name' => 'Itapuca',
                'state_id' => 43,
            ),
            319 => 
            array (
                'id' => 4310603,
                'name' => 'Itaqui',
                'state_id' => 43,
            ),
            320 => 
            array (
                'id' => 4310652,
                'name' => 'Itati',
                'state_id' => 43,
            ),
            321 => 
            array (
                'id' => 4310702,
                'name' => 'Itatiba do Sul',
                'state_id' => 43,
            ),
            322 => 
            array (
                'id' => 4310751,
                'name' => 'Ivorá',
                'state_id' => 43,
            ),
            323 => 
            array (
                'id' => 4310801,
                'name' => 'Ivoti',
                'state_id' => 43,
            ),
            324 => 
            array (
                'id' => 4310850,
                'name' => 'Jaboticaba',
                'state_id' => 43,
            ),
            325 => 
            array (
                'id' => 4310876,
                'name' => 'Jacuizinho',
                'state_id' => 43,
            ),
            326 => 
            array (
                'id' => 4310900,
                'name' => 'Jacutinga',
                'state_id' => 43,
            ),
            327 => 
            array (
                'id' => 4311007,
                'name' => 'Jaguarão',
                'state_id' => 43,
            ),
            328 => 
            array (
                'id' => 4311106,
                'name' => 'Jaguari',
                'state_id' => 43,
            ),
            329 => 
            array (
                'id' => 4311122,
                'name' => 'Jaquirana',
                'state_id' => 43,
            ),
            330 => 
            array (
                'id' => 4311130,
                'name' => 'Jari',
                'state_id' => 43,
            ),
            331 => 
            array (
                'id' => 4311155,
                'name' => 'Jóia',
                'state_id' => 43,
            ),
            332 => 
            array (
                'id' => 4311205,
                'name' => 'Júlio de Castilhos',
                'state_id' => 43,
            ),
            333 => 
            array (
                'id' => 4311239,
                'name' => 'Lagoa Bonita do Sul',
                'state_id' => 43,
            ),
            334 => 
            array (
                'id' => 4311254,
                'name' => 'Lagoão',
                'state_id' => 43,
            ),
            335 => 
            array (
                'id' => 4311270,
                'name' => 'Lagoa dos Três Cantos',
                'state_id' => 43,
            ),
            336 => 
            array (
                'id' => 4311304,
                'name' => 'Lagoa Vermelha',
                'state_id' => 43,
            ),
            337 => 
            array (
                'id' => 4311403,
                'name' => 'Lajeado',
                'state_id' => 43,
            ),
            338 => 
            array (
                'id' => 4311429,
                'name' => 'Lajeado do Bugre',
                'state_id' => 43,
            ),
            339 => 
            array (
                'id' => 4311502,
                'name' => 'Lavras do Sul',
                'state_id' => 43,
            ),
            340 => 
            array (
                'id' => 4311601,
                'name' => 'Liberato Salzano',
                'state_id' => 43,
            ),
            341 => 
            array (
                'id' => 4311627,
                'name' => 'Lindolfo Collor',
                'state_id' => 43,
            ),
            342 => 
            array (
                'id' => 4311643,
                'name' => 'Linha Nova',
                'state_id' => 43,
            ),
            343 => 
            array (
                'id' => 4311700,
                'name' => 'Machadinho',
                'state_id' => 43,
            ),
            344 => 
            array (
                'id' => 4311718,
                'name' => 'Maçambará',
                'state_id' => 43,
            ),
            345 => 
            array (
                'id' => 4311734,
                'name' => 'Mampituba',
                'state_id' => 43,
            ),
            346 => 
            array (
                'id' => 4311759,
                'name' => 'Manoel Viana',
                'state_id' => 43,
            ),
            347 => 
            array (
                'id' => 4311775,
                'name' => 'Maquiné',
                'state_id' => 43,
            ),
            348 => 
            array (
                'id' => 4311791,
                'name' => 'Maratá',
                'state_id' => 43,
            ),
            349 => 
            array (
                'id' => 4311809,
                'name' => 'Marau',
                'state_id' => 43,
            ),
            350 => 
            array (
                'id' => 4311908,
                'name' => 'Marcelino Ramos',
                'state_id' => 43,
            ),
            351 => 
            array (
                'id' => 4311981,
                'name' => 'Mariana Pimentel',
                'state_id' => 43,
            ),
            352 => 
            array (
                'id' => 4312005,
                'name' => 'Mariano Moro',
                'state_id' => 43,
            ),
            353 => 
            array (
                'id' => 4312054,
                'name' => 'Marques de Souza',
                'state_id' => 43,
            ),
            354 => 
            array (
                'id' => 4312104,
                'name' => 'Mata',
                'state_id' => 43,
            ),
            355 => 
            array (
                'id' => 4312138,
                'name' => 'Mato Castelhano',
                'state_id' => 43,
            ),
            356 => 
            array (
                'id' => 4312153,
                'name' => 'Mato Leitão',
                'state_id' => 43,
            ),
            357 => 
            array (
                'id' => 4312179,
                'name' => 'Mato Queimado',
                'state_id' => 43,
            ),
            358 => 
            array (
                'id' => 4312203,
                'name' => 'Maximiliano de Almeida',
                'state_id' => 43,
            ),
            359 => 
            array (
                'id' => 4312252,
                'name' => 'Minas do Leão',
                'state_id' => 43,
            ),
            360 => 
            array (
                'id' => 4312302,
                'name' => 'Miraguaí',
                'state_id' => 43,
            ),
            361 => 
            array (
                'id' => 4312351,
                'name' => 'Montauri',
                'state_id' => 43,
            ),
            362 => 
            array (
                'id' => 4312377,
                'name' => 'Monte Alegre dos Campos',
                'state_id' => 43,
            ),
            363 => 
            array (
                'id' => 4312385,
                'name' => 'Monte Belo do Sul',
                'state_id' => 43,
            ),
            364 => 
            array (
                'id' => 4312401,
                'name' => 'Montenegro',
                'state_id' => 43,
            ),
            365 => 
            array (
                'id' => 4312427,
                'name' => 'Mormaço',
                'state_id' => 43,
            ),
            366 => 
            array (
                'id' => 4312443,
                'name' => 'Morrinhos do Sul',
                'state_id' => 43,
            ),
            367 => 
            array (
                'id' => 4312450,
                'name' => 'Morro Redondo',
                'state_id' => 43,
            ),
            368 => 
            array (
                'id' => 4312476,
                'name' => 'Morro Reuter',
                'state_id' => 43,
            ),
            369 => 
            array (
                'id' => 4312500,
                'name' => 'Mostardas',
                'state_id' => 43,
            ),
            370 => 
            array (
                'id' => 4312609,
                'name' => 'Muçum',
                'state_id' => 43,
            ),
            371 => 
            array (
                'id' => 4312617,
                'name' => 'Muitos Capões',
                'state_id' => 43,
            ),
            372 => 
            array (
                'id' => 4312625,
                'name' => 'Muliterno',
                'state_id' => 43,
            ),
            373 => 
            array (
                'id' => 4312658,
                'name' => 'Não-Me-Toque',
                'state_id' => 43,
            ),
            374 => 
            array (
                'id' => 4312674,
                'name' => 'Nicolau Vergueiro',
                'state_id' => 43,
            ),
            375 => 
            array (
                'id' => 4312708,
                'name' => 'Nonoai',
                'state_id' => 43,
            ),
            376 => 
            array (
                'id' => 4312757,
                'name' => 'Nova Alvorada',
                'state_id' => 43,
            ),
            377 => 
            array (
                'id' => 4312807,
                'name' => 'Nova Araçá',
                'state_id' => 43,
            ),
            378 => 
            array (
                'id' => 4312906,
                'name' => 'Nova Bassano',
                'state_id' => 43,
            ),
            379 => 
            array (
                'id' => 4312955,
                'name' => 'Nova Boa Vista',
                'state_id' => 43,
            ),
            380 => 
            array (
                'id' => 4313003,
                'name' => 'Nova Bréscia',
                'state_id' => 43,
            ),
            381 => 
            array (
                'id' => 4313011,
                'name' => 'Nova Candelária',
                'state_id' => 43,
            ),
            382 => 
            array (
                'id' => 4313037,
                'name' => 'Nova Esperança do Sul',
                'state_id' => 43,
            ),
            383 => 
            array (
                'id' => 4313060,
                'name' => 'Nova Hartz',
                'state_id' => 43,
            ),
            384 => 
            array (
                'id' => 4313086,
                'name' => 'Nova Pádua',
                'state_id' => 43,
            ),
            385 => 
            array (
                'id' => 4313102,
                'name' => 'Nova Palma',
                'state_id' => 43,
            ),
            386 => 
            array (
                'id' => 4313201,
                'name' => 'Nova Petrópolis',
                'state_id' => 43,
            ),
            387 => 
            array (
                'id' => 4313300,
                'name' => 'Nova Prata',
                'state_id' => 43,
            ),
            388 => 
            array (
                'id' => 4313334,
                'name' => 'Nova Ramada',
                'state_id' => 43,
            ),
            389 => 
            array (
                'id' => 4313359,
                'name' => 'Nova Roma do Sul',
                'state_id' => 43,
            ),
            390 => 
            array (
                'id' => 4313375,
                'name' => 'Nova Santa Rita',
                'state_id' => 43,
            ),
            391 => 
            array (
                'id' => 4313391,
                'name' => 'Novo Cabrais',
                'state_id' => 43,
            ),
            392 => 
            array (
                'id' => 4313409,
                'name' => 'Novo Hamburgo',
                'state_id' => 43,
            ),
            393 => 
            array (
                'id' => 4313425,
                'name' => 'Novo Machado',
                'state_id' => 43,
            ),
            394 => 
            array (
                'id' => 4313441,
                'name' => 'Novo Tiradentes',
                'state_id' => 43,
            ),
            395 => 
            array (
                'id' => 4313466,
                'name' => 'Novo Xingu',
                'state_id' => 43,
            ),
            396 => 
            array (
                'id' => 4313490,
                'name' => 'Novo Barreiro',
                'state_id' => 43,
            ),
            397 => 
            array (
                'id' => 4313508,
                'name' => 'Osório',
                'state_id' => 43,
            ),
            398 => 
            array (
                'id' => 4313607,
                'name' => 'Paim Filho',
                'state_id' => 43,
            ),
            399 => 
            array (
                'id' => 4313656,
                'name' => 'Palmares do Sul',
                'state_id' => 43,
            ),
            400 => 
            array (
                'id' => 4313706,
                'name' => 'Palmeira das Missões',
                'state_id' => 43,
            ),
            401 => 
            array (
                'id' => 4313805,
                'name' => 'Palmitinho',
                'state_id' => 43,
            ),
            402 => 
            array (
                'id' => 4313904,
                'name' => 'Panambi',
                'state_id' => 43,
            ),
            403 => 
            array (
                'id' => 4313953,
                'name' => 'Pantano Grande',
                'state_id' => 43,
            ),
            404 => 
            array (
                'id' => 4314001,
                'name' => 'Paraí',
                'state_id' => 43,
            ),
            405 => 
            array (
                'id' => 4314027,
                'name' => 'Paraíso do Sul',
                'state_id' => 43,
            ),
            406 => 
            array (
                'id' => 4314035,
                'name' => 'Pareci Novo',
                'state_id' => 43,
            ),
            407 => 
            array (
                'id' => 4314050,
                'name' => 'Parobé',
                'state_id' => 43,
            ),
            408 => 
            array (
                'id' => 4314068,
                'name' => 'Passa Sete',
                'state_id' => 43,
            ),
            409 => 
            array (
                'id' => 4314076,
                'name' => 'Passo do Sobrado',
                'state_id' => 43,
            ),
            410 => 
            array (
                'id' => 4314100,
                'name' => 'Passo Fundo',
                'state_id' => 43,
            ),
            411 => 
            array (
                'id' => 4314134,
                'name' => 'Paulo Bento',
                'state_id' => 43,
            ),
            412 => 
            array (
                'id' => 4314159,
                'name' => 'Paverama',
                'state_id' => 43,
            ),
            413 => 
            array (
                'id' => 4314175,
                'name' => 'Pedras Altas',
                'state_id' => 43,
            ),
            414 => 
            array (
                'id' => 4314209,
                'name' => 'Pedro Osório',
                'state_id' => 43,
            ),
            415 => 
            array (
                'id' => 4314308,
                'name' => 'Pejuçara',
                'state_id' => 43,
            ),
            416 => 
            array (
                'id' => 4314407,
                'name' => 'Pelotas',
                'state_id' => 43,
            ),
            417 => 
            array (
                'id' => 4314423,
                'name' => 'Picada Café',
                'state_id' => 43,
            ),
            418 => 
            array (
                'id' => 4314456,
                'name' => 'Pinhal',
                'state_id' => 43,
            ),
            419 => 
            array (
                'id' => 4314464,
                'name' => 'Pinhal da Serra',
                'state_id' => 43,
            ),
            420 => 
            array (
                'id' => 4314472,
                'name' => 'Pinhal Grande',
                'state_id' => 43,
            ),
            421 => 
            array (
                'id' => 4314498,
                'name' => 'Pinheirinho do Vale',
                'state_id' => 43,
            ),
            422 => 
            array (
                'id' => 4314506,
                'name' => 'Pinheiro Machado',
                'state_id' => 43,
            ),
            423 => 
            array (
                'id' => 4314548,
                'name' => 'Pinto Bandeira',
                'state_id' => 43,
            ),
            424 => 
            array (
                'id' => 4314555,
                'name' => 'Pirapó',
                'state_id' => 43,
            ),
            425 => 
            array (
                'id' => 4314605,
                'name' => 'Piratini',
                'state_id' => 43,
            ),
            426 => 
            array (
                'id' => 4314704,
                'name' => 'Planalto',
                'state_id' => 43,
            ),
            427 => 
            array (
                'id' => 4314753,
                'name' => 'Poço das Antas',
                'state_id' => 43,
            ),
            428 => 
            array (
                'id' => 4314779,
                'name' => 'Pontão',
                'state_id' => 43,
            ),
            429 => 
            array (
                'id' => 4314787,
                'name' => 'Ponte Preta',
                'state_id' => 43,
            ),
            430 => 
            array (
                'id' => 4314803,
                'name' => 'Portão',
                'state_id' => 43,
            ),
            431 => 
            array (
                'id' => 4314902,
                'name' => 'Porto Alegre',
                'state_id' => 43,
            ),
            432 => 
            array (
                'id' => 4315008,
                'name' => 'Porto Lucena',
                'state_id' => 43,
            ),
            433 => 
            array (
                'id' => 4315057,
                'name' => 'Porto Mauá',
                'state_id' => 43,
            ),
            434 => 
            array (
                'id' => 4315073,
                'name' => 'Porto Vera Cruz',
                'state_id' => 43,
            ),
            435 => 
            array (
                'id' => 4315107,
                'name' => 'Porto Xavier',
                'state_id' => 43,
            ),
            436 => 
            array (
                'id' => 4315131,
                'name' => 'Pouso Novo',
                'state_id' => 43,
            ),
            437 => 
            array (
                'id' => 4315149,
                'name' => 'Presidente Lucena',
                'state_id' => 43,
            ),
            438 => 
            array (
                'id' => 4315156,
                'name' => 'Progresso',
                'state_id' => 43,
            ),
            439 => 
            array (
                'id' => 4315172,
                'name' => 'Protásio Alves',
                'state_id' => 43,
            ),
            440 => 
            array (
                'id' => 4315206,
                'name' => 'Putinga',
                'state_id' => 43,
            ),
            441 => 
            array (
                'id' => 4315305,
                'name' => 'Quaraí',
                'state_id' => 43,
            ),
            442 => 
            array (
                'id' => 4315313,
                'name' => 'Quatro Irmãos',
                'state_id' => 43,
            ),
            443 => 
            array (
                'id' => 4315321,
                'name' => 'Quevedos',
                'state_id' => 43,
            ),
            444 => 
            array (
                'id' => 4315354,
                'name' => 'Quinze de Novembro',
                'state_id' => 43,
            ),
            445 => 
            array (
                'id' => 4315404,
                'name' => 'Redentora',
                'state_id' => 43,
            ),
            446 => 
            array (
                'id' => 4315453,
                'name' => 'Relvado',
                'state_id' => 43,
            ),
            447 => 
            array (
                'id' => 4315503,
                'name' => 'Restinga Sêca',
                'state_id' => 43,
            ),
            448 => 
            array (
                'id' => 4315552,
                'name' => 'Rio dos Índios',
                'state_id' => 43,
            ),
            449 => 
            array (
                'id' => 4315602,
                'name' => 'Rio Grande',
                'state_id' => 43,
            ),
            450 => 
            array (
                'id' => 4315701,
                'name' => 'Rio Pardo',
                'state_id' => 43,
            ),
            451 => 
            array (
                'id' => 4315750,
                'name' => 'Riozinho',
                'state_id' => 43,
            ),
            452 => 
            array (
                'id' => 4315800,
                'name' => 'Roca Sales',
                'state_id' => 43,
            ),
            453 => 
            array (
                'id' => 4315909,
                'name' => 'Rodeio Bonito',
                'state_id' => 43,
            ),
            454 => 
            array (
                'id' => 4315958,
                'name' => 'Rolador',
                'state_id' => 43,
            ),
            455 => 
            array (
                'id' => 4316006,
                'name' => 'Rolante',
                'state_id' => 43,
            ),
            456 => 
            array (
                'id' => 4316105,
                'name' => 'Ronda Alta',
                'state_id' => 43,
            ),
            457 => 
            array (
                'id' => 4316204,
                'name' => 'Rondinha',
                'state_id' => 43,
            ),
            458 => 
            array (
                'id' => 4316303,
                'name' => 'Roque Gonzales',
                'state_id' => 43,
            ),
            459 => 
            array (
                'id' => 4316402,
                'name' => 'Rosário do Sul',
                'state_id' => 43,
            ),
            460 => 
            array (
                'id' => 4316428,
                'name' => 'Sagrada Família',
                'state_id' => 43,
            ),
            461 => 
            array (
                'id' => 4316436,
                'name' => 'Saldanha Marinho',
                'state_id' => 43,
            ),
            462 => 
            array (
                'id' => 4316451,
                'name' => 'Salto do Jacuí',
                'state_id' => 43,
            ),
            463 => 
            array (
                'id' => 4316477,
                'name' => 'Salvador das Missões',
                'state_id' => 43,
            ),
            464 => 
            array (
                'id' => 4316501,
                'name' => 'Salvador do Sul',
                'state_id' => 43,
            ),
            465 => 
            array (
                'id' => 4316600,
                'name' => 'Sananduva',
                'state_id' => 43,
            ),
            466 => 
            array (
                'id' => 4316709,
                'name' => 'Santa Bárbara do Sul',
                'state_id' => 43,
            ),
            467 => 
            array (
                'id' => 4316733,
                'name' => 'Santa Cecília do Sul',
                'state_id' => 43,
            ),
            468 => 
            array (
                'id' => 4316758,
                'name' => 'Santa Clara do Sul',
                'state_id' => 43,
            ),
            469 => 
            array (
                'id' => 4316808,
                'name' => 'Santa Cruz do Sul',
                'state_id' => 43,
            ),
            470 => 
            array (
                'id' => 4316907,
                'name' => 'Santa Maria',
                'state_id' => 43,
            ),
            471 => 
            array (
                'id' => 4316956,
                'name' => 'Santa Maria do Herval',
                'state_id' => 43,
            ),
            472 => 
            array (
                'id' => 4316972,
                'name' => 'Santa Margarida do Sul',
                'state_id' => 43,
            ),
            473 => 
            array (
                'id' => 4317004,
                'name' => 'Santana da Boa Vista',
                'state_id' => 43,
            ),
            474 => 
            array (
                'id' => 4317103,
                'name' => 'Sant\'Ana do Livramento',
                'state_id' => 43,
            ),
            475 => 
            array (
                'id' => 4317202,
                'name' => 'Santa Rosa',
                'state_id' => 43,
            ),
            476 => 
            array (
                'id' => 4317251,
                'name' => 'Santa Tereza',
                'state_id' => 43,
            ),
            477 => 
            array (
                'id' => 4317301,
                'name' => 'Santa Vitória do Palmar',
                'state_id' => 43,
            ),
            478 => 
            array (
                'id' => 4317400,
                'name' => 'Santiago',
                'state_id' => 43,
            ),
            479 => 
            array (
                'id' => 4317509,
                'name' => 'Santo Ângelo',
                'state_id' => 43,
            ),
            480 => 
            array (
                'id' => 4317558,
                'name' => 'Santo Antônio do Palma',
                'state_id' => 43,
            ),
            481 => 
            array (
                'id' => 4317608,
                'name' => 'Santo Antônio da Patrulha',
                'state_id' => 43,
            ),
            482 => 
            array (
                'id' => 4317707,
                'name' => 'Santo Antônio das Missões',
                'state_id' => 43,
            ),
            483 => 
            array (
                'id' => 4317756,
                'name' => 'Santo Antônio do Planalto',
                'state_id' => 43,
            ),
            484 => 
            array (
                'id' => 4317806,
                'name' => 'Santo Augusto',
                'state_id' => 43,
            ),
            485 => 
            array (
                'id' => 4317905,
                'name' => 'Santo Cristo',
                'state_id' => 43,
            ),
            486 => 
            array (
                'id' => 4317954,
                'name' => 'Santo Expedito do Sul',
                'state_id' => 43,
            ),
            487 => 
            array (
                'id' => 4318002,
                'name' => 'São Borja',
                'state_id' => 43,
            ),
            488 => 
            array (
                'id' => 4318051,
                'name' => 'São Domingos do Sul',
                'state_id' => 43,
            ),
            489 => 
            array (
                'id' => 4318101,
                'name' => 'São Francisco de Assis',
                'state_id' => 43,
            ),
            490 => 
            array (
                'id' => 4318200,
                'name' => 'São Francisco de Paula',
                'state_id' => 43,
            ),
            491 => 
            array (
                'id' => 4318309,
                'name' => 'São Gabriel',
                'state_id' => 43,
            ),
            492 => 
            array (
                'id' => 4318408,
                'name' => 'São Jerônimo',
                'state_id' => 43,
            ),
            493 => 
            array (
                'id' => 4318424,
                'name' => 'São João da Urtiga',
                'state_id' => 43,
            ),
            494 => 
            array (
                'id' => 4318432,
                'name' => 'São João do Polêsine',
                'state_id' => 43,
            ),
            495 => 
            array (
                'id' => 4318440,
                'name' => 'São Jorge',
                'state_id' => 43,
            ),
            496 => 
            array (
                'id' => 4318457,
                'name' => 'São José das Missões',
                'state_id' => 43,
            ),
            497 => 
            array (
                'id' => 4318465,
                'name' => 'São José do Herval',
                'state_id' => 43,
            ),
            498 => 
            array (
                'id' => 4318481,
                'name' => 'São José do Hortêncio',
                'state_id' => 43,
            ),
            499 => 
            array (
                'id' => 4318499,
                'name' => 'São José do Inhacorá',
                'state_id' => 43,
            ),
        ));
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 4318507,
                'name' => 'São José do Norte',
                'state_id' => 43,
            ),
            1 => 
            array (
                'id' => 4318606,
                'name' => 'São José do Ouro',
                'state_id' => 43,
            ),
            2 => 
            array (
                'id' => 4318614,
                'name' => 'São José do Sul',
                'state_id' => 43,
            ),
            3 => 
            array (
                'id' => 4318622,
                'name' => 'São José dos Ausentes',
                'state_id' => 43,
            ),
            4 => 
            array (
                'id' => 4318705,
                'name' => 'São Leopoldo',
                'state_id' => 43,
            ),
            5 => 
            array (
                'id' => 4318804,
                'name' => 'São Lourenço do Sul',
                'state_id' => 43,
            ),
            6 => 
            array (
                'id' => 4318903,
                'name' => 'São Luiz Gonzaga',
                'state_id' => 43,
            ),
            7 => 
            array (
                'id' => 4319000,
                'name' => 'São Marcos',
                'state_id' => 43,
            ),
            8 => 
            array (
                'id' => 4319109,
                'name' => 'São Martinho',
                'state_id' => 43,
            ),
            9 => 
            array (
                'id' => 4319125,
                'name' => 'São Martinho da Serra',
                'state_id' => 43,
            ),
            10 => 
            array (
                'id' => 4319158,
                'name' => 'São Miguel das Missões',
                'state_id' => 43,
            ),
            11 => 
            array (
                'id' => 4319208,
                'name' => 'São Nicolau',
                'state_id' => 43,
            ),
            12 => 
            array (
                'id' => 4319307,
                'name' => 'São Paulo das Missões',
                'state_id' => 43,
            ),
            13 => 
            array (
                'id' => 4319356,
                'name' => 'São Pedro da Serra',
                'state_id' => 43,
            ),
            14 => 
            array (
                'id' => 4319364,
                'name' => 'São Pedro das Missões',
                'state_id' => 43,
            ),
            15 => 
            array (
                'id' => 4319372,
                'name' => 'São Pedro do Butiá',
                'state_id' => 43,
            ),
            16 => 
            array (
                'id' => 4319406,
                'name' => 'São Pedro do Sul',
                'state_id' => 43,
            ),
            17 => 
            array (
                'id' => 4319505,
                'name' => 'São Sebastião do Caí',
                'state_id' => 43,
            ),
            18 => 
            array (
                'id' => 4319604,
                'name' => 'São Sepé',
                'state_id' => 43,
            ),
            19 => 
            array (
                'id' => 4319703,
                'name' => 'São Valentim',
                'state_id' => 43,
            ),
            20 => 
            array (
                'id' => 4319711,
                'name' => 'São Valentim do Sul',
                'state_id' => 43,
            ),
            21 => 
            array (
                'id' => 4319737,
                'name' => 'São Valério do Sul',
                'state_id' => 43,
            ),
            22 => 
            array (
                'id' => 4319752,
                'name' => 'São Vendelino',
                'state_id' => 43,
            ),
            23 => 
            array (
                'id' => 4319802,
                'name' => 'São Vicente do Sul',
                'state_id' => 43,
            ),
            24 => 
            array (
                'id' => 4319901,
                'name' => 'Sapiranga',
                'state_id' => 43,
            ),
            25 => 
            array (
                'id' => 4320008,
                'name' => 'Sapucaia do Sul',
                'state_id' => 43,
            ),
            26 => 
            array (
                'id' => 4320107,
                'name' => 'Sarandi',
                'state_id' => 43,
            ),
            27 => 
            array (
                'id' => 4320206,
                'name' => 'Seberi',
                'state_id' => 43,
            ),
            28 => 
            array (
                'id' => 4320230,
                'name' => 'Sede Nova',
                'state_id' => 43,
            ),
            29 => 
            array (
                'id' => 4320263,
                'name' => 'Segredo',
                'state_id' => 43,
            ),
            30 => 
            array (
                'id' => 4320305,
                'name' => 'Selbach',
                'state_id' => 43,
            ),
            31 => 
            array (
                'id' => 4320321,
                'name' => 'Senador Salgado Filho',
                'state_id' => 43,
            ),
            32 => 
            array (
                'id' => 4320354,
                'name' => 'Sentinela do Sul',
                'state_id' => 43,
            ),
            33 => 
            array (
                'id' => 4320404,
                'name' => 'Serafina Corrêa',
                'state_id' => 43,
            ),
            34 => 
            array (
                'id' => 4320453,
                'name' => 'Sério',
                'state_id' => 43,
            ),
            35 => 
            array (
                'id' => 4320503,
                'name' => 'Sertão',
                'state_id' => 43,
            ),
            36 => 
            array (
                'id' => 4320552,
                'name' => 'Sertão Santana',
                'state_id' => 43,
            ),
            37 => 
            array (
                'id' => 4320578,
                'name' => 'Sete de Setembro',
                'state_id' => 43,
            ),
            38 => 
            array (
                'id' => 4320602,
                'name' => 'Severiano de Almeida',
                'state_id' => 43,
            ),
            39 => 
            array (
                'id' => 4320651,
                'name' => 'Silveira Martins',
                'state_id' => 43,
            ),
            40 => 
            array (
                'id' => 4320677,
                'name' => 'Sinimbu',
                'state_id' => 43,
            ),
            41 => 
            array (
                'id' => 4320701,
                'name' => 'Sobradinho',
                'state_id' => 43,
            ),
            42 => 
            array (
                'id' => 4320800,
                'name' => 'Soledade',
                'state_id' => 43,
            ),
            43 => 
            array (
                'id' => 4320859,
                'name' => 'Tabaí',
                'state_id' => 43,
            ),
            44 => 
            array (
                'id' => 4320909,
                'name' => 'Tapejara',
                'state_id' => 43,
            ),
            45 => 
            array (
                'id' => 4321006,
                'name' => 'Tapera',
                'state_id' => 43,
            ),
            46 => 
            array (
                'id' => 4321105,
                'name' => 'Tapes',
                'state_id' => 43,
            ),
            47 => 
            array (
                'id' => 4321204,
                'name' => 'Taquara',
                'state_id' => 43,
            ),
            48 => 
            array (
                'id' => 4321303,
                'name' => 'Taquari',
                'state_id' => 43,
            ),
            49 => 
            array (
                'id' => 4321329,
                'name' => 'Taquaruçu do Sul',
                'state_id' => 43,
            ),
            50 => 
            array (
                'id' => 4321352,
                'name' => 'Tavares',
                'state_id' => 43,
            ),
            51 => 
            array (
                'id' => 4321402,
                'name' => 'Tenente Portela',
                'state_id' => 43,
            ),
            52 => 
            array (
                'id' => 4321436,
                'name' => 'Terra de Areia',
                'state_id' => 43,
            ),
            53 => 
            array (
                'id' => 4321451,
                'name' => 'Teutônia',
                'state_id' => 43,
            ),
            54 => 
            array (
                'id' => 4321469,
                'name' => 'Tio Hugo',
                'state_id' => 43,
            ),
            55 => 
            array (
                'id' => 4321477,
                'name' => 'Tiradentes do Sul',
                'state_id' => 43,
            ),
            56 => 
            array (
                'id' => 4321493,
                'name' => 'Toropi',
                'state_id' => 43,
            ),
            57 => 
            array (
                'id' => 4321501,
                'name' => 'Torres',
                'state_id' => 43,
            ),
            58 => 
            array (
                'id' => 4321600,
                'name' => 'Tramandaí',
                'state_id' => 43,
            ),
            59 => 
            array (
                'id' => 4321626,
                'name' => 'Travesseiro',
                'state_id' => 43,
            ),
            60 => 
            array (
                'id' => 4321634,
                'name' => 'Três Arroios',
                'state_id' => 43,
            ),
            61 => 
            array (
                'id' => 4321667,
                'name' => 'Três Cachoeiras',
                'state_id' => 43,
            ),
            62 => 
            array (
                'id' => 4321709,
                'name' => 'Três Coroas',
                'state_id' => 43,
            ),
            63 => 
            array (
                'id' => 4321808,
                'name' => 'Três de Maio',
                'state_id' => 43,
            ),
            64 => 
            array (
                'id' => 4321832,
                'name' => 'Três Forquilhas',
                'state_id' => 43,
            ),
            65 => 
            array (
                'id' => 4321857,
                'name' => 'Três Palmeiras',
                'state_id' => 43,
            ),
            66 => 
            array (
                'id' => 4321907,
                'name' => 'Três Passos',
                'state_id' => 43,
            ),
            67 => 
            array (
                'id' => 4321956,
                'name' => 'Trindade do Sul',
                'state_id' => 43,
            ),
            68 => 
            array (
                'id' => 4322004,
                'name' => 'Triunfo',
                'state_id' => 43,
            ),
            69 => 
            array (
                'id' => 4322103,
                'name' => 'Tucunduva',
                'state_id' => 43,
            ),
            70 => 
            array (
                'id' => 4322152,
                'name' => 'Tunas',
                'state_id' => 43,
            ),
            71 => 
            array (
                'id' => 4322186,
                'name' => 'Tupanci do Sul',
                'state_id' => 43,
            ),
            72 => 
            array (
                'id' => 4322202,
                'name' => 'Tupanciretã',
                'state_id' => 43,
            ),
            73 => 
            array (
                'id' => 4322251,
                'name' => 'Tupandi',
                'state_id' => 43,
            ),
            74 => 
            array (
                'id' => 4322301,
                'name' => 'Tuparendi',
                'state_id' => 43,
            ),
            75 => 
            array (
                'id' => 4322327,
                'name' => 'Turuçu',
                'state_id' => 43,
            ),
            76 => 
            array (
                'id' => 4322343,
                'name' => 'Ubiretama',
                'state_id' => 43,
            ),
            77 => 
            array (
                'id' => 4322350,
                'name' => 'União da Serra',
                'state_id' => 43,
            ),
            78 => 
            array (
                'id' => 4322376,
                'name' => 'Unistalda',
                'state_id' => 43,
            ),
            79 => 
            array (
                'id' => 4322400,
                'name' => 'Uruguaiana',
                'state_id' => 43,
            ),
            80 => 
            array (
                'id' => 4322509,
                'name' => 'Vacaria',
                'state_id' => 43,
            ),
            81 => 
            array (
                'id' => 4322525,
                'name' => 'Vale Verde',
                'state_id' => 43,
            ),
            82 => 
            array (
                'id' => 4322533,
                'name' => 'Vale do Sol',
                'state_id' => 43,
            ),
            83 => 
            array (
                'id' => 4322541,
                'name' => 'Vale Real',
                'state_id' => 43,
            ),
            84 => 
            array (
                'id' => 4322558,
                'name' => 'Vanini',
                'state_id' => 43,
            ),
            85 => 
            array (
                'id' => 4322608,
                'name' => 'Venâncio Aires',
                'state_id' => 43,
            ),
            86 => 
            array (
                'id' => 4322707,
                'name' => 'Vera Cruz',
                'state_id' => 43,
            ),
            87 => 
            array (
                'id' => 4322806,
                'name' => 'Veranópolis',
                'state_id' => 43,
            ),
            88 => 
            array (
                'id' => 4322855,
                'name' => 'Vespasiano Corrêa',
                'state_id' => 43,
            ),
            89 => 
            array (
                'id' => 4322905,
                'name' => 'Viadutos',
                'state_id' => 43,
            ),
            90 => 
            array (
                'id' => 4323002,
                'name' => 'Viamão',
                'state_id' => 43,
            ),
            91 => 
            array (
                'id' => 4323101,
                'name' => 'Vicente Dutra',
                'state_id' => 43,
            ),
            92 => 
            array (
                'id' => 4323200,
                'name' => 'Victor Graeff',
                'state_id' => 43,
            ),
            93 => 
            array (
                'id' => 4323309,
                'name' => 'Vila Flores',
                'state_id' => 43,
            ),
            94 => 
            array (
                'id' => 4323358,
                'name' => 'Vila Lângaro',
                'state_id' => 43,
            ),
            95 => 
            array (
                'id' => 4323408,
                'name' => 'Vila Maria',
                'state_id' => 43,
            ),
            96 => 
            array (
                'id' => 4323457,
                'name' => 'Vila Nova do Sul',
                'state_id' => 43,
            ),
            97 => 
            array (
                'id' => 4323507,
                'name' => 'Vista Alegre',
                'state_id' => 43,
            ),
            98 => 
            array (
                'id' => 4323606,
                'name' => 'Vista Alegre do Prata',
                'state_id' => 43,
            ),
            99 => 
            array (
                'id' => 4323705,
                'name' => 'Vista Gaúcha',
                'state_id' => 43,
            ),
            100 => 
            array (
                'id' => 4323754,
                'name' => 'Vitória das Missões',
                'state_id' => 43,
            ),
            101 => 
            array (
                'id' => 4323770,
                'name' => 'Westfália',
                'state_id' => 43,
            ),
            102 => 
            array (
                'id' => 4323804,
                'name' => 'Xangri-lá',
                'state_id' => 43,
            ),
            103 => 
            array (
                'id' => 5000203,
                'name' => 'Água Clara',
                'state_id' => 50,
            ),
            104 => 
            array (
                'id' => 5000252,
                'name' => 'Alcinópolis',
                'state_id' => 50,
            ),
            105 => 
            array (
                'id' => 5000609,
                'name' => 'Amambai',
                'state_id' => 50,
            ),
            106 => 
            array (
                'id' => 5000708,
                'name' => 'Anastácio',
                'state_id' => 50,
            ),
            107 => 
            array (
                'id' => 5000807,
                'name' => 'Anaurilândia',
                'state_id' => 50,
            ),
            108 => 
            array (
                'id' => 5000856,
                'name' => 'Angélica',
                'state_id' => 50,
            ),
            109 => 
            array (
                'id' => 5000906,
                'name' => 'Antônio João',
                'state_id' => 50,
            ),
            110 => 
            array (
                'id' => 5001003,
                'name' => 'Aparecida do Taboado',
                'state_id' => 50,
            ),
            111 => 
            array (
                'id' => 5001102,
                'name' => 'Aquidauana',
                'state_id' => 50,
            ),
            112 => 
            array (
                'id' => 5001243,
                'name' => 'Aral Moreira',
                'state_id' => 50,
            ),
            113 => 
            array (
                'id' => 5001508,
                'name' => 'Bandeirantes',
                'state_id' => 50,
            ),
            114 => 
            array (
                'id' => 5001904,
                'name' => 'Bataguassu',
                'state_id' => 50,
            ),
            115 => 
            array (
                'id' => 5002001,
                'name' => 'Batayporã',
                'state_id' => 50,
            ),
            116 => 
            array (
                'id' => 5002100,
                'name' => 'Bela Vista',
                'state_id' => 50,
            ),
            117 => 
            array (
                'id' => 5002159,
                'name' => 'Bodoquena',
                'state_id' => 50,
            ),
            118 => 
            array (
                'id' => 5002209,
                'name' => 'Bonito',
                'state_id' => 50,
            ),
            119 => 
            array (
                'id' => 5002308,
                'name' => 'Brasilândia',
                'state_id' => 50,
            ),
            120 => 
            array (
                'id' => 5002407,
                'name' => 'Caarapó',
                'state_id' => 50,
            ),
            121 => 
            array (
                'id' => 5002605,
                'name' => 'Camapuã',
                'state_id' => 50,
            ),
            122 => 
            array (
                'id' => 5002704,
                'name' => 'Campo Grande',
                'state_id' => 50,
            ),
            123 => 
            array (
                'id' => 5002803,
                'name' => 'Caracol',
                'state_id' => 50,
            ),
            124 => 
            array (
                'id' => 5002902,
                'name' => 'Cassilândia',
                'state_id' => 50,
            ),
            125 => 
            array (
                'id' => 5002951,
                'name' => 'Chapadão do Sul',
                'state_id' => 50,
            ),
            126 => 
            array (
                'id' => 5003108,
                'name' => 'Corguinho',
                'state_id' => 50,
            ),
            127 => 
            array (
                'id' => 5003157,
                'name' => 'Coronel Sapucaia',
                'state_id' => 50,
            ),
            128 => 
            array (
                'id' => 5003207,
                'name' => 'Corumbá',
                'state_id' => 50,
            ),
            129 => 
            array (
                'id' => 5003256,
                'name' => 'Costa Rica',
                'state_id' => 50,
            ),
            130 => 
            array (
                'id' => 5003306,
                'name' => 'Coxim',
                'state_id' => 50,
            ),
            131 => 
            array (
                'id' => 5003454,
                'name' => 'Deodápolis',
                'state_id' => 50,
            ),
            132 => 
            array (
                'id' => 5003488,
                'name' => 'Dois Irmãos do Buriti',
                'state_id' => 50,
            ),
            133 => 
            array (
                'id' => 5003504,
                'name' => 'Douradina',
                'state_id' => 50,
            ),
            134 => 
            array (
                'id' => 5003702,
                'name' => 'Dourados',
                'state_id' => 50,
            ),
            135 => 
            array (
                'id' => 5003751,
                'name' => 'Eldorado',
                'state_id' => 50,
            ),
            136 => 
            array (
                'id' => 5003801,
                'name' => 'Fátima do Sul',
                'state_id' => 50,
            ),
            137 => 
            array (
                'id' => 5003900,
                'name' => 'Figueirão',
                'state_id' => 50,
            ),
            138 => 
            array (
                'id' => 5004007,
                'name' => 'Glória de Dourados',
                'state_id' => 50,
            ),
            139 => 
            array (
                'id' => 5004106,
                'name' => 'Guia Lopes da Laguna',
                'state_id' => 50,
            ),
            140 => 
            array (
                'id' => 5004304,
                'name' => 'Iguatemi',
                'state_id' => 50,
            ),
            141 => 
            array (
                'id' => 5004403,
                'name' => 'Inocência',
                'state_id' => 50,
            ),
            142 => 
            array (
                'id' => 5004502,
                'name' => 'Itaporã',
                'state_id' => 50,
            ),
            143 => 
            array (
                'id' => 5004601,
                'name' => 'Itaquiraí',
                'state_id' => 50,
            ),
            144 => 
            array (
                'id' => 5004700,
                'name' => 'Ivinhema',
                'state_id' => 50,
            ),
            145 => 
            array (
                'id' => 5004809,
                'name' => 'Japorã',
                'state_id' => 50,
            ),
            146 => 
            array (
                'id' => 5004908,
                'name' => 'Jaraguari',
                'state_id' => 50,
            ),
            147 => 
            array (
                'id' => 5005004,
                'name' => 'Jardim',
                'state_id' => 50,
            ),
            148 => 
            array (
                'id' => 5005103,
                'name' => 'Jateí',
                'state_id' => 50,
            ),
            149 => 
            array (
                'id' => 5005152,
                'name' => 'Juti',
                'state_id' => 50,
            ),
            150 => 
            array (
                'id' => 5005202,
                'name' => 'Ladário',
                'state_id' => 50,
            ),
            151 => 
            array (
                'id' => 5005251,
                'name' => 'Laguna Carapã',
                'state_id' => 50,
            ),
            152 => 
            array (
                'id' => 5005400,
                'name' => 'Maracaju',
                'state_id' => 50,
            ),
            153 => 
            array (
                'id' => 5005608,
                'name' => 'Miranda',
                'state_id' => 50,
            ),
            154 => 
            array (
                'id' => 5005681,
                'name' => 'Mundo Novo',
                'state_id' => 50,
            ),
            155 => 
            array (
                'id' => 5005707,
                'name' => 'Naviraí',
                'state_id' => 50,
            ),
            156 => 
            array (
                'id' => 5005806,
                'name' => 'Nioaque',
                'state_id' => 50,
            ),
            157 => 
            array (
                'id' => 5006002,
                'name' => 'Nova Alvorada do Sul',
                'state_id' => 50,
            ),
            158 => 
            array (
                'id' => 5006200,
                'name' => 'Nova Andradina',
                'state_id' => 50,
            ),
            159 => 
            array (
                'id' => 5006259,
                'name' => 'Novo Horizonte do Sul',
                'state_id' => 50,
            ),
            160 => 
            array (
                'id' => 5006275,
                'name' => 'Paraíso das Águas',
                'state_id' => 50,
            ),
            161 => 
            array (
                'id' => 5006309,
                'name' => 'Paranaíba',
                'state_id' => 50,
            ),
            162 => 
            array (
                'id' => 5006358,
                'name' => 'Paranhos',
                'state_id' => 50,
            ),
            163 => 
            array (
                'id' => 5006408,
                'name' => 'Pedro Gomes',
                'state_id' => 50,
            ),
            164 => 
            array (
                'id' => 5006606,
                'name' => 'Ponta Porã',
                'state_id' => 50,
            ),
            165 => 
            array (
                'id' => 5006903,
                'name' => 'Porto Murtinho',
                'state_id' => 50,
            ),
            166 => 
            array (
                'id' => 5007109,
                'name' => 'Ribas do Rio Pardo',
                'state_id' => 50,
            ),
            167 => 
            array (
                'id' => 5007208,
                'name' => 'Rio Brilhante',
                'state_id' => 50,
            ),
            168 => 
            array (
                'id' => 5007307,
                'name' => 'Rio Negro',
                'state_id' => 50,
            ),
            169 => 
            array (
                'id' => 5007406,
                'name' => 'Rio Verde de Mato Grosso',
                'state_id' => 50,
            ),
            170 => 
            array (
                'id' => 5007505,
                'name' => 'Rochedo',
                'state_id' => 50,
            ),
            171 => 
            array (
                'id' => 5007554,
                'name' => 'Santa Rita do Pardo',
                'state_id' => 50,
            ),
            172 => 
            array (
                'id' => 5007695,
                'name' => 'São Gabriel do Oeste',
                'state_id' => 50,
            ),
            173 => 
            array (
                'id' => 5007703,
                'name' => 'Sete Quedas',
                'state_id' => 50,
            ),
            174 => 
            array (
                'id' => 5007802,
                'name' => 'Selvíria',
                'state_id' => 50,
            ),
            175 => 
            array (
                'id' => 5007901,
                'name' => 'Sidrolândia',
                'state_id' => 50,
            ),
            176 => 
            array (
                'id' => 5007935,
                'name' => 'Sonora',
                'state_id' => 50,
            ),
            177 => 
            array (
                'id' => 5007950,
                'name' => 'Tacuru',
                'state_id' => 50,
            ),
            178 => 
            array (
                'id' => 5007976,
                'name' => 'Taquarussu',
                'state_id' => 50,
            ),
            179 => 
            array (
                'id' => 5008008,
                'name' => 'Terenos',
                'state_id' => 50,
            ),
            180 => 
            array (
                'id' => 5008305,
                'name' => 'Três Lagoas',
                'state_id' => 50,
            ),
            181 => 
            array (
                'id' => 5008404,
                'name' => 'Vicentina',
                'state_id' => 50,
            ),
            182 => 
            array (
                'id' => 5100102,
                'name' => 'Acorizal',
                'state_id' => 51,
            ),
            183 => 
            array (
                'id' => 5100201,
                'name' => 'Água Boa',
                'state_id' => 51,
            ),
            184 => 
            array (
                'id' => 5100250,
                'name' => 'Alta Floresta',
                'state_id' => 51,
            ),
            185 => 
            array (
                'id' => 5100300,
                'name' => 'Alto Araguaia',
                'state_id' => 51,
            ),
            186 => 
            array (
                'id' => 5100359,
                'name' => 'Alto Boa Vista',
                'state_id' => 51,
            ),
            187 => 
            array (
                'id' => 5100409,
                'name' => 'Alto Garças',
                'state_id' => 51,
            ),
            188 => 
            array (
                'id' => 5100508,
                'name' => 'Alto Paraguai',
                'state_id' => 51,
            ),
            189 => 
            array (
                'id' => 5100607,
                'name' => 'Alto Taquari',
                'state_id' => 51,
            ),
            190 => 
            array (
                'id' => 5100805,
                'name' => 'Apiacás',
                'state_id' => 51,
            ),
            191 => 
            array (
                'id' => 5101001,
                'name' => 'Araguaiana',
                'state_id' => 51,
            ),
            192 => 
            array (
                'id' => 5101209,
                'name' => 'Araguainha',
                'state_id' => 51,
            ),
            193 => 
            array (
                'id' => 5101258,
                'name' => 'Araputanga',
                'state_id' => 51,
            ),
            194 => 
            array (
                'id' => 5101308,
                'name' => 'Arenápolis',
                'state_id' => 51,
            ),
            195 => 
            array (
                'id' => 5101407,
                'name' => 'Aripuanã',
                'state_id' => 51,
            ),
            196 => 
            array (
                'id' => 5101605,
                'name' => 'Barão de Melgaço',
                'state_id' => 51,
            ),
            197 => 
            array (
                'id' => 5101704,
                'name' => 'Barra do Bugres',
                'state_id' => 51,
            ),
            198 => 
            array (
                'id' => 5101803,
                'name' => 'Barra do Garças',
                'state_id' => 51,
            ),
            199 => 
            array (
                'id' => 5101852,
                'name' => 'Bom Jesus do Araguaia',
                'state_id' => 51,
            ),
            200 => 
            array (
                'id' => 5101902,
                'name' => 'Brasnorte',
                'state_id' => 51,
            ),
            201 => 
            array (
                'id' => 5102504,
                'name' => 'Cáceres',
                'state_id' => 51,
            ),
            202 => 
            array (
                'id' => 5102603,
                'name' => 'Campinápolis',
                'state_id' => 51,
            ),
            203 => 
            array (
                'id' => 5102637,
                'name' => 'Campo Novo do Parecis',
                'state_id' => 51,
            ),
            204 => 
            array (
                'id' => 5102678,
                'name' => 'Campo Verde',
                'state_id' => 51,
            ),
            205 => 
            array (
                'id' => 5102686,
                'name' => 'Campos de Júlio',
                'state_id' => 51,
            ),
            206 => 
            array (
                'id' => 5102694,
                'name' => 'Canabrava do Norte',
                'state_id' => 51,
            ),
            207 => 
            array (
                'id' => 5102702,
                'name' => 'Canarana',
                'state_id' => 51,
            ),
            208 => 
            array (
                'id' => 5102793,
                'name' => 'Carlinda',
                'state_id' => 51,
            ),
            209 => 
            array (
                'id' => 5102850,
                'name' => 'Castanheira',
                'state_id' => 51,
            ),
            210 => 
            array (
                'id' => 5103007,
                'name' => 'Chapada dos Guimarães',
                'state_id' => 51,
            ),
            211 => 
            array (
                'id' => 5103056,
                'name' => 'Cláudia',
                'state_id' => 51,
            ),
            212 => 
            array (
                'id' => 5103106,
                'name' => 'Cocalinho',
                'state_id' => 51,
            ),
            213 => 
            array (
                'id' => 5103205,
                'name' => 'Colíder',
                'state_id' => 51,
            ),
            214 => 
            array (
                'id' => 5103254,
                'name' => 'Colniza',
                'state_id' => 51,
            ),
            215 => 
            array (
                'id' => 5103304,
                'name' => 'Comodoro',
                'state_id' => 51,
            ),
            216 => 
            array (
                'id' => 5103353,
                'name' => 'Confresa',
                'state_id' => 51,
            ),
            217 => 
            array (
                'id' => 5103361,
                'name' => 'Conquista D\'Oeste',
                'state_id' => 51,
            ),
            218 => 
            array (
                'id' => 5103379,
                'name' => 'Cotriguaçu',
                'state_id' => 51,
            ),
            219 => 
            array (
                'id' => 5103403,
                'name' => 'Cuiabá',
                'state_id' => 51,
            ),
            220 => 
            array (
                'id' => 5103437,
                'name' => 'Curvelândia',
                'state_id' => 51,
            ),
            221 => 
            array (
                'id' => 5103452,
                'name' => 'Denise',
                'state_id' => 51,
            ),
            222 => 
            array (
                'id' => 5103502,
                'name' => 'Diamantino',
                'state_id' => 51,
            ),
            223 => 
            array (
                'id' => 5103601,
                'name' => 'Dom Aquino',
                'state_id' => 51,
            ),
            224 => 
            array (
                'id' => 5103700,
                'name' => 'Feliz Natal',
                'state_id' => 51,
            ),
            225 => 
            array (
                'id' => 5103809,
                'name' => 'Figueirópolis D\'Oeste',
                'state_id' => 51,
            ),
            226 => 
            array (
                'id' => 5103858,
                'name' => 'Gaúcha do Norte',
                'state_id' => 51,
            ),
            227 => 
            array (
                'id' => 5103908,
                'name' => 'General Carneiro',
                'state_id' => 51,
            ),
            228 => 
            array (
                'id' => 5103957,
                'name' => 'Glória D\'Oeste',
                'state_id' => 51,
            ),
            229 => 
            array (
                'id' => 5104104,
                'name' => 'Guarantã do Norte',
                'state_id' => 51,
            ),
            230 => 
            array (
                'id' => 5104203,
                'name' => 'Guiratinga',
                'state_id' => 51,
            ),
            231 => 
            array (
                'id' => 5104500,
                'name' => 'Indiavaí',
                'state_id' => 51,
            ),
            232 => 
            array (
                'id' => 5104526,
                'name' => 'Ipiranga do Norte',
                'state_id' => 51,
            ),
            233 => 
            array (
                'id' => 5104542,
                'name' => 'Itanhangá',
                'state_id' => 51,
            ),
            234 => 
            array (
                'id' => 5104559,
                'name' => 'Itaúba',
                'state_id' => 51,
            ),
            235 => 
            array (
                'id' => 5104609,
                'name' => 'Itiquira',
                'state_id' => 51,
            ),
            236 => 
            array (
                'id' => 5104807,
                'name' => 'Jaciara',
                'state_id' => 51,
            ),
            237 => 
            array (
                'id' => 5104906,
                'name' => 'Jangada',
                'state_id' => 51,
            ),
            238 => 
            array (
                'id' => 5105002,
                'name' => 'Jauru',
                'state_id' => 51,
            ),
            239 => 
            array (
                'id' => 5105101,
                'name' => 'Juara',
                'state_id' => 51,
            ),
            240 => 
            array (
                'id' => 5105150,
                'name' => 'Juína',
                'state_id' => 51,
            ),
            241 => 
            array (
                'id' => 5105176,
                'name' => 'Juruena',
                'state_id' => 51,
            ),
            242 => 
            array (
                'id' => 5105200,
                'name' => 'Juscimeira',
                'state_id' => 51,
            ),
            243 => 
            array (
                'id' => 5105234,
                'name' => 'Lambari D\'Oeste',
                'state_id' => 51,
            ),
            244 => 
            array (
                'id' => 5105259,
                'name' => 'Lucas do Rio Verde',
                'state_id' => 51,
            ),
            245 => 
            array (
                'id' => 5105309,
                'name' => 'Luciara',
                'state_id' => 51,
            ),
            246 => 
            array (
                'id' => 5105507,
                'name' => 'Vila Bela da Santíssima Trindade',
                'state_id' => 51,
            ),
            247 => 
            array (
                'id' => 5105580,
                'name' => 'Marcelândia',
                'state_id' => 51,
            ),
            248 => 
            array (
                'id' => 5105606,
                'name' => 'Matupá',
                'state_id' => 51,
            ),
            249 => 
            array (
                'id' => 5105622,
                'name' => 'Mirassol d\'Oeste',
                'state_id' => 51,
            ),
            250 => 
            array (
                'id' => 5105903,
                'name' => 'Nobres',
                'state_id' => 51,
            ),
            251 => 
            array (
                'id' => 5106000,
                'name' => 'Nortelândia',
                'state_id' => 51,
            ),
            252 => 
            array (
                'id' => 5106109,
                'name' => 'Nossa Senhora do Livramento',
                'state_id' => 51,
            ),
            253 => 
            array (
                'id' => 5106158,
                'name' => 'Nova Bandeirantes',
                'state_id' => 51,
            ),
            254 => 
            array (
                'id' => 5106174,
                'name' => 'Nova Nazaré',
                'state_id' => 51,
            ),
            255 => 
            array (
                'id' => 5106182,
                'name' => 'Nova Lacerda',
                'state_id' => 51,
            ),
            256 => 
            array (
                'id' => 5106190,
                'name' => 'Nova Santa Helena',
                'state_id' => 51,
            ),
            257 => 
            array (
                'id' => 5106208,
                'name' => 'Nova Brasilândia',
                'state_id' => 51,
            ),
            258 => 
            array (
                'id' => 5106216,
                'name' => 'Nova Canaã do Norte',
                'state_id' => 51,
            ),
            259 => 
            array (
                'id' => 5106224,
                'name' => 'Nova Mutum',
                'state_id' => 51,
            ),
            260 => 
            array (
                'id' => 5106232,
                'name' => 'Nova Olímpia',
                'state_id' => 51,
            ),
            261 => 
            array (
                'id' => 5106240,
                'name' => 'Nova Ubiratã',
                'state_id' => 51,
            ),
            262 => 
            array (
                'id' => 5106257,
                'name' => 'Nova Xavantina',
                'state_id' => 51,
            ),
            263 => 
            array (
                'id' => 5106265,
                'name' => 'Novo Mundo',
                'state_id' => 51,
            ),
            264 => 
            array (
                'id' => 5106273,
                'name' => 'Novo Horizonte do Norte',
                'state_id' => 51,
            ),
            265 => 
            array (
                'id' => 5106281,
                'name' => 'Novo São Joaquim',
                'state_id' => 51,
            ),
            266 => 
            array (
                'id' => 5106299,
                'name' => 'Paranaíta',
                'state_id' => 51,
            ),
            267 => 
            array (
                'id' => 5106307,
                'name' => 'Paranatinga',
                'state_id' => 51,
            ),
            268 => 
            array (
                'id' => 5106315,
                'name' => 'Novo Santo Antônio',
                'state_id' => 51,
            ),
            269 => 
            array (
                'id' => 5106372,
                'name' => 'Pedra Preta',
                'state_id' => 51,
            ),
            270 => 
            array (
                'id' => 5106422,
                'name' => 'Peixoto de Azevedo',
                'state_id' => 51,
            ),
            271 => 
            array (
                'id' => 5106455,
                'name' => 'Planalto da Serra',
                'state_id' => 51,
            ),
            272 => 
            array (
                'id' => 5106505,
                'name' => 'Poconé',
                'state_id' => 51,
            ),
            273 => 
            array (
                'id' => 5106653,
                'name' => 'Pontal do Araguaia',
                'state_id' => 51,
            ),
            274 => 
            array (
                'id' => 5106703,
                'name' => 'Ponte Branca',
                'state_id' => 51,
            ),
            275 => 
            array (
                'id' => 5106752,
                'name' => 'Pontes e Lacerda',
                'state_id' => 51,
            ),
            276 => 
            array (
                'id' => 5106778,
                'name' => 'Porto Alegre do Norte',
                'state_id' => 51,
            ),
            277 => 
            array (
                'id' => 5106802,
                'name' => 'Porto dos Gaúchos',
                'state_id' => 51,
            ),
            278 => 
            array (
                'id' => 5106828,
                'name' => 'Porto Esperidião',
                'state_id' => 51,
            ),
            279 => 
            array (
                'id' => 5106851,
                'name' => 'Porto Estrela',
                'state_id' => 51,
            ),
            280 => 
            array (
                'id' => 5107008,
                'name' => 'Poxoréu',
                'state_id' => 51,
            ),
            281 => 
            array (
                'id' => 5107040,
                'name' => 'Primavera do Leste',
                'state_id' => 51,
            ),
            282 => 
            array (
                'id' => 5107065,
                'name' => 'Querência',
                'state_id' => 51,
            ),
            283 => 
            array (
                'id' => 5107107,
                'name' => 'São José dos Quatro Marcos',
                'state_id' => 51,
            ),
            284 => 
            array (
                'id' => 5107156,
                'name' => 'Reserva do Cabaçal',
                'state_id' => 51,
            ),
            285 => 
            array (
                'id' => 5107180,
                'name' => 'Ribeirão Cascalheira',
                'state_id' => 51,
            ),
            286 => 
            array (
                'id' => 5107198,
                'name' => 'Ribeirãozinho',
                'state_id' => 51,
            ),
            287 => 
            array (
                'id' => 5107206,
                'name' => 'Rio Branco',
                'state_id' => 51,
            ),
            288 => 
            array (
                'id' => 5107248,
                'name' => 'Santa Carmem',
                'state_id' => 51,
            ),
            289 => 
            array (
                'id' => 5107263,
                'name' => 'Santo Afonso',
                'state_id' => 51,
            ),
            290 => 
            array (
                'id' => 5107297,
                'name' => 'São José do Povo',
                'state_id' => 51,
            ),
            291 => 
            array (
                'id' => 5107305,
                'name' => 'São José do Rio Claro',
                'state_id' => 51,
            ),
            292 => 
            array (
                'id' => 5107354,
                'name' => 'São José do Xingu',
                'state_id' => 51,
            ),
            293 => 
            array (
                'id' => 5107404,
                'name' => 'São Pedro da Cipa',
                'state_id' => 51,
            ),
            294 => 
            array (
                'id' => 5107578,
                'name' => 'Rondolândia',
                'state_id' => 51,
            ),
            295 => 
            array (
                'id' => 5107602,
                'name' => 'Rondonópolis',
                'state_id' => 51,
            ),
            296 => 
            array (
                'id' => 5107701,
                'name' => 'Rosário Oeste',
                'state_id' => 51,
            ),
            297 => 
            array (
                'id' => 5107743,
                'name' => 'Santa Cruz do Xingu',
                'state_id' => 51,
            ),
            298 => 
            array (
                'id' => 5107750,
                'name' => 'Salto do Céu',
                'state_id' => 51,
            ),
            299 => 
            array (
                'id' => 5107768,
                'name' => 'Santa Rita do Trivelato',
                'state_id' => 51,
            ),
            300 => 
            array (
                'id' => 5107776,
                'name' => 'Santa Terezinha',
                'state_id' => 51,
            ),
            301 => 
            array (
                'id' => 5107792,
                'name' => 'Santo Antônio do Leste',
                'state_id' => 51,
            ),
            302 => 
            array (
                'id' => 5107800,
                'name' => 'Santo Antônio do Leverger',
                'state_id' => 51,
            ),
            303 => 
            array (
                'id' => 5107859,
                'name' => 'São Félix do Araguaia',
                'state_id' => 51,
            ),
            304 => 
            array (
                'id' => 5107875,
                'name' => 'Sapezal',
                'state_id' => 51,
            ),
            305 => 
            array (
                'id' => 5107883,
                'name' => 'Serra Nova Dourada',
                'state_id' => 51,
            ),
            306 => 
            array (
                'id' => 5107909,
                'name' => 'Sinop',
                'state_id' => 51,
            ),
            307 => 
            array (
                'id' => 5107925,
                'name' => 'Sorriso',
                'state_id' => 51,
            ),
            308 => 
            array (
                'id' => 5107941,
                'name' => 'Tabaporã',
                'state_id' => 51,
            ),
            309 => 
            array (
                'id' => 5107958,
                'name' => 'Tangará da Serra',
                'state_id' => 51,
            ),
            310 => 
            array (
                'id' => 5108006,
                'name' => 'Tapurah',
                'state_id' => 51,
            ),
            311 => 
            array (
                'id' => 5108055,
                'name' => 'Terra Nova do Norte',
                'state_id' => 51,
            ),
            312 => 
            array (
                'id' => 5108105,
                'name' => 'Tesouro',
                'state_id' => 51,
            ),
            313 => 
            array (
                'id' => 5108204,
                'name' => 'Torixoréu',
                'state_id' => 51,
            ),
            314 => 
            array (
                'id' => 5108303,
                'name' => 'União do Sul',
                'state_id' => 51,
            ),
            315 => 
            array (
                'id' => 5108352,
                'name' => 'Vale de São Domingos',
                'state_id' => 51,
            ),
            316 => 
            array (
                'id' => 5108402,
                'name' => 'Várzea Grande',
                'state_id' => 51,
            ),
            317 => 
            array (
                'id' => 5108501,
                'name' => 'Vera',
                'state_id' => 51,
            ),
            318 => 
            array (
                'id' => 5108600,
                'name' => 'Vila Rica',
                'state_id' => 51,
            ),
            319 => 
            array (
                'id' => 5108808,
                'name' => 'Nova Guarita',
                'state_id' => 51,
            ),
            320 => 
            array (
                'id' => 5108857,
                'name' => 'Nova Marilândia',
                'state_id' => 51,
            ),
            321 => 
            array (
                'id' => 5108907,
                'name' => 'Nova Maringá',
                'state_id' => 51,
            ),
            322 => 
            array (
                'id' => 5108956,
                'name' => 'Nova Monte Verde',
                'state_id' => 51,
            ),
        ));
        
        
    }
}