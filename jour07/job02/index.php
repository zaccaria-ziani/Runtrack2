<?php 


if(isset($_POST["reset"]))
{
    $_COOKIE["nbvisites"]= 0;
}

if(isset($_COOKIE["nbvisites"]))
{
 
    $_COOKIE["nbvisites"]=$_COOKIE["nbvisites"] + 1;
    setcookie("nbvisites", $_COOKIE["nbvisites"]);
}

echo $_COOKIE["nbvisites"];


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
   
   
    <title></title>
</head>
<body>
    
                  
                    <form method="POST" action="index.php">
                    <input type="submit" value="reset" name="reset">
                
                </form>
</body>
</html>