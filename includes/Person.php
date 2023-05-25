<?php

class Person{
    public $name;
    public $eyeColor;
    public $age = "undefined";

    public function setName($name){
        $this->name = $name;
    }
    
    public function __construct($newName, $newEyeColor, $newAge)
    {
        $this->name = $newName;
        $this->eyeColor = $newEyeColor;
        $this->age = $newAge;
    }
    
    public function __destruct()
    {
        echo "{$this->name} is here." . "<br>";
        echo "My eye color is{$this->eyeColor}." . "<br>";
        echo "I'm {$this->age} years old." . "<br>";
    }

    // public function getName(){
    //     return $this->name;
    // }

    // public function getEyeColor(){
    //     return $this->eyeColor;
    // }
    
    // public function getAge(){
    //     return $this->age;
    // }
}