<?php

// 1. Создайте переменную с названием $value содержащую целое СЛУЧАЙНОЕ число от 1 до 10.
// Выведите сообщение: "Полученное число {} больше 5", если это число действительно больше 5
// Вместо {} - выведите значения переменной $value
$value = rand(1, 10);
if ($value > 5){
    echo 'Полученное число ' . $value . ' больше 5';
}


// 2. Создайте переменную $timeToLearn - поместите в нее СЛУЧАЙНОЕ boolean значение, используя такую конструкцию (bool) rand(0, 1)
// Если в переменной будет значение true, то выведите сообщение: "Я как раз сейчас и учусь"
// Если в переменной будет значение false - то выведите сообщение: "Что значит еще не время? Нет, для учебы всегда есть время"
$timeToLearn = (bool) rand(0, 1);
if ($timeToLearn){
    echo 'Я как раз сейчас и учусь'; 
} else {
    echo 'Что значит еще не время? Нет, для учебы всегда есть время';
}


// 3. Создайте переменную $hour, содержащую текущее время в часах, поместите в нее случайное значение от 0 до 23
// Если текущее время находится в диапазоне от 0 до 8 - выведите сообщения: "В это время нужно спать"
// Если время находится в диапазоне от 8 до 21 - выведите сообщения: "В это время занимайтесь полезными делами, или поспите после обеда"
// Если время находится в диапазоне от 21 до 23 - выведите сообщения: "Самое время готовиться ко сну"
$hour = rand(0, 23);
if ($hour < 8){
    echo 'В это время нужно спать';
} elseif ($hour >= 8 && $hour < 21){
    echo 'В это время занимайтесь полезными делами, или поспите после обеда';
} else {
    echo 'Самое время готовиться ко сну';
}


// 4. Создайте константу HOURS_IN_DAY и укажите в нее продолжительность суток в часах
// добавьте условие, если значение константы не равно 24 - выведите сообщение: "Неужели я не знаю что в сутках 24 часа?"
define('HOURS_IN_DAY', 24);
if(HOURS_IN_DAY != 24){
    echo 'Неужели я не знаю что в сутках 24 часа?';
} 

// 5. Даны три длины сторон прямоугольного треугольника, нужно понять существует ли такой треугольник.
// Создайте три переменные $a, $b, $c - стороны треугольника, поместите в каждую из них СЛУЧАЙНОЕ значение от 1 до 5
// Выведите одно из сообщений: "Треугольник со сторонами {} {} {} существует" или "Невозможно создать треугольник со сторонами {} {} {}",
// вместо {} - должны быть выведены реальные значения сторон треугольника
$a = rand(1, 5);
$b = rand(1, 5);
$c = rand(1, 5);

if ($a > $b && $a > $c){
    if($a**2 == $b**2 + $c**2){
        echo 'Треугольник со сторонами ' . $a . ' ' . $b . ' ' . $c . ' существует';
    }else{
        echo 'Невозможно создать треугольник со сторонами ' . $a . ' ' . $b . ' ' . $c;
    }
} elseif ($b > $c && $b > $a){
    if($b**2 == $a**2 + $c**2){
        echo 'Треугольник со сторонами ' . $a . ' ' . $b . ' ' . $c . ' существует';
    }else{
        echo 'Невозможно создать треугольник со сторонами ' . $a . ' ' . $b . ' ' . $c;
    }
} elseif ($c > $b && $c > $a) {
    if($c**2 == $b**2 + $a**2){
        echo 'Треугольник со сторонами ' . $a . ' ' . $b . ' ' . $c . ' существует';
    }else{
        echo 'Невозможно создать треугольник со сторонами ' . $a . ' ' . $b . ' ' . $c;
    }
} else {
    echo 'Невозможно создать треугольник со сторонами ' . $a . ' ' . $b . ' ' . $c;
}


// 6. Создайте переменную $dayNumber, содержащую номер дня недели, поместите в нее СЛУЧАЙНОЕ значение от 1 до 7
// Выведите это выходной или нет, если неделя начинается с воскресенья (1 день - это воскресенье)
$dayNumber = rand(1, 7);
if ($dayNumber == 1 || $dayNumber == 7){
    echo 'это выходной день';
} else {
    echo 'это не выходной день';
}
