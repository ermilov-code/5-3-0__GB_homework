<?php

// 4. * Сгенерируйте массив в 100 элементов, так, чтобы значения были в диапазоне 1-200 и ни разу не повторялись.

// Пустой массив с нашими значениями 
$arrayElements = [];

// Цикл в 100 итераций для генерации случайного числа в диапазоне 1-200
for ($i = 0; $i < 100; $i++) {

    // rand — Генерирует случайное число
    $randomValue = rand(1, 200);

    if (in_array($randomValue, $arrayElements)) {
        while (in_array($randomValue, $arrayElements) == true) {
            $randomValue = rand(1, 200);
        }
        $arrayElements[] = $randomValue;
    } else {
        $arrayElements[] = $randomValue;
    };
};

print_r($arrayElements);
