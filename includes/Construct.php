<?php
class App{
    public $model;

    function setModel($model){
        $this->model= $model;
    }
    
    function getModel(){
        return $this->model;
    }
    // $golden = new App('golden');
}

$CherryM = new App();
$CherryM->setModel('CherryM');