<?php
$now=getdate()[0];
//strtotime('19-09-2017 13:23:32');
$year=date('Y',$now);
$newYear=strtotime("31-12-{$year} 23:59:59");

$difference=$newYear-$now;

echo 'Hours until new year : ' . number_format(floor($difference/60/60),0,'.',''). '<br>';
echo 'Minutes until new year : ' . number_format(floor($difference/60),0,'.',' '). '<br>';
echo 'Seconds until new year : ' . number_format($difference,0,'.',' '). '<br>';

$days=floor($difference/60/60/24);
$hours=floor($difference/60/60)%$days;
$minutes=floor($difference/60)%60;
$seconds=$difference%60;

echo "Days:Hours:Minutes:Seconds {$days}:{$hours}:{$minutes}:{$seconds}";
?>