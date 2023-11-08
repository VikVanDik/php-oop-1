<?php
class Movie extends Production {
   
    public $running_time;

    public function __construct (string $_title, array $_genre, Media $_image, int $_production_year, int $_running_time) {
        
        $this -> running_time = $_running_time;

        parent::__construct($_title, $_genre, $_image, $_production_year);

    }

    public function SetTitle( Media $image) {
        $this -> image = $image;
    }
}
?>