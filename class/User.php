<?php

class PI{
    static $pi = 3.14;

    static function staticMethod(){
        $description = "mathetics, value of PI .";
        return $description . " " . self::$pi;    
    }
}