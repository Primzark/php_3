<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
</head>
<body>
 <h1>number from 2000 to 2025</h1>
 
 <?php
 for ($year = 2000; $year <= 2025; $year++) {
    echo $year . "<br>";
    }
    ?>

    <h1>countdown from 100 to 0</h1>
  <?php
  for ($number = 100; $number >= 0; $number --) {
   echo $number . "<br>";
   }
?>
<h3> odd number from 1 to 99</h3>
<?php
for ($number = 1; $number <= 99; $number++) {
    if ($number % 2 != 0) {

        echo $number . "<br>";
    }
}

?>
    
    
</body>
</html>