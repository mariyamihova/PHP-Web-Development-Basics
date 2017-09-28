<?php
list($aX, $aY, $bX, $bY, $cX, $cY) = array_map("floatval", explode(", ", trim(fgets(STDIN))));
$distanceAB = calculateDistance($aX, $aY, $bX, $bY);
$distanceAC = calculateDistance($aX, $aY, $cX, $cY);
$distanceBC = calculateDistance($bX, $bY, $cX, $cY);

echo findShortestPath($distanceAB,$distanceAC,$distanceBC);

function findShortestPath($distanceA,$distanceB,$distanceC){

    $output="";

    if ($distanceA <= $distanceB && $distanceA <= $distanceC) {
        if ($distanceB <= $distanceC) {
            $output .= "1->2->3: " . ($distanceA + $distanceB);
        } else {
            $output .= "1->2->3: " . ($distanceA + $distanceC);
        }
    } else if ($distanceB <= $distanceA && $distanceB <= $distanceC) {
        if ($distanceA <= $distanceC) {
            $output .= "2->1->3: " . ($distanceA + $distanceB);
        } else {
            $output .= "1->3->2: " . ($distanceC + $distanceB);
        }
    } else {
        if ($distanceA <= $distanceB) {
            $output .= "1->2->3: " . ($distanceA + $distanceC);
        } else {
            $output .= "1->3->2: " . ($distanceC + $distanceB);
        }
    }
    return $output;
}
function calculateDistance($x1, $y1,$x2, $y2){

    $diffX=$x1-$x2;
    $diffY=$y1-$y2;

    return sqrt((pow($diffX,2))+(pow($diffY,2)));
}