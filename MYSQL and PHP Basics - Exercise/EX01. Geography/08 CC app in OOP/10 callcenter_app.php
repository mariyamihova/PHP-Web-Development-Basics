<?php
include "Database.php";
include "CallCenter.php";

//10. Delete Customer
try{
    $app=new CallCenter();
    $app->remove();
}catch (PDOException $ex){
    print $ex->getMessage();
}
