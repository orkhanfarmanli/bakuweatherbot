<?php

$app->get('/', function () {
    return view('welcome');
});

$app->get('/testforecast', 'WeatherController@todaysWeatherForecast');
$app->get('/testcurrent', 'WeatherController@currentWeather');
