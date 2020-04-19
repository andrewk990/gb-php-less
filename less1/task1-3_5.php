<?php

    echo "Задания 1-3, 5* по методичке <br> <hr>";

    $gbStudentName = "Andrey Kamynin";
    $gbTeacherName = "Sergey Gerasimenko";
    echo "Hi, i'm $gbStudentName! <br> I am glad to meet you, $gbTeacherName!<br>";

    echo "<hr>Выполнение задачи 1. По методическому пособию.";

    $int10 = 42;
    $int2 = 0b101010;
    $int8 = 052;
    $int16 = 0x2A;
    echo "<br>Десятеричная система $int10 <br>";
    echo "Двоичная система $int2 <br>";
    echo "Восьмеричная система $int8 <br>";
    echo "Шестнадцатеричная система $int16 <br>";

    $precise1 = 1.5;
    $precise2 = 1.5e4;
    $precise3 = 6E-8;
    echo "$precise1 | $precise2 | $precise3<br>";

    $a = 1;
    echo "$a - выводится присвоенное значение перменной<br>";
    echo '$a'."- здесь за счет одинарных кавычек \' \' выводится текст<br>";

    $a = 'Hello,';
    $b = 'world!<br>';
    $c = $a . $b;
    echo $c;

    $a = 4;
    $b = 5;
    echo $a + $b . '<br>';  // сложение
    echo $a * $b . '<br>';  // умножение
    echo $a - $b . '<br>';
    echo $a / $b . '<br>';  // деление
    echo $a % $b . '<br>';  // остаток от деления
    echo $a ** $b . '<br><hr>'; // возведение в степень

    $a += $b;
    echo 'a = ' . $a;
    $a = 0;
    echo $a++;  // Постинкремент
    echo ++$a;  // Преинкремент
    echo $a­­--;  // Постдекремент
    echo --$a;  // Предекремент

    $a = 4;
    $b = 5;
    var_dump($a == $b);  // Сравнение по значению
    var_dump($a === $b); // Сравнение по значению и типу
    var_dump($a > $b);    // Больше
    var_dump($a < $b);    // Меньше
    var_dump($a <> $b);  // Не равно
    var_dump($a != $b);   // Не равно
    var_dump($a !== $b); // Не равно без приведения типов
    var_dump($a <= $b);  // Меньше или равно
    var_dump($a >= $b);  // Больше или равно

    echo "<br><hr>";

    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true? Преобразование в int, 0 отбрасывается.
        echo '<br>';                             
    var_dump((int)'012345');    // Почему 12345? Преобразование в int, 0 отбрасывается.
        echo '<br>';
    var_dump((float)123.0 === (int)123.0); // Почему false? Тождественное равенство учитывает значения после точки. После преобразования типа в int дробная часть отбрасывается.
        echo '<br>';
    var_dump((int)0 === (int)'hello, world'); // Почему true? Из документации в PHP при преобразовании символьной строки в тип int получаем FALSE, т.е. "0",  и проверка тождественного равенства проходит.
        echo '<br><hr>';

    echo "Задание 5* <br><br>";

    $a = 10;
    $b = 15;

    echo "old a = $a<br>old b = $b<br><br>";

    $a = $a + $b;   // a = 25
    $b = $a - $b;   // b = 10
    $a = $a - $b;   // a = 15

    echo "new a = $a<br>new b = $b";

?>