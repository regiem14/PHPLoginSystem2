<?php
class App{
    public $model;
    public $color;

    function setModel($model){
        $this->model= $model;
    }

    function setColor($color){
        $this->color= $color;
    }
    
    function getModel(){
        return $this->model;
    }

    function getColor(){
        return $this->color;
    }
}

$CherryM = new App();
$CherryM->setModel('CherryM');

$golden = new App();
$golden->setColor('golden');