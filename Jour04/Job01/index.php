

<form method="GET" action="index.php">

    <legend>Informations Personnelles:</legend>
    
<label for="prenom">Login</label>
<input type="text" id="Login" name="Login"><br>

<label for="pass">Entrez mot de passe</label>
<input type="password" id="pass" name="pass"><br>

<input type="submit" value="OK">


</form>


<?php 


$i=0;

foreach ($_GET as $cle => $valeur)
{
    echo $i."  ".$cle."<br>";

    $i = $i + 1;

}
echo "nombre de GET :".$i;

?>



