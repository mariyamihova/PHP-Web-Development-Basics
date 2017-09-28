<?php
$inputNumber="5835";
    //(trim(fgets(STDIN)));

while(true){
    if(FindAverageValue($inputNumber)){
        echo $inputNumber;
        break;
}else{
        $inputNumber=$inputNumber."9";
        continue;
    }
}

function FindAverageValue($number){
    $sum=0;
for($i=0;$i<strlen($number);$i++){
    $sum+=$number[$i];
}
$average=$sum/(floatval(strlen($number)));
    if($average>5){
        return true;
    }else{
        return false;
    }
}