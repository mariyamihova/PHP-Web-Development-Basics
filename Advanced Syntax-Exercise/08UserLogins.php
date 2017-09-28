<?php
$input =explode(" -> ", trim(fgets(STDIN)));
$result=[];

while($input[0]!="login"){

    $name=$input[0];
    $password=$input[1];

    if(!array_key_exists($name,$result))
    {
        $result[$name]="";
    }
    $result[$name]=$password;


    $input =explode(" -> ", trim(fgets(STDIN)));
}



$inputLine=explode(" -> ", trim(fgets(STDIN)));
$count=0;
while($inputLine[0]!="end"){
    $loginName=$inputLine[0];
    $password=$inputLine[1];

    if (array_key_exists($loginName,$result))
    {
        if($result[$loginName]==$password){
            echo"{$loginName}: logged in successfully";
        }else{
            echo"{$loginName}: login failed";
            $count++;
        }


    }
    else
    {
        echo"{$loginName}: login failed";
        $count++;
    }


    $inputLine=explode(" -> ", trim(fgets(STDIN)));
}

echo "unsuccessful login attempts: {$count}";