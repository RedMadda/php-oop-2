<?php

require_once "AsNewPhone.php";


// creo un telefono Apple  nuovo, con consegna a domicilio, peso 150gr -> consegna in due giorni a 10€.
$phone1 = new NewPhone(false, 150 );

$phone1->brand = "Fairphone";

var_dump($phone1);

$phone1->setPrice(300, 4);

var_dump($phone1);


$phone1->setTimePriceDelivery();



$phoneA = new AsNewPhone(true, 50, "original", true, false);

$phoneA-> setTimePriceDelivery();
$phoneA->setSale();
var_dump($phoneA);

$gigio = new User(111, "Via bersaglio 3", "cash");
$gigio->setFideltySale("5",6);

var_dump($gigio);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phones Shop</title>
</head>
<body>
    <h1>Phones shop</h1>

    <h2><?php echo $phone1->getPrice();?></h2>

   
</body>
</html>