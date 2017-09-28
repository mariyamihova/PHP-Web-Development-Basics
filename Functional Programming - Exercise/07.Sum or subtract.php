<?php
$input = ["sum, 12, 156","subtract, 5, 6","subtract, 1, 2"];


function calculateResult($current_line){
    $data=explode(", ",$current_line);
    $operation=$data[0];
    $firstNum=$data[1];
    $secondNum=$data[2];

    if($operation=="sum" ){
        if($firstNum>0&&$firstNum<100&&$secondNum>0&&$secondNum<100){
            return $firstNum+$secondNum;
        }else{
            return "error";
        }

    }else{
        if($firstNum>0&&$firstNum<100&&$secondNum>0&&$secondNum<100){
            return $firstNum-$secondNum;
        }else{
            return "error";
        }
    }
}
$output=array_map("calculateResult",$input);
print_r($output);