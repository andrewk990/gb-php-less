<?php

//https://yandex.ru/search/?text

switch($_GET['url']){
    case "https://yandex.ru":
        $check = (empty($_GET['value'])) ? true : false;
        if(!$check){
            $url = "https://yandex.ru/search/?text=".$_GET['value'];
            header("Location: ".$url);
        }
        break;
    case "https://google.com":
        $url = "https://www.google.com/search?q=Привет Google. Сегодня".date("d-m-Y");
        header("Location: ".$url);
        break;
        //header("Location: ".$url);
    default:
        header("Location: ".$_GET['url']);
}