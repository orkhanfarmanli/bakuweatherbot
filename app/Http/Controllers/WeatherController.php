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

        $weather_data = $client->get('http://api.wunderground.com/api/' . env('WUNDERGROUND_API_KEY') . '/forecast10day/q/Azerbaijan/Baku.json');
        $weather_collection = collect(json_decode($weather_data->getBody()));
        $tendayforecast = $weather_collection->get('forecast')->txt_forecast->forecastday;
        dd($tendayforecast);

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
