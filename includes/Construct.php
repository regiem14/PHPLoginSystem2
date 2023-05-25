<?php
class App{
    public $model;
    public $color;
    
    
    function __constuct($model, $color){
        $this->model=$model;
        $this->model=$color;
    }

    function getModel(){
        return $this->model;
    }

    function getColor(){
        return $this->color;
    }

}

$CM = new App('CM' ,'golden');
// $golden = new App('golden');
