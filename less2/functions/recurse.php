<?php
//function f($n){
//    if($n==0){
//        return;
//    }
//    echo $n." ";
//    f($n-1);
//}
//f(5);

//5! = 1 * 2 *3 *4 * 5 = 5 * 4!
//n! = n * (n-1)!

function fact($n){
    if($n==1 || $n ==0){
        return 1;
    }
    return $n * fact($n-1);
}
echo fact(3);
//fact(3) = 3 * fact(2) = 3 * 2 * 1 = 6