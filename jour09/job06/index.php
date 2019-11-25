<?php 
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$requete = "SELECT COUNT(*) FROM etudiants";

$query = mysqli_query($connexion, $requete);

$resulat = mysqli_fetch_all($query);



?>

<html>
    <meta charset = "utf-8">

    <table>

    <th>Nombres d'étudiants</th>
    
    <?php 
    foreach($resulat as $key)
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
