<?php

// 4. * Сгенерируйте массив в 100 элементов, так, чтобы значения были в диапазоне 1-200 и ни разу не повторялись.

// Пустой массив с нашими значениями 
$arrayElements = [];

// Цикл в 100 итераций для генерации случайного числа в диапазоне 1-200
for ($i = 0; $i < 100; $i++) {

    // rand — Генерирует случайное число
    $randomValue = rand(1, 200);

    // key() возвращает индекс текущего элемента массива
    $keyArrayElement = key($randomValue);

    // если в массиве arrayElements уже есть элемент randomValue
    if (array_key_exists($keyArrayElement, $arrayElements)) {
        echo "hello";
    };

    $arrayElements[] = $randomValue;
};

print_r($arrayElements);
