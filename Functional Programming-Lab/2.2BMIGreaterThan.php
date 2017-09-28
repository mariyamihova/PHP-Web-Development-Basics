<?php
$people = [
    [ 'name' => 'John'  , 'weight' => 69, 'height'  => 1.69 ],
    [ 'name' => 'Peter' , 'weight' => 85, 'height'  => 1.68 ],
    [ 'name' => 'Ivan'  , 'weight' => 75, 'height'  => 1.72 ],
    [ 'name' => 'Mitko', 'weight' => 95, 'height'  => 1.70 ]
];

function greater_than($min){
    return function($item) use ($min) {
        $index=$item['weight']/($item['height']*$item['height']);
        return $index > $min;
    };
}
$output = array_filter($people, greater_than(25));
print_r($output);