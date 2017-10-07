<?php
include "Vehicle.php";
include "Car.php";
include "Truck.php";

$carInfo=explode(" ",trim(fgets(STDIN)));
$truckInfo=explode(" ",trim(fgets(STDIN)));

$car=new Car($carInfo[1],$carInfo[2]);
$truck=new Truck($truckInfo[1],$truckInfo[2]);

$num=intval(fgets(STDIN));

for($i=0;$i<$num;$i++){
    $line=explode(" ",trim(fgets(STDIN)));

    if($line[0]=="Drive"){
        if($line[1]=="Car"){
            $car->Drive($line[2]);
        }else{
            $truck->Drive($line[2]);
        }

    }else if($line[0]=="Refuel"){
        if($line[1]=="Car"){
            $car->Refuel($line[2]);
        }else{
            $truck->Refuel($line[2]);
        }
    }
}

echo "Car: ".number_format($car->getFuelQuantity(),2,'.','')."\n";
echo "Truck: ".number_format($truck->getFuelQuantity(),2,'.','')."\n";