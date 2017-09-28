<?php
$input=[1,2,2,4];
$n=count($input);

function squareNumber($item) {
;
    return pow($item,2);
}
$output=[
    [1,2,2,4]
];
for($i=1;$i<$n;$i++){

    $output[$i]=array_map("squareNumber",$output[$i-1]);
}
print_r($output);