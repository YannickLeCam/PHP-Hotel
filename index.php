<?php 
require_once ('./class/Chambre.php');
require_once './class/Client.php';
require_once './class/Hotel.php';
require_once './class/Reservation.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
<body>
    <?php
    $hotel1 = new Hotel("Hilton",4,"Paris","5 rue de l'étoile");
    $c1= new Chambre("Chambre 1", 2 , 99.99,true,$hotel1);
    $c2= new Chambre("Chambre 2", 4 , 220,true,$hotel1);
    $c3 = new Chambre("Chembre 3", 2 , 120 , true, $hotel1);

    var_dump($hotel1);


    ?>
</body>
</html>