<?php
include "Box.php";


$length=floatval(trim(fgets(STDIN)));
$width=floatval(trim(fgets(STDIN)));
$height=floatval(trim(fgets(STDIN)));
try{
    echo new Box($length,$width,$height);
}catch (Exception $e){
    echo $e->getMessage();
}

