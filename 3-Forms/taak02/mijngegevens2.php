<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="invoer2.css">
<title>Mijngegevens</title>
</head>
<body>
    <div>
    <?php

    echo  " " .$_POST["voornaam"]. " " .$_POST["achternaam"]. "<br>";
    echo  " " .$_POST["geslacht"]. "<br>";
    echo "Klas: " .$_POST["klas"]. "<br>";
    echo " " .$_POST["leeftijd"]. " jaar <br>";
    echo " " .$_POST["adres"]. "<br>";
    echo " " .$_POST["woonplaats"]. " ";




?>
</div>
    
</body>
</html>