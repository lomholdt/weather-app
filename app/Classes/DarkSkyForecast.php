<?php
namespace App\Classes;
class DarkSkyForecast { 
	public function forecastCityWeather($lat, $long) {
		$forecast_url = "https://api.darksky.net/forecast/6c23ce4bf94e613cf7e5239da0389d36/".$lat.",".$long."?units=si";
    	$forecast_json = file_get_contents($forecast_url,0,null,null);
    	$forecast_output = json_decode($forecast_json);

	    $weather = new Weather();
	    $weather->setOrigin('Forecast.io'); 
	   
	    $weather->setTemp($forecast_output->currently->temperature);
	    $weather->setCity($forecast_output->timezone);
	    $weather->setCountry($forecast_output->timezone);
	    $weather->setDescription($forecast_output->currently->summary);

        return $weather;
	}
}

?>
