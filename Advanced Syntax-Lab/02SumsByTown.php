<?php
$array=['Sofia', '20', 'Varna', '10', 'Sofia', '5'];
$sums=[];

for($i=0;$i<count($array);$i+=2){
    list($town,$income)=[$array[$i],$array[$i+1]];
    if(!isset($sums[$town])){
        $sums[$town]=$income;
    }else{
        $sums[$town]+=$income;
    }
}
print_r($sums);