<?php
include "Person.php";

$name=trim(fgets(STDIN));
$age=trim(fgets(STDIN));
$id=trim(fgets(STDIN));
$date=trim(fgets(STDIN));

$person=new Person($name,$age,$id,$date);
echo $person;