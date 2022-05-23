<?php

use oop\Fish\Fish;
use oop\Forge\Forge;
use oop\Petrol\Petrol;
use oop\Table\Table;

require_once 'Forge.php';
require_once 'Table.php';
require_once 'Petrol.php';
require_once 'Fish.php';

$forge = new Forge();

$arr = [
    new Table('Стол'),
    new Petrol('Бензин'),
    new Fish('Рыба')
];

foreach($arr as $item){
    $forge->burn($item);
}



