<?php
class Movie extends Production {
    public $title;
    public $genre;
    public $image;
    public $published_year;
    public $running_time;

    public function __construct (string $_title, array $_genre, Media $_image, int $_published_year, int $_running_time) {
        $this -> title = $_title;
        $this -> genre = $_genre;
        $this -> image = $_image;
        $this -> published_year = $_published_year;
        $this -> running_time = $_running_time;

        parent::__construct($_title, $_genre, $_image);

    }

    public function SetTitle( Media $image) {
        $this -> image = $image;
    }
}
?>