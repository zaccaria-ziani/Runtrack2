<?php 

$str = "I'm sorry Dave I'm afraid I can't
do that";
$voyelles = array ("a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y");
$i = 0 ;

while ( $i <=41 )
{$l = 0;
while ($l <=11){
    
        if($voyelles[$l]==$str[$i])
    {
    
    echo $str[$i];
    
    }
    $l =  $l+1;
}

    $i = $i + 1 ;
    
}

?>