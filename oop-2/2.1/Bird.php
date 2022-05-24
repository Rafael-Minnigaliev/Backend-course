<?php

namespace WPTT\Oop\Bird;

use WPTT\Oop\Animal\Animal;

require_once 'Animal.php';

class Bird extends Animal
{
    public function isBird()
    {
        return true;
    }
}
