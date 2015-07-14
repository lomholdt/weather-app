<?php
namespace App\Classes;
/* OpenWeatherMap API 2.5 */
class OpenWeatherMap { 
	public function owmCityWeather($city) {
		$owm_url = "http://api.openweathermap.org/data/2.5/find?q=".$city."&units=metric";
    	$owm_json = file_get_contents($owm_url,0,null,null);
    	$owm_output = json_decode($owm_json);
        return $owm_output;
	}
}
?>