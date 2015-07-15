<?php 

namespace App\Classes;

class Weather{

	private $origin;
	private $temp;
	private $country;
	private $city;
	private $description;

	private $lat;
	private $long;

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

	public function setLat($lat){
		$this->lat = $lat;
	}

	public function getLat(){
		return $this->lat;
	}

	public function setLong($long){
		$this->long = $long;
	}

	public function getLong(){
		return $this->long;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function getDescription(){
		return $this->description;
	}

}

?>