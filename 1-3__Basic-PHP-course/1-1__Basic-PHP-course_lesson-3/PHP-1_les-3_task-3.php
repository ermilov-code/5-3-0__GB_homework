<?php

/* ЗАДАНИЕ 3 */
/* Делать вычисления в одном цикле */
/* max(); - array_sum(); */
/* (mixed $value, array ...$values) */

// 3. * Дан массив в 10 элементов, заполненный наполовину любыми значениями, например
// [1,2,3,4,5,0,0,0,0,0]
// Сделать алгоритм, чтобы первые 5 значений скопировались в этот же массив таким образом:
// [1,1,2,2,3,3,4,4,5,5]
// Желательно промежуточный не использовать и чтобы как можно меньше итераций.

$arrayNumbers = [1, 2, 3, 4, 5, 7, 77, 66, 80, 5];
// $arrayNumbers = [80, 1, 555, 4, 48, 7, 77, 66, 80, 5];

for ($i = 0; $i <= 4; $i++) {

    $currentNumber = $arrayNumbers[$i];
    $arrayNumbers[$i + 5] = $currentNumber;
};

sort($arrayNumbers);
print_r($arrayNumbers);

// $arrayNumbers = [1, 2, 3, 4, 5, 7, 77, 66, 80, 5];
// [0] => 1
// [1] => 1
// [2] => 2
// [3] => 2
// [4] => 3
// [5] => 3
// [6] => 4
// [7] => 4
// [8] => 5
// [9] => 5

// $arrayNumbers = [80, 1, 555, 4, 48, 7, 77, 66, 80, 5];
// [0] => 1
// [1] => 1
// [2] => 4
// [3] => 4
// [4] => 48
// [5] => 48
// [6] => 80
// [7] => 80
// [8] => 555
// [9] => 555



