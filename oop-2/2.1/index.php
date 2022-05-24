<?php

use WPTT\Oop\Animal\Animal;
use WPTT\Oop\Bird\Bird;
use WPTT\Oop\BirdFarm\BirdFarm;
use WPTT\Oop\Farm\Farm;
use WPTT\Oop\Farmer\Farmer;

require_once 'Animal.php';
require_once 'Farm.php';
require_once 'Bird.php';
require_once 'BirdFarm.php';
require_once 'Farmer.php';

$farm = new Farm();
$birdFarm = new BirdFarm();
$farmer = new Farmer();

$animals = [
    new Animal('Корова'),
    new Bird('Курица'),
    new Animal('Баран'),
    new Animal('Свинья'),
    new Bird('Утка'),
    new Animal('Лошадь'),
    new Bird('Гусь'),
    new Bird('Индюк'),
    new Animal('Кот'),
    new Animal('Собака')
];

foreach ($animals as $animal) {
    if ($animal->isBird()) {
        $farmer->addAnimal($birdFarm, $animal);
    } else {
        $farmer->addAnimal($farm, $animal);
    }
}

$farmer->rollCall($farm);
$farmer->rollCall($birdFarm);