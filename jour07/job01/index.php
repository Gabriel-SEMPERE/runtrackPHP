<?php
session_start();

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
    
} 
else {
    if (isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites']++;
    } else {
        $_SESSION['nbvisites'] = 1;
    }
}

$nbvisites = $_SESSION['nbvisites'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job</title>
</head>
<body>
    <p>
        Nombre de visites : <?php echo $nbvisites; ?>
    </p>

    <form method="post" action="">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>

</body>
</html>