<?php

require_once __DIR__ . "/db.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main>
        <div class="container my-4">
            <h2>MOVIES</h2>
            <div class="row gy-4">
                <?php
                foreach ($movies as $movie):
                ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                        <h5 class="card-title"> <?php echo $movie->title ?> </h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-subtitle"> <?php echo $movie->language ?> </h6>
                            <p class="card-text"> Rating: <?php echo $movie->vote ?> </p>
                            <p class="card-text"> Profit: <?php echo $movie->getProfitFull() ?> </p>
                            <p class="card-text"> Duration: <?php echo $movie->getDurationFull() ?> </p>
                        </div>
                    </div>
                </div>
                <?php 
                endforeach;
                ?>
            </div>
        </div>
        <div class="container my-4">
            <h2>TV SERIES</h2>
            <div class="row gy-4">
                <?php
                foreach ($tv_series as $tv_serie):
                ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                        <h5 class="card-title"> <?php echo $tv_serie->title ?> </h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-subtitle"> <?php echo $tv_serie->language ?> </h6>
                            <p class="card-text"> Rating: <?php echo $tv_serie->vote ?> </p>
                            <p class="card-text"> Number of seasons: <?php echo $tv_serie->getSeasonsNumberFull() ?> </p>
                        </div>
                    </div>
                </div>
                <?php 
                endforeach;
                ?>
            </div>
        </div>
    </main>
</body>
</html>