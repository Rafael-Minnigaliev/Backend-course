<?php

use WPTT\Oop\HungryCat\HungryCat;

require_once 'HungryCat.php';


$cat1 = new HungryCat('Барсик', 'серый', 'рыба');
$cat2 = new HungryCat('Мурзик', 'рыжий', 'котлеты');

echo $cat1->eat('котлеты');
echo $cat1->eat('рыба');
echo $cat1->eat('колбаска');

echo $cat2->eat('котлеты');
echo $cat2->eat('колбаска');
echo $cat2->eat('рыба');