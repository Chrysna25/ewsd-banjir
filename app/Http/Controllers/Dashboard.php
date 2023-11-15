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

        // $sensorData = [Dashboard::getSensor()];

        return view('admin.dashboard', [
            'title' => $title,
            'cities' => $cities
        ]);
    }

    public function getWeather($city)
    {
        $url = "https://api.openweathermap.org/data/2.5/weather";

        $response = Http::get($url, [
            "q" => $city,
            "appid" => "a50948b4ce3ff755f002f4c366a9e8c8"
        ]);

        $responseBody = json_decode($response->getBody());

        return ($responseBody);
    }

    // public function getSensor()
    // {
    //     $url = "";

    //     $response = Http::get($url, [
    //         "token" => "a50948b4ce3ff755f002f4c366a9e8c8"
    //     ]);

    //     $responseBody = json_decode($response->getBody());

    //     return ($responseBody);
    // }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
