<?php
$sivu = $_SERVER['PHP_SELF']; /*HUOM CaSe SeNSiTiVe */
/* Vastaanotetaan: '/moodle/PHP-harjoitukset/PHP-harjoitus1.php' */
$katkomerkki = strrpos($sivu, '/') +1;
$tiedostonimi = substr($sivu, $katkomerkki);

/*
$nimi = explode(".",$tiedostonimi);
TAI (nimi-muuttuja taulukoksi ja tulostetaan 1. solu)*/
$katkomerkki = strpos($tiedostonimi, '.');
$pitkaNimi = substr($tiedostonimi, 0, $katkomerkki);
$nimi = str_replace('Nettikauppa', '', $pitkaNimi);
echo ($nimi);
$valittu = "valittu";

?>

<header class="header">
    
<a href="" class="logo"></a></a>
    <input class="menuNappi" id="menuNappi" type="checkbox" />
    <label class="menu-ikoni" for="menuNappi"><span class="navicon"></span></label>
    <div id="main-nav">    
    <ul>
                <li class="<?php if ($nimi == "Etusivu") echo $valittu;?>"><a href="NettikauppaEtusivu.php">Etusivu</a></li>
                <li class="<?php if ($nimi == "Tuotteet") echo $valittu;?>"><a href="NettikauppaTuotteet.php">Tuotteet</a>
                
                <ul class="submenu">
                    <li><a href="NettikauppaTuotteet.php?subc=sisakasvit">Sisäkasvit</a></li>
                    <li><a href="NettikauppaTuotteet.php?subc=ulkokasvit">Ulkokasvit</a></li>
                    <li><a href="NettikauppaTuotteet.php?subc=tarvikkeet">Tarvikkeet</a></li>
                </ul>
</li>
                <li class="<?php if ($nimi == "TietoaMeista") echo $valittu;?>"><a href="NettikauppaTietoaMeista.php">Tietoa Meistä</a></li>
                <li class="<?php if ($nimi == "Myymalat") echo $valittu;?>"><a href="NettikauppaMyymalat.php">Myymälät</a></li>
                <li class="<?php if ($nimi == "OtaYhteytta") echo $valittu;?>"><a href="NettikauppaOtaYhteytta.php">Ota Yhteyttä</a></li>
            </ul>
</div>

</header>
