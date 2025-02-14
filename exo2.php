<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Liste des jours de février</h1>
  <ol>
    <?php
    $day = 1;
    while ($day <= 14) {
        echo "<li>février";

        if ($day == 14) {
            echo " : St Valentin";

        }
        
        echo "</li>";
        $day++;
        }
    ?>

  </ol>
    
</body>
</html>   