<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>

    <form action="index.php" method="POST">
        <input type="text" name="prenom" placeholder="Ton prénom">
        <input type="text" name="age" placeholder="Ton âge">
        <button type="submit">Envoyer</button>
    </form>

    <?php
    if (isset($_POST['prenom'])) {
        $nb = 0;
        foreach ($_POST as $item) {
            $nb++;
        }

        echo "Vous avez envoyé " . $nb . " argument(s).";
        ?>
        <table>
            <tr>
                <th>Clé</th>
                <th>Valeur</th>
            </tr>
            <?php
            foreach ($_POST as $cle => $valeur) {
                echo "<tr>";
                echo "<td>" . $cle . "</td>";
                echo "<td>" . $valeur . "</td>";
                echo "</tr>";
            }
            ?>
        </table>

    <?php 
    } 
    ?>

</body>
</html>