<?php 
session_start();

if(isset($_POST["reset"]))
{
    $_SESSION["nbvisites"]= 0;
}

elseif(isset($_SESSION["nbvisites"])== false )
{
 $_SESSION["nbvisites"]= 1;   
}
else
{
    $_SESSION["nbvisites"]=$_SESSION["nbvisites"] + 1;
}

echo $_SESSION["nbvisites"];


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