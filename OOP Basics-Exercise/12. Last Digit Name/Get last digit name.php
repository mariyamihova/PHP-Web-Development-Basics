<?php
include "Number.php";

$num=intval(trim(fgets(STDIN)));

$number=new Number($num);
echo $number->getLastDigitName();