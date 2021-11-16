<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('weather', 'App\Http\Controllers\WeatherController@index');
