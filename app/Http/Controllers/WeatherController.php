<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index(Request $request) {
        $response = Http::get('https://api.openweathermap.org/data/2.5/forecast', [
            'appId' => env('APP_KEY_OPENWEATHER'),
            'lang' => 'pt_br',
            'units' => 'metric',
            'q' => $request->search
        ]);

        return response()->json($response->json());
    }
}
