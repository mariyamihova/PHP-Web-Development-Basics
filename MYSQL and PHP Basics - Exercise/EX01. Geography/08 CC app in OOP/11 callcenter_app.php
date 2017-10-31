<?php
include "Database.php";
include "CallCenter.php";
//11.Customer from a specific country
try{
    $app=new CallCenter();
    $app->getCustomers();
}catch (PDOException $ex){
    print $ex->getMessage();
}