<?php

namespace WPTT\Oop\Table;

use WPTT\Oop\IBurning\IBurning;

require_once 'IBurning.php';

class Table implements IBurning
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
