<?php
include "Human.php";
include "Robot.php";

$inputLine=explode(" ",trim(fgets(STDIN)));

$data=[];

while($inputLine[0]!="End"){

    if(count($inputLine)==3){
        $data[]=new Human($inputLine[0],$inputLine[1],$inputLine[2]);
    }else{
        $data[]=new Robot($inputLine[0],$inputLine[1]);
    }


    $inputLine=explode(" ",trim(fgets(STDIN)));
}
$fakeId=trim(fgets(STDIN));

foreach ($data as $d){
    if (preg_match("/" . $fakeId . "$/", $d->getId())) {
        echo $d->getId()."\n";
    }
}