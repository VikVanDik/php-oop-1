<?php 

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/TVSerie.php';
require_once __DIR__ . '/Models/Media.php';
require_once __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <title>Movies</title>
</head>
<body>

    <h1 class="text-center">Movies</h1>
    <div class="container d-flex justify-content-around my-5">
        <?php foreach ($movies as $movie): ?> 
        <div class="card" style="width: 18rem;">
            <img src="./img/<?php echo $movie->image->name_image ?>" alt="<?php echo $movie->image->name?>" class="card-img-top" alt="V">
            <div class="card-body">
                <h5 class="card-title"><?php echo $movie->title ?></h5>
                <p class="card-text"></p>
                <p class="card-text"><?php echo implode('/', $movie->genre) ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>


    <h1 class="text-center">TV Series</h1>
    <div class="container d-flex justify-content-around my-5">
        <?php foreach ($tvSeries as $tvSerie): ?> 
        <div class="card" style="width: 18rem;">
            <img src="./img/<?php echo $tvSerie->image->name_image ?>" alt="<?php echo $movie->image->name?>" class="card-img-top" alt="V">
            <div class="card-body">
                <h5 class="card-title"><?php echo $tvSerie->title ?></h5>
                <p class="card-text"></p>
                <p class="card-text"><?php echo implode('/', $tvSerie->genre) ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    
</div>
</body>
</html>