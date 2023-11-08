<?php 
try {
    require_once __DIR__ . '/Traits/Genres.php';
    require_once __DIR__ . '/Traits/Year.php';
    require_once __DIR__ . '/Models/Production.php';
    require_once __DIR__ . '/Models/Movie.php';
    require_once __DIR__ . '/Models/TVSerie.php';
    require_once __DIR__ . '/Models/Media.php';
    require_once __DIR__ . '/db.php';

} catch (Exception $e) {
    $error = $e -> getMessage();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- PERSONAL STYLE -->
    <link rel="stylesheet" href="style/style.css">
    <title>Production</title>
</head>
<body>
    <?php if (isset($error)): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $message ?>
    </div>
    
    <?php else: ?>
    <h1 class="text-center">Movies</h1>
    <div class="container d-flex justify-content-around my-5">
        <?php foreach ($movies as $movie): ?> 
        <div class="card" style="width: 18rem;">
            <img src="./img/<?php echo $movie->image->name_image ?>" alt="<?php echo $movie->image->name?>" class="card-img-top" alt="V">
            <div class="card-body">
                <h5 class="card-title"><?php echo $movie->title ?></h5>
                <p class="card-text">Anno: <?php echo $movie->production_year ?></p>
                <p class="card-text">Durata: <?php echo $movie->running_time ?>minuti</p>
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
                <p class="card-text"><?php echo $tvSerie->production_year ?>-<?php echo $tvSerie->aired_to_year ?></p>
                <p class="card-text"><?php echo $tvSerie->number_of_episodes ?> episodi, <?php echo $tvSerie->number_of_seasons ?> puntate</p>
                <p class="card-text"><?php echo implode('/', $tvSerie->genre) ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
    
</div>
</body>
</html>