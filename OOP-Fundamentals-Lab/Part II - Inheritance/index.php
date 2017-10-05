<?php
include "Car.php";


$car=new Car(4,"red","Audi","A4",2002);
print_r($car);

$car->paintMyCar("champagne");
print_r($car);

//If method is set to "protected" we will receive an error about calling a protected method:
//$car->setNumberDoors(15);

