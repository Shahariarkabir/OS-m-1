<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
    <style><?php include 'style.css'?></style>
</head>
<body>
    <div class="container">
        <h2>Even Odd Checker</h2>
        <form method="post" action="">
        <input class="input" type="number" name="number" placeholder="Enter a number" require><br>
        <button class="btn-convert">Check</button>
        </form>
    <div id="result">

    </div>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $number = $_POST["number"];
           
            //$operation = $_POST["operation"];

            if($number%2==0){
                echo "Your number {$number} is even";
            }
            else{
                echo "Your number {$number} is odd";
            }
        }
    ?>
    
    </div>
    
</body>
</html>