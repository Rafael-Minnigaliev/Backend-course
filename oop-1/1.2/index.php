<?php

use WPTT\Oop\HungryCat\HungryCat;

require_once 'HungryCat.php';


$cat1 = new HungryCat('Барсик', 'серый', 'рыба');
$cat2 = new HungryCat('Мурзик', 'рыжий', 'котлеты');

$cat1->eat('котлеты');
$cat1->eat('рыба');
$cat1->eat('колбаска');

$cat2->eat('котлеты');
$cat2->eat('колбаска');
$cat2->eat('рыба');