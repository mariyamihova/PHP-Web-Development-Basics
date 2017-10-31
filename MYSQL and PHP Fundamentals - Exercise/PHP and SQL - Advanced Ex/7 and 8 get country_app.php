<?php
include "Database.php";
include "Employee.php";
try{
    $app=new Employee();
    $app->findCountry();
}catch(PDOException $ex){
    print $ex->getMessage();
}