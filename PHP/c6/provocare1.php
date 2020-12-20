<?php
//Link: http://localhost/link-ex/PHP/c6/provocare1.php
$branch_number = 6;
$branch_length = 1;
$tree_sections = 7;
$tree_trunk_height = 2;

$symbol = '*';
$tree_trunk_symbol = '| # |';

$sum;
$sensor = 0;
$space = "&nbsp;";

//first section
$space_per_branch_first = str_repeat($space, $tree_sections*$branch_number);

for($i = 0; $i< $branch_number; $i++){
    print $space_per_branch_first;
    for($j=0; $j<floor($branch_number-$i); $j++){
        echo "&nbsp;&nbsp;";
    }

    $sum = str_repeat($symbol, $branch_length);
    echo $sum;
    echo "<br>";
    $branch_length+= 2;
}

//rest of the sections 
$coef = $branch_number;
$branch_length = $branch_length -4;

$decount_row = 2; //With how less symbols the section shall begin in comparison with the one before?
for($x = 1; $x<$tree_sections; $x++){
    $space_per_branch_rest = str_repeat($space, $tree_sections*$branch_number-$coef);
    for($j = 0; $j< $branch_number; $j++){
        echo $space_per_branch_rest;
        for($k=0; $k<floor($branch_number-$j); $k++){
            echo "&nbsp;&nbsp;"; //row symmetry
        }
        $sum = str_repeat($symbol, $branch_length-$decount_row);
        echo $sum;
        echo "<br>";
        $branch_length+= 2;
    }
    $decount_row += $branch_number;
    $coef += $branch_number;
    
}

//getting last row value
$last_row_split = str_split($sum);
$last_row_value = sizeof($last_row_split);

//creating tree trunk
$trunk_space = str_repeat($space, $last_row_value+4);
for($y = 0; $y< $tree_trunk_height; $y++){
    echo $trunk_space . $tree_trunk_symbol . "<br>";
}



