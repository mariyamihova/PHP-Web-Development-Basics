<?php
include "Keyboard.php";
include "Mouse.php";
include "TouchPad.php";
include "DesktopComputer.php";
include "Laptop.php";
include "Tablet.php";
include "MobilePhone.php";
include "Notebook.php";



$d=new DesktopComputer("abc",4);
//print_r($d);

$l1=new Laptop("cda",20);
$l2=new Laptop("cda3",34);

//print_r($l1);
//print_r($l2);

$t=new Tablet("khj",true,"bc4");

//print_r($t);

$m1=new MobilePhone("klm",true,"bh");
$m2=new MobilePhone("km",true,"bh4");
$m3=new MobilePhone("kl",true,"bh12");

//print_r($m1);
//print_r($m2);
//print_r($m3);

$n=new Notebook("fgt",16,"klm",true,"lk34");
$n->writtenText="Bye me now!"."\n";
echo $n->writeText();
print_r($n);