<?php

$tb = array(200, 204, 173, 98, 171, 404, 459);
$i = 0 ;

while ( $i <=6 )

{
    if($tb[$i]%2==0)
{

echo $tb[$i]."est un nombre pair <br>";

}

else
{

echo $tb[$i]."est un nombre impair <br>";

}

    $i = $i + 1 ;

}
?>