<?php
$colour = $_POST["colour"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn gegevens</title>
        <style>
            body{
                background-color: <?php echo $colour;?>
            }
        </style>
</head>
<body>
    
    <?php echo $_POST["voornaam"]; ?><br>
      <?php echo $_POST["geslacht"];?><br>
      <?php echo $_POST["achternaam"]; ?><br>
      <?php echo $_POST["klas"]; ?><br>
      <?php echo $_POST["leeftijd"]; ?><br>
      <?php echo $_POST["adres"]; ?><br>
      <?php echo $_POST["plaatsnaam"];?><br>
    
     

      <!-- I AM TRYING TO MAKE THE COLOUR APEAR ON THIS SCREEN WITH THE GIVEN USER INPUT.-->
      <?php echo $colour; ?>
</body>
</html>