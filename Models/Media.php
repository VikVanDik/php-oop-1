<?php 
class Media {
    public $name_image;
    public $name;

    public function __construct (string $_name_image, string $name) {
        $this -> name_image = $_name_image;
        $this -> name = $name;
    }
}
?>