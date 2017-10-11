<?php

include "Person.php";
include "Pet.php";

$inputLine=explode(" ",trim(fgets(STDIN)));

$objInfo=[];

while($inputLine[0]!="End"){

    if($inputLine[0]=="Citizen"){
        $objInfo[]=new Person($inputLine[1],$inputLine[2],$inputLine[3],$inputLine[4]);
    }else if($inputLine[0]=="Pet"){
        $objInfo[]=new Pet($inputLine[1],$inputLine[2]);
    }

    $inputLine=explode(" ",trim(fgets(STDIN)));

}
$year=trim(fgets(STDIN));

foreach ($objInfo as $entry){

    if(preg_match("/" . $year . "$/", $entry->getBdate())){
        echo $entry->getBdate()."\n";
    }
}