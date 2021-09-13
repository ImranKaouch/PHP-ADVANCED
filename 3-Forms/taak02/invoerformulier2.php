<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="invoer2.css">
    <title>Invoerformulier</title>
</head>
<body>

<form name="Invoerformulier" action="mijngegevens2.php" method="POST">

    <label for="voornaam">Voornaam</label> 
    <input type="text" name="voornaam"> <br>

    <label for="achternaam ">Achternaam</label>
    <input type="text" name="achternaam"> <br>

    <label for="geslacht">Geslacht</label>
    <input type="text" name="geslacht"> <br>

    <label for="klas">Klas</label>
    <input type="text" name="klas"> <br>

    <label for="leeftijd">Leeftijd</label>
    <input type="text" name="leeftijd"> <br>

    <label for="adres">Adres</label>
    <input type="text" name="adres"> <br>

    <label for="woonplaats">Woonplaats</label>
    <input type="text" name="woonplaats"> <br>

    <label for="Lievelings kleur">Lievelings kleur</label>
    <select id="Lievelings kleur" name="Lievelings kleur"> <br>
    
        <input type="submit" name="submit" value="verstuur">
        
        <?php

$kleuren = array ("Rood", "Blauw", "Groen", "Geel", "Oranje");

foreach($kleuren as $value) {
    echo "<option value='strtolower ($value)'>$value</option>";
}





?>
   
</select>
</form>
    
</body>
</html>