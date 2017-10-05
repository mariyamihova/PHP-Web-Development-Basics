<?php
include "DecimalNumber.php";

$number= new DecimalNumber(trim(fgets(STDIN)));

echo $number->printReversed();