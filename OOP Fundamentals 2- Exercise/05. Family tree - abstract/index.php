<?php
include "Person.php";
include "Father.php";
include "Son.php";
include "Grandson.php";

$fathers=[];
$sons=[];
$grandsons=[];

$fathers[]=new Father("James Strong",1873,1923);

$sons[]=new Son("Peter Strong",1894,1928);
$sons[]=new Son("Andrew Strong",1899,1970);

$grandsons[]=new Grandson("Jackson Strong",1927,1992);
$grandsons[]=new Grandson("Martin Strong",1927,1967);
$grandsons[]=new Grandson("Gregory Strong",1931,2000);


//print_r($fathers);
//print_r($sons);
//print_r($grandsons);

foreach ($fathers as $father) {
echo $father."\n";
}
echo"\n";

$totalYears=0;
foreach ($sons as $son){
    $totalYears+=$son->getTimeLived();
    echo $son."\n";
}
echo "Average lifespan: ".$totalYears/count($sons)." years"."\n";
echo"\n";

$totalYears=0;
foreach ($grandsons as $grandson){
    $totalYears+=$grandson->getTimeLived();
    echo $grandson."\n";
}
echo "Average lifespan: ".$totalYears/count($grandsons)." years"."\n";
echo"\n";