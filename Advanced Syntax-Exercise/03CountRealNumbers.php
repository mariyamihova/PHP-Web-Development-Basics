<?php
$numbers = explode(" ", trim(fgets(STDIN)));

$numbersCount=[];

for ($i = 0; $i < count($numbers); $i++) {
    $number = $numbers[$i];
    if (!isset($numbersCount[$number])) {
        $numbersCount[$number] = 0;
    }
    $numbersCount[$number]++;
}
ksort($numbersCount);
foreach ($numbersCount as $key=>$value){
    echo "{$key} -> {$value} times\n";
}