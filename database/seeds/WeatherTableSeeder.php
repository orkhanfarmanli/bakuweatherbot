<?php

use Illuminate\Database\Seeder;

class WeatherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weather')->insert([
            // Group 2XX
            [
                'group_id' => 200,
                'meaning' => 'az yağışlı tufan',
                'emoji' => '⛈',
            ],
            [
                'group_id' => 201,
                'meaning' => 'yağışlı tufan',
                'emoji' => '⛈',
            ],
            [
                'group_id' => 202,
                'meaning' => 'şiddətli yağışlı tufan',
                'emoji' => '⛈',
            ],
            [
                'group_id' => 210,
                'meaning' => 'yüngül tufan',
                'emoji' => '⛈',
            ],
            [
                'group_id' => 211,
                'meaning' => 'tufan',
                'emoji' => '⛈',
            ],
            [
                'group_id' => 212,
                'meaning' => 'şiddətli tufan',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 221,
                'meaning' => 'dağınıq tufan',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 230,
                'meaning' => 'az çiskinli tufan',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 231,
                'meaning' => 'çiskinli tufan',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 232,
                'meaning' => 'şiddətli çiskinli tufan',
                'emoji' => '🌧',
            ],
            // Group 3XX
            [
                'group_id' => 300,
                'meaning' => 'az miqdarda çiskin',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 301,
                'meaning' => 'çiskin',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 302,
                'meaning' => 'şiddətli çiskin',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 310,
                'meaning' => 'yağış',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 311,
                'meaning' => 'yağış',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 312,
                'meaning' => 'şiddətli yağış',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 313,
                'meaning' => 'şiddətli yağış',
                'emoji' => '🌧',
            ],

            [
                'group_id' => 314,
                'meaning' => 'şiddətli yağış',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 321,
                'meaning' => 'şiddətli yağış',
                'emoji' => '🌧',
            ],
            // Group 5XX
            [
                'group_id' => 500,
                'meaning' => 'az yağış',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 501,
                'meaning' => 'yağış',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 502,
                'meaning' => 'möhkəm yağış',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 503,
                'meaning' => 'şiddətli yağış',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 504,
                'meaning' => 'leysan',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 511,
                'meaning' => 'dondurucu yağış',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 520,
                'meaning' => 'yağış və ya leysan',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 521,
                'meaning' => 'yağış və ya leysan',
                'emoji' => '🌧',
            ],
            [
                'group_id' => 522,
                'meaning' => 'şiddətli leysan',
                'emoji' => '⛈',
            ],
            [
                'group_id' => 531,
                'meaning' => 'dəli leysan',
                'emoji' => '⛈',
            ],
            [
                'group_id' => 600,
                'meaning' => 'yüngül qar',
                'emoji' => '🌨',
            ],
            [
                'group_id' => 601,
                'meaning' => 'qar',
                'emoji' => '🌨',
            ],
            [
                'group_id' => 602,
                'meaning' => 'güclü qar',
                'emoji' => '🌨',
            ],
            [
                'group_id' => 611,
                'meaning' => 'sulu qar',
                'emoji' => '🌨',
            ],
            [
                'group_id' => 612,
                'meaning' => 'möhkəm sulu qar',
                'emoji' => '🌨',
            ],
            [
                'group_id' => 615,
                'meaning' => 'çiskin və qar qarışıq',
                'emoji' => '🌨',
            ],
            [
                'group_id' => 616,
                'meaning' => 'yağış və qar',
                'emoji' => '🌨',
            ],
            [
                'group_id' => 620,
                'meaning' => 'az şiddətli qar',
                'emoji' => '🌨',
            ],
            [
                'group_id' => 621,
                'meaning' => 'şiddətli qar',
                'emoji' => '🌨',
            ],
            [
                'group_id' => 622,
                'meaning' => 'dəli qar',
                'emoji' => '🌨',
            ],
            [
                'group_id' => 701,
                'meaning' => 'duman',
                'emoji' => '🌫',
            ],
            [
                'group_id' => 711,
                'meaning' => 'çən',
                'emoji' => '🌫',
            ],
            [
                'group_id' => 721,
                'meaning' => 'zəif çən',
                'emoji' => '🌫',
            ],
            [
                'group_id' => 731,
                'meaning' => 'qum və toz fırtınası',
                'emoji' => '🌫',
            ],
            [
                'group_id' => 741,
                'meaning' => 'duman',
                'emoji' => '🌫',
            ],
            [
                'group_id' => 751,
                'meaning' => 'qum',
                'emoji' => '🌫',
            ],
            [
                'group_id' => 761,
                'meaning' => 'toz',
                'emoji' => '🌫',
            ],
            [
                'group_id' => 762,
                'meaning' => 'vulkanik toz',
                'emoji' => '🌫',
            ],
            [
                'group_id' => 771,
                'meaning' => 'fırtına',
                'emoji' => '⛈',
            ],
            [
                'group_id' => 781,
                'meaning' => 'tufan',
                'emoji' => '⛈',
            ],
            [
                'group_id' => 800,
                'meaning' => 'aydın',
                'emoji' => '🏞',
            ],
            [
                'group_id' => 801,
                'meaning' => 'az buludlu',
                'emoji' => '🌤',
            ],
            [
                'group_id' => 802,
                'meaning' => 'parçalı buludlu',
                'emoji' => '🌤',
            ],
            [
                'group_id' => 803,
                'meaning' => 'buludlu',
                'emoji' => '☁',
            ],
            [
                'group_id' => 804,
                'meaning' => 'qapalı buludlu',
                'emoji' => '☁',
            ],
            [
                'group_id' => 900,
                'meaning' => 'qasırğa',
                'emoji' => '⛈',
            ],
            [
                'group_id' => 901,
                'meaning' => 'tropikal tufan',
                'emoji' => '⛈',
            ],
            [
                'group_id' => 902,
                'meaning' => 'qasırğa',
                'emoji' => '🌩',
            ],
            [
                'group_id' => 903,
                'meaning' => 'soyuq',
                'emoji' => '❄',
            ],
            [
                'group_id' => 904,
                'meaning' => 'isti',
                'emoji' => '☀',
            ],
            [
                'group_id' => 905,
                'meaning' => 'küləkli',
                'emoji' => '💨',
            ],
            [
                'group_id' => 906,
                'meaning' => 'dolu',
                'emoji' => '🌨',
            ],
            [
                'group_id' => 951,
                'meaning' => 'sakit',
                'emoji' => '🍃',
            ],
            [
                'group_id' => 952,
                'meaning' => 'xəfif meh',
                'emoji' => '🍃',
            ],
            [
                'group_id' => 953,
                'meaning' => 'mülayim meh',
                'emoji' => '🍃',
            ],
            [
                'group_id' => 954,
                'meaning' => 'meh',
                'emoji' => '🍃',
            ],
            [
                'group_id' => 955,
                'meaning' => 'xoş meh',
                'emoji' => '🍃',
            ],
            [
                'group_id' => 956,
                'meaning' => 'güclü meh',
                'emoji' => '🌪',
            ],
            [
                'group_id' => 957,
                'meaning' => 'güclü külək və ya fırtına',
                'emoji' => '🌪',
            ],
            [
                'group_id' => 958,
                'meaning' => 'fırtına',
                'emoji' => '🌪',
            ],
            [
                'group_id' => 959,
                'meaning' => 'şiddətli fırtına',
                'emoji' => '⛈',
            ],
            [
                'group_id' => 960,
                'meaning' => 'tufan',
                'emoji' => '⛈',
            ],
            [
                'group_id' => 961,
                'meaning' => 'şiddətli tufan',
                'emoji' => '⛈',
            ],
            [
                'group_id' => 962,
                'meaning' => 'qasırğa',
                'emoji' => '⛈',
            ],
        ]);
    }
}
