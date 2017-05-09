<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call('App\Http\Controllers\WeatherController@currentWeather')->dailyAt('09:00');
        $schedule->call('App\Http\Controllers\WeatherController@currentWeather')->dailyAt('12:00');
        $schedule->call('App\Http\Controllers\WeatherController@currentWeather')->dailyAt('15:00');
        $schedule->call('App\Http\Controllers\WeatherController@currentWeather')->dailyAt('18:00');
        $schedule->call('App\Http\Controllers\WeatherController@currentWeather')->dailyAt('21:00');
    }
}
