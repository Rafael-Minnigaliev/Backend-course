<?php

use WPTT\Oop\Engineer\Engineer;
use WPTT\Oop\Plane\Plane;

require_once 'BlackBox.php';
require_once 'Plane.php';
require_once 'Engineer.php';


$plan = new Plane();
$plan->flyAndCrush();

$blackBox = $plan->getBlackBox();

for ($i = 1; $i <= 5; $i++) {
    $engineer = new Engineer($i);
    $engineer->decodeBox($blackBox);
}
