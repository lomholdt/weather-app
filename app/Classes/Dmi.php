<?php
namespace App\Classes;
class Dmi {
	public function dmiCityWeather($lat, $long) {
		$lat1 = $lat-0.02;
		$lat2 = $lat+0.02;
		$long1 = $long-0.02;
		$long2 = $long+0.02;

		$dmi_url = "http://www.dmi.dk/Data4DmiDk/getData?type=forecast&lonMin=".$long1."&latMin=".$lat1."&lonMax=".$long2."&latMax=".$lat2."&level=10&country=DK";
	    $dmi_json = file_get_contents($dmi_url,0,null,null);
	    $dmi_output = json_decode($dmi_json);

	    $weather = new Weather();
	    $weather->setOrigin('DMI');
	    foreach ($dmi_output as $elm) {
		    $weather->setTemp($elm->temp);
		    $weather->setCity($elm->name);
		    $weather->setCountry($elm->country);
	    }
	    return $weather;

	}
}
?>