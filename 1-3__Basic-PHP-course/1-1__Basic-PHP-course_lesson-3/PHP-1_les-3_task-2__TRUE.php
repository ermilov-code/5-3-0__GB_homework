<?php

$wishes = ["счастья", "здоровья", "богатства", "воображения", "терпения"];
$epithets = ["бесконечного", "крепкого", "огромного", "космического"];
$random_congratulation = [];

$name = readline("Введите ваше имя: ");

$name = ucfirst($name); /* сделаем на всякий случай имя с заглавной буквы */
$number = 3;

// можно было сделать через shuffle()
// перемешивает элементы и берет рандомное значение?

for ($i = 0; $i < $number; $i++) {
    // 3 раза генерируем случайные пары слов
    // в задании не было чтобы пары не повторялись
    $randWishes = array_rand($wishes);
    $randEritets = array_rand($epithets);

    // созраняем пары в массиве в виде строки с пробелом, для последнего добавляем и
    $random_congratulation[] = $epithets[$randEritets] . ' ' . $wishes[$randWishes];
    // как вариант проверяем что собираем последний элемент и делаем логику чтобы последний был с И
    // $random_congratulation[] = ($i != $number - 1) ? $str : 'и ' . $str;

    unset($wishnes[$randWishes]);
    unset($epithets[$randEpithets]);
}

// как другой вариант удаляем последний элемент и добавляем обратно вместе с И
$last = ' и ' . array_pop($random_congratulation);
// $random_congratulation[] = 'и ' . $last;

// из массива формируем строку для поздравления 
$string_congratulation = implode(', ', $random_congratulation) . $last;

echo "$name, от всего сердца поздравляю тебя с Днем Рождения, желаю $sting_congratulation.";


die();




// for ($i = -1; $i <= count($arrayWishes); $i++) {

//     // берем случайный ключ из наших массивов слов
//     $randomKeyWishes = array_rand($arrayWishes, 1);
//     $randomKeyEpithets = array_rand($arrayEpithets, 1);

//     // помещаем в массив $finalWishes первое слово из array
//     $finalWishes[] = $arrayWishes[$randomKeyWishes];
//     $finalWishes[] = $arrayEpithets[$randomKeyEpithets];

//     // удаляем из исходного массива слово, которое уже использовали
//     unset($arrayWishes[$randomKeyWishes]);
//     unset($arrayEpithets[$randomKeyEpithets]);
// };

// echo "«Дорогой $userName, от всего сердца поздравляю тебя с днем рождения, желаю {$finalWishes[0]} {$finalWishes[1]}, {$finalWishes[2]} {$finalWishes[3]} и {$finalWishes[4]} {$finalWishes[5]}!»";
// // /* «Дорогой Павел, от всего сердца поздравляю тебя с днем рождения, желаю здоровья крепкого, счастья огромного и богатства бесконечного!» */


// =====================================================