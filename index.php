<?php
include_once 'includes/header.php';
?>
    
    <main>
    <br>
    
    <!-- ******************************SECTION1****************************** -->
    <section>
        <h2>There is another PHP Login System</h2>
        <ul>
            <li>You can see it</li>
            <li>You can copy</li>
            <li>You can review</li>
            <li>You can see videos</li>
        </ul>

        <hr>

        <h2>Programming paradigm</h2>

        <hr>
        
        <h2>What can PHP Do?</h2>

    </section>
    
    <br>
    <hr>

    <!-- ******************************SECTION2****************************** -->
    <section>
        <h2>Two basic ways to get output</h2>
        <p>This is paragraph element</p>

        <br>

        <?php
        echo "Hello Worlds! I'm Regie <br>";
        echo "This is pargraph inside";
        echo "<p>This <b>paragraph</b></p>";
        ?>

        <br>
        <br>

        <?php
            echo "Print Statement W or WO () <br>";
            print "Hello World! <br>";
            print "Display output on the browser";
        ?>
    </section>
    
    <br>
    <hr>

    <!-- ******************************SECTION3****************************** -->
    <section>
    <h2>WO escaping</h2>
        <?php
        if(1 == 1){
            echo "<p>if statement</p>";
        }
    
        echo "<br>";
        ?>

        <h2>W escaping</h2>
        <?php
        if(1 == 2){
        ?>
    
        <p>if not</p>

        <?php
        }
        ?>
    </section>

    <br>
    <hr>

    <!-- ******************************SECTION4****************************** -->
    <section>
        <h2>Scalar data types</h2>
        
        <h2>Compound</h2>

        <h2>Special</h2>

        <h2>Pseudo-Types</h2>
    </section>

    <br>
    <hr>
    
    <!-- ******************************SECTION5****************************** -->
    <section>
        <h2>String data types</h2>
        <p>Cancelling in double qoutes</p>

        <br>

        <?php
            echo 'I\'m learning how with strings in PHP. POwSQwEC';
            echo "<br>";
            echo "I'm learning how with strings in PHP. POwDQ";
        ?>

        <hr>

        <h2>Interger Data Types</h2>
        <?php
            echo 20 . " Interger";

            echo "<br>";

            echo "20" . " String";
        
            echo "<br>";
            
            echo "<p>'10' is not equal to 10 in PHP.</p>";
            if("10" === 10){
                echo " is not the same data type?";
            }
        ?>

        <hr>
        
        <h2>Float Data Types</h2>
        <?php
            echo 24.5 . "<br>";
            echo 10.35 . "<br>";
            echo 1000.12345 . "<br>";

            echo "<br>";
            echo "<br>";

            echo "flaot data types: " . 20.5 . "<br>";
            echo "define a float: " . '20.5f';
        ?>

        <hr>
        
        <h2>Adding Line Breaks</h2>
        <?php
        echo nl2br("if you view the page source \n you'll find a new line in this string") . "<br>";
        echo "if you view the page source \n you'll find a new line in this string";
        ?>

        <hr>

        <h2>Boolean</h2>
        <?php
        $a = true;
        if ($a === true){
            echo "Variable True";
        }else{
            echo "Variable False";
        }
        ?>

        <hr>

        <h2>Declaring Variables</h2>
        <?php
        echo "<h3>Rules in declaring variables</h3>" . 
        "<ul>" .
        "<li>Don't start your variable name with a number</li>" .
        "<li>A variable name can start with a letter and an underscore</li>" .
        "<li>It is Case Sensitive</li>";
        ?>

        <hr>

        <?php
        print "<h2>Coding Challenge for Varibales</h2>";
        
        echo "<p>Value of string data type</p>";
        $name = "Regie";
        echo "I am " . $name . "<br>";

        $number = 14;
        echo "My favorite number is " . "<b>$number</b>" . "<br>";

        $float = 1.1416;
        echo "The float number is" . "<b>$float</b>" . "<br>";

        echo "<hr>";

        echo "<h2>Constants in PHP</h2>";
        CONST PI = 3.14;
        CONST BALL_HEIGHT = 5;
        CONST BALL_WIDTH = 5;

        echo PI . "<br>";
        echo "The ball width is " . BALL_WIDTH . "<br>";
        echo "The ball height is " . BALL_HEIGHT;

        CONST PLAYER_HEIGHT = 5;

        ?>
    </section>

    <br>
    <hr>

    <!-- ******************************SECTION6****************************** -->
    <section>
        <h2>Expression in PHP</h2>
        
        <br>

        <h2>Operators</h2>

        <br>

        <h3>Arithmetic Operators</h3>

        <br>

        <h3>Assignment Operators</h3>

        <br>
        
        <?php
        echo "<h2>Comparison Operators</h2>";
        
        echo "<h2>Logical Operators: Logical AND &&</h2>";

        echo "<h2>Logical Operators: Logical OR ||</h2>";
        
        echo "<h2>Logical Operators: Logical XOR</h2>";

        echo "<h3>Logical Operators: NOT EQUAL</h3>";

        echo "<h2>Increment and Decrement</h2>";
        
        echo "<h2>String Operators</h2>";
        $a = "My name ";
        $b = "is Regie. ";
        $c = $a . $b . "<br>" . "<br>";

        echo $a . "<br>";

        echo $b . "<br>";

        echo $c . "<br>". "<br>";

        $g = "My name is ";
        $h = $g . ' Regie Marzan!';

        echo $h;
        ?>
        
    </section>

    <br>
    <hr>
    
    <!-- ******************************SECTION7****************************** -->
    <section>
        <h2>Control Structures</h2>

        <h3>Conditional Statements</h3>

        <h3>Switch Conditional Statements</h3>
        
        <h4>Loop's</h4>
    </section>

    <br>
    <hr>

    <!-- ******************************SECTION8****************************** -->
    <section>
        <?php
        echo "<h2>Break and Continou Statements</h2>";

        echo "<h2>Continue Statements</h2>";
        ?>
    </section>

    <br>
    <hr>
    
    <!-- ******************************SECTION9****************************** -->
    <section>
         <h2>Include and Require</h2>

        <?php
            include 'includes/test1.php';
            include_once 'includes/test1.php';
            require 'test.php';
            require_once 'test.php';

        ?>
    </section>
    
    <br>
    <hr>
    
    <!-- ******************************SECTION10****************************** -->
    <section>
        <h2>React Section</h2>
        <div id="mydiv"></div>
    </section>
    </main>
    
    <script>
        const PLAYER_SPEED = 10;
        console.log(PLAYER_SPEED);
    </script>

    <script type="text/babel">
      function Hello() {
        return <h1>Hello World!</h1>;
      }

      const container = document.getElementById('mydiv');
      const root = ReactDOM.createRoot(container);
      root.render(<Hello />)
    </script>

<?php
include_once 'includes/footer.php';
?>