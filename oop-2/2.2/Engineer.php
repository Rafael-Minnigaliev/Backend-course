<?php

namespace WPTT\Oop\Engineer;

use WPTT\Oop\BlackBox\BlackBox;

require_once 'BlackBox.php';

class Engineer
{
    private $accessLevel;

    public function __construct($accessLevel)
    {
        $this->accessLevel = $accessLevel;
    }

    public function decodeBox(BlackBox $blackBox)
    {
       return $blackBox->getData($this->accessLevel);
    }
}
