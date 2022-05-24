<?php
namespace WPTT\Oop\Farm;

use WPTT\Oop\Animal\Animal;

require_once 'Animal.php';

class Farm{
    public $animals = [];
    
    public function addAnimal(Animal $animal){
        $this->animals[] = $animal;
    }

    public function rollCall(){
        foreach($this->animals as $animal){
            echo 'На ферме обитает: ' . $animal->getName() . '<br>';
        }
    }
}