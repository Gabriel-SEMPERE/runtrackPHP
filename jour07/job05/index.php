<?php
session_start();
if (!isset($_SESSION['plateau']) || isset($_POST['reset'])) {
    $_SESSION['plateau'] = ['-', '-', '-', '-', '-', '-', '-', '-', '-'];
    $_SESSION['tour'] = 'X';
    $_SESSION['fini'] = false;
    $_SESSION['resultat'] = "";
}
if (isset($_POST['case']) && $_SESSION['fini'] == false) {
    $i = $_POST['case'];
    
    if ($_SESSION['plateau'][$i] == '-') {
        $_SESSION['plateau'][$i] = $_SESSION['tour'];
        
        $p = $_SESSION['plateau'];
        $win = false;
        if (($p[0] != '-' && $p[0] == $p[1] && $p[1] == $p[2]) ||
            ($p[3] != '-' && $p[3] == $p[4] && $p[4] == $p[5]) ||
            ($p[6] != '-' && $p[6] == $p[7] && $p[7] == $p[8]) ||
            ($p[0] != '-' && $p[0] == $p[3] && $p[3] == $p[6]) ||
            ($p[1] != '-' && $p[1] == $p[4] && $p[4] == $p[7]) ||
            ($p[2] != '-' && $p[2] == $p[5] && $p[5] == $p[8]) ||
            ($p[0] != '-' && $p[0] == $p[4] && $p[4] == $p[8]) ||
            ($p[2] != '-' && $p[2] == $p[4] && $p[4] == $p[6])) {
            
            $_SESSION['resultat'] = $_SESSION['tour'] . " a gagné !";
            $_SESSION['fini'] = true;
            $win = true;
        }
        if (!$win) {
            $rempli = true;
            if ($_SESSION['plateau'][0] == '-') $rempli = false;
            if ($_SESSION['plateau'][1] == '-') $rempli = false;
            if ($_SESSION['plateau'][2] == '-') $rempli = false;
            if ($_SESSION['plateau'][3] == '-') $rempli = false;
            if ($_SESSION['plateau'][4] == '-') $rempli = false;
            if ($_SESSION['plateau'][5] == '-') $rempli = false;
            if ($_SESSION['plateau'][6] == '-') $rempli = false;
            if ($_SESSION['plateau'][7] == '-') $rempli = false;
            if ($_SESSION['plateau'][8] == '-') $rempli = false;

            if ($rempli) {
                $_SESSION['resultat'] = "Match nul !";
                $_SESSION['fini'] = true;
            } else {
                // Changement de joueur
                if ($_SESSION['tour'] == 'X') {
                    $_SESSION['tour'] = 'O';
                } else {
                    $_SESSION['tour'] = 'X';
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Morpion</title>
</head>
<p>Morpion</p>
<body>
    <?php if ($_SESSION['resultat'] != ""): ?>
        <p><?php echo $_SESSION['resultat']; ?></p>
    <?php else: ?>
    <?php endif; ?>

    <form method="post">
        <table>
            <tr>
                <td><?php if($_SESSION['plateau'][0]=='-') echo '<button name="case" value="0" class="case-btn">-</button>'; else echo $_SESSION['plateau'][0]; ?></td>
                <td><?php if($_SESSION['plateau'][1]=='-') echo '<button name="case" value="1" class="case-btn">-</button>'; else echo $_SESSION['plateau'][1]; ?></td>
                <td><?php if($_SESSION['plateau'][2]=='-') echo '<button name="case" value="2" class="case-btn">-</button>'; else echo $_SESSION['plateau'][2]; ?></td>
            </tr>
            <tr>
                <td><?php if($_SESSION['plateau'][3]=='-') echo '<button name="case" value="3" class="case-btn">-</button>'; else echo $_SESSION['plateau'][3]; ?></td>
                <td><?php if($_SESSION['plateau'][4]=='-') echo '<button name="case" value="4" class="case-btn">-</button>'; else echo $_SESSION['plateau'][4]; ?></td>
                <td><?php if($_SESSION['plateau'][5]=='-') echo '<button name="case" value="5" class="case-btn">-</button>'; else echo $_SESSION['plateau'][5]; ?></td>
            </tr>
            <tr>
                <td><?php if($_SESSION['plateau'][6]=='-') echo '<button name="case" value="6" class="case-btn">-</button>'; else echo $_SESSION['plateau'][6]; ?></td>
                <td><?php if($_SESSION['plateau'][7]=='-') echo '<button name="case" value="7" class="case-btn">-</button>'; else echo $_SESSION['plateau'][7]; ?></td>
                <td><?php if($_SESSION['plateau'][8]=='-') echo '<button name="case" value="8" class="case-btn">-</button>'; else echo $_SESSION['plateau'][8]; ?></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="reset" value="Réinitialiser la partie">
    </form>
</body>
</html>