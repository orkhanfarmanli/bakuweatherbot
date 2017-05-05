<?php

// $app->get('/', function () use ($app) {
//     $weather = Weather::find(1);
//     $weather->notify(new Tweet());
// });

$app->get('/', 'WeatherController@weather');
