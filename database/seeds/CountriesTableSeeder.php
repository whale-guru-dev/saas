<?php

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
                'id' => 1,
                'name' => 'United States of America',
                'dial_code' => '1',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Canada',
                'dial_code' => '1',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Russia',
                'dial_code' => '7',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Kazakhstan',
                'dial_code' => '7',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Egypt',
                'dial_code' => '20',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'South Africa',
                'dial_code' => '27',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Greece',
                'dial_code' => '30',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Netherlands',
                'dial_code' => '31',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Belgium',
                'dial_code' => '32',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'France',
                'dial_code' => '33',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Spain',
                'dial_code' => '34',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Hungary',
                'dial_code' => '36',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Italy',
                'dial_code' => '39',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Romania',
                'dial_code' => '40',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Switzerland',
                'dial_code' => '41',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Austria',
                'dial_code' => '43',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'United Kingdom',
                'dial_code' => '44',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Guernsey',
                'dial_code' => '44',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Isle of Man',
                'dial_code' => '44',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Jersey',
                'dial_code' => '44',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Denmark',
                'dial_code' => '45',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Sweden',
                'dial_code' => '46',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Norway',
                'dial_code' => '47',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Poland',
                'dial_code' => '48',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Germany',
                'dial_code' => '49',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Peru',
                'dial_code' => '51',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Mexico',
                'dial_code' => '52',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Cuba',
                'dial_code' => '53',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Argentina',
                'dial_code' => '54',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Brazil',
                'dial_code' => '55',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Chile',
                'dial_code' => '56',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Colombia',
                'dial_code' => '57',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Venezuela',
                'dial_code' => '58',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Malaysia',
                'dial_code' => '60',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Australia',
                'dial_code' => '61',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Indonesia',
                'dial_code' => '62',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Philippines',
                'dial_code' => '63',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'New Zealand',
                'dial_code' => '64',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Singapore',
                'dial_code' => '65',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Thailand',
                'dial_code' => '66',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Japan',
                'dial_code' => '81',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Korea',
                'dial_code' => '82',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Vietnam',
                'dial_code' => '84',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'China',
                'dial_code' => '86',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Turkey',
                'dial_code' => '90',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'India',
                'dial_code' => '91',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Pakistan',
                'dial_code' => '92',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Afghanistan',
                'dial_code' => '93',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Sri Lanka',
                'dial_code' => '94',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Myanmar',
                'dial_code' => '95',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Iran',
                'dial_code' => '98',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Morocco',
                'dial_code' => '212',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Algeria',
                'dial_code' => '213',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Tunisia',
                'dial_code' => '216',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Libya',
                'dial_code' => '218',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Gambia',
                'dial_code' => '220',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Senegal',
                'dial_code' => '221',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Mauritania',
                'dial_code' => '222',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Mali Republic',
                'dial_code' => '223',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Guinea',
                'dial_code' => '224',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Ivory Coast',
                'dial_code' => '225',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Burkina Faso',
                'dial_code' => '226',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Niger',
                'dial_code' => '227',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Togo',
                'dial_code' => '228',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Benin',
                'dial_code' => '229',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Mauritius',
                'dial_code' => '230',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Liberia',
                'dial_code' => '231',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Sierra Leone',
                'dial_code' => '232',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Ghana',
                'dial_code' => '233',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Nigeria',
                'dial_code' => '234',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Chad',
                'dial_code' => '235',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Central African Republic',
                'dial_code' => '236',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Cameroon',
                'dial_code' => '237',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Cape Verde Islands',
                'dial_code' => '238',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Sao Tome and Principe',
                'dial_code' => '239',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Gabon',
                'dial_code' => '241',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Congo,
Democratic Republ',
                'dial_code' => '243',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Angola',
                'dial_code' => '244',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Guinea-Bissau',
                'dial_code' => '245',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Seychelles',
                'dial_code' => '248',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Sudan',
                'dial_code' => '249',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Rwanda',
                'dial_code' => '250',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Ethiopia',
                'dial_code' => '251',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Somalia',
                'dial_code' => '252',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Djibouti',
                'dial_code' => '253',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Kenya',
                'dial_code' => '254',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Tanzania',
                'dial_code' => '255',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Uganda',
                'dial_code' => '256',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Burundi',
                'dial_code' => '257',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Mozambique',
                'dial_code' => '258',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Zambia',
                'dial_code' => '260',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Madagascar',
                'dial_code' => '261',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Reunion',
                'dial_code' => '262',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Zimbabwe',
                'dial_code' => '263',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Namibia',
                'dial_code' => '264',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Malawi',
                'dial_code' => '265',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Lesotho',
                'dial_code' => '266',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Botswana',
                'dial_code' => '267',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Swaziland',
                'dial_code' => '268',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Mayotte Island',
                'dial_code' => '269',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Aruba',
                'dial_code' => '297',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Faroe Islands',
                'dial_code' => '298',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Greenland',
                'dial_code' => '299',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Gibraltar',
                'dial_code' => '350',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Portugal',
                'dial_code' => '351',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Luxembourg',
                'dial_code' => '352',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Ireland',
                'dial_code' => '353',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Iceland',
                'dial_code' => '354',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Albania',
                'dial_code' => '355',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Malta',
                'dial_code' => '356',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Cyprus',
                'dial_code' => '357',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Finland',
                'dial_code' => '358',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Bulgaria',
                'dial_code' => '359',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Lithuania',
                'dial_code' => '370',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Latvia',
                'dial_code' => '371',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Estonia',
                'dial_code' => '372',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Moldova',
                'dial_code' => '373',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Armenia',
                'dial_code' => '374',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Belarus',
                'dial_code' => '375',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Andorra',
                'dial_code' => '376',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Monaco',
                'dial_code' => '377',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'San Marino',
                'dial_code' => '378',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Ukraine',
                'dial_code' => '380',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Serbia',
                'dial_code' => '381',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Montenegro',
                'dial_code' => '382',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Croatia',
                'dial_code' => '385',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Slovenia',
                'dial_code' => '386',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Bosnia-Herzegovina',
                'dial_code' => '387',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Macedonia',
                'dial_code' => '389',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Czech Republic',
                'dial_code' => '420',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Slovakia',
                'dial_code' => '421',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Liechtenstein',
                'dial_code' => '423',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Falkland Islands',
                'dial_code' => '500',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Belize',
                'dial_code' => '501',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Guatemala',
                'dial_code' => '502',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'El Salvador',
                'dial_code' => '503',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Honduras',
                'dial_code' => '504',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Nicaragua',
                'dial_code' => '505',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Costa Rica',
                'dial_code' => '506',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Panama',
                'dial_code' => '507',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Haiti',
                'dial_code' => '509',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Guadeloupe',
                'dial_code' => '590',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Bolivia',
                'dial_code' => '591',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Guyana',
                'dial_code' => '592',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Ecuador',
                'dial_code' => '593',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'French Guiana',
                'dial_code' => '594',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Paraguay',
                'dial_code' => '595',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Martinique',
                'dial_code' => '596',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Suriname',
                'dial_code' => '597',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Uruguay',
                'dial_code' => '598',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Netherlands Antilles',
                'dial_code' => '599',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Timor-Leste',
                'dial_code' => '670',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Guam',
                'dial_code' => '1671',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Brunei',
                'dial_code' => '673',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Nauru',
                'dial_code' => '674',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Papua New Guinea',
                'dial_code' => '675',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Tonga',
                'dial_code' => '676',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Solomon Islands',
                'dial_code' => '677',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Vanuatu',
                'dial_code' => '678',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Fiji Islands',
                'dial_code' => '679',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Cook Islands',
                'dial_code' => '682',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Samoa',
                'dial_code' => '685',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'New Caledonia',
                'dial_code' => '687',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'French Polynesia',
                'dial_code' => '689',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Korea',
                'dial_code' => '850',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'HongKong',
                'dial_code' => '852',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Macau',
                'dial_code' => '853',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Cambodia',
                'dial_code' => '855',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Laos',
                'dial_code' => '856',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Bangladesh',
                'dial_code' => '880',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'International',
                'dial_code' => '882',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Taiwan',
                'dial_code' => '886',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Maldives',
                'dial_code' => '960',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Lebanon',
                'dial_code' => '961',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Jordan',
                'dial_code' => '962',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Syria',
                'dial_code' => '963',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Iraq',
                'dial_code' => '964',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Kuwait',
                'dial_code' => '965',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Saudi Arabia',
                'dial_code' => '966',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Yemen',
                'dial_code' => '967',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Oman',
                'dial_code' => '968',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Palestine',
                'dial_code' => '970',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'United Arab Emirates',
                'dial_code' => '971',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Israel',
                'dial_code' => '972',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'Bahrain',
                'dial_code' => '973',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Qatar',
                'dial_code' => '974',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'Bhutan',
                'dial_code' => '975',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Mongolia',
                'dial_code' => '976',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Nepal',
                'dial_code' => '977',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'Tajikistan',
                'dial_code' => '992',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Turkmenistan',
                'dial_code' => '993',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'Azerbaijan',
                'dial_code' => '994',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'Georgia',
                'dial_code' => '995',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'Kyrgyzstan',
                'dial_code' => '996',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Uzbekistan',
                'dial_code' => '998',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Bahamas',
                'dial_code' => '1242',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'Barbados',
                'dial_code' => '1246',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'Anguilla',
                'dial_code' => '1264',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'Antigua and Barbuda',
                'dial_code' => '1268',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'Virgin Islands,
British',
                'dial_code' => '1284',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Cayman Islands',
                'dial_code' => '1345',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'Bermuda',
                'dial_code' => '1441',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Grenada',
                'dial_code' => '1473',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'Turks and Caicos Islands',
                'dial_code' => '1649',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'Montserrat',
                'dial_code' => '1664',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'Saint Lucia',
                'dial_code' => '1758',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Dominica',
                'dial_code' => '1767',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'St. Vincent and The Gren',
                'dial_code' => '1784',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Puerto Rico',
                'dial_code' => '1787',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'Dominican Republic',
                'dial_code' => '1809',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Dominican Republic2',
                'dial_code' => '1829',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'Dominican Republic3',
                'dial_code' => '1849',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Trinidad and Tobago',
                'dial_code' => '1868',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'Saint Kitts and Nevis',
                'dial_code' => '1869',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Jamaica',
                'dial_code' => '1876',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Congo',
                'dial_code' => '242',
            ),
        ));
        
        
    }
}