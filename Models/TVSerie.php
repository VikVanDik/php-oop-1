<?php 
class TVSerie extends Production {

    public $aired_to_year;
    public $number_of_episodes;
    public $number_of_seasons;

    public function __construct (string $_title, array $_genre, Media $_image, int $_production_year, int $_aired_to_year, int $_number_of_episodes, int $_number_of_seasons) {
        
        $this -> aired_to_year = $_aired_to_year;
        $this -> number_of_episodes = $_number_of_episodes;
        $this -> number_of_seasons = $_number_of_seasons;

        parent::__construct($_title, $_genre, $_image, $_production_year);

    }
}
?>