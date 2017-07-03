<?php
$a=2;
$b=0;
$operator="/" ;
    switch($operator){
        case'+':
            $rez=$a+$b;
            echo"$rez";
            break;
        case'-':
            $rez=$a-$b;
            echo"$rez";
            break;
        case'*':
            $rez=$a*$b;
            echo"$rez";
            break;
        case'/':
            if ($b!=0){
            $rez=$a/$b;
            echo"$rez";
            } else {
            echo"Деление на ноль!";    
            }
            break;
        case'%':
            if ($b!=0){
            $rez=$a%$b;
            echo"$rez";
            } else {
            echo"Деление на ноль!";    
            }
            break;
    }
        

