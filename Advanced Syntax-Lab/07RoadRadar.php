<?php
$speed=intval(trim(fgets(STDIN)));
$area=trim(fgets(STDIN));

$limit=getLimit($area);
$infraction=getInfraction($speed,$limit);

if($infraction){
    echo $infraction;
}

function getLimit($area){
    switch ($area){
        case'motorway':
            $speedLimit=130;
            break;
        case'interstate':
            $speedLimit=90;
            break;
        case'city':
            $speedLimit=50;
            break;
        case'residential':
            $speedLimit=20;
            break;
        default:
            echo"Not a Valid Input";
            $speedLimit=1000;
    }
    return $speedLimit;
}
function getInfraction(int $speed, int $limit)
{
    $overSpeed = $speed - $limit;
    if ($overSpeed >= 0) {
        if ($overSpeed <= 20)
            return "speeding";
        if ($overSpeed <= 40)
            return "excessive speeding";
        return "reckless driving";
    }
    return false;
}