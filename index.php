<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIRST PHP LOGIN SYSTEM</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
</head>
<body>
    <header>
        <div class="header">
        <?php
        echo "Regie is Here for PHP script with single quotes";
        echo "<br>";
        echo "Regie is Here for PHP script";
        ?>
        </div>
    </header>

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
        echo "<p>This <b>paragraph</b>";
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
    </section>
    <div id="mydiv"></div>

    <script type="text/babel">
      function Hello() {
        return <h1>Hello World!</h1>;
      }

      const container = document.getElementById('mydiv');
      const root = ReactDOM.createRoot(container);
      root.render(<Hello />)
    </script>

</body>
</html>