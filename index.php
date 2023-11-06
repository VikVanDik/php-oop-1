<?php 

class Movie {
    public $title;
    public $year;
    public $genre;

    public function __construct( string $_title, int $_year, string $_genre) {
        $this -> title = $_title;
        $this -> year = $_year;
        $this -> genre = $_genre;
    }
}

$movies = [
    new Movie ('V for Vendetta', '2005', 'Drama'),
    new Movie ('The butterfly effect', '2004', 'Drama'),
    new Movie ('Limitless', '2011', 'Thriller')
]

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <?php foreach ($movies as $movie): ?> 
    <p> <?php echo $movie->title ?></p>
    <?php endforeach; ?>
</body>
</html>