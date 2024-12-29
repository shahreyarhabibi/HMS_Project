<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;
use function Laravel\Prompts\table;

class registerseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('registry_form')->insert([
        [
            'NAME' => 'علی رضا',
            'FATHERNAME' => 'عنایت الله',
            'LASTNAME' => 'حبیبی',
            'AGE' => '21',
            'DISEASE' => 'داخله',
            'SEX' => 'مرد',
            'PHONENUMBER' => '+93730951336',
            'ADDRESS' => 'کابل دارالامان',
            'ATTENDDATE' => '2023-04-25',

        ],
            [
                'NAME' => 'قاسم',
                'FATHERNAME' => 'عبدالله',
                'LASTNAME' => 'رحیمی',
                'AGE' => '30',
                'DISEASE' => 'دندان',
                'SEX' => 'مرد',
                'PHONENUMBER' => '+93756982150',
                'ADDRESS' => 'کابل خوشحال خان',
                'ATTENDDATE' => '2022-01-15',
            ],
            [
                'NAME' => 'مریم',
                'FATHERNAME' => 'محمد',
                'LASTNAME' => 'عزیزی',
                'AGE' => '24',
                'DISEASE' => 'سایر',
                'SEX' => 'زن',
                'PHONENUMBER' => '+93780459563',
                'ADDRESS' => 'کابل کارته چهار',
                'ATTENDDATE' => '2023-01-06',
            ],
            [
                'NAME' => 'مصطفی',
                'FATHERNAME' => 'محمد حسین',
                'LASTNAME' => 'عزیزی',
                'AGE' => '15',
                'DISEASE' => 'گوش و گلو',
                'SEX' => 'مرد',
                'PHONENUMBER' => '+93790300299',
                'ADDRESS' => 'کابل قوای مرکز',
                'ATTENDDATE' => '2024-04-01',
            ],
              [
                'NAME' => 'مژگان',
                'FATHERNAME' => 'محمد شاکر',
                'LASTNAME' => 'لطیفی',
                'AGE' => '45',
                'DISEASE' => 'جلدی',
                'SEX' => 'زن',
                'PHONENUMBER' => '+937784502236',
                'ADDRESS' => 'هرات چوک گلها',
                'ATTENDDATE' => '2023-12-08',
            ],
            [
                'NAME' => 'نرگس',
                'FATHERNAME' => 'نور محمد',
                'LASTNAME' => 'رسولی',
                'AGE' => '20',
                'DISEASE' => 'ارتوپیدی',
                'SEX' => 'زن',
                'PHONENUMBER' => '+93774585993',
                'ADDRESS' => 'بلخ کوت برق',
                'ATTENDDATE' => '2021-12-19',
            ]

        ]);
    }
}
