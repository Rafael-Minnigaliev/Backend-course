<?php
namespace oop\Basket;

use oop\Product\Product;

require_once "Product.php";

class Basket{
    private $goods = [];

    public function addProduct(Product $product, $quantity){
        $this->goods[] = ['name' => $product->getName(), 'price'=> $product->getPrice(), 'quantity' => $quantity];
    }

    public function getPrice(){
        $sum = 0;
        foreach($this->goods as $good){
            $sum += $good['price'] * $good['quantity'];
        }
        return $sum;
    }

    public function describe(){
        $info = "";
        foreach($this->goods as $good){
            $info .= $good['name'] . ' - ' . $good['price'] . ' - ' . $good['quantity'] . '<br>';
        }
        return $info;
    }
}