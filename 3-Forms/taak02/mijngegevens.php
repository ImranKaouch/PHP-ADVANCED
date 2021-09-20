<?php
$colour = $_POST["colour"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn evens</title>
    <style>
            body{
                background-color: <?php echo $colour;?>

            }
            

            
        
        </style>
</head>
<body>
    
    <?php echo $_POST["voornaam"] . " ".  $_POST["achternaam"] ; ?><br>
      <?php echo $_POST["geslacht"];?><br>
      <?php echo "Klas:" . $_POST["klas"]; ?><br>
      <?php echo $_POST["leeftijd"]. " Jaar"; ?><br>
      <?php echo $_POST["adres"]; ?><br>
      <?php echo $_POST["woonplaats"];?><br>
    
     

      <!-- I AM TRYING TO MAKE THE COLOUR APEAR ON THIS SCREEN WITH THE GIVEN USER INPUT.-->
      
</body>
</html>