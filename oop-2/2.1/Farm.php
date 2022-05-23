<?php
namespace oop\Farm;

use oop\Animal\Animal;

require_once 'Animal.php';

class Farm{
    public $animals = [];
    
    public function addAnimal(Animal $animal){
        $this->animals[] = $animal->getName();
    }

    public function rollCall(){
        foreach($this->animals as $animal){
            echo 'На ферме обитает: ' . $animal . '<br>';
        }
    }
}