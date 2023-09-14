<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
    <style>
        <?php include 'style.css'?>
        h2{
            text-transform: uppercase;
        }

    </style>
</head>

<body>
    <div class='container'>
    <h2>Comparison Tool</h2>
    <form action="" method="post">
        <label for="number1">Number 1:</label>
        <input type="number" name="number1" placeholder="Enter number 1" required><br>

        <label for="number2">Number 2: </label>
        <input type="number" name="number2" placeholder="Enter number 2" required><br>

        <input type="submit" value="Calculate">
    </form>
    <div id="result"></di>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        

        // Larger Number calculate

        $largerNumber  = $number1 > $number2 ? $number1 : ($number2 > $number1 ? $number2 : "Numbers are equal");
             

        if($number1!=$number2){
            echo "<p>Larger Number: $largerNumber</p>";
            
        }
        else{
            echo "<p>Result: $largerNumber</p>";
            
        }
    }
    ?>

</div>
</body>

</html>
