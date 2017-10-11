<?php
include "Citizen.php";
include "Rebel.php";


$num=intval(trim(fgets(STDIN)));
$entries=[];

for($i=0;$i<$num;$i++){

    $inputLine=explode(" ",trim(fgets(STDIN)));
    if(count($inputLine)===4){
        $entries[$inputLine[0]]=new Citizen($inputLine[0],$inputLine[1],$inputLine[2],$inputLine[3]);
    }else if(count($inputLine)===3){
        $entries[$inputLine[0]]=new Rebel($inputLine[0],$inputLine[1],$inputLine[2]);
    }

}
//print_r($entries);
$name=trim(fgets(STDIN));


while($name!="End"){

    if(array_key_exists($name,$entries)){
        $obj=$entries[$name];
        $obj->buyFood();

    }

    $name=trim(fgets(STDIN));
}
$foodUnits=0;
foreach ($entries as $entry){
    $foodUnits+=$entry->getFood();
}

echo "{$foodUnits} units food";