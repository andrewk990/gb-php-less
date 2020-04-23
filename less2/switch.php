<?php

$svetophor = ["red","yellow","green"];

$color = $_GET['c'];//"yellow";//$svetophor[rand(0,2)];
echo $_GET['x'];
switch($color){
    case "green":
        echo "Вперед";
        break;
    case "yellow":
        echo "Внимание";
        break;
    case "red":
        echo "Стоп";
        break;
    default:
        echo "Поломка светофора";
}