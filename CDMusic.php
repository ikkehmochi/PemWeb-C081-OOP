<?php
class CDMusic extends product{
    private $artist;
    private $genre;
    function getArtist(){
        return $this->artist;
    }
    function setArtist($artist){
        $this->artist=$artist;
    }
    function getGenre(){
        return $this->genre;
    }
    function setGenre($genre){
        $this->genre=$genre;
    }
    function __construct($name, $price, $discount, $artist, $genre){
        parent::__construct($name, $price, $discount);
        $this->setArtist($artist);
        $this->setGenre($genre);
        $this->setPrice(1.1*parent::getPrice());
        $this->discount=1.05*parent::getDiscount();

    }
}

?>
