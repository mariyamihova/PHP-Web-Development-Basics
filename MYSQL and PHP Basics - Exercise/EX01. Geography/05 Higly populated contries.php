<?php
$db=new PDO('mysql:host=localhost;dbname=geography','root','');
$countries = $db->query("SELECT * FROM `countries`
WHERE `continent_code`='AS'
AND `population`>1000000000");

foreach ($countries as $k=>$v){
   print_r($v['country_name']);
   echo"\n";
}