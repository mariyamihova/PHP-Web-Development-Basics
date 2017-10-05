<?php
include "Carr.php";

$inputLine=explode(" ",trim(fgets(STDIN)));

$myCar=new Carr($inputLine[0],$inputLine[1],$inputLine[2]);

$nextLine=explode(" ",trim(fgets(STDIN)));
while($nextLine[0]!="END"){

    $command=$nextLine[0];

    switch ($command){
        case "Travel":
            $myCar->travel(floatval($nextLine[1]));
            break;
        case "Refuel":
            $myCar->reFuel(floatval($nextLine[1]));
            break;
        case "Distance":
            $distance=$myCar->getDistance();
            echo "Total distance: {$distance} kilometers"."\n";
            break;
        case "Time":
            $time=$myCar->getTimeTraveled();
            echo "Total time: {$time['hours']} hours and {$time['minutes']} minutes"."\n";
            break;
        case "Fuel":
            $fuel=$myCar->getFuel();
        echo "Fuel left: {$fuel} liters"."\n";
            break;
        default:
            throw new \Exception("Invalid operation supplied!");
    }

    $nextLine=explode(" ",trim(fgets(STDIN)));
}

