<?php

class User {
	
	public $img = "./img/default.png";
	public $name = "name", $phone = "(555) 555-5555", $email = "mrrr@gmail.com", $address= "whatever add", $zip = "55555", $city = "somewhere", $state = "ST";

	function __construct ($name, $phone, $email, $address, $zip, $city, $state, $img) {
		$this->name = $name;
		$this->phone = $phone;
		$this->email = $email;
		$this->address = $address;
		$this->zip = $zip;
		$this->city = $city;
		$this->state = $state;
		$this->img = $img;
	} // End EVC

} // End User

?>