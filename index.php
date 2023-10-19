<?php
include __DIR__ . '/db.php';
include __DIR__ . '/models.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <div class="container mt-5 d-flex justify-content-center align-items-center gap-5">
    
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $starwars->getTitle() ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"> Genere: <?=$starwars->genere?></h6>
                <p class="card-text">Durata: <?=$starwars->durata?></p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $jhonwick->getTitle() ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary"> Genere: <?=$jhonwick->genere?></h6>
                <p class="card-text">Durata: <?=$jhonwick->durata?></p>
            </div>
        </div>

    </div>

</body>

</html>