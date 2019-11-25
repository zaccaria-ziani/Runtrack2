<?php 
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$requete =" SELECT *FROM sallesORDER BY capacite DESC;";

$query = mysqli_query($connexion, $requete);

$resultat = mysqli_fetch_all($query);



?>

<html>
    <meta charset = "utf-8">

    <table>

    <th>Capacité totale</th>
    
    <?php 
    foreach($resultat as $key)
    {
    echo "<tr>";

        foreach($key as $value)
        {
            echo "<td>".$value."</td>";
        }
        echo "</tr>";
    }


    ?>

    </table>
</html>
</table>



