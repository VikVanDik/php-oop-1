<?php 

class Production {

    use Genres;
    use Year;

    public $title;
    public $image;

    public function __construct (string $_title, array $_genre, Media $_image, int $_production_year) {
        $this -> title = $_title;
        $this -> production_year = $_production_year;
        
        if (empty($_genre)){
            throw new Exception ("Ci deve essere almeno un genere");
        } else {
            $this -> genre = $_genre;
        }
    
        $this -> image = $_image;

    }
}

?>