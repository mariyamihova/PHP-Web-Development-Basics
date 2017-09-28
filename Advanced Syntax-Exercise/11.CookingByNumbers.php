<?php
$inputNumber=trim(fgets(STDIN));
$commands=explode(", ", trim(fgets(STDIN)));
$initialNum=intval($inputNumber);

for($i=0;$i<count($commands);$i++){


    if($commands[$i]=="chop"){
        $initialNum/=2;


    }else if($commands[$i]=="dice"){
      $initialNum=sqrt($initialNum);

    }else if($commands[$i]=="spice"){
       $initialNum++;

    }
    else if($commands[$i]=="bake"){
        $initialNum*=3;

    }
    else if($commands[$i]=="fillet"){
    $percentage=0.20*$initialNum;
    $initialNum-=$percentage;

    }
    echo "{$initialNum}"."\n";
}