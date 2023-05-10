<?php
class CDRack extends product{
    private $capacity;
    private $model;
    function getCapacity(){
        return $this->capacity;
    }
    function setCapacity($capacity){
        $this->capacity=$capacity;
    }
    function getModel(){
        return $this->model;
    }
    function setModel($model){
        $this->model=$model;
    }

    function __construct($name, $price, $discount, $capacity, $model){
        parent::__construct($name, $price, $discount);
        $this->setModel($model);
        $this->setCapacity($capacity);
        $this->setPrice(1.15*parent::getPrice());

    }
}
?>
