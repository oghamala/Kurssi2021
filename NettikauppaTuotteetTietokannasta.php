<?php
/* tuotteet.php */
$kuvadir = "kuvat/";
// tähän jotain
$query = "SELECT tuotteet.* FROM tuotteet WHERE kategoria_id = $kid ORDER BY nimi LIMIT 25 ";
//.. I kyselyn tuloksena rivi
echo "<ul class=\"lista\"";
while($rivi = $db->fetch_assoc($result)) {
$nimi = $rivi['nimi'];
//..
$kuva = $rivi['kuva'];
$kuvatiedosto = $kuvadir.$kuva;
echo "<li><img src=\"$kuvatiedosto\" alt=\"Kukka\" width=\"150\" height=\"150\" </li> </ul>";
}

?>