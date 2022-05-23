<?php
namespace oop\Bird;

use oop\Animal\Animal;

require_once 'Animal.php';

class Bird extends Animal{
    public function __construct($name){
        parent::__construct($name);
    }

    public function isBird(){
        return true;
    }
}