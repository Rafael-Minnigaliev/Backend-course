<?php

namespace WPTT\Oop\Petrol;

class Petrol
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function burnWith($flame)
    {
        echo $this->name . ' ' . $flame->getFlame() . '<br>';
    }
}
