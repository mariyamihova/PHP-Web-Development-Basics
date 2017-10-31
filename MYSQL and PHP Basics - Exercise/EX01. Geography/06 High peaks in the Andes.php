<?php
$db=new PDO('mysql:host=localhost;dbname=geography','root','');
$peaks = $db->query("SELECT * FROM `peaks`
WHERE `mountain_id`=3
AND `elevation`>6700");

foreach ($peaks as $k=>$v){
    echo $v['peak_name'].", ".$v['elevation'];
    echo"\n";
}