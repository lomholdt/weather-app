<?php
namespace App\Classes;
class Wunderground { 
	public function wgCityWeather($city, $country) {
		$wg_url = "http://api.wunderground.com/api/c579cb744e17f627/conditions/q/".$country."/".$city.".json";
    	$wg_json = file_get_contents($wg_url,0,null,null);
    	$wg_output = json_decode($wg_json);

	    $weather = new Weather();
	    $weather->setOrigin('Wunderground'); 
	    #foreach ($wg_output as $elm) {
	    	#var_dump($elm);
	    	$weather->setTemp($wg_output->current_observation->temp_c);
	    	$weather->setCity($wg_output->current_observation->display_location->city);
	    	$weather->setCountry($wg_output->current_observation->display_location->country_iso3166);
	    	$weather->setDescription($wg_output->current_observation->weather);
	    #}

        return $weather;
	}
}
?>