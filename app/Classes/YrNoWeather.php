<?php

namespace App\Classes;

class YrNoWeather{

	public function getWeatherByLatLong($lat, $long){

		$requestUrl = "http://api.yr.no/weatherapi/locationforecast/1.9/?lat=".$lat.";lon=".$long;

		// CURL Request for the url
		$session = curl_init($requestUrl);
	    curl_setopt($session, CURLOPT_RETURNTRANSFER,true);
	    $xmlData = curl_exec($session);

		$xml = simplexml_load_string($xmlData);

		$currentWeather = $xml->xpath('/weatherdata/product/time/*[1]')[0];

		$weather = new Weather();
		$weather->setOrigin('Yr.no');
		$weather->setTemp($currentWeather->temperature['value']);
		$weather->setCountry('-');
		$weather->setCity('-');

		return $weather;

	}

	public function getWeatherDescription($lat, $long){
		$requestUrl = "http://api.yr.no/weatherapi/textlocation/1.0/?language=en;latitude=".$lat.";longitude=".$long;
	}
}

?>