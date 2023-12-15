<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class Dashboard extends Controller
{
    public function index()
    {
        $title = "Dashboard Admin";

        try {
            $cities = [
                'Cianjur' => Dashboard::getWeather("Cianjur"),
                'Depok' => Dashboard::getWeather("Depok"),
                'Jakarta' => Dashboard::getWeather("Jakarta"),
                'Bogor' => Dashboard::getWeather("Bogor"),
            ];
        } catch (\Exception $e) {
            // Handle the exception (e.g., log it, show a default value, etc.)
            $cities = [];
        }

        $sensorData = [Dashboard::getSensor()];
        // $ultrasonicHistory = [Dashboard::getHistoryUltrasonic()];
        // $flowmeterHistory = [Dashboard::getHistoryFlowmeter()];

        // dd($ultrasonicHistory);

        return view('admin.dashboard', [
            'title' => $title,
            'cities' => $cities,
            'sensorData' => $sensorData,
            // 'ultrasonicHistory' => $ultrasonicHistory,
            // 'flowmeterHistory' => $flowmeterHistory
        ]);
    }

    public function getWeather($city)
    {
        $url = "https://api.openweathermap.org/data/2.5/weather";

        $response = Http::withoutVerifying()->get($url, [
            "q" => $city,
            "appid" => "a50948b4ce3ff755f002f4c366a9e8c8"
        ]);

        $responseBody = json_decode($response->getBody());

        return ($responseBody);
    }

    public function getSensor()
    {
        $url = "https://blynk.cloud/external/api/getAll";

        $response = Http::withoutVerifying()->get($url, [
            "token" => "iFpr95TA4HL9JHac8CPhTkrB3VFuHKJP"
        ]);

        $responseBody = json_decode($response->getBody(), true);

        return ($responseBody);
    }

    public function getHistoryUltrasonic()
    {
        $url = "https://blynk.cloud/external/api/data/get";

        $response = Http::withoutVerifying()->get($url, [
            "token" => "iFpr95TA4HL9JHac8CPhTkrB3VFuHKJP",
            "period" => "DAY",
            "granularityType" => "MINUTE",
            "sourceType" => "MAX",
            "tzName" => "Asia/Tokyo",
            "format" => "ISO_SIMPLE",
            "output" => "JSON",
            "dataStreamId" => "1"
        ]);

        $responseBody = json_decode($response->getBody(), true);

        return ($responseBody);
    }

    public function getHistoryFlowmeter()
    {
        $url = "https://blynk.cloud/external/api/data/get";

        $response = Http::withoutVerifying()->get($url, [
            "token" => "iFpr95TA4HL9JHac8CPhTkrB3VFuHKJP",
            "period" => "DAY",
            "granularityType" => "MINUTE",
            "sourceType" => "MAX",
            "tzName" => "Asia/Tokyo",
            "format" => "ISO_SIMPLE",
            "output" => "JSON",
            "dataStreamId" => "2"
        ]);

        $responseBody = json_decode($response->getBody(), true);

        return ($responseBody);
    }
}
