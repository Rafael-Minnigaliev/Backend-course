<?php
namespace BasketPosition;

class BasketPosition{
    private $good;
    private $quantity;

    public function __construct($good, $quantity){
        $this->good = $good;
        $this->quantity = $quantity;
    }

    public function getProduct(){
        return $this->good['name'];
    }

    public function getQuantity(){
        return $this->quantity;
    }
}