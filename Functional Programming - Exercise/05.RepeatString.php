<?php
$input="Hello, there!";
$n=3;

$repeatString=function ($repeatString,$input,$i=0,$n,$out=""){
    if($i<$n){
        return $repeatString($repeatString,$input,$i+1,$n,$out.=
        $input);
    }else{
        return $out.="";
    }
};
echo $repeatString($repeatString,$input,0,$n);