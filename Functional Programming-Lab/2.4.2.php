<?php
$people = [
    [ 'name' => 'John'  , 'weight' => 69, 'height'  => 1.69 ],
    [ 'name' => 'Peter' , 'weight' => 85, 'height'  => 1.68 ],
    [ 'name' => 'Ivan'  , 'weight' => 75, 'height'  => 1.72 ],
    [ 'name' => 'Mitko', 'weight' => 95, 'height'  => 1.70 ]
];
function calculateIndex($item)
{
    return ($item['weight']/($item['height'] * $item['height']));
}
function findPersonAndBMI($item){
    return ['name'=> $item['name'],'bmi'=>calculateIndex($item)];
}

$output=array_map("findPersonAndBMI",$people);

print_r($output);