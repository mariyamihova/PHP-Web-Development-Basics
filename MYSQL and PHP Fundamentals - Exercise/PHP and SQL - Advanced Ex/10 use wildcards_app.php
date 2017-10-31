<?php
include "Database.php";
include "Employee.php";
try{
    $app=new Employee();
    $app->getEmployeeInfo();
}catch(PDOException $ex){
    print $ex->getMessage();
}