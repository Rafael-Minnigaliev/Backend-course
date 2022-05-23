<?php

namespace oop\Forge;

use oop\BlueFlame\BlueFlame;
use oop\RedFlame\RedFlame;
use oop\Smoke\Smoke;

require_once 'BlueFlame.php';
require_once 'RedFlame.php';
require_once 'Smoke.php';

class Forge{
    public function burn($object){
        $flame = [
            new BlueFlame(),
            new RedFlame(),
            new Smoke()
        ];

        $object->burnWith($flame[rand(0,2)]);
    }
}