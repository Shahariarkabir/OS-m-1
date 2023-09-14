<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
    <style>
        <?php include 'style.css'?>

    </style>
</head>
<body>
    <div class="container">
        <h2>Temperature Converter</h2>
        <form method="post" action="">
        <input class="input" type="number" name="temp" placeholder="Enter temperature value" required><br>
        
        <select class="input" name="operation" id="operation">
            <option value="CelToFahr">Celsius to Fahrenheit</option>
            <option value="FahrToCel">Fahrenheit to Celsius</option>
            </select><br>
        <button class="btn-convert">Convert</button>
        </form>
    <div id="result">

    </div>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $temp = $_POST["temp"];
            $operation = $_POST["operation"];

            switch($operation){
                case 'CelToFahr';
                    $result = (($temp*9)/5)+32 ;   ;
                    echo "<h3>Temperature {$temp} in Fahrenheit is: $result</h3>";
                    break;
                case 'FahrToCel';
                    $result = (($temp-32)*5)/9 ;   
                    echo "<h3>Temperature {$temp} in celsius is: $result</h3>";
                    break;
                default;
                    
                    echo "<h2>Result: Enter a correct value</h2>";
                    break;
            }
        }
    ?>
    
    </div>
    
</body>
</html>