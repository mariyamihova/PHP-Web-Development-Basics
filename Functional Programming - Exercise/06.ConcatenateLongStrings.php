<?php
$input = ['Hello ', 'there.', 'This is just another long string', 'that would pass the check.', ' but',' this', ' will',' not', 'pass it.'];
$n=count($input);
$above=20;

$filteredInput=array_filter($input,function ($item) use ($above){
   $length=strlen($item);

   if($length>$above){
       return true;
   }else{
       return false;
   }
});

print_r($filteredInput);
$result=implode(", ",$filteredInput);
echo "'{$result}'";
