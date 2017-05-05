<?php

namespace App\Http\Controllers;

use App\Models\Weather;
use App\Notifications\Tweet;
use GuzzleHttp\Client;

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
        $weather_data = $client->get('http://api.openweathermap.org/data/2.5/weather',
            ['query' => [
                'q' => 'Baku',
                'units' => 'metric',
                'appid' => env('WEATHER_API_ID'),
            ]]);
        $weather_collection = collect(json_decode($weather_data->getBody()));

        /*
        Weather
        $weather['weather'][0]->main

        Temperature
        $weather['main']->temp

        Wind
        $weather['wind']->speed
         */
        // dd($weather['weather'][0]->main);

        $weather = new Weather;
        $weather->condition = $weather_collection['weather'][0]->main;
        $weather->temp = $weather_collection['main']->temp;
        $weather->wind = $weather_collection['wind']->speed;
        $weather->notify(new Tweet());
    }
}
