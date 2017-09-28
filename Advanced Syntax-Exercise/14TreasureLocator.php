<?php
$coordinates = array_map("floatval", explode(", ", trim(fgets(STDIN))));

for($i=0;$i<count($coordinates);$i+=2){
    $pointX=$coordinates[$i];
    $pointY=$coordinates[$i+1];

    $location=isOnIsland($pointX,$pointY);

    if($location!="Bottom"){
        echo $location."\n";
    }else{
        echo "On the bottom of the ocean"."\n";
    }


}
function isOnIsland($x,$y){

    if($x>=1&&$x<=3&&$y>=1&&$y<=3){
        $island="Tuvalu";

    }else if($x>=8&&$x<=9&&$y>=0&&$y<=1){
        $island="Tokelau";

    }else if($x>=5&&$x<=7&&$y>=3&&$y<=6){
        $island="Samoa";
    }else if($x>=0&&$x<=2&&$y>=6&&$y<8){
        $island="Tonga";
    }else if($x>=4&&$x<=9&&$y>=7&&$y<=8){
        $island="Cook";
    }else{
        $island="Bottom";
    }

    return $island;
}