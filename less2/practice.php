<?php 

// Задание 1.
echo "<hr>Задание 1<br><hr>";
$a = 15;
$b = 12;
echo "a = $a; b = $b<br>";
// если a и b положительные - ввести разность
if ($a >= 0 && $b >= 0)
    $c = $a - $b;
    //echo "Разность = $different<br>";
else if ($a < 0 && $b < 0)
    $c = $a * $b;
else
    $c = $a + $b;
echo "result = $c";
echo "<br><br>";


// Задание 2.
echo "<hr>Задание 2<br><hr>";
$a = 8;
switch ($a) {
    case 0:
        echo '0, ';
    case 1:
        echo '1, ';
    case 2:
        echo '2, ';
    case 3:
        echo '3, ';
    case 4:
        echo '4, ';
    case 5:
        echo '5, ';
    case 6:
        echo '6, ';
    case 7:
        echo '7, ';
    case 8:
        echo '8, ';
    case 9:
        echo '9, ';
    case 10:
        echo '10, ';
    case 11:
        echo '11, ';
    case 12:
        echo '12, ';
    case 13:
        echo '13, ';
    case 14:
        echo '14, ';
    case 15:
        echo '15';
}
echo "<br><br>";


// Задание 3.
echo "<hr>Задание 3<br><hr>";
function addition($arg1, $arg2){
    return $arg1 + $arg2;
    }
function substraction($arg1, $arg2){
    return $arg1 - $arg2;
    }
function multiplication($arg1, $arg2){
    return $arg1 * $arg2;
    }
function division($arg1, $arg2){
    if ($arg2 == 0)
        return "на 0 делить нельзя";
    return $arg1 / $arg2;
    }

echo addition(10,5).'<br>';
echo substraction(10,5).'<br>';
echo multiplication(10,5).'<br>';
echo division(10,5);
echo "<br><br>";


// Задание 4.
echo "<hr>Задание 4<br><hr>";
function mathOperation($arg1, $operation, $arg2){
    switch ($operation) {
        case '+':
            return $arg1 + $arg2;
            break;
        case '-';
            return $arg1 - $arg2;
            break;
        case '*':
            return $arg1 * $arg2;
            break;
        case '/';
            if ($arg2 == 0)
                return 'на 0 делить нельзя';
            return $arg1 / $arg2;
            break;
    }
}
echo mathOperation(10,'+',5).'<br>';
echo mathOperation(10,'-',5).'<br>';
echo mathOperation(10,'*',5).'<br>';
echo mathOperation(10,'/',0);
echo "<br><br>";


// Задание 6.
echo "<hr>Задание 6<br><hr>";
function power($val, $pow){
    if ($pow == 0)
        return 1;
    if ($pow == 1)
        return $val;
    $val = $val * power($val, $pow -1);
    return $val;
}
echo power(2,8); // TODO как вытащить переменные из функции, чтобы внести их в комментарий?
echo "<br><br>";


// Задание 7. TODO сделать.
echo "<hr>Задание 7<br><hr>";
    echo '- к сожалению';
echo "<br><br>";
?>