<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class ApiHelper
{
    public static function get($endpoint, $params = [])
    {
        $params['apiKey'] = env('API_KEY');
        $response = Http::get(env('API_BASE_URL') . $endpoint, $params);
        return $response->json();
    }
}