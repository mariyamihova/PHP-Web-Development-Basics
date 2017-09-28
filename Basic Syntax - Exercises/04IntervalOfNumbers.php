<?php
$firstNumber=42;
$secondNumber=48;

$smallerNumber=min($firstNumber,$secondNumber);
$biggerNumber=max($firstNumber,$secondNumber);

for($i=$smallerNumber;$i<=$biggerNumber;$i++){

    echo $i . "<br>";
}

?>