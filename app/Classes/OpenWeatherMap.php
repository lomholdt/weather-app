<?php
namespace App\Classes;
/* OpenWeatherMap API 2.5 */
class OpenWeatherMap { 
	public function owmCityWeather($city) {
		$owm_url = "http://api.openweathermap.org/data/2.5/find?q=".$city."&units=metric";
    	$owm_json = file_get_contents($owm_url,0,null,null);
    	$owm_output = json_decode($owm_json);

	    $weather = new Weather();
	    $weather->setOrigin('OpenWeatherMap'); 
	    foreach ($owm_output->list as $elm) {
	    	$weather->setTemp($elm->main->temp);
	    	$weather->setCity($elm->name);
	    	$weather->setCountry($elm->sys->country);
	    	$weather->setLat($elm->coord->lat);
	    	$weather->setLong($elm->coord->lon);
	    }

        return $weather;
	}
}
?>