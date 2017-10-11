<?php
include "Smartphone.php";

$numbers=explode(" ",trim(fgets(STDIN)));
$sites=explode(" ",trim(fgets(STDIN)));

$phone=new Smartphone();

foreach ($numbers as $number){
    try{
        echo $phone->call($number);
    }catch (Exception $ex){
        echo $ex->getMessage();
    }

}
foreach ($sites as $site){
    try{
        echo $phone->browse($site);
    }catch (Exception $ex){
        echo $ex->getMessage();
    }

}