<?php

use Illuminate\Database\Seeder;

class TranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('translations')->insert([
            // Group 2XX
            [
                'group_id' => 200,
                'meaning' => 'az yağışlı tufan',
            ],
            [
                'group_id' => 201,
                'meaning' => 'yağışlı tufan',
            ],
            [
                'group_id' => 202,
                'meaning' => 'şiddətli yağışlı tufan',
            ],
            [
                'group_id' => 210,
                'meaning' => 'yüngül tufan',
            ],
            [
                'group_id' => 211,
                'meaning' => 'tufan',
            ],
            [
                'group_id' => 212,
                'meaning' => 'şiddətli tufan',
            ],
            [
                'group_id' => 221,
                'meaning' => 'dağınıq tufan',
            ],
            [
                'group_id' => 230,
                'meaning' => 'az çiskinli tufan',
            ],
            [
                'group_id' => 231,
                'meaning' => 'çiskinli tufan',
            ],
            [
                'group_id' => 232,
                'meaning' => 'şiddətli çiskinli tufan',
            ],
            // Group 3XX
            [
                'group_id' => 300,
                'meaning' => 'az miqdarda çiskin',
            ],
            [
                'group_id' => 301,
                'meaning' => 'çiskin',
            ],
            [
                'group_id' => 302,
                'meaning' => 'şiddətli çiskin',
            ],
            [
                'group_id' => 310,
                'meaning' => 'yağış',
            ],
            [
                'group_id' => 311,
                'meaning' => 'yağış',
            ],
            [
                'group_id' => 312,
                'meaning' => 'şiddətli yağış',
            ],
            [
                'group_id' => 313,
                'meaning' => 'şiddətli yağış',
            ],

            [
                'group_id' => 314,
                'meaning' => 'şiddətli yağış',
            ],
            [
                'group_id' => 321,
                'meaning' => 'şiddətli yağış',
            ],
            // Group 5XX
            [
                'group_id' => 500,
                'meaning' => 'az yağış',
            ],
            [
                'group_id' => 501,
                'meaning' => 'yağış',
            ],
            [
                'group_id' => 502,
                'meaning' => 'möhkəm yağış',
            ],
            [
                'group_id' => 503,
                'meaning' => 'şiddətli yağış',
            ],
            [
                'group_id' => 504,
                'meaning' => 'leysan',
            ],
            [
                'group_id' => 511,
                'meaning' => 'dondurucu yağış',
            ],
            [
                'group_id' => 520,
                'meaning' => 'yağış və ya leysan',
            ],
            [
                'group_id' => 521,
                'meaning' => 'yağış və leysan',
            ],
            [
                'group_id' => 522,
                'meaning' => 'şiddətli leysan',
            ],
            [
                'group_id' => 531,
                'meaning' => 'dəli leysan',
            ],
            [
                'group_id' => 600,
                'meaning' => 'yüngül qar',
            ],
            [
                'group_id' => 601,
                'meaning' => 'qar',
            ],
            [
                'group_id' => 602,
                'meaning' => 'güclü qar',
            ],
            [
                'group_id' => 611,
                'meaning' => 'sulu qar',
            ],
            [
                'group_id' => 612,
                'meaning' => 'möhkəm sulu qar',
            ],
            [
                'group_id' => 615,
                'meaning' => 'çiskin və qar qarışıq',
            ],
            [
                'group_id' => 616,
                'meaning' => 'yağış və qar',
            ],
            [
                'group_id' => 620,
                'meaning' => 'az şiddətli qar',
            ],
            [
                'group_id' => 621,
                'meaning' => 'şiddətli qar',
            ],
            [
                'group_id' => 622,
                'meaning' => 'dəli qar',
            ],
            [
                'group_id' => 701,
                'meaning' => 'duman',
            ],
            [
                'group_id' => 711,
                'meaning' => 'çən',
            ],
            [
                'group_id' => 721,
                'meaning' => 'zəif çən',
            ],
            [
                'group_id' => 731,
                'meaning' => 'qum və toz fırtınası',
            ],
            [
                'group_id' => 741,
                'meaning' => 'duman',
            ],
            [
                'group_id' => 751,
                'meaning' => 'qum',
            ],
            [
                'group_id' => 761,
                'meaning' => 'toz',
            ],
            [
                'group_id' => 762,
                'meaning' => 'vulkanik toz',
            ],
            [
                'group_id' => 771,
                'meaning' => 'fırtına',
            ],
            [
                'group_id' => 781,
                'meaning' => 'tufan',
            ],
            [
                'group_id' => 800,
                'meaning' => 'aydın',
            ],
            [
                'group_id' => 801,
                'meaning' => 'az buludlu',
            ],
            [
                'group_id' => 802,
                'meaning' => 'parçalı buludlu',
            ],
            [
                'group_id' => 803,
                'meaning' => 'buludlu',
            ],
            [
                'group_id' => 804,
                'meaning' => 'qapalı buludlu',
            ],
            [
                'group_id' => 900,
                'meaning' => 'qasırğa',
            ],
            [
                'group_id' => 901,
                'meaning' => 'tropikal tufan',
            ],
            [
                'group_id' => 902,
                'meaning' => 'qasırğa',
            ],
            [
                'group_id' => 903,
                'meaning' => 'soyuq',
            ],
            [
                'group_id' => 904,
                'meaning' => 'isti',
            ],
            [
                'group_id' => 905,
                'meaning' => 'küləkli',
            ],
            [
                'group_id' => 906,
                'meaning' => 'dolu',
            ],
            [
                'group_id' => 951,
                'meaning' => 'sakit',
            ],
            [
                'group_id' => 952,
                'meaning' => 'xəfif meh',
            ],
            [
                'group_id' => 953,
                'meaning' => 'mülayim meh',
            ],
            [
                'group_id' => 954,
                'meaning' => 'meh',
            ],
            [
                'group_id' => 955,
                'meaning' => 'xoş meh',
            ],
            [
                'group_id' => 956,
                'meaning' => 'güclü meh',
            ],
            [
                'group_id' => 957,
                'meaning' => 'güclü külək və ya fırtına',
            ],
            [
                'group_id' => 958,
                'meaning' => 'fırtına',
            ],
            [
                'group_id' => 959,
                'meaning' => 'şiddətli fırtına',
            ],
            [
                'group_id' => 960,
                'meaning' => 'tufan',
            ],
            [
                'group_id' => 961,
                'meaning' => 'şiddətli tufan',
            ],
            [
                'group_id' => 962,
                'meaning' => 'qasırğa',
            ],
        ]);
    }
}
