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
        ]);
    }
}
