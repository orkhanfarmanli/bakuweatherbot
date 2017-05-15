<?php

use Illuminate\Database\Seeder;

class EmojisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weather_emojis')->insert([
            [
                'group_id' => 200,
            ],
        ]);
    }
}
