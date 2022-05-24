<?php

use WPTT\Oop\Cat\Cat;
use WPTT\Oop\Dog\Dog;
use WPTT\Oop\Fish\Fish;

require_once 'Cat.php';
require_once 'Dog.php';
require_once 'Fish.php';


$cat1 = new Cat('Мурзик');
$cat2 = new Cat('Котик');
$dog1 = new Dog('Шарик');
$dog2 = new Dog('Джек');
$fish = new Fish('Немо');

$arr = [$cat1, $cat2, $dog1, $dog2, $fish];

foreach ($arr as $item){
    echo $item->name . '<br>';
}