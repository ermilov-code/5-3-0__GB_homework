<?php

$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr2 = range(1, 10); /* создает массив [1, 2 ... 10] */
$multiple = [];

// for ($i = 0; $i < count($arr1); $i++) {
//     $multiplate[] = $arr[$i] * $arr2[$i];
// }

// foreach ($arr1 as $key => $value) {
//     $multiplate[] = $arr1[$key] * $arr2[$key];
// }

// print_r($multiplate);

// еще вариант:

$multiple = array_map(
    function ($a, $b) {
        return $a * $b;
    },
    $arr1,
    $arr2
);

print_r($multiple);

// Array
// (
//     [0] => 1
//     [1] => 4
//     [2] => 9
//     [3] => 16
//     [4] => 25
//     [5] => 36
//     [6] => 49
//     [7] => 64
//     [8] => 81
//     [9] => 100
// )
