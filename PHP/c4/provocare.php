<?php
function is_cnp_valid(string $x, int $autorizare_detalii){
    if(strlen($x) != 13){
        echo "CNP-ul nu are lungimea potrivita";
    }else{

        if($autorizare_detalii == 1){
            $prefix_an;
            if($x == 1 || $x == 2){
                $prefix_an= '19';
            }else{
                $prefix_an = '20';
            }
            $an = "19" . $x[1] . $x[2];
            $luna= $x[3]. $x[4];
            $zi = $x[5]. $x[6];

            switch($x[0]){
                case 1:
                    echo "CNP-ul <b>$x</b> apartine unui barbat nascut 
                    <b>inainte de anii 2000</b>, 
                    cu data de nastere <b> $an/$luna/$zi</b>,
                    judetul natal atribuit codului <b>$x[7]$x[8]</b>,
                    CNP-ul avand un numar de ordine <b>$x[9]$x[10]$x[11]</b>.
                    ";
                    continue;
                case 2:
                    echo "CNP-ul <b>$x</b> apartine unei femei nascute 
                    <b>inainte de anii 2000</b>, 
                    cu data de nastere <b> $an/$luna/$zi</b>,
                    judetul natal atribuit codului <b>$x[7]$x[8]</b>,
                    CNP-ul avand un numar de ordine <b>$x[9]$x[10]$x[11]</b>.
                    ";
                    continue;
                case 5:
                    echo "CNP-ul <b>$x</b> apartine unui barbat nascut 
                    <b>dupa anii 2000</b>, 
                    cu data de nastere <b> $an/$luna/$zi</b>,
                    judetul natal atribuit codului <b>$x[7]$x[8]</b>,
                    CNP-ul avand un numar de ordine <b>$x[9]$x[10]$x[11]</b>.
                    ";
                    continue;
                case 6:
                    echo "CNP-ul <b>$x</b> apartine unei femei nascute 
                    <b>dupa anii 2000</b>, 
                    cu data de nastere <b> $an/$luna/$zi</b>,
                    judetul natal atribuit codului <b>$x[7]$x[8]</b>,
                    CNP-ul avand un numar de ordine <b>$x[9]$x[10]$x[11]</b>.
                    ";
                    continue;
                default:
                echo "CNP-ul este invalid";
                break;
            }

            //numarul de ordine
            $nr_verificare = '279146358279';
            $array_nr_verificare = str_split($nr_verificare);
            $array_x = str_split($x);
            
            $inmultire;
            $suma= 0;

            for($i=0; $i<=11; $i++){
                $inmultire = $array_nr_verificare[$i] * $array_x[$i];
                $suma += $inmultire;
            }
            $rezultat = $suma % 11;
            
            if($rezultat == 10){
                $cifra_de_control = 1;
                echo 'Cifra de control are valoarea: ' . "<b>$cifra_de_control</b>";
            }else{
                $cifra_de_control = $rezultat;
                echo 'Cifra de control are valoarea: ' . "<b>$cifra_de_control</b>";
            }
            
        }else{
            if($x[0] == 1 || $x[0] == 5 || $x[0] == 2 || $x[0] == 6){
                echo "CNP valid.";
            }else{
                echo "CNP invalid.";
            }
        }
    }
}

//La al doilea parametru se poate seta 0 pentru acces limitat la date, iar la 1 pentru o vedere detaliata
is_cnp_valid("1930101021162", 1);