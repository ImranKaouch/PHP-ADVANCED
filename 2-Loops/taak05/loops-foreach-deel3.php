<!DOCTYPE html>
<html lang="en">
<body>
<?php

$student  = array(
    "voornaam"    => "Jan",
    "achternaam"  => "Janssen",
    "klas"        => "9A",
    "Leeftijd"    => 17,
    "Woonplaats"  => "Amstelveen"
  );
  foreach($student as $key => $value) {
      echo "De $key van de student is $value <br>";
  }
?>

    
</body>
</html>