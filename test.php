<?php

//Задача 1

// Объявление переменных
$name = "Olga";
$age = 34;
$isStudent = false;

// Создание константы
define("SITE_NAME", "Имя сайта");

// Вывод значений
echo "Имя: " . $name . " , Возраст: ". $age . $isStudent;
print  ("Имя: " . $name . " , Возраст: ". $age . $isStudent);
echo "Название сайта: " . SITE_NAME;

// Задача 2
// Преобразование в число
$number = "12345";
$intNumber = (int)$number;
echo  "Преобразованное число: " . $intNumber;
echo  "Тип переменной: " . gettype($intNumber);

// Задача 3
//Арифметические операции
$a = 150;
$b = 3;
$c = 5;
$sum = $a + $b + $c;
echo "Сложение: " . $sum;

$diff = $a - $b - $c;
echo  "Вычитание: " . $diff;

$product = $a * $b * $c;
echo  "Умножение: " . $product;

$quotient = $a / $b / $c;
echo  "Деление: " . $quotient;

// Сравнение

$result = $a > $b;
echo  "Сравнение: " . $result;

$resultTest = $a < $b;
echo  "Сравнение: " . $resultTest;

// Логическое выражение
if ($resultTest && $result) {
echo "Оба истинны";
} else {
    echo "Одно из них ложно";
};

// Задача 4
echo "<p>Имя сервера: " . $_SERVER['SERVER_NAME'] . "</p>";
echo "<p>IP-адрес клиента: " . $_SERVER['REMOTE_ADDR'] . "</p>";
?>






