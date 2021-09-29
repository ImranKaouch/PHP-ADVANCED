<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tweede paina</title>
</head>
<body>
<?php


echo $_POST["tekstkleur"]; echo "<br>";
echo $_POST["achtergrondkleur"]; echo "<br>";
echo $_POST["tabel-dikte"]; echo "<br>";
echo $_POST["cel-padding"]; echo "<br>";


echo "<table border ='$_POST[tabel-dikte]'>"
echo "<tr>"

foreach ($gegevens as $value) {
    echo "<td> $value </td> "
}

$gegevens ["voornaam"] = "Imran";
$gegevens ["leeftijd"] = "17";
$gegevens ["woonplaats"] ="Amsterdam";
$gegevens ["klas"] = "0A";
$gegevens ["muziek"] = "Rap";
$gegevens ["sport"] = "Voetbal";
$gegevens ["eten"] = "Pizza";

echo "<tr>";
echo "</table>";


?>
</body>
</html>