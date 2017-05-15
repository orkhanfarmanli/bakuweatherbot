<?php

use Illuminate\Database\Seeder;

class WeatherGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weather_groups')->insert([
            ['group' => 200],
            ['group' => 300],
            ['group' => 500],
            ['group' => 600],
            ['group' => 700],
            ['group' => 800],
            ['group' => 900],
        ]);
    }
}
