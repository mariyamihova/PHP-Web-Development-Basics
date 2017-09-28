<?php
$var = 247;

$result=[];
for($i=102;$i<=$var;$i++){
    if(isDistinct($i)&&strlen($i)==3){
        array_push($result,$i);
    }
}
if(sizeof($result)===0){
    echo "no";
}else{
    echo implode(', ',$result);
}
function isDistinct($num)
{
    $num='' . $num;
    $array1=[];
    for($i=0;$i<strlen($num);$i++){
        $currentNumber=$num[$i];
        if(in_array($currentNumber,$array1)){
            return false;
        }
        array_push($array1,$currentNumber);


    }
    return true;
}
?>