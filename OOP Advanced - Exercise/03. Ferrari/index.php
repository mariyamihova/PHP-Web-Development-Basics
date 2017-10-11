<?php

include "Ferrari.php";

$name=trim(fgets(STDIN));
//$model="488-Spider";

$myFerrari=new Ferrari($name);
echo $myFerrari;