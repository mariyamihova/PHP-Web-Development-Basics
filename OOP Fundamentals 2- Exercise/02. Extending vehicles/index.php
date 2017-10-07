<?php

include "Vehicles.php";
include "Car2.php";
include "Truck2.php";
include "Bus.php";


$carInfo=explode(" ",trim(fgets(STDIN)));
$truckInfo=explode(" ",trim(fgets(STDIN)));
$busInfo=explode(" ",trim(fgets(STDIN)));

$car=new Car2($carInfo[1],$carInfo[2],$carInfo[3]);
$truck=new Truck2($truckInfo[1],$truckInfo[2],$truckInfo[3]);
$bus=new Bus($busInfo[1],$busInfo[2],$busInfo[3]);

$number=intval(trim(fgets(STDIN)));

for($i=0;$i<$number;$i++){

    $inputLine=explode(" ",trim(fgets(STDIN)));

    if($inputLine[0]=="Refuel"){
        if($inputLine[1]=="Car"){
            $car->Refuel($inputLine[2]);
        }else if($inputLine[1]=="Truck"){
            $truck->Refuel($inputLine[2]);
        }else if($inputLine[1]=="Bus"){
            $bus->Refuel($inputLine[2]);
        }

    }else if($inputLine[0]=="Drive"){
        if($inputLine[1]=="Car"){
            $car->Drive($inputLine[2]);
        }else if($inputLine[1]=="Truck"){
            $truck->Drive($inputLine[2]);
        }else if($inputLine[1]=="Bus"){
            $bus->Drive($inputLine[2]);
        }

    }else if($inputLine[0]=="DriveEmpty"){
      $bus->DriveEmpty($inputLine[2]);
    }
}

echo "Car: ".number_format($car->getFuelQuantity(),2,'.','')."\n";
echo "Truck: ".number_format($truck->getFuelQuantity(),2,'.','')."\n";
echo "Bus: ".number_format($bus->getFuelQuantity(),2,'.','')."\n";