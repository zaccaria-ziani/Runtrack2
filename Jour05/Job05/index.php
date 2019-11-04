<?php 


function occurences($str, $char)
{
    return (substr_count($str, $char));
}
$str = "pouipoui";
$char = "e";
echo occurences("pouipoui","e");



?>

