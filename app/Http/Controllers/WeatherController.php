<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\Classes\YahooWeather;

class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($city = 'Copenhagen')
    {



        // OpenWeatherMap
        $owm = new \App\Classes\OpenWeatherMap;
        $owm_output = $owm->owmCityWeather($city);

        // YahooWeather
        $weather = new \App\Classes\YahooWeather;
        $myWeather = $weather->getWeatherByCity($city);

        // WeatherData to be passed
        $weatherData = array("owm_output"=>$owm_output, "myWeather"=>$myWeather);

        return view('weather')->with('weatherData', $weatherData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
