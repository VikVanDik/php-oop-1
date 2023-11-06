<?php 

class Movie {
    public $title;
    public $year;
    public $genre;
    public $image;

    public function __construct (string $_title, int $_year, array $_genre, Media $_image) {
        $this -> title = $_title;
        $this -> year = $_year;
        $this -> genre = $_genre;
        $this -> image = $_image;
    }

    public function SetImage( Media $image) {
        $this -> image = $image;
    }
}

class Media {
    public $name_image;
    public $name;

    public function __construct (string $_name_image, string $name) {
        $this -> name_image = $_name_image;
        $this -> name = $name;
    }
}

$movies = [
    new Movie ('V for Vendetta', '2005', ['Drama', 'Action'], new Media ('VForVendetta.jpg', 'V')),
    new Movie ('The butterfly effect', '2004', ['Drama', 'Sci-fi'], new Media ('TheButterflyEffect.jpg', 'TBE')),
    new Movie ('Limitless', '2011', ['Thriller'], new Media ('Limitless.jpg', 'Limitless'))
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
    <p> <?php echo $movie->year ?></p>
    <p> <?php echo implode('/', $movie->genre) ?></p>
    <img src="./img/<?php echo $movie->image->name_image ?>" alt="<?php echo $movie->image->name?>">
    <?php endforeach; ?>
</body>
</html>