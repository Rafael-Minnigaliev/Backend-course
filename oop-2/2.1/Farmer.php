<?php
namespace oop\Farmer;

use oop\Animal\Animal;
use oop\Bird\Bird;
use oop\BirdFarm\BirdFarm;
use oop\Farm\Farm;

require_once 'Animal.php';
require_once 'Farm.php';
require_once 'Bird.php';
require_once 'BirdFarm.php';

class Farmer{
    public function addAnimal(Farm $farm, Animal $animal){
        $farm->addAnimal($animal);
    }

    public function rollCall(Farm $farm){
        $farm->rollCall();
    }
}

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

foreach($animals as $animal){
    if($animal->isBird()){
        $farmer->addAnimal($birdFarm, $animal);
        $farmer->addAnimal($farm, $animal);
    }else{
        $farmer->addAnimal($farm, $animal);
    }
}

$farmer->rollCall($farm);
$farmer->rollCall($birdFarm);