<?php
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="shortcut icon" href="media/icon.png" type="image/x-icon">
<link rel="stylesheet" href="NettikauppaTyylit.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Kiitos viestistäsi</title>
</head>
<body>


    <div class="leipateksti">

<?php

$palvelin = "localhost";
$kayttaja = "root";
$salasana = "cXgsckkx45lyAKOi";
$tietokanta = "neilikka";

//luo yhteys
$yhteys = new mysqli($palvelin, $kayttaja, $salasana, $tietokanta);

//jos ei onnistu, niin keskeytä
if ($yhteys->connect_error) {
    die("Yhteyden muodostaminen epäonnistui: ".$yhteys->connect_error); 
}

//aseta merkistökoodaus
$yhteys->set_charset("utf8");

$nimi = $yhteys->real_escape_string(strip_tags($_POST['nimi']));
$sahkoposti = $yhteys->real_escape_string(strip_tags($_POST['sahkoposti']));
$aihe = $yhteys->real_escape_string(strip_tags($_POST['aihe']));
$viesti = $yhteys->real_escape_string(strip_tags($_POST['viesti']));
if (isset($_POST['uutiskirje'])) {
    $uutiskirje = 1;
} else {
    $uutiskirje = 0;
}




$viesti = "INSERT INTO viestit (nimi, sahkoposti, aihe, viesti, uutiskirje) VALUES ('$nimi', '$sahkoposti', '$aihe', '$viesti', '$uutiskirje')";

if ($yhteys->query($viesti)) {
    echo "Viestin lähetys onnistui!";
} else {
    echo "VIRHE: ".$yhteys->error." <br> Lähettäessä viestiä ".$viesti;
}

$yhteys->close();
?>
<br>
<br>
<p>Selaimesi ohjataan kymmenen sekunnin päästä takaisin</p>
<a href="NettikauppaEtusivu.php">Etusivulle.</a>
<p><small>(Jos uudelleenohjaus ei toimi, niin voit klikata ylläolevaa linkkiä.)</small></p>

<?php
include("footer.html");
?>

</body>
</html>


<?php
header("refresh:10; url=NettikauppaEtusivu.php");
?>

