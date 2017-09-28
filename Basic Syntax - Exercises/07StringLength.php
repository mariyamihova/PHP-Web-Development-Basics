<?php
$inputLine="A regular expression (abbreviated regex or regexp and sometimes called a rational expression) is a sequence of characters that forms a search pattern";

$lineLength=strlen($inputLine);

if($lineLength<20){
    $difference=20-$lineLength;
    $newLine=$inputLine;
    for($i=0;$i<$difference;$i++){
        $newLine.='*';
    }
    echo $newLine;
}else{
    echo substr($inputLine,0,20);
}