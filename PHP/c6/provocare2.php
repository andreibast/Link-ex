<?php
//LINK: http://localhost/link-ex/PHP/c6/provocare2.php

//BUBBLESORT
//======================================
$arr = [8,4,1,9,5,7,3,2,6,0];

//last index from array (in PHP v.7.2.0)
$arr_key = array_keys($arr);
$arr_last_key = end($arr_key);

$coef1;
$coef2;

$sensor = array_fill(0, ($arr_last_key+1), 0);

$valid = true;

$k = 0;

while($valid == true){
    if($sensor[$k] == 0){
        for($i=0; $i< $arr_last_key ;$i+=1){
            $coef1 = $arr[$i];
            $coef2 = $arr[$i+1];
        
            if($coef1 < $coef2){
                $arr[$i] = $coef1;
                $arr[$i+1] = $coef2;
                $sensor[$k] = 1;
            }else{
                $arr[$i] = $coef2;
                $arr[$i+1] = $coef1;
                $sensor[$k] = 0;
            }
        }
    }else{
        $valid = false;
        break;
    }

    if($k != ($arr_last_key)){
        $k++;
    }else{
        break;
    }
}

echo "<pre>";
print_r($arr);

