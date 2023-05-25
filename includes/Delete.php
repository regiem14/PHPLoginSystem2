<?php

class DeleteObject{
    public $data = "This is information stored";

    public function __construct()
    {
        echo "class instantiates. <br>";
    }

    public function setNewProperty($newData){
        $this->data = $newData;
    }

    public function getProperty(){
        return $this->data;
    }

    public function __destruct()
    {
        echo "end of deleteObject class. <br>";
    }
}