<?php
include "Database.php";
include "CallCenter.php";
//9. Add customer:
try{
    $app=new CallCenter();
    $app->main();
}catch (PDOException $ex){
   print $ex->getMessage();
}
