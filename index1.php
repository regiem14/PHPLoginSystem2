<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP2</title>
</head>
<body>
    <h1>OOP - Object Oreinted Programming</h1>

    <br>

    <h2>Why Use OOP?</h2>
    
    <br>

    <h2>MVC Model</h2>

    <h3>Tasks of PHP</h3>
    
    <h2>FirstClass</h2>
    <?php 
            class Fruit{
                public $name;
                public $color;

                function setName($name){
                    $this->name= $name;
                }

                function getName(){
                    return $this->name;
                }
            }

        $apple = new Fruit();
        $banana = new Fruit();
        $apple->setName('Apple');
        $banana->setName('Banana');
        
        echo $apple->getName();
        echo "<br>";
        echo $banana->getName();
    ?>
    
    <hr>
    
    <?php
    echo "<hr>";
    
    echo "<h2>FirstClass Example</h2>";

    echo "<br>";

    include_once 'includes/FirstClass.php';
    ?>

    <hr>
    <br>

    <h2>Constructs</h2>

    <?php 
        class Fruit1{
            public $name;
            public $color;

            function __construct($name){
                $this->name= $name;
            }

            function getName(){
                return $this->name;
            }
        }

        $apple = new Fruit1("Apple");
        $banana = new Fruit1("Banana");

        echo $apple->getName();
        echo "<br>";
        echo $banana->getName();
    ?>
    
    <h3>Coding Challenge</h3>
    
    <?php
    include_once 'includes/Construct.php';
    ?>
    <hr>
    <br>

</body>
</html>