<?php
namespace Owner;

class Owner {
    public $name;
    public $eyeColor;
    public $age;

    
    public function __construct($newName, $newEyeColor, $newAge)
    {
        $this->name = $newName;
        $this->eyeColor = $newEyeColor;
        $this->age = $newAge;
    }

    public function setOwnerName($newAge){
        $this->name=$newName;
    }

    public function getOwnerName(){
        return "the owner " . $this->name . " and his age is " . $this->age . " years old";
    }
}