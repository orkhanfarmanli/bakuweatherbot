<?php

$app->get('/', function () use ($app) {
    return view('welcome');
});

$app->get('/weekly', 'WeatherController@weeklyWeather');
