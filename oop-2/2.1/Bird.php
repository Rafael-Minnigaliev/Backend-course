<?php

namespace WPTT\Oop\Bird;

use WPTT\Oop\Animal\Animal;

require_once 'Animal.php';

class Bird extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function isBird()
    {
        return true;
    }
}
