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
        echo "Regie is Here for PHP script";
        ?>
        </div>
    </header>

    <br>
    
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

    <section>
        <h2>Two basic ways to get output</h2>
    </section>
    
    <br>
    
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