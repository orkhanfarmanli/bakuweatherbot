<?php

$app->get('/', function () use ($app) {
    return view('welcome');
});
