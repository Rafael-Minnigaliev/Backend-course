<?php

// 1. Выведите числа от 0 до 9
for ($i = 0; $i < 10; $i++){
    echo $i . '<br>';
}


// 2. Выведите 10 случайных чисел от 1 до 10
for ($i = 0; $i < 10; $i++){
    echo rand(1, 10) . '<br>';
}


// 3. Создайте массив $items из 10 случайных целых значений от 0 до 9
$items = [];
for ($i = 0; $i < 10; $i++){
    $items[$i] = rand(0, 9);
}

echo '<pre>';
print_r($items);
echo '</pre>';


// 4. Добавляйте случайные целые числа от 1 до 9 в массив $numbers до тех пор, пока сумма всех элементов этого массива меньше 100
// А затем выведите сколько числе всего в массиве: "Длинна массива numbers = {}"

$numbers = [];
$sum = 0;
$i = 0;

while($sum < 100){
    $numbers[$i] = rand(1, 9);
    $sum += $numbers[$i];
    $i++;
}

echo count($numbers);


// 5. Переберите массив $numbers, созданный ранее, и посчитайте сумму всех четных чисел в нем
// Выведите следующие строки (как всегда вместо {} подставив нужные значения):
// Общая сумма массива numbers = {}
// Из нее часть, которая приходится на четные числа = {}
// И часть из нечетных чисел = {}

$evenNumbersSum = 0;
$oddNumbersSum = 0;

for ($i = 0; $i < count($numbers); $i++){
    if ($numbers[$i] % 2 == 0){
        $evenNumbersSum += $numbers[$i];
    } else {
        $oddNumbersSum += $numbers[$i];
    }
}

echo 'Общая сумма массива numbers = ' . $sum . '<br>';
echo 'Из нее часть, которая приходится на четные числа = ' . $evenNumbersSum . '<br>';
echo 'И часть из нечетных чисел = ' . $oddNumbersSum;