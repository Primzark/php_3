<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 4 - Bootstrap Opacity</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
   
<div class="container bg-dark p-2">
    <div class = "container ">
        <h1 class="text-light text-center">
            bootstrap opacity</h1>
     <div class="row g-0">
        <?php
        for ($i = 0; $i <= 100; $i += 25) {
            echo ' 
            <div class="col p-1">
            <div class="d-flex justify-content-center rounded-4 opacity-' . $i . ' p-5 bg-primary text-white"> ' . $i . '%</div>
            </div>';
            }
            ?>
    

        </div>
</div> 

        </div>
    

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</body>
</html>