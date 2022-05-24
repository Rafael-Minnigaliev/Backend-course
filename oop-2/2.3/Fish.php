<?php

namespace WPTT\Oop\Fish;

class Fish
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
