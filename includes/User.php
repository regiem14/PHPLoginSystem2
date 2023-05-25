<?php

class PI{
    static $pi = 3.14;

    static function staticMethod(){
        return self::$pi;    
    }
}