<?php

// 1. Создайте переменную $isGood со значением true и создайте переменную $smallNumber с целым числом от 1 до 5 в качестве значения
// Предположите какой тип данных и значение будет, если сложить эти переменные
// А теперь сложите две переменных и выведите результат сложения и его тип
$isGood = true;
$smallNumber = 4;
// тип int, значение 5 так как true приводится к 1.
$sum = $isGood + $smallNumber;

var_dump($sum);
echo '<br>';


// 2. В коде ниже есть ошибка. Уберите комментарии и исправьте ошибку так, чтобы код выполнился.
$firstDay = 'Понедельник';
$secondDay = 'Вторник';
$day3 = 'Среда';

var_dump($firstDay . ' ' . $secondDay . ' ' . $day3);
echo '<br>';


// 3. Создайте переменную $catsCount, в качестве значения укажите любое целое число от 1 до 9
// И исправьте ошибку в коде ниже. На странице должно быть выведено похожее сообщение: "Во дворе котов: 3", где вместо 3 то число, что находится в переменной $catsCount
$catsCount = 7; 

var_dump("Во дворе котов: $catsCount");
echo '<br>';


// 4. Создайте переменную $currentDate, поместите в нее в виде строки текущую дату в формате ГГГГ-ММ-ДД, например 1971-12-31
// Выведите 1-ю строку: "Шла зима. Календарь неумолимо показывает 1971-12-31. Эх, скорей бы лето", вместо даты нужно подставить значение переменной
// Выведите 2-ю строку: "Шла зима. Календарь неумолимо показывает $currentDate. Эх, скорей бы лето"
$currentDate = '2022-05-19';

echo 'Шла зима. Календарь неумолимо показывает 2022-05-19. Эх, скорей бы лето<br>';
echo "Шла зима. Календарь неумолимо показывает $currentDate. Эх, скорей бы лето";
echo '<br>';


// 5. Исправьте названия переменных, так чтобы было понятно, за что отвечают эти переменные
$nameCat = 'Мурзик';
$countPaws = 4;
$countEars = 2;
$lengthTail = 27;
$color = 'черного';
$pawColor1 = 'белого';
$pawColor2 = 'черного';
$object = 'тазик';
$content = 'с мазутом';

var_dump("Жил был кот по имени $nameCat");
var_dump("У него было $countPaws лапы, $countEars уха и хвост длинной $lengthTail см");
var_dump("Сам он был $color цвета, но лапки были $pawColor1 цвета");
var_dump("Однажды он пошел гулять и упал в $object $content");
var_dump("Теперь и лапы нашего кота тоже $pawColor2 цвета");

// При создании этого задания ни один котик не пострадал!
