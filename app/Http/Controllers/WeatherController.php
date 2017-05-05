<?php

namespace App\Http\Controllers;

use App\Models\Weather;
use App\Notifications\Tweet;
use GuzzleHttp\Client;

// use App\Notifications\Tweet;
// use GuzzleHttp\Client;

class WeatherController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function weather()
    {
        $client = new Client();
        $weather_data = $client->get('http://api.openweathermap.org/data/2.5/weather?q=Baku&units=metric&appid=' . env('WEATHER_API_ID'));
        return $weather_data;

        $weather = new Weather;
        $weather->notify(new Tweet());
    }
}
