<?php
include "Fibonacci.php";
$startPosition=intval(trim(fgets(STDIN)));
$endPosition=intval(trim(fgets(STDIN)));

$fibNum=new Fibonacci($endPosition);

echo implode(", ",$fibNum->getFibonacciRange($startPosition,$endPosition));