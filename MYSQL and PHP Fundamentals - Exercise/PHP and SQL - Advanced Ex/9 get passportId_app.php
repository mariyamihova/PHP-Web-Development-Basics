
<?php
include "Database.php";
include "Employee.php";
try{
    $app=new Employee();
    $app->getPassId();
}catch(PDOException $ex){
    print $ex->getMessage();
}