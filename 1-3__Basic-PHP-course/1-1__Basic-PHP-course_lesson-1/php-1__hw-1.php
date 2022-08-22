<?php

// ==========================================================

/* Базовый курс PHP
Урок 1. Введение в PHP
1) Воспользуйтесь материалами урока и установите интерпретатор PHP версии 7.4 на ваш компьютер.

/* ================= ЗАДАНИЕ 2 ================= */
/* 2) Реализуйте скрипт для запуска из командной строки. При запуске скрипт должен спросить у пользователя его имя, а после получения ответа задать вопрос о возрасте. После получения всех необходимых данных необходимо вывести строчный результат вида «Вас зовут ИМЯ, вам ВОЗРАСТ лет». */

$userName = readline("Введите ваше имя: ");
$userAge = readline("Сколько вам лет? : ") . PHP_EOL;

// (int) - приведение типа к целому числу
$userAge = (int)$userAge;

echo "_______________________" . PHP_EOL;

// Функция readline() - возвращает одиночную строчку от пользователя
// (string) - приведение типа к строке (string)

// gettype — Возвращает тип переменной
$userNameType = gettype($userName);
$userAgeType = gettype($userAge);

echo "Тип переменной userName = $userNameType" . ";" . PHP_EOL; /* PHP_EOL - кроссплатформенный перенос текста */
echo "Тип переменной userAge = $userAgeType" . ";" . PHP_EOL;

echo "_______________________" . PHP_EOL;

/* тестируем print */
print "Вас зовут $userName, вам $userAge лет" . PHP_EOL;
/* Вас зовут Павел, вам 20 лет */

echo "_______________________" . PHP_EOL;

/* ================= ЗАДАНИЕ 3 ================= */
/* 3) Доработайте скрипт, реализованный во втором задании, следующим образом: Замените вопрос о возрасте на цепочку опроса о важных делах, запланированных на день (три задачи). Программа спрашивает: «Какая задача стоит перед вами сегодня?». Пользователь отвечает текстом и нажимает Enter. Следующий вопрос программы: «Сколько примерно времени эта задача займет?». Пользователь отвечает числом и нажимает Enter. Обратите внимание, что количество задач строго ограничено в коде и равно трём. Вероятность ввода некорректных значений в данном задании игнорируем. После трёх вопросов выводится итог следующего вида:
Иван, сегодня у вас запланировано 3 приоритетных задачи на день:
- Погулять с кошкой (1ч)
- Попить кофе (2ч)
- Полежать на диване (4ч)
Примерное время выполнения плана = 7ч */ 

$task1 = readline("Какая 1 задача стоит перед вами сегодня? ");
$time1task = (int)readline("Сколько примерно времени эта задача займет? ");

$task2 = readline("Какая 2 задача стоит перед вами сегодня? ");
$time2task = (int)readline("Сколько примерно времени эта задача займет? ");

$task3 = readline("Какая 3 задача стоит перед вами сегодня? ");
$time3task = (int)readline("Сколько примерно времени эта задача займет? ");

$totalTaskTime = $time1task + $time2task + $time3task;

echo "_______________________" . PHP_EOL;

$task1Type = gettype($task1);
$time1taskType = gettype($time1task);

echo "Тип переменной task1 = $task1Type" . ";" . PHP_EOL; 
echo "Тип переменной time1task = $time1taskType" . ";" . PHP_EOL;

echo "_______________________" . PHP_EOL;

/* Вывод: */

echo "
$userName, сегодня у вас запланировано 3 приоритетных задачи на день:
- $task1 ($time1task ч)
- $task2 ($time2task ч)
- $task3 ($time3task ч)
Примерное время выполнения плана = $totalTaskTime ч
";

// Павел, сегодня у вас запланировано 3 приоритетных задачи на день:
// - Работать  (5 ч)
// - Отдыхать  (3 ч)
// - Читать  (1 ч)
// Примерное время выполнения плана = 9 ч


























// ==========================================================