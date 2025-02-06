<?php

class Partner
{

    private $companyName;
    private $adres;
    private $email;
    private $website;
    private $description;
    private $vatNumber;
    private $cocNumber;
    private $phoneNumber;


    public function __construct(
        $companyName,
        $adres,
        $email,
        $website,
        $description,
        $vatNumber,
        $cocNumber,
        $phoneNumber
    ) {

        $this->companyName = $companyName;
        $this->adres = $adres;
        $this->email = $email;
        $this->website = $website;
        $this->description = $description;
        $this->vatNumber = $vatNumber;
        $this->cocNumber = $cocNumber;
        $this->phoneNumber = $phoneNumber;
    }


    public function __tostring()
    {
        return
            "
            Company         $this->companyName
            Adres           $this->adres 
            Email           $this->email 
            Website         $this->website 
            Description     $this->description
            VAT             $this->vatNumber 
            COC             $this->cocNumber 
            Phonenumber     $this->phoneNumber
            ";

    }
}