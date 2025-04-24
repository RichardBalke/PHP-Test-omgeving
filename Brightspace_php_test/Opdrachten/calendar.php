<?php

function dagenInMaand($m, $y) {
    $laatste = mktime(0, 0, 0, $m, 1, $y);
    $lday = idate('t', $laatste);
    return $lday;
}

function eersteDagInMaand($m, $y) {
    $eerste = mktime(0, 0, 0, $m, 1, $y);
    $eday = idate('w', $eerste);
    return $eday;
}

function restDagen($edag, $ldag) {
    $mm = ($edag + $ldag) % 7;
    if ($mm != 0)
        $mm = 7 - $mm;
    return $mm;
}


$maand = 4;
$jaar = 2019;
if (isset ($_POST['volgende'])) {
    $maand++;
    if ($maand == 13) {
        $maand = 1;
        $jaar++;
    }
}

if (isset ($_POST['vorige'])) {
    $maand--;
    if ($maand == 0) {
        $maand = 12;
        $jaar--;
    }
}


?>

<!doctype html>
<html lang="nl">
    <head>
        <title>Kalender</title>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="totcal">
            <div class="topnav">
                <form action="calendar.php" method="post">
                    <table width="100%">
                        <tr>
                            <td><input type="submit" name="vorige" value="<<"></td>
                            <td width = "60%"> <?= $datum ?> </td><td>
                                <input type="submit" name="volgende" value=">>">
                            </td></tr>
                    </table>
                    <input type="hsidden" name="hmaand" value="<?= $maand ?>">
                    <input type="hsidden" name="hjaar" value="<?= $jaar ?>">
                </form>
            </div>
        </div>
    </body>
</html>