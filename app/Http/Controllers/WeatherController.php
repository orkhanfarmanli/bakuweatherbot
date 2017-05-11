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
        $this->tweetWeather($weather);
    }

    /**
     * A function for getting weekly weather information.
     *
     * @return Eloquent collection
     */

    public function weeklyWeather()
    {
        $weather_data = $this->client->get('http://api.openweathermap.org/data/2.5/forecast/daily/', [
            'query' => [
                'appid' => env('OPENWEATHERMAP_API_KEY'),
                'q' => 'Baku',
                'units' => 'metric',
                'cnt' => 7,
            ],
        ]);

        $weather = collect(json_decode($weather_data->getBody()));
        // $date = gmdate("M d Y H:i:s", $weather['list'][1]->dt); ==> converting gmd date to human readable format
        $this->tweetWeather($weather);
    }

    /**
     * A function for tweeting.
     *
     * @return void
     */

    public function tweetWeather($data)
    {
        $weather_id = $data['weather'][0]->id;
        $weather_condition = Translation::where('group_id', '=', $weather_id)->first()->meaning;
        $status = "Hava şəraiti: " . $weather_condition . "\nTemperatur: " . $data['main']->temp . "° \nKüləyin sürəti: " . $data['wind']->speed . "m/s.";
        $statues = $this->connection->post("statuses/update", ["status" => $status]);
    }

}
