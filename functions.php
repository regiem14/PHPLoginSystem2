<?php
include_once 'includes/header.php';
?>

<main>
    <section>
        <div class="functions">
            <h2>Functions</h2>
            <h3>Two Notes</h3>
            
            <?php
            echo "<h2>Built in Functions or Internal Functions to the languages</h2>";
            echo "<br>" . "<hr>";

            echo "<h2>User Defined Function</h2>";
            ?>
        </div>
    </section>

    <br>
    <hr>

    <section>
        <div class="form">
            <form action="funcCalc.php" method="get">
                <input type="text" name="num1" placeholder="Number1">
                <select name="operations">
                    <label for="operations">Arithmetic Operations</label>
                    <option value="add">Add</option>
                    <option value="subtract">Subtract</option>
                </select>
                <input type="text" name="num2" placeholder="Number2">
                <button type="submit">Calculate</button>
            </form>
        </div>
    </section>
</main>

<?php
include_once 'includes/footer.php';
?>