<?php

namespace App\Classes;

class YahooWeather{

	public function getWeatherByCity($city){

		$BASE_URL = "http://query.yahooapis.com/v1/public/yql";

	    $yql_query = 'select item.condition from weather.forecast where woeid in (select woeid from geo.places(1) where text="'.$city.'") and u="c"';
	    $yql_query_url = $BASE_URL . "?q=" . urlencode($yql_query) . "&format=json";

	    // Make call with cURL
	    $session = curl_init($yql_query_url);
	    curl_setopt($session, CURLOPT_RETURNTRANSFER,true);
	    $json = curl_exec($session);
	    
	    // Convert JSON to PHP object
	     $phpObj =  json_decode($json);
	    return $phpObj;
	}

}

?>