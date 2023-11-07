<?php 

class Production {
    public $title;
    public $genre;
    public $image;

    public function __construct (string $_title, array $_genre, Media $_image) {
        $this -> title = $_title;
        $this -> genre = $_genre;
        $this -> image = $_image;

    }
}

?>