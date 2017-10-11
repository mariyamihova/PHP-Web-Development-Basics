<?php
include "Citizen.php";

$name=trim(fgets(STDIN));
$age=trim(fgets(STDIN));

$citizen = new Citizen($name,$age);
echo $citizen;