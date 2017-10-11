<?php
include "Character.php";
include "CArchangel.php";
include "CDemon.php";


$inputLine=explode(" | ",trim(fgets(STDIN)));

$username=$inputLine[0];
$type=$inputLine[1];
$points=$inputLine[2];
$level=$inputLine[3];
$gameObj=null;
if($type==="Demon"){
    $gameObj=new CDemon($username,$level,$points);

}

if($type==="Archangel"){
    $gameObj=new CArchangel($username,$level,$points);

}
echo $gameObj;
