<?php

$app->get('/', function () {
    return view('welcome');
});

$app->get('/test', 'WeatherController@todaysWeatherForecast');
