<?php
namespace oop\ToyFactory;

use oop\Toy\Toy;

include "Toy.php";

class ToyFactory{
    public function createToy($name){
        return new Toy($name, rand(10, 100));
    }
}
