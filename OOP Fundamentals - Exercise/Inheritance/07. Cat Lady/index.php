<?php
include "Siamese.php";
include "Cymric.php";
include "Street.php";

$inputLine=explode(" ",trim(fgets(STDIN)));
$cats=[];
while($inputLine[0]!="End"){

    switch ($inputLine[0]){
        case"StreetExtraordinaire":
            $cats["StreetExtraordinaire"]=new Street($inputLine[1],$inputLine[2]);
            break;
        case"Siamese":
            $cats["Siamese"]=new Siamese($inputLine[1],$inputLine[2]);
            break;
        case"Cymric":
            $cats["Cymric"]=new Cymric($inputLine[1],$inputLine[2]);
            break;
    }

    $inputLine=explode(" ",trim(fgets(STDIN)));
}

$name=trim(fgets(STDIN));

foreach ($cats as $key=>$value){
    if($value->getName()==$name){
        echo $key." ".$value;
    }
}

