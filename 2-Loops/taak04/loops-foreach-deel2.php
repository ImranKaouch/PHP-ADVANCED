<!DOCTYPE html>
<html lang="en">
<body>




<?php

$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
echo '<ul>';
foreach ($klassen as $value){
    echo '<li>'.$value.'</li>';
}
echo '</ul>';

echo "<button onclick = 'klik'>Verzend</button>";


?>
</body>
</html>