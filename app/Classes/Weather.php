<?php 

namespace App\Classes;

class Weather{

	private $origin;
	private $temp;
	private $country;
	private $city;

	public function setOrigin($origin){
		$this->origin = $origin;
	}

	public function getOrigin(){
		return $this->origin;
	}

	public function setTemp($temp){
		$this->temp = $temp;
	}

	public function getTemp(){
		return $this->temp;
	}

	public function setCountry($country){
		$this->country = $country;
	}

	public function getCountry(){
		return $this->country;
	}

	public function setCity($city){
		$this->city = $city;
	}

	public function getCity(){
		return $this->city;
	}

}

?>