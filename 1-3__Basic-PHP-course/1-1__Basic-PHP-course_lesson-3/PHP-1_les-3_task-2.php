<?php

/* 2. Разработайте скрипт для запуска из командной строки, генерирующий персонализированные поздравления с днём рождения.
Подготовьте два массива: в первом храните пожелания (счастья, здоровья и т.д.), во втором эпитеты (бесконечного, крепкого и т.д.). При запуске запросите имя именинника и после ввода сгенерируйте текст поздравления, включающий три пожелания. Комбинации эпитетов и пожеланий должны быть случайными. В результате необходимо получить строку, по следующему примеру: «Дорогой Илон Маск, от всего сердца поздравляю тебя с днем рождения, желаю космического терпения, бесконечного здоровья и безудержного воображения!». Для реализации используйте функции array_rand и implode; */

/* ЗАДАНИЕ 2 */
/* пожелания не повторяются / array_rand() - shuffle - implode  */
/* не использовать числовые ключи - программа должны быть универсальной - последнее "и" должна выводиться с хорошей читаемой логикой */

$arrayWishes = ["счастья", "здоровья", "богатства"];
$arrayEpithets = ["бесконечного", "крепкого", "огромного"];
$userName = readline("Введите ваше имя: ");

/* array_rand — Выбирает один или несколько случайных ключей из массива */
/* implode — Объединяет элементы массива в строку */
/* shuffle — Перемешивает массив */

$wish1 = [];
$wish2 = [];
$wish3 = [];

$finalWishes = [];

for ($i = 1; $i <= count($arrayWishes); $i++) {

    // берем случайный ключ Wishes
    $randomKeyWishes = $arrayWishes[array_rand($arrayWishes, 1)];
    // берем случайный ключ Wishes
    $randomKeyEpithets = $arrayEpithets[array_rand($arrayEpithets, 1)];

    // помещаем в массив $wish1 первое слово из Wishes
    $finalWishes[] = $randomKeyWishes;
    $finalWishes[] = $randomKeyEpithets;






    // // переменная с первым рандомным пожеланием 
    // if (isset($finalWishes[$arrayWishes[array_rand($arrayWishes, 1)]]) == false) {
    // }
    // // переменная со вторым рандомным пожеланием
    // $finalWishes[] = "{$arrayWishes[array_rand($arrayWishes, 1)]} {$arrayEpithets[array_rand($arrayEpithets, 1)]}";
};

var_dump($finalWishes);




// =====================================================

// for ($i = 1; $i <= count($arrayWishes); $i++) {
//     $finalWishes[] = "{$arrayWishes[array_rand($arrayWishes, 1)]} {$arrayEpithets[array_rand($arrayEpithets, 1)]}";
// };

// print_r($finalWishes);

// echo "«Дорогой $userName, от всего сердца поздравляю тебя с днем рождения, желаю {$finalWishes[0]}, {$finalWishes[1]} и {$finalWishes[2]}!»";
// /* «Дорогой Павел, от всего сердца поздравляю тебя с днем рождения, желаю богатства огромного, здоровья крепкого и счастья огромного!» */

// =====================================================