<?php

namespace WPTT\Oop\Fish;

use WPTT\Oop\IBurning\IBurning;

require_once 'IBurning.php';

class Fish implements IBurning
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function burnWith($flame)
    {
        return $this->name . ' ' . $flame->getFlame() . '<br>';
    }
}
