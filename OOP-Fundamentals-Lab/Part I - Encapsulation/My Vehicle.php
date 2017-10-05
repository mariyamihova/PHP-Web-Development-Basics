<?php
include "Vehicles.php";

$myVehicle=new Vehicles(2,"orange");
print_r($myVehicle);

$myVehicle->setNumberDoors(4);
echo $myVehicle->__get("numberDoors")."\n";

$myVehicle->paintCar("blue");

print_r($myVehicle);