<head>
    <meta charset="utf-8"/>
</head>

<?php
    $connexion = mysqli_connect("localhost", "root", "", "jour08");
    $requete = "SELECT * FROM salles";
    $query = mysqli_query($connexion, $requete);
    $resultat = mysqli_fetch_all($query);
?>


<table border>
    <tr>
        <th>ID</th><th>Salles</th><th>ID-etages</th><th>Capacité</th>
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
