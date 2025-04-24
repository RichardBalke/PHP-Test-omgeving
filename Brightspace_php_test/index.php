<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>

    <header>
        <html>
        <h1>Brightspace opdrachten</h1>
        <h2>Opdracht 1</h2>
        <?php echo "Hello World!";
        $naam = "Richard Balke";
        $adres = "Hoogstraat 1";
        $postcode = "1234 AB, Melick";

        echo "<p> Mijn naam is <span id=\"naam\">$naam.</span> <br> ik woon op <span id=\"adres\">$adres</span> en mijn postcode is <span id = \"postcode\">$postcode.</span></p>";

        ?>

        <a href="form.html">Schrijf je hier in!</a>


        </html>
    </header>

    <main>

    <form action="opslaan.php" method="post">
            Naam:<input type="text" name="volledige naam" /><br />
            adres:<input type="text" name="adres" /><br />
            postcode:<input type="text" name="postcode" /><br />
            woonplaats:<input type="text" name="woonplaats" /><br />
            <input type="submit" name="submit" value="Gegevens opslaan!" />
        </form>

        <?php
        
        $AantalEnen;
        // EnenAantal #geen variabele omdat er geen dollar teken voor staat
        // $1Hoeveelheid #een variabele moet beginnen met een een letter a - z
        $Hoeveelheid1;
        $_1;
        $_1_1;
        // $#Enen #een hashtag is het begin van een comment
        $Enen   ;     
        
        ?>
    </main>



    <footer>



<?php
$a = 1;

$b = 2;

echo "$a plus $b is " . ($a + $b) . "<br>";
?>


<?php

$i = 5;

switch ($i) {
    case 1:
        echo "Zeer slecht";
        break;
    case 2:
        echo "Slecht";
        break;
    case 3:
        echo "Matig";
        break;
    case 4:
        echo "Ruim onvoldoende";
        break;
    case 5:
        echo "Onvoldoende";
        break;
    case 6:
        echo "Voldoende";
        break;
    case 7:
        echo "Ruim voldoende";
        break;
    case 8:
        echo "Goed";
        break;
    case 9:
        echo "Zeer goed";
        break;
    case 10:
        echo "Uitmuntend";
        break;
    default:
        echo "Ongeldig cijfer";
        break;
    };




    function aantalcijfers($getal) {
    if ($getal >= 0 && $getal <= 999999) {
        $aantalCijfers = strlen($getal);
        return $aantalCijfers;
    } else {
        return "Ongeldig getal. Het getal moet tussen 0 en 999999 liggen.";
    }

    };

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $getal = $_POST["getal"];
        $resultaat = aantalcijfers($getal);
        echo "<p>Het aantal cijfers in het getal $getal is: $resultaat</p>";
    }

    ?>

    <form action="index.php" method="post">
        <label for="getal">Voer een getal in (tussen 0 en 999999):</label>
        <input type="number" id="getal" name="getal" required>
        <input type="submit" value="Aantal cijfers tellen">
    </form>




    
    </footer>

</body>

</html>