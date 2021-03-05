<?php
include("header.php");
//include("messageHandler.php")
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
<title>Ota yhteyttä</title>
</head>
<body>


    <div class="leipateksti">
    

    <p>Voit ottaa meihin yhteyttä</p>
    
    <ul>
    <li>puhelimitse yksittäisiin myymälöihin</li>
    <li>sähköpostitse: asiakaspalvelu@puutarhaliikeneilikka.fi</li>
    <li>alla olevalla lomakkeella</li>
</ul>

<form action="messageHandler.php" method="POST">
    <fieldset>
        <legend>
            Yhteydenottolomake
        </legend>    
        
            <label class="nimike" for="nimi">Nimi</label>
        <input class="tekstikentta" type="text" name="nimi">
        <br>
        <br>
        
            <label class="nimike" for="sahkoposti">Sähkoposti</label>
            <input class="tekstikentta" type="email" name="sahkoposti">
        
        <br>
        <br>
        
        
            <label class="nimike" for="aihe">Aihe</label>
           <select name="aihe" class="tekstikentta">
               <option value="kysymys">Kysymys tuotteista</option>
               <option value="tilaus">Tilaus</option>
               <option value="yhteydenottopyynto">Yhteydenottopyyntö</option>
               <option value="muu">Muu</option>
           </select>
        <br>
        <br>
            <label class="nimike" for="viesti">Viestisi</label>
            <textarea class="tekstikentta" name="viesti" rows="4" cols="50"></textarea>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="uutiskirje">
            <p>
            
            <label class="uutiskirjeteksti" for="uutiskirje"><p>Haluan tilata Puutarhaliike Neilikan uutiskirjeen</p></label>
            <input class="uutiskirjenappi" type="checkbox" name="uutiskirje">
        </p>
</div>
            
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <input type="submit" value="Lähetä">
        <input type="reset" value="Tyhjennä">
        <br>
    
            
    </fieldset>
</form>
<div class="alareuna"></div>
</div>

<?php
include("footer.html");
?>

</body>
</html>

