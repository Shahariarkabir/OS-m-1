<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <style><?php include 'style.css'?></style>
</head>
<body>
    <div class='container'>
        <h2>Let's check the Weather</h2>
        <form action="" method="post">
        <input class="input" type="number" name="temperature" placeholder="let's try" require><br>
        <button class="btn-convert">Check</button>
        </form>

        <div id='result'></div>

        <?php
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $temperature = $_POST["temperature"];

                    if($temperature <=14){
                        echo "Temperature is Now {$temperature}&deg;C. It's freezing!";
                    
                    } elseif($temperature >14 & $temperature <= 25){
                        echo "Temperature is Now {$temperature}&deg;C. It's cool!";
                    }
                    else{
                        echo "Temperature is Now {$temperature}&deg;C. It's warm!";
                    }
                    
                }
                    
                    ?>
    </div>
    
</body>
</html>