
<?php


$numberOne=intval(fgets(STDIN));
$numberTwo=intval(fgets(STDIN));
$numberThree=intval(fgets(STDIN));

$biggerFromOneAndTwo=max($numberOne,$numberTwo);
$largest=max($biggerFromOneAndTwo,$numberThree);

echo "Max: {$largest}";

?>