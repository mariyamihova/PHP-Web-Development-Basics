<?php
$inputLine="hahahahihjhyhiha";
$secondLine="a 4";
$line=explode(" ",$secondLine);

$letter=$line[0];
$occurrence=intval($line[1]);

//echo $letter;
//echo $occurrence;

$count=0;

for($i=0;$i<strlen($inputLine);$i++){
    if($inputLine[$i]!=$letter){
        continue;
    }else{
        $count++;
        if($count==$occurrence) {
            echo $i;
            break;
        }
    }
}
if($count<$occurrence || $count==0){
    echo "Find the letter yourself!";
}