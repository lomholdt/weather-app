<?php

namespace App\Classes;

class YrNoWeather{

	public function getWeatherByLatLong($lat, $long){

		$request = "http://api.yr.no/weatherapi/locationforecast/1.9/?lat=".$lat.";lon=".$long;
		$xml = simplexml_load_string($request);


	}




}

?>