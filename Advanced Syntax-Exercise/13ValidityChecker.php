<?php
$coordinates=explode(", ", trim(fgets(STDIN)));

for($i=0;$i<count($coordinates);$i+=2){
    $pointX=intval($coordinates[$i]);
    $pointY=intval($coordinates[$i+1]);


    if(IsValid($pointX,$pointY,0,0)){
        echo"{{$pointX}, {$pointY}} to {0, 0} is valid"."\n";
    }else{
        echo"{{$pointX}, {$pointY}} to {0, 0} is invalid"."\n";
    }
}
if(IsValid($coordinates[0],$coordinates[1],$coordinates[2],$coordinates[3])){
    echo"{{$coordinates[0]}, {$coordinates[1]}} to {{$coordinates[2]}, {$coordinates[3]}} is valid"."\n";
}else{
    echo"{{$coordinates[0]}, {$coordinates[1]}} to {{$coordinates[2]}, {$coordinates[3]}} is invalid"."\n";

}
function IsValid($x1,$y1,$x,$y){

    $diffX=$x1-$x;
    $diffY=$y1-$y;

    $powX=pow(abs($diffX),2);
    $powY=pow(abs($diffY),2);

    $distance= sqrt($powX+$powY);

    if(intval($distance)==$distance){
        return true;
    }else{
        return false;
    }
}