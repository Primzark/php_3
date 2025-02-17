<?php
$month = "fevrier";
$totalDays = 28;
$specialDay = 14;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 5 - Calendar</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php
        echo '<h1 style="color: red;">' . strtoupper($month) . '</h1>';

        echo '<div class="row">';
        for ($i = 0; $i < 6 ; $i++) {
    
        $dayLetter = ["L", "M", "J", "V", "S", "D" ][$i];
        echo '<div class="col p-2 text-center fw-bold">' . $dayLetter . '</div>';
        }
        echo '</div>';
        echo '<div class="row">';
    

        for ($day = 1; $day <= $totalDays; $day++) {
            $isWeekend = ($day % 7 == 6 || $day % 7 == 0);
            echo '<div class="col p-2">';
            if ($day == $specialDay) {
                echo '<div class="bg-danger text-white p-3 text-center">' . $day . '</div>';
            } elseif ($isWeekend) {
                echo '<div class="bg-secondary text-white p-3 text-center">' . $day . '</div>';
            } else {
                echo '<div class="bg-light p-3 text-center">' . $day . '</div>';
            }
            echo '</div>';
            if ($day % 7 == 0) {
                echo '</div><div class="row">';
                }
        }
        echo '</div>';
        ?>
    </div>
</body>
</html>