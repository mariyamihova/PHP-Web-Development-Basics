<?php
$animals=[
['name'=>"Lassie",'type'=>"dog",'age'=>14],
['name'=>"Sharo",'type'=>"dog",'age'=>14],
['name'=>"Getsby",'type'=>"cat",'age'=>4],
['name'=>"Rimini",'type'=>"cat",'age'=>12],
['name'=>"Lisa",'type'=>"dog",'age'=>2],
];
$output=array_filter($animals,function($item){
    if($item['type']=="dog" and $item['age']>10){
       return true;
    }else{
        return false;
    }
});
print_r($output);