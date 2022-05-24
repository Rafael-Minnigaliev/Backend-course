<?php

use WPTT\Oop\Fish\Fish;
use WPTT\Oop\Forge\Forge;
use WPTT\Oop\Petrol\Petrol;
use WPTT\Oop\Table\Table;

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

foreach ($arr as $item) {
    echo $forge->burn($item);
}
