<?php
if (isset($_POST['reset'])) {
    $nbvisites = 0;
    setcookie('nbvisites', $nbvisites, time() + 3600);
} 
else {
    if (isset($_COOKIE['nbvisites'])) {
        $nbvisites = $_COOKIE['nbvisites'] + 1;
    } else {
        $nbvisites = 1;
    }
    setcookie('nbvisites', $nbvisites );
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job</title>
</head>
<body>  

    <p>Compteur de visites (Cookies)</p>

    
<p>  Nombre de visites stockées dans le cookie : <?php echo $nbvisites; ?></p>
    

    <form method="post" action="">  
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>

</body>
</html>