<?php
//Уровень 1: Легкий
//1. Конкатенация строк:
$a = "Привет, ";
$b = "Мир!"; // Переменная $b теперь содержит строку «Привет, Мир!»
echo $c = $a.$b ."\n";

//2. Изменение регистра:
$a = "Hello";
$a = strtoupper($a);
echo $a ."\n";

$b = "Hello";
$b = strtolower($b);
echo $b ."\n";

//3. Сравнение строк:
$a = "Hello";
$b = "Hello";
echo ($a == $b);

$a1 = "Hello";
$b1 = "Hello";
echo ($a1 === $b1);

$a3 = "Hello";
$b3 = "HELLO";
echo strcasecmp($a3, $b3);

//4. Поиск подстроки:
$string = "Hello, world!";
$substring = "world";

$position = strpos($string, $substring);
echo $position."\n";

//5. Замена подстроки

$text1 = "Hello, world!";
$old = "world";
$new = "friend";

$newText = str_replace($old, $new, $text1);
echo $newText."\n";

//6. Форматирование строки:
$fruit2 = 'яблоко';
$format1 = 'Это %s вкусное';
$a5 = sprintf($format1, $fruit2);
echo $a5."\n";

//7. Разделение строки:

$fruitsString = "apple,banana,orange,grape";
$fruitsArray = explode(",", $fruitsString);
print_r ($fruitsArray);


$interestsArray = ["coding", "reading", "hiking"];
$interestsString = implode(", ", $interestsArray);
echo $interestsString."\n";

//8. Работа с многострочным текстом:
$dd = "Привет, как дела.\nКак жизнь.";
echo nl2br($dd) ."\n";

//Уровень 2: Усложненный

//1. Сложная конкатенация строк:
$name = "слива";
$price = 10;
$quantity = 5;

$message = "Название продукта: " . $name . ", Цена: $" . $price . ", Количество: " . $quantity . ".";
echo $message;

//2. Изменение регистра с условиями:

$ff = 'hello, Yuliia!';
$ff1 = ucwords($ff);
echo $ff1."\n";

$bb = 'HELLO, YULIIA!';
$bb1 = ucwords(strtolower($bb)); 
echo $bb1."\n";

//3. Сравнение строк с учётом регистра и без:

$str1 = "Hello";
$str2 = "hello";

// Сравнение с учетом регистра
if ($str1 == $str2) {
    echo "Строки равны по значению (==)\n";
} else {
    echo "Строки не равны по значению (==)\n";
}

if ($str1 === $str2) {
    echo "Строки равны по значению и типу (===)\n";
} else {
    echo "Строки не равны по значению и типу (===)\n";
}

// Сравнение без учета регистра
if (strcasecmp($str1, $str2) == 0) {
    echo "Строки равны без учета регистра (strcasecmp)\n";
} else {
    echo "Строки не равны без учета регистра (strcasecmp)\n";
}

//4. Замена подстроки с использованием массива:
$a4  = "You should eat fruits, vegetables, and fiber every day.";
$b4 = array("fruits", "vegetables", "fiber");
$c4   = array("pizza", "beer", "ice cream");

$new = str_replace($b4, $c4, $a4);
echo $new."\n";

//5. Форматирование строки с числом:

$model = 'жигули';
$year = 1975;
$format = 'Это %s %d года';
$a = sprintf($format, $model, $year);
echo $a."\n";

//6. Разделение и объединение сложной строки:

$number1 = "1, 2, 3";
$num1 = explode(",", $number1);
$sum1 = array_sum($num1);
echo $sum1."\n";

//7. Создание случайной строки:

function generate($length) {
    $line = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    return substr(str_shuffle($line), 0, $length);
}
echo generate(10)."\n"; 

//8. Проверка строки на палиндром:

function Palindrome($string1) {  
    if (strrev($string1) == $string1) {  
        echo "Palindrome";  
    } else {  
        echo "Not a Palindrome";  
    }
}
Palindrome("mama"); 
 
 

