<?php

$i=0;
while($i<=100)
{
    

    if($i <=20)
    {
        echo "<br><i>".$i."</i></br>";

    }
   elseif($i >= 25 && $i<=50)
    {
        if($i==42)
        {
            echo "<br>Laplateforme</br>";

        }
        else{
            echo "<br><u>".$i."</u></br>";
        }
       }
       else{
        echo "<br>".$i."</br>";
       }
    
    $i=$i+1;
}

?>