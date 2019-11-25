<?php 

$connexion = mysqli_connect("localhost", "root","", "jour08");

$requete = "select * from etudiants";


$query = mysqli_query($connexion, $requete);


$resultat = mysqli_fetch_all($query);

var_dump($resultat);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <title>Document</title>
</head>
<body>

<?php

    $connexion = mysqli_connect("localhost", "root", "", "jour08");
    $requete = "SELECT * FROM etudiants";
    $query = mysqli_query($connexion, $requete);
    $resultat = mysqli_fetch_all($query);
?>


<table border>
    <tr>
        <th>ID</th><th>Prénom</th><th>Nom</th><th>Naissance</th><th>Sexe</th><th>Email</th>
    </tr>
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
        ;
    ?>
</table>






    
</body>
</html>