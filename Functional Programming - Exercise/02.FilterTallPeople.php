<?php
$people = [
    ['name'=> 'John'  , 'height'=> 1.65],
    ['name'=> 'Peter' , 'height'=> 1.85],
    ['name'=> 'Silvia', 'height'=> 1.69],
    ['name'=> 'Martin', 'height'=> 1.82]
];
$output=array_filter($people,function($item){
    if($item['height']>1.80){
        return true;
    }else{
        return false;
    }
});
print_r($output);