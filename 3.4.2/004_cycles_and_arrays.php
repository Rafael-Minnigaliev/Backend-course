<?php

// Циклы для данных в массивах

// 1. Создайте массив скучных игрушек - $boringToys. Создайте в нем случайное количество элементов от 1 до 10, где каждый элемент этого массива это ассоциативный массив с двумя полями:
// - Название игрушки: в виде "Игрушка 1"
// - Цена игрушки: случайное число от 100 до 1000
$boringToys = [];

for ($i = 0; $i < rand(1, 10); $i++){
    $boringToys[$i] = [
        $name = 'Игрушка ' . $i,
        $price = rand(100, 1000)
    ];
}

print_r($boringToys);

// Дан массив $cars. Состоящий из трех машин со следующими данными: Мерседес - 10000 руб, BMW - 9999 руб, Автобус - 20000 руб.
$cars = [
    [
        'name' => 'Мерседес',
        'price' => 10000,
        'colors' => [],
    ],
    [
        'name' => 'BMW',
        'price' => 9999,
        'colors' => [],
    ],
    [
        'name' => 'Автобус',
        'price' => 20000,
        'colors' => [],
    ],
];


// 2. Посчитайте и выведите стоимость стоимость всех машин
$allCarsSum = 0;
foreach ($cars as $item){
    $allCarsSum += $item['price'];
}
echo 'стоимость всех машин: ' . $allCarsSum;

// 3. Для каждой машины заполните поле colors. В этом поле должны хранится все возможные варианты цветов для этой машины, при чем для каждого этого цвета, есть своя надбавка к стоимости (разная для разных машин)
// Создайте массив colors с цветами доступными для каждой машины. И случайным образом выберите из этого массива по 3 цвета для каждой машины. Эти цвета добавьте в массив $cars в поле colors. Для каждого цвета также укажите случайную надбавку к цене - случайное число от 0 до 100
// Выведите итоговый массив $cars c помощью функции var_dump и убедитесь в его правильности.
$colors = ['красный', 'зеленый', 'синий', 'желтый', 'черный', 'белый'];

for($x = 0; $x < count($cars); $x++){
    for($i = 0; $i < 3; $i++){
        $cars[$x]['colors'][$i] = [
            'color' => $colors[rand(0, 5)],
            'colorPrice' => rand(0, 100)
        ];
        //чтобы значения не повторялись
        if ($i != 0){
            if ($cars[$x]['colors'][$i]['color'] == $cars[$x]['colors'][$i - 1]['color'] || $cars[$x]['colors'][$i]['color'] == $cars[$x]['colors'][$i - 2]['color']){
                unset($cars[$x]['colors'][$i]);
                $i--;
            }
        }
    }
}

var_dump($cars);


// 4. Каталог автомобилей.
// А теперь выведите весь каталог автомобилей в виде:
// "Купите автомобиль {} цвета {} всего за: {} руб"
// вместо {} поставьте соответственно: название автомобиля, цвет, стоимость в этом цвете.

foreach($cars as $key => $val){
    foreach($val['colors'] as $item){
        echo 'Купите автомобиль ' . $val['name'] . ' цвета ' . $item['color'] . ' всего за: ' . ($val['price'] + $item['colorPrice']) . ' руб <br>';
    }
}