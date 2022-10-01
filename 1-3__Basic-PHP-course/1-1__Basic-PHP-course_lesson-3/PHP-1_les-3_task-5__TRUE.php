<?php

$studentsList = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Витальев Виталий' => 5,
    ],
    'БАП26' => [
        'Антонов Антон' => 4,
        'Петров Петр' => 5,
        'Сергеев Сергей' => 2,
    ],
    'ФАП23' => [
        'Николаев Николай' => 3,
        'Олегов Олег' => 5,
        'Русланов Руслан' => 2,
    ]
];

$exclude = [];
$averageGrade = [];

foreach ($studentsList as $group => $groups) {
    $averageGrade[$group] = array_sum($groups) / count($groups);

    foreach ($groups as $studentName => $ball) {

        if ($ball < 3) {
            $exclude[$group][] = $studentName;
        }
    }
}

var_dump($averageGrade);

$topGroup = array_keys($averageGrade, max($averageGrade))[0];

echo "Наивысший средний бал у группы: \n $topGroup = $averageGrade[$topGroup] ;" . PHP_EOL;
echo "Список студентов на отчисление:" . PHP_EOL;
print_r($exclude);

// Наивысший средний бал у группы: 
//  ИТ20 = 4.3333333333333 ;
// Список студентов на отчисление:
// Array
// (
//     [БАП26] => Array
//         (
//             [0] => Сергеев Сергей
//         )

//     [ФАП23] => Array
//         (
//             [0] => Русланов Руслан
//         )

// )
