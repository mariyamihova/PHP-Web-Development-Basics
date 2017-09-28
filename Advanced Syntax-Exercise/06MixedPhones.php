<?php
$input =explode(" ", trim(fgets(STDIN)));

$result=[];

while($input[0]!="Over"){

    if (is_numeric($input[0]))
    {
        if (!isset($result[$input[2]]))
        {
            $result[$input[2]] = $input[0];
        }
    }
    else
    {
        if (!isset($result[$input[0]]))
        {
            $result[$input[0]]= $input[2];
        }
    }

    $input = explode(" ", trim(fgets(STDIN)));
}

ksort($result);

foreach ($result as $key=>$value){
    echo $key." -> ".$value."\n";
}