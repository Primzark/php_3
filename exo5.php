<?php
$month = "fevrier";
$totalDays = 28;
$specialDay = 14;
$daysOfweek = ["L", "M", "M", "J", "V", "S", "D"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 5 - Calendar</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php
        echo '<h1 style="color: red;">' . strtoupper($month) . '</h1>';

        echo '<div class="row">';
        foreach ($daysOfweek as $daysletter) {
             echo '<div class ="col p-2 text-center fw-bold">' . $daysletter . '</div>';
        }

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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
</body>
</html>