<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style><?php include 'style.css'?></style>
</head>
<body>
    <div class="container">
        <h2>Simple Calculator</h2>
        <form method="post" action="">
        <input class="input" type="number" name="num1" placeholder="Enter First Number" required><br>
        <input class="input" type="number" name="num2" placeholder="Enter Second Number" required><br>
        <select class="input" name="operation" id="operation">
            <option value="add">Addtion</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="Division">Division</option>
            
        </select><br>
        <button class="btn-calculator">Calculate</button>
        </form>
    <div id="result">

    </div>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            switch($operation){
                case 'add';
                    $result = $num1+$num2;
                    echo "<h2>$num1 + $num2 = $result</h2>";
                    break;
                case 'subtraction';
                    $result = $num1-$num2;
                    echo "<h2>$num1 - $num2 = $result</h2>";
                    break;
                case 'multiply';
                    $result = $num1*$num2;
                    echo "<h2>$num1 * $num2 = $result</h2>";
                    break;
                case 'Division';
                    if($num2!=0 or $num2>0){
                        $result = $num1/$num2;
                        echo "<h2>$num1 / $num2 = $result</h2>";
                    }else{
                        $result = "Can not divide by 0";
                        echo "<h2>$num1 / $num2 = $result</h2>";
                    }
                    
                    break;

            }
        }
    ?>
    
    </div>
    
</body>
</html>
