<?php
$input =explode(" -> ", trim(fgets(STDIN)));
$nameAndAge=[];
$nameAndSalary=[];
$nameAndPosition=[];
while($input[0]!="filter base"){

    $name=$input[0];
    $arg=$input[1];


    if(is_numeric($arg)){
        if(intval($arg)==$arg){
            $nameAndAge[$name]=$arg;
        }else{
            $nameAndSalary[$name]=$arg;
        }

    }else{
        $nameAndPosition[$name]=$arg;
    }

    $input =explode(" -> ", trim(fgets(STDIN)));
}
$word=trim(fgets(STDIN));
$delimiter = str_repeat("==", 10);;

if($word=="Position"){

    foreach ($nameAndPosition as $key=>$value){
        echo "Name: {$key}"."\n";
        echo "Position: {$value}"."\n";
        echo $delimiter;
    }

}else if ($word=="Salary"){
    foreach ($nameAndSalary as $key=>$value){
        echo "Name: {$key}"."\n";
        $salary=round($value,2);
        echo "Salary: {$salary}"."\n";
        echo $delimiter."\n";
    }

}else if($word=="Age"){
    foreach ($nameAndAge as $key=>$value){
        echo "Name: {$key}"."\n";
        echo "Age: {$value}"."\n";
        echo $delimiter;
    }
}