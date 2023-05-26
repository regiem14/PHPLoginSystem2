<?php
include_once 'includes/header.php';
include_once 'includes/autoloader.inc.php   ';
?>

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

    include_once 'class/FirstClass.php';
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
    include_once 'class/Construct.php';

    echo $CherryM->getModel() . "<br>";
    echo $CherryM->getColor();
    ?>
    
    <hr>
    <br>

    <?php
    echo "<h3>Coding Challenge Visibility and Inheritance</h3>";
    ?>

    <hr>
    <br>

    <h2>Constructors, Continuation and Destructors</h2>
    <?php
    include_once 'class/Person.php';
    
    $person2 = new Person("regie", "brown", 19);
    
    // echo $person2->getName() . "<br>";
    // echo $person2->getEyeColor() . "<br>";
    // echo $person2->getAge() . "<br>";
    ?>
    
    <hr>
    <br>

    <?php
    echo "<h3>Construct Destruct Coding Challanges</h3>";
    include_once 'class/Personality.php';
    
    $Personality = new Personality("Shy", "Honest", "Kind")
    ?>
    
    <hr>
    <br>

    <?php
    echo "<h2>Deleting Objects</h2>";   

    include_once 'class/Delete.php';

    $object = new DeleteObject();
    echo $object->getProperty();
    unset($object);
    ?>

    <hr>
    <br>

    <h2>Static Properties and Methods</h2>
    
    <?php
    include_once 'class/Static.php';
    include_once 'class/User.php';
    include_once 'class/Static-Procedural.php';

    echo Person3::$drinkingAge . "<br>";
    Person3::setDrinkingAge(19);
    echo Person3::$drinkingAge;
    
    echo "<hr> <br> <h3>Second Example For Constant PI</h3>";
    echo PI::staticMethod() . "<br> <br>";

    echo $information;
    ?>

    <hr>
    <br>

    <h2>Destruct</h2>
</body>
</html>