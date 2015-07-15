<?php
namespace App\Classes;
class Dmi {
	public function dmiCityWeather($lat, $long) {
		$dmi_url = "http://www.dmi.dk/Data4DmiDk/getData?type=forecast&lonMin=".$long-0.02."&latMin=".$lat-0.02."&lonMax=".$long+0.02."&latMax=".$lat+0.02."&level=10&country=DK";
	    $dmi_json = file_get_contents($dmi_url,0,null,null);
	    $dmi_output = json_decode($dmi_json);

	    $weather = new Weather();
	    $weather->setOrigin('Dmi');
	    $foreach ($dmi_output as $elm) {
	    	$weather->setTemp($elm->temp);
	    	$weather->setCity($elm->name);
	    	$weather->setCountry($elm->country);
	    }

	}
}
?>