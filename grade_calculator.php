<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style><?php include 'style.css'?></style>
</head>

<body>
    <div class="container">
    <h2>Grade Calculator</h2>
    <form method="post" action="">
        <label for="score1">Bangla</label>
        <input type="number" name="score1" placeholder="Enter your Score" required><br>

        <label for="score2">English</label>
        <input type="number" name="score2" placeholder="Enter your Score" required><br>

        <label for="score3">Math </label>
        <input type="number" name="score3" placeholder="Enter your Score" required><br>

        <input type="submit" value="Calculate">
    </form>
    

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];

        // Average score
        $average = ($score1 + $score2 + $score3) / 3;
        // Grade score
        $grade = '';

        if ($average >= 80) {
            $grade = 'A';
        } elseif ($average >= 70) {
            $grade = 'B';
        } elseif ($average >= 60) {
            $grade = 'C';
        } elseif ($average >= 50 || $average >= 40) {
            $grade = 'D';        
        } else {
            $grade = 'F';
        }

        echo "<p>Average Score of {$score1},{$score2},{$score3} is : $average</p>";
        echo "<p>Letter Grade: $grade</p>";

    }
    ?>
    </div>


</body>

</html>
