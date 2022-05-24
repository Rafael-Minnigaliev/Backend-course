<?php

namespace WPTT\Oop\Forge;

use WPTT\Oop\BlueFlame\BlueFlame;
use WPTT\Oop\RedFlame\RedFlame;
use WPTT\Oop\Smoke\Smoke;

require_once 'BlueFlame.php';
require_once 'RedFlame.php';
require_once 'Smoke.php';

class Forge
{
    public function burn($object)
    {
        $flame = [
            new BlueFlame(),
            new RedFlame(),
            new Smoke()
        ];

        return $object->burnWith($flame[rand(0, 2)]);
    }
}
