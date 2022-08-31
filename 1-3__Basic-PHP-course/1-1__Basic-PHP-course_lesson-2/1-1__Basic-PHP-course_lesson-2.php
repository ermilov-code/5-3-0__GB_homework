<?php


// Базовый курс PHP
// Урок 2. Управление потоком


// Доработайте задание с прошлого занятия с использованием условных операторов и циклических конструкций. Реализуйте скрипт, запрашивающий у пользователя количество задач, запланированных на день. После получения корректного числа, программа должна спросить определённое количество раз, какая задача запланирована и сколько примерно времени займёт её выполнение. По завершению циклического опроса необходимо вывести итог запланированного пользователем дня, содержащий весь перечень задач с оценкой времени, а также суммарное количество часов.

// Представьте, что вы ведёте счёт на пальцах одной ладони, не считая два раза подряд один и тот же, начиная с большого. Дойдя до мизинца, вы продолжаете счёт в обратном направлении. Напишите скрипт для запуска из командной строки, определяющий по введённому положительному числу палец, который соответствует ему по счёту. В случаях, если введено некорректное значение (меньше или равное нуля) повторяйте запрос ввода, пока не будет введено корректное число.

/* 
ЗАДАНИЕ 1
Разработайте скрипт командной строки, задающий любой исторический вопрос с предоставлением трёх вариантов ответов. Например: «В каком году произошло крещение Руси?». Варианты: 810, 990 или 740 год. В случае, если пользователь ответит вариантом, не входящим в перечень ответов, повторите вопрос. Если пользователь ответил ожидаемым вариантом, но не верно, выведите сообщение о неверном ответе и завершите программу. Если пользователь ответил правильно, поздравьте его и завершите выполнение скрипта.
*/

/* Не получилось: */
// if ($answerFirstTask == $rightCity || $answerFirstTask == "1") {
//     echo "Это правильный ответ! Спасибо за игру)" . PHP_EOL;
// }

/* ПЕРВЫЙ ВАРИАНТ: ______________________________________________ */
// echo "
// Какой город стал столицей Древнерусского государства?
// 1) Новгород
// 2) Киев
// 3) Переяславль
// ";
// $answerFirstTask = (int)readline("Ваш ответ: ") . PHP_EOL;
// $rightCity = "Киев";
// if ($answerFirstTask == 2) {
//     echo "{$rightCity} - это правильный ответ! Спасибо за игру)" . PHP_EOL;
// } elseif ($answerFirstTask == 1 || $answerFirstTask == 3) {
//     echo "Это неправильный ответ! Правильный ответ - {$rightCity}!" . PHP_EOL;
// } else {
//     echo "
//         Какой город стал столицей Древнерусского государства?
//         1) Новгород
//         2) Киев
//         3) Переяславль
//         ";
//     $answerFirstTask = (int)readline("Ваш ответ: ") . PHP_EOL;
// }

// echo "_______________________" . PHP_EOL;

/* ВТОРОЙ ВАРИАНТ: ______________________________________________ */
// $rightCity = "Киев";
// do {
//     echo "
//         Какой город стал столицей Древнерусского государства?
//         1) Новгород
//         2) Киев
//         3) Переяславль
//         ";
//     $answerFirstTask = (int)readline("Ваш ответ: ");
//     if (($answerFirstTask === 3) || ($answerFirstTask === 1)) {
//         echo "Это неправильный ответ :( - Правильный ответ: 2 - {$rightCity}!" . PHP_EOL;
//         break;
//     }
// } while ($answerFirstTask !== 2);

// if ($answerFirstTask === 2) {
//     echo "{$rightCity} - это правильный ответ! Спасибо за игру)" . PHP_EOL;
// }

// echo "_______________________" . PHP_EOL;



// ============================ 