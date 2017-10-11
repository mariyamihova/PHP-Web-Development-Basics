<?php

include "Archangel.php";
include "Demon.php";

$inputLine=explode(" | ",trim(fgets(STDIN)));

$username=$inputLine[0];
$type=$inputLine[1];
$points=$inputLine[2];
$level=$inputLine[3];

if($type==="Demon"){
    $gameObj=new Demon($username,$points,$level);
    $gameObj->generatePassword($username);

    echo"\"$username\" | \"{$gameObj->getHashed()}\" -> $type"."\n";
    echo $points*$level;
}

if($type==="Archangel"){
    $gameObj=new Archangel($username,$points,$level);
    $gameObj->generatePassword($username);

    echo"\"$username\" | \"{$gameObj->getHashed()}\" -> $type"."\n";
    echo number_format($points*$level,2,'.','');
}
