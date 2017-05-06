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
            [
                'group_id' => 200,
                'meaning' => '',
            ],
            [
                'group_id' => 201,
                'meaning' => '',
            ],
            [
                'group_id' => 202,
                'meaning' => '',
            ],
            [
                'group_id' => 210,
                'meaning' => '',
            ],
            [
                'group_id' => 211,
                'meaning' => '',
            ],
            [
                'group_id' => 212,
                'meaning' => '',
            ],
            [
                'group_id' => 221,
                'meaning' => '',
            ],
            [
                'group_id' => 230,
                'meaning' => '',
            ],
            [
                'group_id' => 231,
                'meaning' => '',
            ],
            [
                'group_id' => 232,
                'meaning' => '',
            ],
        ]);
    }
}
