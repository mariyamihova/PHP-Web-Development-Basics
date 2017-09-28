<?php
$input =explode(" ", trim(fgets(STDIN)));
$result=[];

while($input[0]!="shopping"){

    $stock=$input[1];
    $quantity=intval($input[2]);

    if(!array_key_exists($stock,$result))
    {
        $result[$stock]=0;
    }
    $result[$stock]+=$quantity;


    $input =explode(" ", trim(fgets(STDIN)));
}


$inputLine=explode(" ", trim(fgets(STDIN)));

while($inputLine[0]!="exam"){
    $stock=$inputLine[1];
    $quantity=intval($inputLine[2]);

    if (array_key_exists($stock,$result))
    {
        if ($result[$stock] == 0)
        {
            echo"{$stock} out of stock";
                    }
        else if ($quantity > $result[$stock])
        {
            $result[$stock] = 0;
        }
        else
        {
            $result[$stock] -= $quantity;
        }

    }
    else if (!array_key_exists($stock,$result))
    {
        echo"{$stock} doesn't exist";
    }


    $inputLine=explode(" ", trim(fgets(STDIN)));
}

foreach ($result as $key=>$value){
    if($value>0){
        echo $key." -> ".$value."\n";
    }
}