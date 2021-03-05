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
<title>Lisää tuote</title>
</head>
<body>


    <div class="leipateksti">
    

    <p>Lisää tuote tietokantaan alla olevalla lomakkeella</p>

<form>
    <fieldset>
        <legend>
            Tuotteen lisäyslomake
        </legend>    
        
            <label class="nimike" for="nimi">Tuotenimi</label>
        <input class="tekstikentta" type="text" name="nimi">
        <br>
        <br>
        
            <label class="nimike" for="sahkoposti">Hinta</label>
            <input class="tekstikentta" type="text" name="hinta">
        
        <br>
        <br>
        
        
            <label class="nimike" for="aihe">Tuotekategoria</label>
           <select name="tuotekategoria" class="tekstikentta">
               <option value="kysymys">Sisäkasvit</option>
               <option value="tilaus">Ulkokasvit</option>
               <option value="yhteydenottopyynto">Tarvikkeet</option>
               <option value="muu">Muut</option>
           </select>
        <br>
        <br>
            <label class="nimike" for="viesti">Tuotekuvaus</label>
            <textarea class="tekstikentta" name="tuotekuvaus" rows="4" cols="50"></textarea>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <form action="upload.php" method="post" enctype="multipart/form-data">
  <p>Valitse tuotteen kuva</p>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>


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

