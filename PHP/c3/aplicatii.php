<?php

//PATH: http://localhost/link-ex/php/c3/aplicatii.php

//----------------AP1------------------
    // $x = rand(1,30);

    // if($x % 2 === 0){
    //     echo "Numarul $x este par";
    // }else{
    //     echo "Numarul $x nu este par";
    // }

//---------------AP2-----------------------
    // $x = 8;
    // $y = 7;

    // if($x>$y){
    //     echo "Numarul $y este cel mai mic!";
    // }elseif($x == $y){
    //     echo "Numerele sunt egale";
    // }else{
    //     echo "Numarul $x este cel mai mic!";
    // }

//-----------AP3-------------------------
    // $x = 2;
    // $y = 3;
    // $z = 2;

    // if($x>$y && $z> $y){
    //     echo "Numarul $y este cel mai mic!";
    // }elseif($x>$z && $y>$z){
    //     echo "Numarul $z este cel mai mic!";
    // }elseif($y>$x && $z>$x){
    //     echo "Numarul $x este cel mai mic!";
    // }elseif($x === $y && $x === $z){
    //     echo "Numerele din pozitia X, Y si Z sunt egale";
    // }elseif($x === $z){
    //     echo "Numerele din pozitia X si Z sunt egale"; 
    // }elseif($y === $z){
    //     echo "Numerele din pozitia Y si Z sunt egale";
    // }else{
    //     echo "Numerele din pozitia X si Y sunt egale";
    // }

//--------------AP4----------------------

    // $a = 55;
    // $b = 35;
    // $c = 10;

    // if( ($a+$b) == $c || ($b+$c) == $a  || ($a+$c) ==$b  ){
    //     echo "Copii se pot aseza pe balansoar si pot sa ramana in echilibru!";
    // }else{
    //     echo "Copii vor fi in dezechilibru pe balansoar!";
    // }

//---------------------AP5--------------------
    // const BAIAT = 1;
    // const FATA = 2;

    // $v = 15;
    // $i = 120;
    // $s = FATA;

    // $g= 50+0.75*($i-150)+($v-20)/4;

    // if($s == 1){
    //  echo "Greutatea baiatului este de $g kg.";
    // }elseif($s == 2){
    //  echo "Greutatea fetei este de " . ($g*0.9) . " kg.";
    // }else{
    //     echo "Nu a fost selectat genul corect!";
    // }


//-----------------AP6------------------------

    // $x = rand(1,10);

    // switch($x % 2 == 0){
    //     case 2:
    //         echo "Numarul $x este un numar PAR";
    //         break;
    //     default:
    //         echo "Numarul $x este un numar IMPAR";
    // }
//----------------AP7---------------------------

    // $nota = 8;

    // switch($nota){
    //     case 1: case 2: case 3: case 4:
    //         print "INSUFICIENT";
    //     break;
    //     case 5: case 6:
    //         print "SUFICIENT";
    //     break;
    //     case 7: case 8:
    //         print "BUN";
    //     break;
    //     default:
    //         print "BURSIER";
    // }

//---------------------AP8--------------------------

    // $zi = 5;
    
    // switch($zi){
    //     case 1:
    //         echo 'Azi este Luni!';
    //     break;
    //     case 2:
    //         echo 'Azi este Marti!';
    //     break;
    //     case 3:
    //         echo 'Azi este Miercuri!';
    //     break;
    //     case 4:
    //         echo 'Azi este Joi!';
    //     break;
    //     case 5:
    //         echo 'Azi este Vineri!';
    //     break;
    //     case 6:
    //         echo 'Azi este Sambata!';
    //     break;
    //     case 7:
    //         echo 'Azi este Duminica!';
    //     break;
    //     default:
    //         echo 'Nu a fost introdus un numar asociat unei zile a saptamanii!';
    // }

//-----------------AP9--------------------------

    // $x = 2111;
    // echo ($x % 2 == 0) ? 'Numarul este PAR' : 'Numarul este IMPAR';

//-----------------AP10-------------------------

    // echo $user = true ?? 'vizitator';

//-----------------AP11-------------------------

    // $x = 0;

    // while($x < 15){
    //     $x++;
    //     echo $x . "<br>";
    // }

    // $y= 0;
    // do{
    //     $y++;
    //     echo $y . "<br>";
    // }while($y <15)

    // for($i = 1; $i<=15; $i++){
    //     echo $i . "<br>";
    // }

//-------------AP12--------------------

    // for($i=1; $i<=15; $i++){
    //     if($i % 2 == 0){
    //         continue;
    //     }else{
    //         echo $i . "<br>";
    //     }
    // }

//---------------AP13------------------

    // $cantitateRezervor = 15;

    // if($cantitateRezervor >= 1 && $cantitateRezervor < 15){
    //     echo 'Va rog sa alimentati!';
    // }elseif($cantitateRezervor < 1){
    //     echo 'Ati ramas fara combustibil. Trebuie sa ne oprim!';
    // }else{
    //     echo 'Aveti suficient combustibil.';
    // }

//--------------AP14-------------------

    // $array1= array(64,3,53,12,623, 12, 51,66, 632, 86);

    // for($i=0; $i < 10; $i++){

    //     $var =$array1[$i]; //pun intr-o variabila rezultatul sirului pt fiecare iteratie
    //     $j = $i - 1; //pregatesc iteratia antecedenta cu care o voi compara

    //     //In timp ce iteratia anterioara incepe de la 0 (prima iteratie din bucla while e nula) SI valoarea iteratiei anterioare este mai mare decat valoarea iteratiei prezente, atunci...  
    //     while($j>=0 && $array1[$j]>$var ){
    //         $array1[$j+1] = $array1[$j];  //...iteratia prezenta devine iteratia anterioara...
    //         $j = $j-1; //...si apoi iteratia anterioara devine anterioara 2x 
    //     }
    //     $array1[$j+1] = $var; //iteratia prezenta se stocheaza in var
    // }
    // print_r($array1); //printeaza array-ul procesat

//-----------------AP15------------------

    // $a = 5;
    // $b = 7;

    // $temp = $a;
    // $a = $b;
    // $b = &$temp;


    // echo $a. "<br>";
    // echo $b;

//-----------------AP16---------------------

    // //produsul 1
    // $x1 = 34;
    // $x2 = 38;

    // //produsul 2
    // $y1 = 57;
    // $y2 = 60;

    // print(($x2 -$x1) + ($y2-$y1));

//----------------AP17---------------------

// $nrConcurenti = range(1,100);
// $echipa;

// $j=0;
// for($i=0; $i<=(100/6); $i++){
//     if(isset($nrConcurenti[$j+4])){
//         $echipa[$i] = [
//             "$i" => array($nrConcurenti[$j], $nrConcurenti[$j+1], $nrConcurenti[$j+2], $nrConcurenti[$j+3], $nrConcurenti[$j+4], $nrConcurenti[$j+5])
//         ];
//         $j+=6;
//     }else{
//         $echipa[$i] = [
//             "$i" => array($nrConcurenti[$j], $nrConcurenti[$j+1], $nrConcurenti[$j+2], $nrConcurenti[$j+3])
//         ];
//         $j+=6;
//     }
// }

// //Cod de verificare
//     // echo "<pre>";
//     // print_r($echipa);
//     //echo "<hr>";

// //Gruparea echipelor
// echo "<b>Echipele sunt grupate astfel: </b>" . "<br>" . "<br>";

// for($a=0; $a<=16; $a++){
//     echo "Echipa " . ($a+1) . " are concurentii: ";
//     for($b=0; $b<=5; $b++){
//         if(isset($echipa[$a][$a][$b])){
//             print_r( $echipa[$a][$a][$b] . "; ");
//         }else{
//             continue;
//         }
//     }
//     echo "<br>";
// }

// //Aranjarea startului
// echo "<br>";
// echo "<b>Startul va avea loc in aceasta ordine: </b>" . "<br>" . "<br>";

// for($p=0; $p<=5;$p++){
//     echo "Startul nr.". ($p+1) ." are concurentii: ";
//     for($k=0; $k<=15; $k++){
//         print_r($echipa[$k][$k][$p]);
//         echo "; ";
//     }
//     echo "<br>";
// }

// echo "Startul nr.7 are concurentii: ";
// for($l=0; $l<=3; $l++){
//     print_r($echipa[16][16][$l]);
//     echo "; ";
// }

//----------------AP19---------------------

    // $sold =2500;
    // $dobanda = 11;
    // $nrAni = 8;

    // $rezultat = $sold;

    // for($i = 1; $i <= $nrAni; $i++){
    //     echo "Soldul in anul $i este: " . $rezultat . " lei" . "<br>";
    //     $rezultat += ($rezultat * ($dobanda/100));
    // }

//-----------------AP20--------------------

    // $baza2= "101101";
    // $b2_convertit = str_split($baza2);
    // $contor = 0;
    // $rezultat = 0;
    // $suma = 0;

    // for($i = 0 ; $i<strlen($baza2); $i++){
    //     if(is_numeric($b2_convertit[$i]) && ($b2_convertit[$i] == 0 || $b2_convertit[$i] ==1) && $b2_convertit[0] == 1){
    //         $array_putere[$i]= 2**$contor;
    //         $rezultat = $array_putere[$i] * $b2_convertit[$i];
    //         $suma += $rezultat;
    //         $contor++;
    //     }else{
    //         echo "Numar in baza 2 inserat gresit. Verificati numarul introdus. Ex: 111010101.";
    //         $suma = 0;
    //     break;
    //     }
    // }
    // if($suma != 0){
    //     echo 'Numarul in baza2 (' . $baza2 . ') este in baza10 = ' . $suma;
    // }
?>