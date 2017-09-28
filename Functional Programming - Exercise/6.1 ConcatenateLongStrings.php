<?php
$input = ['Hello ', 'there.', 'This is just another long string', 'that would pass the check.', ' but',' this', ' will',' not', 'pass it.'];

$above=20;

$output=array_reduce($input,function ($carry="",$item){
    $length=strlen($item);
   if($length>20){
       return $carry.$item;
   }

});
var_dump($output);