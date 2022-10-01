<?php

$arr = ["srt", 2, 3, 4, 5, 0, 0, 0, 5, 5];

for ($i = 4; $i >= 0; $i--) {
    $arr[$i * 2 + 1] = $arr[$i * 2] = $arr[$i];
}

print_r($arr);

// Array
// (
//     [0] => srt
//     [1] => srt
//     [2] => 2
//     [3] => 2
//     [4] => 3
//     [5] => 3
//     [6] => 4
//     [7] => 4
//     [8] => 5
//     [9] => 5
// )

// 2 вариант
// array_map() - везде выручает 
// $arr2 = ["str", 2, 3, 4, 5, 0, 0, 0, 0, 0];

// $newArr2 = array_diff($arr2, array(0));
// print_r(array_merge(...array_map(null, $newArr2, $newArr2)));
