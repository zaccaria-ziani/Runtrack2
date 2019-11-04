<?php
$a = 10 ;
$b = 11 ;
$operation = "*";

function calcule($a, $operation, $b)
{
    switch ($operation)
    {
        case "+":
            $result = $a + $b;
            break;
        case "-":
            $result = $a - $b;
            break;
        case "*":
            $result = $a * $b;
            break;
        case "/":
            $result = $a / $b;
            break;
        case "%":
            $result = $a % $b;
            break;   
        default:
            $result="Erreur";
                 

    }

    return ($result);
}


echo calcule($a, $operation, $b);

?>