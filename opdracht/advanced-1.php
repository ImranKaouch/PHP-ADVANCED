<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eerste pagina</title>
</head>
<body>

<form action="advanced-2.php" method="post"> 

    <?php

$kleuren = array("red", "blue", "green", "black", "brown");

echo "<label for='tekstkleur'>Tekskleur:</label> ";
echo "<select id= 'tekst' name='tekstkleur'>";

foreach ($kleuren as $value) {
    
    echo "<option value='$value'> $value </option>";
    
}
echo "</select> <br>";  


echo "<label for='tekstkleur'>Achtergrondkleur:</label> ";
echo "<select id= 'tekst' name='achtergrondkleur'>";

foreach ($kleuren as $value) {
    
    echo "<option value='$value'> $value </option>";
    
}
echo "</select> <br>";  

echo "<label for='tabel-dikte'>Tabelranddikte (px):</label>";
echo "<input type= 'text' name= 'tabel-dikte'> <br>";

echo "<label for= 'cel-padding'>Cel-padding (px): </label> ";
echo "<input type= 'text' name= 'cel-padding'> <br>";




echo "<button onclick = 'klik'>Verzend</button>";









?>  
</form>


    
</body>
</html>

