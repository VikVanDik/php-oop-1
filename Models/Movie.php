<?php
class Movie extends Production {
    public $title;
    public $genre;
    public $image;

    public function __construct (string $_title, array $_genre, Media $_image) {
        $this -> title = $_title;
        $this -> genre = $_genre;
        $this -> image = $_image;

        parent::__construct($_title, $_genre, $_image);

    }

    public function SetTitle( Media $image) {
        $this -> image = $image;
    }
}
?>