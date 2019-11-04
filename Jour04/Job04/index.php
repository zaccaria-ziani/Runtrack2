<form method="POST" action="index.php">

        <label> Prenom </label>
        <input type="text" name="prenom"/> <br>

        <label> Nom </label>
        <input type="text" name="nom"/><br>

        <label> Age </label>
        <input type="text" name="age"/><br>

            <input type="submit" value="ok"/>

    </form>


<table style="border:solid black; height:100px; width:200px;">
    <tr>
        <th> Arguments </th>
        <th> Valeurs associées </th>
    </tr>
    <?php
        $i = 1;
        foreach($_POST as $cle => $valeur)
        {
            echo "<tr><td>$i</td><td>$valeur</td></tr>";
            $i++;
        }
    ?>
</table>