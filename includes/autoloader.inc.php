<?php

spl_autoload_register('myAutoloader');

function myAutoloader($classname){
    $path = "class/";
    $extension = ".class.php";
    $fullPath = $path . $classname . $extension;
    
    if(!file_exists($fullPath)){
        return false;
    }
    
    include_once $fullPath;
}