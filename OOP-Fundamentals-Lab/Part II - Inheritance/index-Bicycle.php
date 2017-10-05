<?php
include "Bicycle.php";

$bikes=[];
$b1=new Bicycle([],"black","Drag","34M",2002);
$b1->setForSkirt("no");
$b1->rideBike();
$bikes[]=$b1;


$b2=new Bicycle([],"purple","Adventure Lady","2XVM",2017);
$b2->setForSkirt("yes");
$b2->stopBike();
$bikes[]=$b2;



include "frontend.php";