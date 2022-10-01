<?php

// $wishes = ["счастья", "здоровья", "богатства", "воображения", "терпения"];
// $epithets = ["бесконечного", "крепкого", "огромного", "космического"];
// $random_congratulation = [];

// $name = readline("Введите ваше имя: ");

// $name = ucfirst($name); /* сделаем на всякий случай имя с заглавной буквы */
// $number = 3;

// // можно было сделать через shuffle()
// // перемешивает элементы и берет рандомное значение?

// for ($i = 0; $i < $number; $i++) {
//     // 3 раза генерируем случайные пары слов
//     // в задании не было чтобы пары не повторялись
//     $randWishes = array_rand($wishes);
//     $randEritets = array_rand($epithets);

//     // созраняем пары в массиве в виде строки с пробелом, для последнего добавляем и
//     $random_congratulation[] = $epithets[$randEritets] . ' ' . $wishes[$randWishes];
//     // как вариант проверяем что собираем последний элемент и делаем логику чтобы последний был с И
//     // $random_congratulation[] = ($i != $number - 1) ? $str : 'и ' . $str;

//     unset($wishnes[$randWishes]);
//     unset($epithets[$randEpithets]);
// }

// // как другой вариант удаляем последний элемент и добавляем обратно вместе с И
// $last = ' и ' . array_pop($random_congratulation);
// // $random_congratulation[] = 'и ' . $last;

// // из массива формируем строку для поздравления 
// $string_congratulation = implode(', ', $random_congratulation) . $last;

// echo "$name, от всего сердца поздравляю тебя с Днем Рождения, желаю $sting_congratulation.";


// die();

$wishes = ["счастья", "здоровья", "богатства", "воображения", "терпения"];
$epithets = ["бесконечного", "крепкого", "огромного", "космического"];

$name = readline("Как зовут именинника?");
$wishLimit = 3;
$wishChosen = [];

for ($i = 1; $i <= $wishLimit; $i++) {
    $wishChosen[] = $epithets[array_rand($epithets) . " " . $wishes[array_rand($wishes)]];
}

$lastWish = array_pop($wishChosen);

$congratulationText = " Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю " . implode(',', $wishChosen) . " и " . $lastWish;

echo $congratulationText;

// =====================================================