<?php
$inputLine=trim(fgets(STDIN  ));

$teamScore=[];
$teams=[];


while($inputLine!="Result"){

    $toBeReplaced =  array("@", "%", "$", "*");
    $line = str_replace($toBeReplaced, "", $inputLine);

    $data=explode("|",$line);

    if($data[0]===strtoupper($data[0])){
        $team=$data[0];
        $player=$data[1];
    }else{
        $team=$data[1];
        $player=$data[0];
    }
    $points=$data[2];

    $teams[$team][$player]=$points;

    $inputLine=trim(fgets(STDIN  ));
}
foreach ($teams as $key=>$value){
    arsort($value);
    if(!array_key_exists($key,$teamScore)){
        $teamScore[$key]=0;
    }
    foreach ($value as $k=>$v){
        $teamScore[$key]+=$v;
    }
}
arsort($teamScore);

foreach ($teamScore as $key=>$value){

    echo $key." -> ".$value."\n";
    echo"Most points scored by ".key($teams[$key])."\n";
}








