<?php
class App{
    public $model;
    public $color;

    function __construct($model, $color){
        $this->model= $model;
        $this->color= $color;
    }
    
    function getModel(){
        return $this->model;
    }

    function getColor(){
        return $this->color;
    }
}

$CherryM = new App('CherryM' , 'golden');
// $golden = new App('golden');