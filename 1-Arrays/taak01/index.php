<!DOCTYPE html>
<html lang="en">
<body>
<?php
$studenten = array("Piet", "Muhammad", "Els"); 

$achternaam['Piet'] = 'Jan';
$achternaam['Muhammad'] = 'Ali';
$achternaam['Els'] = 'Elizabeth';
$leeftijd['Piet'] = 17;
$leeftijd['Muhammad'] = 17;
$leeftijd['Els'] = 17;
$klas['Piet'] = '9A';
$klas['Muhammad'] = '9G';
$klas['Els'] = '9F';
echo  "Gegevens Muhammad: Voornaam = " . $studenten [1] . ". Achternaam = " . $achternaam["Muhammad"] . ". Leeftijd = " . $leeftijd['Muhammad'] . ". Klas = " . $klas['Muhammad']  ;
?>

</body>
</html>