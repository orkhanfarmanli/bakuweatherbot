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

    /**
     * Main handler function.
     *
     * @return void
     */

    public function weatherForecast()
    {
        $weather = $this->getWeeklyWeather();
        return $weather;
        $this->tweetWeather($weather);
    }

    /**
     * A function for getting weather information.
     *
     * @return Eloquent collection
     */

    public function getCurrentWeather()
    {
        $client = new Client();
        $weather_data = $client->get('http://api.openweathermap.org/data/2.5/weather/', [
            'query' => [
                'appid' => env('OPENWEATHERMAP_API_KEY'),
                'q' => 'Baku',
                'units' => 'metric',
            ],
        ]);

        $weather = collect(json_decode($weather_data->getBody()));
        return $weather;
    }

    /**
     * A function for getting weekly weather information.
     *
     * @return Eloquent collection
     */

    public function getWeeklyWeather()
    {
        $client = new Client();

        $weather_data = $client->get('http://api.openweathermap.org/data/2.5/forecast/daily/', [
            'query' => [
                'appid' => env('OPENWEATHERMAP_API_KEY'),
                'q' => 'Baku',
                'units' => 'metric',
                'cnt' => 7,
            ],
        ]);
        $weather = collect(json_decode($weather_data->getBody()));
        return $weather;
    }

    /**
     * A function for tweeting.
     *
     * @return void
     */

    public function tweetWeather($data)
    {
        $weather = new Weather;
        $weather->condition = $data['weather'][0]->main;
        $weather->temp = $data['main']->temp;
        $weather->wind = $data['wind']->speed;
        $weather->notify(new Tweet());
    }

}
