<!DOCTYPE html>
<html lang="en">
<body>

<<<<<<< HEAD



<?php

$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
echo '<ul>';
foreach ($klassen as $value){
    echo '<li>'.$value.'</li>';
}
echo '</ul>';

echo "<button onclick = 'klik'>Verzend</button>";


?>
=======
<form action=" loops-foreach-deel2.php">
<label for="klas">  Kies een klas: </label>
<select id= "klas" name="klas">

<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");

foreach($klassen as $value) {
    echo "<option value= 'strtolowers ($value)'> $value </option>";
}
?>
</select>
<input type= "submit">
</form>
    
>>>>>>> d801ec3e7e39a760e674eada7001c3bee1eb85ee
</body>
</html>