<?php
$people = [
    [ 'name' => 'John'  , 'weight' => 69, 'height'  => 1.69 ],
    [ 'name' => 'Peter' , 'weight' => 85, 'height'  => 1.68 ],
    [ 'name' => 'Ivan'  , 'weight' => 75, 'height'  => 1.72 ],
    [ 'name' => 'Mitko', 'weight' => 95, 'height'  => 1.70 ]
];
$count=count($people);

for($i=0;$i<$count;$i++){
    $index=calculateIndex($people[$i]);
    echo".[{$i}] => array('name' => {$people[$i]['name']}, 'bmi'=>{$index}),"."\n";
}
function calculateIndex($item){
    return $item['weight']/($item['height']*$item['height']);
}