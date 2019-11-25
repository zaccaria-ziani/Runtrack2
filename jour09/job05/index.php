<?php 
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$requete = "SELECT * FROM etudiants WHERE naissance  < CURRENT_DATE - INTERVAL '18' YEAR";

$query = mysqli_query($connexion, $requete);

$resulat = mysqli_fetch_all($query);



?>

<html>
    <meta charset = "utf-8">

    <table>

    <th>ID</th>
    <th>Prénom</th>
    <th>Nom</th>
    <th>Naissance</th>

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
