<?php

use WPTT\Oop\BlackBox\BlackBox;
use WPTT\Oop\Engineer\Engineer;
use WPTT\Oop\Plane\Plane;

require_once 'BlackBox.php';
require_once 'Plane.php';
require_once 'Engineer.php';

$blackBox = new BlackBox();
$plan = new Plane($blackBox);
$plan->flyAndCrush();

$blackBox = $plan->getBlackBox();

$engineer = new Engineer(rand(1,5));
echo $engineer->decodeBox($blackBox);

