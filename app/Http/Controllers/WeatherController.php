<?php

namespace App\Http\Controllers;

use Abraham\TwitterOAuth\TwitterOAuth;
use App\Models\Translation;
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
        // Connection to twitter api
        $this->connection = new TwitterOAuth(env('TWITTER_CONSUMER_KEY'), env('TWITTER_CONSUMER_SECRET'), env('TWITTER_ACCESS_TOKEN'), env('TWITTER_ACCESS_SECRET'));
        $content = $this->connection->get("account/verify_credentials");

        // Request client
        $this->client = new Client();
    }

    /**
     * A function for getting weather information.
     *
     * @return Eloquent collection
     */

    public function currentWeather()
    {
        $weather_data = $this->client->get('http://api.openweathermap.org/data/2.5/weather/', [
            'query' => [
                'appid' => env('OPENWEATHERMAP_API_KEY'),
                'q' => 'Baku',
                'units' => 'metric',
            ],
        ]);

        $weather = collect(json_decode($weather_data->getBody()));
        return $weather;
        $this->tweetWeather($weather, 'daily');
    }

    /**
     * A function for getting weekly weather information.
     *
     * @return Eloquent collection
     */

    public function firstPartOfTheWeek()
    {
        $weather_data = $this->client->get('http://api.openweathermap.org/data/2.5/forecast/daily/', [
            'query' => [
                'appid' => env('OPENWEATHERMAP_API_KEY'),
                'q' => 'Baku',
                'units' => 'metric',
                'cnt' => 4,
            ],
        ]);

        $weather = collect(json_decode($weather_data->getBody()));
        $weather_week = [];
        for ($i = 1; $i < count($weather['list']); $i++) {
            $weather_week[] = $weather['list'][$i];
        }
        $this->tweetWeather($weather_week, 'firstpart');
    }

    /**
     * A function for getting weekly weather information.
     *
     * @return Eloquent collection
     */

    public function lastPartOfTheWeek()
    {
        $weather_data = $this->client->get('http://api.openweathermap.org/data/2.5/forecast/daily/', [
            'query' => [
                'appid' => env('OPENWEATHERMAP_API_KEY'),
                'q' => 'Baku',
                'units' => 'metric',
                'cnt' => 5,
            ],
        ]);

        $weather = collect(json_decode($weather_data->getBody()));
        $weather_week = [];
        for ($i = 1; $i < count($weather['list']); $i++) {
            $weather_week[] = $weather['list'][$i];
        }
        $this->tweetWeather($weather_week, 'lastpart');
    }

    /**
     * A function for tweeting.
     *
     * @return void
     */

    public function tweetWeather($data, $type)
    {
        $status = '';
        $weekdays = ['Be', 'Ça', 'Çə', 'Ca', 'Cm', 'Şə', 'Ba'];
        switch ($type) {
            case 'daily':
                $weather_id = $data['weather'][0]->id;
                $weather_condition = Translation::where('group_id', '=', $weather_id)->first()->meaning;
                $status = "#Hava: " . $weather_condition . "\n#Temperatur: " . $data['main']->temp . "° \n#Külək: " . $data['wind']->speed . "m/s.";
                break;
            case 'firstpart':
                $day = 0;
                foreach ($data as $weather) {
                    $weather_id = $weather->weather[0]->id;
                    $weather_condition = Translation::where('group_id', '=', $weather_id)->first()->meaning;
                    $averageTemp = ($weather->temp->min + $weather->temp->max) / 2;
                    $status .= '#' . $weekdays[$day] . ": Hava: " . $weather_condition . ", Temp: " . intval($averageTemp) . "°\n";
                    $day++;
                }
                break;
            case 'lastpart':
                $day = 3;
                foreach ($data as $weather) {
                    $weather_id = $weather->weather[0]->id;
                    $weather_condition = Translation::where('group_id', '=', $weather_id)->first()->meaning;
                    $averageTemp = ($weather->temp->min + $weather->temp->max) / 2;
                    $status .= '#' . $weekdays[$day] . ": #Hava: " . $weather_condition . ", #Temp: " . intval($averageTemp) . "°\n";
                    $day++;
                }
                break;
        }

        $statues = $this->connection->post("statuses/update", ["status" => $status]);
    }
}
