<?php
include "Engine.php";
include "Car.php";

$n=intval(trim(fgets(STDIN)));

$engines=[];

for($i=0;$i<$n;$i++){
    $input=explode(" ",trim(fgets(STDIN)));
    $count=count($input);
    if($count==4){
        $engine=new Engine($input[0],$input[1],$input[2],$input[3]);
    }else if ($count==3){
        if(is_numeric($input[2])){
            $engine=new Engine($input[0],$input[1],$input[2],"n/a");
        }else{
            $engine=new Engine($input[0],$input[1],"n/a",$input[2]);
        }
    }else{
        $engine=new Engine($input[0],$input[1],"n/a","n/a");
    }
    $engines[]=$engine;
}

$cars=[];

$m=intval(trim(fgets(STDIN)));

for($i=0;$i<$m;$i++) {
    $input = explode(" ", trim(fgets(STDIN)));
    $count = count($input);
    $param = "";
    foreach ($engines as $engine) {
        if ($engine->getModel() == $input[1]) {
            $param = $engine;
        }
    }
    if ($count == 4) {
        $car = new Car($input[0], $param, $input[2], $input[3]);
    } else if ($count == 3) {
        if (is_numeric($input[2])) {
            $car = new Car($input[0], $param, $input[2], "n/a");
        } else {
            $car = new Car($input[0], $param, "n/a", $input[2]);
        }
    } else {
        $car = new Car($input[0], $param, "n/a", "n/a");
    }

    $cars[]=$car;
}

foreach ($cars as $car){
    echo $car->getModel().":"."\n";
    echo " ".$car->getEngine()->getModel().":"."\n";
    echo "  "."Power: ".$car->getEngine()->getPower()."\n";
    echo "  "."Displacement: ".$car->getEngine()->getDisplacement()."\n";
    echo "  "."Efficiency: ".$car->getEngine()->getEfficiency()."\n";
    echo "Weight: ".$car->getWeight()."\n";
    echo "Color: ".$car->getColor()."\n";
}