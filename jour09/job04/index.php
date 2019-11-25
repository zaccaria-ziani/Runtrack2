<?php 
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$requete = "SELECT * FROM etudiants WHERE prenom LIKE 'T%';";

$query = mysqli_query($connexion, $requete);

$resulat = mysqli_fetch_all($query);



?>

<html>
    <meta charset = "utf-8">

    <table>

    <th>Prenom</th>
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
