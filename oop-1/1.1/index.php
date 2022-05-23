<?php

use oop\Cat\Cat;
use oop\Dog\Dog;
use oop\Fish\Fish;

include "Cat.php";
include "Dog.php";
include "Fish.php";


$cat1 = new Cat('Мурзик');
$cat2 = new Cat('Котик');
$dog1 = new Dog('Шарик');
$dog2 = new Dog('Джек');
$fish = new Fish('Немо');

$arr = [$cat1, $cat2, $dog1, $dog2, $fish];

foreach ($arr as $item){
    echo $item->name . '<br>';
}