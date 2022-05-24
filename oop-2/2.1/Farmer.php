<?php

namespace WPTT\Oop\Farmer;

use WPTT\Oop\Animal\Animal;
use WPTT\Oop\Farm\Farm;

require_once 'Animal.php';
require_once 'Farm.php';

class Farmer
{
    public function addAnimal(Farm $farm, Animal $animal)
    {
        $farm->addAnimal($animal);
    }

    public function rollCall(Farm $farm)
    {
        $farm->rollCall();
    }
}


