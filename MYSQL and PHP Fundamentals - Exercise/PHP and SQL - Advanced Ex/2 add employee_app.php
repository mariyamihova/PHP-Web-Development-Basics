<?php
include "Database.php";
include "Employee.php";
try{
    $app=new Employee();
    $app->main();
}catch(Exception $ex){
    print $ex->getMessage();
}

