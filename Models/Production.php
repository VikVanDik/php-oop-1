<?php 

class Production {

    use Genres;

    public $title;
    public $image;

    public function __construct (string $_title, array $_genre, Media $_image) {
        $this -> title = $_title;
        $this -> image = $_image;

    }
}

?>