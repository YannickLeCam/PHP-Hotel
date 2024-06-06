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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <?php
    $hotel1 = new Hotel("Hilton",4,"Paris","5 rue de l'étoile");

    $c1= new Chambre("Chambre 1", 2 , 99.99,true,$hotel1);
    $c2= new Chambre("Chambre 2", 4 , 220,true,$hotel1);
    $c3 = new Chambre("Chembre 3", 2 , 120 , false, $hotel1);

    $cli1 = new Client("Murmann","Mickaël" );

    $res = new Reservation($c1,$cli1,"2024-06-06","2024-06-07");
    $res1 = new Reservation($c2,$cli1,"2024-06-06","2024-06-07");

    echo $hotel1->printChambreStatuts();
    echo $hotel1->printInfo();
    echo $hotel1->printResa();


    var_dump($hotel1);


    ?>
</body>
</html>