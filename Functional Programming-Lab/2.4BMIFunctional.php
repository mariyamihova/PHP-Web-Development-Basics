<?php
$people = [
    [ 'name' => 'John'  , 'weight' => 69, 'height'  => 1.69 ],
    [ 'name' => 'Peter' , 'weight' => 85, 'height'  => 1.68 ],
    [ 'name' => 'Ivan'  , 'weight' => 75, 'height'  => 1.72 ],
    [ 'name' => 'Mitko', 'weight' => 95, 'height'  => 1.70 ]
];
$count=count($people);
/*
for($i=0;$i<$count;$i++){
    $index=calculateIndex($people[$i]);
    echo".[{$i}] => array('name' => {$people[$i]['name']}, 'bmi'=>{$index}),"."\n";
 return $people['weight']/($people['height']*$people['height']);
}
*/
/*function calculateIndex($item){
    return ($item['height']*$item['height']);
}
*/
$index=function (&$index,$people,$i=0,$count=4,$out=[]){

    if($i<4){

        return $index($index,$people,$i+1,$count=4,
            $out[$i] = ['name'=> $people[$i]['name'],
        'bmi'=>'23']);

    }else{

        return $out[]=['name' => "No name", 'bmi'=> 'NA' ];
    }

    };

print_r($index($index,$people,0,4));
