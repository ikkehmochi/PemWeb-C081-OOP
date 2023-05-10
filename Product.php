<?php
class product{
    protected $name;
    protected $price;
    protected $discount;
    
    function setPrice($price){
        $this->price=$price;
    }
    function getPrice(){
        return $this->price;
    }
    function getDiscount(){
        return $this->discount;
    }
    function setDiscount($discount){
        $this->discount=$discount;
    }
    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name=$name;
    }
    function __construct($name, $price, $discount){
        $this->setName($name);
        $this->setPrice($price);
        $this->setDiscount($discount);
    }
}
?>
