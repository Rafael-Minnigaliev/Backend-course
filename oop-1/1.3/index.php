<?php

use oop\ToyFactory\ToyFactory;

include "ToyFactory.php";

$nameToys = ['Пистолет', 'Кукла', 'Юла', 'Машинка', 'Мяч'];
$tFactoty = new ToyFactory();
$sum = 0;

for($i = 0; $i < rand(5, 20); $i++){
    $toy = $tFactoty->createToy($nameToys[rand(0, 4)]);
    echo $toy->name . ' - ' . $toy->price . '<br>';
    $sum += $toy->price;
}

echo '<hr>';
echo 'Итого - ' . $sum;