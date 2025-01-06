<?php

class Person {

    private  $name;
    private  $phoneNumber;
    private  $email;
    private  $dateofbirth;
    private $adres = [];


    public function __construct( $name,  $phoneNumber,  $email,  $dateofbirth, $adres) {
        $this->name = $name;
        $this->phoneNumber = $phoneNumber;
        $this->email = $email;
        $this->dateofbirth = $dateofbirth;
        $this->adres = $adres;
    }

    public function addAdres($postalCode, $streetName, $streetNumber, $country, $city) {
        $this->adres[] = new Adres($postalCode, $streetName, $streetNumber,  $country, $city); 
        return end($this->adres);

    }

        function __tostring(){
        return "{$this->name}, {$this->phoneNumber}, {$this->email}, {$this->dateofbirth}";
    }
    


}


?>