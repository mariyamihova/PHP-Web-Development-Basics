<?php
$coordinates=fgets(STDIN);
$coordinatesTwo=array_map("floatval",explode(", ",$coordinates));
var_dump($coordinatesTwo);

for($i=0;$i<count($coordinatesTwo);$i+=3){
    $x=$coordinatesTwo[$i];
    $y=$coordinatesTwo[$i+1];
    $z=$coordinatesTwo[$i+2];

    if(isVolume($x,$y,$z)){
        echo "inside ";
    }else{
        echo "outside ";
    }
}


function isVolume($x,$y,$z):string{
   $x1=10; $x2=50;
   $y1=20; $y2=80;
   $z1=15; $z2=50;

   if($x>=$x1 && $x<=$x2){
       if($y>=$y1 && $y<=$y2){
           if($z>=$z1 && $z<=$z2){
               return true;
           }
       }
   }
   return false;
}