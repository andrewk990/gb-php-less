<?php

// "<hr>_<br><hr>"
// Пример 1.
echo "<hr>Пример 1. if else<br> * если x > y, то x + y; <br> * если x < y, то x * y.<br><hr>";
$x = 5;
$y = 42;
echo "x = $x;<br>y=$y<br>";
if( $x > $y ) 
   echo "result = ".$x + $y."<br><br>";
else
   echo "result = ".$x * $y."<br><br>";

// Пример 2.
echo "<hr>Пример 2. else if<br><hr>";
$x = 5;
$y = 2;
if( $x > $y ) 
   echo "$x больше $y <br><br>";
else if ( $x < $y )
   echo "$x меньше $y <br><br>";
else
   echo "$x равен $y <br><br>";

// Пример 3.
echo "<hr>Пример 3. switch case<br><hr>";
$now = 'evening';
switch ($now){
    case 'night':
    echo 'Доброй ночи!<br><br>';
    break;
case 'morning':
    echo 'Доброе утро!<br><br>';
    break;
case 'evening':
    echo 'Добрый вечер!<br><br>';
    break;
default:
    echo 'Добрый день!<br><br>';
    break;
}

// Пример 4.
echo "<hr>Пример 4. Тернарный оператор<br><hr>";
$x = 10;
$y = 15;
$max = ($x > $y) ? $x : $y; // x : y (операнд по истине : операнд по лжи). В примере ЛОЖЬ, поэтому выведем Y.
echo $max."<br><br>";

// Пример 5.
echo "<hr>Пример 5. Функции<br><hr>";
function compare_numbers($x, $y){
    if ($x > $y)
       echo "$x > $y<br>";
    else if ($x < $y)
       echo "$x < $y<br>";
    else
       echo "$x = $y<br>";
 }
 compare_numbers(10, 20);
 compare_numbers(20, 10);
 compare_numbers(20, 20);
echo "<br>";

// Пример 6.
echo "<hr>Пример 6. Return<br><hr>";
function average($x, $y)
{
   return ($x + $y)/2;
}
$avg = average(42, 100500);
echo "Average = ".$avg;
echo "<br><br>";

// Пример 7.
echo "<hr>Пример 7. Mult - входные значения для функции по умолчанию<br><hr>";
function mult($a, $b = 1){
    return $a * $b;
}
echo mult(8)."<br>";
echo mult(8, 2);
echo "<br><br>";

// Пример 8.
echo "<hr>Пример 8. Рекурсия<br><hr>";
function fibonacci($n, $prev1 = 1, $prev2 = 0){
    $current = $prev1 + $prev2;
    echo "$current ";
    if($n > 1)
        fibonacci($n - 1, $current, $prev1);
}
fibonacci(10);
echo "<br><br>";

// Пример 9.
echo "<hr>Пример 9. Область вилимости переменных<br><hr>";
function changeX($x){
    $x += 5;
    echo $x."<br>";
}
$x = 1;
echo $x."<br>";        // выводит 1
changeX($x);    // выводит 6
echo $x."<br>";        // выводит 1
echo "<br><br>";

// Пример 10.
echo "<hr>Пример 10. Стандартные функции<br><hr>";
$a = 'test'."<br>";
var_dump($a);
$name = 'Andrey';
$string = 'Hello, ' . $name;
$otherString = str_replace('Hello', 'Goodbye', $string);
echo $otherString;
echo "<br><br>";






?>
