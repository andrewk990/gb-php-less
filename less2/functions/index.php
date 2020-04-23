<?php
$outer = 2;

function sum($x=0,$y=0){
    if(isOdd($x) && isOdd($y)){
        return $x + $y;
    }
    return $x * $y;
    
    //$res = $x + $y;//внешние переменные недоступны в теле функции
    //return $res;
//    echo 111;
    //немедленно завершает работу функции и присваивает ей значение
//    echo $res;
}

function isOdd($number){
    if($number % 2 == 0){
        return true;
    }   
    return false;
}


$result = 2 * sum(4,2);
echo $result;
//sum(1,2);