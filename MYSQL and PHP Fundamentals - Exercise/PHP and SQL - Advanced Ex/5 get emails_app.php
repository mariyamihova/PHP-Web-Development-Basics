<?php
include "Database.php";
include "Employee.php";
try{
    $app=new Employee();
    $app->readNames();
}catch(PDOException $ex){
    print $ex->getMessage();
}