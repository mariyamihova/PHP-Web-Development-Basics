<?php
$input = ["sum, 12, 133","subtract, 3, 3","sum, 1, 2","divide, 100, 0","divide, 100, PP","sum, P123, 123"];


function calculateResult($current_line){
    $data=explode(", ",$current_line);
    $operation=$data[0];
    $firstNum=$data[1];
    $secondNum=$data[2];

    if(!is_numeric($firstNum)||!is_numeric($secondNum)){
        if(!is_numeric($firstNum)){
            return"op1_not_numeric";
        }else{
            return "op2_not_numeric";
        }
    }else{
        if($firstNum>0&&$firstNum<=100&&$secondNum>0&&$secondNum<=100){
            if($operation=="sum"){
                return $firstNum+$secondNum;
            }else if($operation=="subtract"){
                return $firstNum-$secondNum;
            }else if ($operation=="divide"){
                return $firstNum/$secondNum;
            }else{
                return $firstNum*$secondNum;
            }

        }else{
            if($operation=="divide"&&$secondNum==0){
                return "division_by_zero";
            }else{
                return"out_of_range";
            }
        }

}
    }

$output=array_map("calculateResult",$input);
print_r($output);