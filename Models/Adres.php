<?php   

class Adres {
private $postalCode;
private $streetName;
private $streetNumber;
private $country;
private $city;



public function __construct($postalCode, $streetName, $streetNumber, $country, $city) {
    $this->postalCode = $postalCode;
    $this->streetName = $streetName;
    $this->streetNumber = $streetNumber;
    $this->country = $country;
    $this->city = $city;
}

function __tostring() {
    return "{$this->postalCode}, {$this->streetName}, {$this->streetNumber}, {$this->country}, {$this->city} "; 
}

}
?>