<?php
include "Database.php";
include "Employee.php";
try{
    $app=new Employee();
    $app->readEmplName();
}catch(PDOException $ex){
    print $ex->getMessage();
}