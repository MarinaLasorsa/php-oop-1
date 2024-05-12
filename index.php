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
        <div class="container">
            <div class="row gy-4">
                <?php
                foreach ($productions as $production):
                ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                        <h5 class="card-title"> <?php echo $production->title ?> </h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-subtitle"> <?php echo $production->language ?> </h6>
                            <p class="card-text"> Rating: <?php echo $production->vote ?> </p>
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