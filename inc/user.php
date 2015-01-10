<?php

class User {
	
	public $img = '/img/default.png';

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