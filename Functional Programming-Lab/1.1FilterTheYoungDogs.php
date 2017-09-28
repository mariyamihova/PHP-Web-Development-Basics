<?php
$animals=[
    ['name'=>"Lassie",'type'=>"dog",'age'=>14],
    ['name'=>"Sharo",'type'=>"dog",'age'=>14],
    ['name'=>"Getsby",'type'=>"cat",'age'=>4],
    ['name'=>"Rimini",'type'=>"cat",'age'=>12],
    ['name'=>"Lisa",'type'=>"dog",'age'=>2],
];

$youngDogs=function ($item){
    if($item['type']=="dog" and $item['age']<=11){
        return true;
    }else{
        return false;
    }
};

$output=array_filter($animals,$youngDogs);

print_r($output);