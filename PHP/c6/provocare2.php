<?php
//LINK: http://localhost/link-ex/PHP/c6/provocare2.php

//BUBBLESORT
//======================================
//$arr = [8,4,1,9,5,7,3,2,6,0];

////last index from array (in PHP v.7.2.0)
// $arr_key = array_keys($arr);
// $arr_last_key = end($arr_key);

// $coef1;
// $coef2;

// $sensor = array_fill(0, ($arr_last_key+1), 0);

// $valid = true;

// $k = 0;

// while($valid == true){
//     if($sensor[$k] == 0){
//         for($i=0; $i< $arr_last_key ;$i+=1){
//             $coef1 = $arr[$i];
//             $coef2 = $arr[$i+1];
        
//             if($coef1 < $coef2){
//                 $arr[$i] = $coef1;
//                 $arr[$i+1] = $coef2;
//                 $sensor[$k] = 1;
//             }else{
//                 $arr[$i] = $coef2;
//                 $arr[$i+1] = $coef1;
//                 $sensor[$k] = 0;
//             }
//         }
//     }else{
//         $valid = false;
//         break;
//     }

//     if($k != ($arr_last_key)){
//         $k++;
//     }else{
//         break;
//     }
// }

// echo "<pre>";
// print_r($arr);

//QUICKSORT



// QUICKSORT (Algoritmul consta in impartirea repetata a vectorului dat in doi
// subvectori avand proprietatea ca orice element din subvectorul stang este mai mic
// decat orice element din subvectorul drept.Evident,este vorba de un algoritm divide
// et impera,avand in vedere ca impartim problema data in doua subprobleme de
// acelasi tip.)

// $arr = [8,4,1,9,5,7,3,2,6,0];

// $arr_total = [3, 0, 1, 8, 7, 2, 5, 4, 9, 6];


$arr_total = [7, 2, 1, 8, 6, 3, 5, 4];

$first_element = $arr_total[0];
$pivot = $arr_total[7];

$param_temp1 = 0;
$param_temp2 = 0;


echo $pivot;

for($i= ($first_element-1) ; $i<8 -1; $i++){
    for($j = 0; $j< 8-1; $j++){
        if($arr_total[$j] < $pivot){
            $param_temp1 = $arr_total[$j];
            $param_temp2 = $arr_total[$j+1];
            $arr_total[$j] = $param_temp2;
            $arr_total[$j+1] = $param_temp1;
        }else{
            continue;
        }
    }
}

echo "<pre>";
print_r($arr_total);



