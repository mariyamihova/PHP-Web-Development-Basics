<?php
$largest=0;

while($number=intval(fgets(STDIN))){
    if($number>$largest){
        $largest=$number;
    }
}
echo "Max: $largest";
?>