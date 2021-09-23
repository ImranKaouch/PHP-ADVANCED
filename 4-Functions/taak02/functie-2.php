<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function rekenUit ($getal1, $getal2, $getal3) {
    $antwoord = $getal1+$getal2+$getal3;
    return ("Als ik de getalen $getal1, $getal2 en $getal3 bij elkaar optel is de uitkomst $antwoord  <br>");
}
    
rekenUit(5, 10, 9);
rekenUit(35,378,1);
rekenUit(84,63,3);

echo rekenUit(5, 10, 9);
echo rekenUit(35,378,1);
echo rekenUit(84,63,3);


?>







</body>
</html>