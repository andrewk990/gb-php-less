<?php
/*
$day = date("w");
if($day > 0 && $day < 6){
    echo "Будний день";
}
elseif($day == 6 || $day == 0){
    echo "Выходной день";
}
else{
    echo "Некорректный день!";
}

*/

/*
$flag = true;

$x = 10;
if($x >= 10){
    $x++;//11
    if($x < 11){
        $x *= 2;
    }
    else{
        if($x < 15){
            ++$x;//12
        }
        if($x > 20){
            $x += 3;
        }
    }
    if("test"){
        if(!$flag){
            $x++;
        }
        if(0){
            $x--;
        }
    }
}

echo ++$x;//12

*/

$day = date("w");

 if($day > 0 && $day < 6):?>
    <h1><?= $day?> - будений день</h1>
<?php
else:?>
    <h1><?= $day?> - некорректный день</h1>
<?php
   endif;?>









