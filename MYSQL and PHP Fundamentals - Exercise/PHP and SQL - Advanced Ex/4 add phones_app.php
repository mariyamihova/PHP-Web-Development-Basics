<?php
include "Database.php";
include "Employee.php";
try{
    $app=new Employee();
    $app->readPhones();
}catch(PDOException $ex){
    print $ex->getMessage();
}