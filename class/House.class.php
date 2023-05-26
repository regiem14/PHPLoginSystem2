<?php

class House{
    private $region;
    private $address;

    public function __construct($newRegion, $address)
    {
        $this->region = $newRegion;
        $this->address = $address;
    }
    
    public function getAddress(){
        return $this->region . " " . $this->address;
    }
}