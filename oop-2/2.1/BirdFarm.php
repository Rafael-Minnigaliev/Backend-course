<?php

namespace WPTT\Oop\BirdFarm;

use WPTT\Oop\Farm\Farm;

require_once 'Farm.php';

class BirdFarm extends Farm
{
    public function rollCall()
    {
        echo 'Птиц на птицеферме: ' . count($this->animals) . '<br>';
        parent::rollCall();
    }
}
