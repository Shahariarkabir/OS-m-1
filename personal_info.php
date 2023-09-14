<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal information</title>
    <style>
        h1{
    text-align: center;
    background-color: #C8228B;
    border: 10px solid #791655;
    border-radius: 50px;
    color:blue;
}
h2{
    margin: 0;
    padding: 0;
    
}
p{
    color: rgb(110, 41, 141);
    line-height: 20px;
}
.container{
    width: 600px;
    padding: 10px;
    margin: auto;
   
}
    </style>


</head>
<body>
<div class="container">
    <h1>My Personal Information</h1>
<?php
$name ="Mahady Hasan Sabuz";
$age =32;
$country ="Bangladesh";
$info ="
 I am {$name}, 
 from city of Naogaon in {$country}.I have finished my journey of study by compliting B.A Honors in English.I live with my parents.My mother is a housewife and my father is a businessman.Now I help my father in his business.But I didn't want to become a businessman. From my childhood I had have a passion of becoming an Technology expert.
Now a days I have started my new journy to take a part in softwear engineering by taking a short course in Ostad.app platform.I'm learning programming from 1 year.I love to code.I hope one day I will become a softwear enginner.Besides this, my hobby is reading book,travelling,singing song by playing guiter and gardening.  ";

echo "<h2>Name: {$name}</h2><br>";
echo "<h2>Age: {$age}</h2><br>";
echo "<h2>Country: {$country}</h2><br>";
echo "<p>Bio: {$info}</p><br>";

?>
</div>
</body>
</html>
