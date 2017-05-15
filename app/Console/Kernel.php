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
        // Daily posts
        $schedule->call('App\Http\Controllers\WeatherController@todaysWeatherForecast')->dailyAt('07:00');
        $schedule->call('App\Http\Controllers\WeatherController@currentWeather')->dailyAt('12:00');
        $schedule->call('App\Http\Controllers\WeatherController@currentWeather')->dailyAt('15:00');
        $schedule->call('App\Http\Controllers\WeatherController@currentWeather')->dailyAt('18:00');
        $schedule->call('App\Http\Controllers\WeatherController@currentWeather')->dailyAt('21:00');
        $schedule->call('App\Http\Controllers\WeatherController@currentWeather')->dailyAt('00:00');

        // Posts for the first part of the week
        $schedule->call('App\Http\Controllers\WeatherController@firstPartOfTheWeek')->weekly()->sundays()->at('22:00');

        // Posts for the last part of the week
        $schedule->call('App\Http\Controllers\WeatherController@lastPartOfTheWeek')->weekly()->wednesdays()->at('22:00');
    }
}
