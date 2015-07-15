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
    public function index($city = null)
    {

        if (!isset($city)){
            $location = \GeoIP::getLocation();
            $city = $location['city'];
        }

        // OpenWeatherMap
        $owm = new \App\Classes\OpenWeatherMap;
        $owm_output = $owm->owmCityWeather($city);

        // Lat+long
        $lat = $owm_output->getLat();
        $long = $owm_output->getLong();

        // Yahoo Weather
        $weather = new \App\Classes\YahooWeather;
        $myWeather = $weather->getWeatherByCity($city);

        // Yr.no Weather
        $yrData = new \App\Classes\YrNoWeather;
        $yrWeather = $yrData->getWeatherByLatLong($lat, $long);
        $yrWeather->setCountry($owm_output->getCountry());
        $yrWeather->setCity($owm_output->getCity());

        // DMI        
        $dmi = new \App\Classes\Dmi;
        $dmi_output = $dmi->dmiCityWeather($lat, $long);

        // Dark Sky Forecast
        $forecast = new \App\Classes\DarkSkyForecast;
        $forecast_output = $forecast->forecastCityWeather($lat, $long);
        $forecast_output->setCountry($owm_output->getCountry());
        $forecast_output->setCity($owm_output->getCity());

        // WeatherData to be passed
        $weatherData = array("owm_output"=>$owm_output, "myWeather"=>$myWeather, "dmi_output"=>$dmi_output, "yrWeather" => $yrWeather, "forecast_output"=>$forecast_output);
        return view('weather')->with('weatherData', $weatherData)->with('avgTemp', $this->getAvgTemp($weatherData));
    }

    private function getAvgTemp($weatherArray){
        $avgTemp = 0;
        foreach ($weatherArray as $weather) {
            $avgTemp += $weather->getTemp();
        }
        return $avgTemp/count($weatherArray);
    }

}
