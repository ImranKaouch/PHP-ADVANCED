<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tweede pagina</title>
</head>
<body>

<?php
    $tk = $_POST['tekstkleur'];
    $ak = $_POST['achtergrondkleur']; 
    $td = $_POST['tabel-dikte']; 
    $cp = $_POST['cel-padding'];
?>
<style>


body {
    <?php echo "color: $tk;"?>
}

body {
    <?php echo "background-color: $ak;"?>
}
    
table, td{
     <?php echo "border: $td"."px solid grey;" ?>
}

td, th {
    <?php echo "padding: $cp px;"?>
}




</style>



<table>
    <thead>
        <tr>
            <th>Key    </th>
            <th>Value</th>
        </tr>
    </thead>

<?php


$gegevens ["Naam"] = "Imran Kaouch";
$gegevens ["Leeftijd"] = "17";
$gegevens ["Woonplaats"] ="Amsterdam";
$gegevens ["Klas"] = "0A";
$gegevens ["Muziek"] = "Rap";
$gegevens ["Sport"] = "Voetbal";
$gegevens ["Eten"] = "Pizza";


echo "<tbody>";
function maakRij($key,$value) {
    echo "<tr>";

    echo  "<td> " .$key. "</td> ";
    echo "<td>" .$value. "</td>";

    echo "</tr>";
}

foreach ($gegevens as $key => $value){
    maakRij($key,$value);

};

echo "</tbody>";

echo "</table>";

?>
</body>
</html>