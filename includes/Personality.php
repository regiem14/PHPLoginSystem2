<?php

class Personality{
    public $personality1;
    public $personality2;
    public $personality3;

    public function __construct($personality1, $personality2, $personality3)
    {
        $this->personality1 = $personality1;
        $this->personality2 = $personality2;
        $this->personality3 = $personality3;
    }

    public function __destruct()
    {
        echo "This 1st personality is {$this->personality1}." . "<br>";
        echo "Then, the 2nd one is {$this->personality2}" . "<br>";
        echo "Last but not the least, {$this->personality3}". "<br>" . "<br>";
    }
}
