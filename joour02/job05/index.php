<?php
    $nb = 1;
    $nb_max = 1000;

    while ($nb <= $nb_max)
    {
        if ($nb == 1)
        {
            $nb++;
            continue;
        }
        $a = 0;
        for ($i=2; $i<$nb; $i++)
        {
            if (is_int($nb/$i))
            {
                $a++;
                break;
            }
        }
        if ($a == 0) echo "$nb est un nombre premier </b><br>";
        $nb++;
    }
?>