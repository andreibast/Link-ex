<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calculator URL cu doua numere</h1>
    <?php
        $a= $_GET["a"];
        $op = urlencode($_GET["op"]);
        $b= $_GET["b"];

        switch($op[3]){
            case "+":
                echo $a . $op[3] . $b . "=" . ($a+$b) . " (adunare)";
                continue;
            case "-":
                echo $a . $op[3] . $b . "=" . ($a-$b) . " (scadere)";
                continue;
            case "%":
                echo $a . $op[3] . $b . "=" . ($a%$b) . " (rest)";
                continue;
            case "*":
                echo $a . $op[3] . $b . "=" . ($a*$b) . " (inmultire)";
                continue;
            case "/":
                echo $a . $op[3] . $b . "=" . ($a/$b) . " (impartire)";
                continue;
            default:
            echo "Operatorul a fost inserat gresit";
            break;
        }
    ?>
</body>
</html>



