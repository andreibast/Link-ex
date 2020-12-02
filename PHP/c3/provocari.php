<?php

// $n = 5;

// echo 'N factorial este ' . $n . "<br>";
//     $p=1;
//     $i = 1;
// while($i<=$n){
//     $p = $p*$i;
//     $i = $i+1;
// }
// echo "Valoarea lui P este: $p";

//-------------------------------------

// $n = 5;
// $p=1;
// $i=1;
// do{
//     $p=$p*$i;
//     $i = $i +1;
// }while($i<= $n);
// echo "Valoarea lui P este " . $p;

//-------------------------------------

$n = 897;
$max = -1;


while($n>0){
    $c = $n % 10;
    if($max < $c){
        $max = $c;
        $n = $n / 10;
    }else{
        break;
    }   
}
echo "Cifra maxima este " . $max;