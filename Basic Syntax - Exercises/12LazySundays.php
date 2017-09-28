<?php
$month=date('m');
$year=date('Y');
$days=date('t');

for($i=1;$i<=$days;$i++){
    $currentDate=date($i . '-' . $month . '-' . $year);
    if(date('w',strtotime($currentDate))==0){
        echo date('jS F,Y',strtotime($currentDate)). '<br>';
    }
}
?>