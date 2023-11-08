<?php 

class Production {
    public $title;
    public $genre;
    public $image;

    public function __construct (string $_title, array $_genre, Media $_image) {
        $this -> title = $_title;
        if (empty($_genre)){
            throw new Exception ("Ci deve essere almeno un genere");
        } else {
            $this -> genre = $_genre;
        }
        $this -> image = $_image;

    }
}

?>